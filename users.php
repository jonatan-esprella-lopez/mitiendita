<?php
  require './config/config.php';
  require './helpers/users.php';
  require './helpers/auth.php';

  sessionValidate();

  $users = getUsers();
  

  require './views/users.view.php';

?>