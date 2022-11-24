<?php

use Models\User;

require(__DIR__ . '/../vendor/autoload.php');
$dotenv = Dotenv\Dotenv::createImmutable('../');
$dotenv->load();
require(__DIR__ . '/../config/bootstrap.php');

$em = GetEntityManager();

if (isset($_POST['submit'])) {  #comprueba que el formulario se envio , esto lo voy a cambiar acorde al usuario

$var = 'LdL';
  $user = new User(); #creacion del objeto user
  function alert($msg) { echo "<script type='text/javascript'>alert('$msg');</script>"; } //Creacion de una alerta para informar error 

  # $existingUser = $em->getRepository('Models\User')->findOneBy(['correo' => $_POST['correo']]); busca el cliente asociado al cuil del formulario

  if (isset($existingUser)) {
    echo "Ya existe un cliente con ese Correo";
    return;
  } else {
    $user->setNombre($_POST['nombre']);
    $user->setApellido($_POST['apellido']);
    $user->setTipoDocumento($_POST['tipodocumento']);
    $user->setNumeroDocumento($_POST['numerodocumento']);
    $user->setEmail($_POST['email']);
    $user->setNacimiento($_POST['nacimiento']);
    $user->setTelefono($_POST['telefono']);

    //Contraseña va a ser igual a VAR + Numerodecocumento
    $user->setContraseña($_POST['$var.$getNumeroDocumento']);

    //FALTA PONER LO DE USUARIO PORQUE NO SE ME OCURRE NADA
  }

  $em->persist($user); #guardar los datos en la base de datos
  $em->flush(); #ejecuta lo anterior

  header('Location:index.php'); #redireccion al inicio
} else {
  alert("El formulario no ha sido enviado correctamente...");
}