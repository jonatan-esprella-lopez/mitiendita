<?php

  function getProviders(){
    $user = $_SESSION['user']['id'];
    $sql = CONNECT->prepare('SELECT * FROM providers WHERE user_id = ?');
    $sql->execute([$user]);
    return $sql->fetchAll();
  }

  function getProviderByID($id){
    $sql = CONNECT->prepare('SELECT * FROM providers WHERE id = ? limit 1');
    $sql->execute([$id]);
    return $sql->fetch();
  }

  function createProvider($inputs, $user_id){
    extract($inputs);
    $sql = "INSERT INTO providers (user_id, names, direction, email, web, product_type, phone) VALUES(?, ?, ?, ?, ?, ?, ?)";
    $res = CONNECT->prepare($sql);
    $res->execute([$user_id, $names, $direction, $email, $web, $product_type, $phone]); 
  }


  function updateProvider($inputs, $id){
    extract($inputs);
    $sql = "UPDATE providers SET names = ?, direction = ?, email = ?, web = ?, product_type = ?, phone = ? WHERE id = ?";
    $res = CONNECT->prepare($sql);
    $res->execute([$names, $direction, $email, $web, $product_type, $phone, $id]); 
  }

  function deleteProvider($id){
    $sql = "DELETE FROM providers WHERE id = ?";
    $res = CONNECT->prepare($sql);
    $res->execute([$id]); 
  }
  

?>