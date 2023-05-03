<?php
  require './config/config.php';
  require './helpers/users.php';
  require './helpers/providers.php';
  require './helpers/auth.php';

  sessionValidate();

  $url;

  switch($_GET['type']){
    case 'session':
      closeSession();
      $pop = "Sesion Finalizada";
      $url = '/login.php?pop=' . $pop;
    break;
  }


  header('location: '. RAIZ . $url);

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = isset($_GET['id']) ? (int) $_GET['id'] : "";

    $url;

    switch($_GET['type']){

      case 'users':
        deleteUser($id);
        $pop = "Usuario eliminado correctamente";
        $url = '/users.php?pop=' . $pop;
      break;

      case 'providers':
        deleteProvider($id);
        $pop = "Proveedor eliminado correctamente";
        $url = '/providers.php?pop=' . $pop;
      break;
    }
    header('location: '. RAIZ . $url);
  }

?>