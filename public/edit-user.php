<?php

use Doctrine\Common\Collections\ArrayCollection;

require(__DIR__ . '/../vendor/autoload.php');
$dotenv = Dotenv\Dotenv::createImmutable('../');
$dotenv->load();
require(__DIR__ . '/../config/bootstrap.php');

$em = GetEntityManager();

if (isset($_POST['edit'])) {
  //Utilizo como codigo identificador el correo de la creacion
  $user = isset($_GET['correo']) ? $em->getReference('Models\User', $_GET['correo']) : null;

//Realizo los cambios pertinentes al usuario
  if (isset($user)) {
    $user->setNombre($_POST['nombre']);
    $user->setApellido($_POST['apellido']);
    $user->setTipoDocumento($_POST['tipodocumento']);
    $user->setNumeroDocumento($_POST['numerodocumento']);
    $$user->setEmail($_POST['email']);
    $user->setNacimiento($_POST['nacimiento']);
    $user->setTelefono($_POST['telefono']);


    $em->flush();
    header('Location: ../?correo=' . $_GET['correo']);
  }
}
