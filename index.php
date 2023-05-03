<?php

  require './config/config.php';
  require './helpers/auth.php';

  sessionValidate();

  require './views/inicio.view.php';

?>