<?php
require(__DIR__ . '/../vendor/autoload.php');
$dotenv = Dotenv\Dotenv::createImmutable('../');
$dotenv->load();
require(__DIR__ . '/../config/bootstrap.php');

$em = GetEntityManager();
function alert($msg) { echo "<script type='text/javascript'>alert('$msg');</script>"; } //Creacion de una alerta para informar error 

//Corroboramos si en la tabla usuarios hay un correo 
if (isset($_GET['correo'])) {
    //Si el correo a eliminar es igual al correo ingresado, eliminamos
  $user = $em->find('Models\user', $_GET['correo']);
  $user = $user->getUser();

  //Removemos el correo y propiamente el usuario completo 
  $em->remove($user);
  //Actualizamos
  $em->flush();
  header('Location: ../');
} else {
    //En caso contrario a que no halla un correo tiramos una alerta que no existen dichos usuarios.
    Alert("No hay ningun usuario con ese correo");
}
