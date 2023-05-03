<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar session</title>
  <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
  <link rel="stylesheet" href="./assets/css/login.css">
  <link rel="stylesheet" href="./assets/css/estilos.css">
  <link rel="stylesheet" href="./assets/css/app_modal_user.css">

  <script defer src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</head>
<body>

  <header class="header">
      <img class="imglogo" src="./assets/img/logito.png" alt="">
  </header>


  <section class="content-login">
  
  
    <form action="<?=$_SERVER['PHP_SELF']?>" class="login-formulario" method="POST">
  
      <div class="img-login">
        <img src="./assets/img/user-login.svg" alt="icon login">
        <span>Iniciar sesión</span>
      </div>
    
      <section class="login-form--inputs">
      
        <div class="login-form--inputs--item">
          <i class="fas fa-user"></i>
          <input type="text" name="email" placeholder="Correo electronico" />
        </div>

        <div class="login-form--inputs--item">
          <i class="fas fa-lock"></i>
          <input type="password" name="password" placeholder="Contraseña" />
        </div>
      </section>

      <input class="login-form--submit" type="submit" value="Ingresar" /> 
    </form>

  </section>
  
  <?php if(isset($_GET['pop'])): ?>
    <script type="module">
      import { alertModal, getParams } from "./assets/js/alerts.js";
      const msg = getParams('pop');
      alertModal(msg);
    </script>
  <?php endif; ?>

</body>
</html>