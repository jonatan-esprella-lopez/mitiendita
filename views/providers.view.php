<?php require 'views/includes/header.php' ?>

<script defer type="module">
      
  import { submenuActive } from "./assets/js/menu.js";
  import { deleteProviderAlert } from './assets/js/providerValidation.js';

  submenuActive();
  deleteProviderAlert();
</script>


<section class="page-content">
  <h2 class="title-page">Lista de usuarios</h2>
  <div class="users-table">
    <table>
      <thead> <!-- encabezado -->
        <tr>
          <th width= "1px">Id</th>
          <th>Nombre/s</th>
          <th>Dirección</th>
          <th>Correo</th>
          <th>Web</th>
          <th>Tipo de producto</th>
          <th>Teléfono</th>
          <th width= "3px"></th>
          <th></th>
        </tr>
      </thead>
      <tbody><!-- cuerpo de la lista -->
        <?php foreach($providers as $row): ?>
          <tr style="font-size:13px;">
            <th><?= $row['id']?></th>
            <th><?= $row['names']?></th>
            <th><?= $row['direction']?></th>
            <th><?= $row['email']?></th>
            <th><a href="<?= $row['web']?>" target="_blank"><?= $row['web']?></a></th>
            <th><?= $row['product_type']?></th>
            <th><?= $row['phone']?></th>

            <th><a href="<?=RAIZ?>/provider-edit.php?id=<?=$row['id']?>" class="users-table--edit">Editar</a></th>
            <th>
              <form action="<?=RAIZ?>/delete.php?id=<?=$row['id']?>&type=providers" class="form-users-delete" method="post">
                <input type="submit" class="users-table--delete" value="Eliminar" />
              </form>
            </th>   
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</section>


<?php require 'views/includes/footer.php' ?>