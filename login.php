<?php

  require './config/config.php';
  require './helpers/auth.php';

  sessionCloseValidate();

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $user = loginUser($_POST);
    if($user){
      $_SESSION["user"] = $user;
      header('location: '. RAIZ . "/index.php");
    }else{
      $pop = "El correo o contraseña son incorrectos";
      header('location: '. RAIZ . "/login.php?pop=$pop");
    }
  }

  require './views/login.view.php';

?>