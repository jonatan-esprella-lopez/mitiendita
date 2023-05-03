<?php
  require './config/config.php';
  require './helpers/users.php';
  require './helpers/auth.php';

  sessionValidate();

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    createUser($_POST);

    $pop = 'Usuario guardado exitosamente';
    header('location: '. RAIZ . "/user-register.php?pop=$pop");
  }
  
  require './views/user-register.view.php';

?>