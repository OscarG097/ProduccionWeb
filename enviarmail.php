<!--Página en desarrollo-->

<?php
if(isset($_POST['email'])) {

// Enviar mail
$email_to = "oscar.gimenez@davinci.edu.ar";
$email_subject = "Consulta de usuario desde sitio GLOB";

// Tomar datos para enviar mail
if(!isset($_POST['nombre_apellido']) ||
!isset($_POST['email']) ||
!isset($_POST['telefono']) ||
!isset($_POST['comentario'])) {

echo "Ocurrió un error y el formulario no ha sido enviado.";
echo "Por favor, vuelva atrás y verifique la información ingresada.";
die();
}

$email_message .= "Detalles del formulario de contacto:\n\n";
$email_message .= "Nombre: " . $_POST['nombre_apellido'] . "\n";
$email_message .= "E-mail: " . $_POST['email'] . "\n";
$email_message .= "Teléfono: " . $_POST['telefono'] . "\n";
$email_message .= "Comentarios: " . $_POST['comentario'] . "\n\n";


// Ahora se envía el e-mail usando la función mail() de PHP
$headers = 'De: '.$email_from."\r\n".
'Responder a: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

echo "¡Su consulta se envió correctamente!";
}
?>