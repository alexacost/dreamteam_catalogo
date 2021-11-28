<?php
require 'db.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$password = $_POST['password'];
$message = '';

  if (!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['email']) && !empty($_POST['password'])) {
    $passwordHash = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $sql = "INSERT INTO usuario (nombre, apellido, email, password) VALUES ('$nombre', '$apellido', '$email', '$passwordHash')";
    if ($conn->query($sql) === TRUE) {
        $message= "Se creo la cuenta";
      } else {
        $message= "No se pudo crear la cuenta";
      }
  }
  
  require 'index.php';
?>

