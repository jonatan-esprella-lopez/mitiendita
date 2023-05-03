<?php

  function loginUser($user){
    extract($user);

    $sql = CONNECT->prepare('SELECT * FROM users WHERE email = ? AND pass = ? LIMIT 1');
    $sql->execute([$email, $password]);
    return $sql->fetch();
  }

  function sessionValidate(){
    if(!isset($_SESSION['user'])){
      header('Location: ' . RAIZ . '/login.php');
    }
  }

  function sessionCloseValidate(){
    if(isset($_SESSION['user'])){
      header('Location: ' . RAIZ . '/');
    }
  }

  function closeSession(){
    session_destroy();
    $_SESSION = [];
  }

?>