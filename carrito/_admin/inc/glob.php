<?php
try {
  $con = new PDO('mysql:host='.$hostname.';port='.$port.';dbname='.$database='glob', $username, $password);
} catch (PDOException $e) {
  print "Error!: " . $e->getMessage();
  die();
  }
  ?>