<?php session_start();

  require './config/db.php';

  define('RAIZ', 'http://localhost/tiendita/');


  $DB_CONFIG = [
    'host' => 'sql9.freesqldatabase.com',
    'port' => '3306',
    'name' => 'sql9611059',
    'user' => 'sql9611059',
    'pass' => 'LkcxBGFRwD'
  ];

  if(isset($_SESSION['user'])){
    $AUTH = $_SESSION['user'];
  }
  define('CONNECT', conexion($DB_CONFIG));

?>