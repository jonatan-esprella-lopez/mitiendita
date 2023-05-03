<?php
  require './config/config.php';
  require './helpers/providers.php';
  require './helpers/auth.php';

  sessionValidate();

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    updateProvider($_POST, (int) $_GET['id']);

    $pop = 'Proveedor guardado exitosamente';
    header('location: '. RAIZ . "/providers.php?pop=$pop");
  }

  $id = (int) $_GET['id'];
  $provider = getProviderByID($id);

  require './views/provider-edit.view.php';

?>