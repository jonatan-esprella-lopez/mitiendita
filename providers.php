<?php
  require './config/config.php';
  require './helpers/providers.php';
  require './helpers/auth.php';

  sessionValidate();

  $providers = getProviders();
  

  require './views/providers.view.php';

?>