<?php
  require './config/config.php';
  require './helpers/providers.php';
  require './helpers/auth.php';

  sessionValidate();

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $user_id = (int) $_SESSION['user']['id'];
    createProvider($_POST, $user_id);

    $pop = 'Proveedor guardado exitosamente';
    header('location: '. RAIZ . "/provider-register.php?pop=$pop");
  }
  
  require './views/provider-register.view.php';

?>