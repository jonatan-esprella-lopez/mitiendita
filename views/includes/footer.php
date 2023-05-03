    </main>
  </div>


  <div id="menu-bar" class="menu-bar">
    <a href="javascript:void(0)" class="closebtn" id="menu-bar-close">&times;</a>
    <div class="menu-bar-content">
      <nav class="nav-bar">  
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
    </div>
  </div>

  <script type="module">
    import { menuAction, menuResponsive } from "./assets/js/menu.js";
    menuAction();
    menuResponsive();
  </script>

  <?php if(isset($_GET['pop'])): ?>
    <script type="module">
      import { alertModal, getParams } from "./assets/js/alerts.js";
      const msg = getParams('pop');
      alertModal(msg);
    </script>
  <?php endif; ?>

</body>
</html>