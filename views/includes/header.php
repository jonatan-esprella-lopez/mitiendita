<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="./assets/css/estilos.css">
  <link rel="stylesheet" href="./assets/css/app_modal_user.css">
  <link rel="stylesheet" href="./assets/css/pages.css">
  <link rel="stylesheet" href="./assets/css/lista_usr.css">
  <link rel="stylesheet" href="./assets/css/responsive.css">

  <script defer src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</head>
<body>

    <header class="header">
        <img class="imglogo" src="./assets/img/logito.png" alt="">
        
        <div class="header-menu--bar">
          <button id="menu-bar-open"><i class="fas fa-bars"></i></button>
        </div>

        <div class="header-user">
          <button class="header-user--btn">
            <span><?=$AUTH["nombre"]?></span>
            <img class="header-user--img" src="./assets/img/user.png" alt="imagen usuario"> 
          </button>
          
          <div class="header-drop--content">
            <a href="<?=RAIZ?>/delete.php?type=session">Cerrar Sesion</a>
          </div>
        </div>
    </header>


    <div class="container">

      <nav class="nav">
        
        <ul class="list">
          <li class="list__item">
            <div class="list__button <?=active('index.php')?>">
              <a href="index.php" class="nav__link">Inicio</a>
            </div>
          </li>
          
        <?php if($AUTH['tipo_usr'] == "Gerente"): ?>
          <li class="list__item list__item--click">
            <div class="list__button list__button--click">
              <a href="#" class="nav__link">Usuario</a> 
              <img src="./assets/img/arrow.svg" class="list__arrow">
            </div>

            <ul class="list__show">
              <li class="list__inside">
                <a href="<?=RAIZ?>/user-register.php" class="nav__link nav__link--inside <?=active('user-register.php')?>">Registrar usuario</a>
              </li>
              <li class="list__inside">
                <a href="<?=RAIZ?>/users.php" class="nav__link nav__link--inside <?=active('users.php')?>">Lista de usuarios</a>
              </li>
            </ul>
          </li>
        <?php endif; ?>

          <li class="list__item list__item--click">
            <div class="list__button list__button--click">
              <a href="#" class="nav__link">Proveedor</a> 
              <img src="./assets/img/arrow.svg" class="list__arrow">
            </div>

            <ul class="list__show">
              <li class="list__inside">
                <a href="<?=RAIZ?>/provider-register.php" class="nav__link nav__link--inside <?=active('provider-register.php')?>">Registrar proveedor</a>
              </li>
              <li class="list__inside">
                <a href="<?=RAIZ?>/providers.php" class="nav__link nav__link--inside <?=active('providers.php')?>">Lista de proveedores</a>
              </li>
            </ul>
          </li>
        </ul>  
      </nav>


      <main class="main custom-scroll">