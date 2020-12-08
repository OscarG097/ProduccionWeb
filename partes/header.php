<?php 

ini_set("session.cookie_lifetime","7200");
ini_set("session.gc_maxlifetime","7200");  
session_id("sessionID");
session_start(); //hay problemas con la sesion se pisan la de abm y glob




require_once('partes/db_con.php');
require_once('clases/productos.php');
require_once('clases/comentarios.php');
require_once('clases/clientes.php');

try {        
	$con = new PDO('mysql:host='.$hostname.';dbname='.$database.';port='.$puerto, $username, $password);
}
catch (PDOException $e) {
	print "¡Error!: " . $e->getMessage();
	die();
}

$Productos = new Productos($con);

$cliente = new Clientes($con);

if(isset($_POST['login'])){
	$cliente->login($_POST);
}
 
if(isset($_GET['logout'])){
    unset($_SESSION['usuario']); 
}
	 
if($cliente->notLogged()){
  header('Location: login.php');
}

?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="TP - Produccion Web">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GLOB | FC</title>
    <link rel="shortcut icon" href="img/logo-glob.png"/>  

    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>