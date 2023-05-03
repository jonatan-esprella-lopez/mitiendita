<?php

  function conexion($db_config) {
    $dsn = "mysql:host=".$db_config['host'].";port=".$db_config['port'].";dbname=".$db_config['name'];
    try {
        return new PDO($dsn, $db_config['user'], $db_config['pass']);
    } catch (PDOException $e) {
        throw new PDOException($e->getMessage(), (int)$e->getCode());
    }
  }

  function active($path){
    $url_actual =  "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    $param = RAIZ . '/' . $path;

    return $url_actual == $param ? 'menu-active' : '';
  }



?>