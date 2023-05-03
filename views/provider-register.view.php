<?php require 'views/includes/header.php' ?>

<script defer type="module">    
  import { submenuActive } from "./assets/js/menu.js"
	import execRegisterValidation, { actionRegister } from "./assets/js/providerValidation.js"
  submenuActive();
	execRegisterValidation(actionRegister);
</script>

	<section class="page--content">
		<h1 class= "titulo-seccion" >Formulario de registro</h1>
		<form action="" class="formulario" id="formulario" method="POST">
			
			<section class="formulario-inputs-content">
				<!-- Grupo: Nombre -->
				<div class="formulario__grupo" id="grupo__nombre">
					<div class="contval">
						<label for="names" class="formulario__label">Nombre proveedor</label>
						<p class="signo">*</p>
					</div>
					<div class="formulario__grupo-input">
						<input type="text" class="formulario__input" name="names" id="names" placeholder="Ingrese nombre">
						<i class="formulario__validacion-estado fas fa-times-circle"></i>
					</div>
					<p class="formulario__input-error"></p>
				</div>

				<!-- Grupo: direccion -->
				<div class="formulario__grupo" id="grupo__direccion">
					<div class="contval">
						<label for="direction" class="formulario__label">Dirección</label>
						<p class="signo">*</p>
					</div>
					<div class="formulario__grupo-input">
						<input type="text" class="formulario__input" name="direction" id="direction" placeholder="Ingrese dirección">
						<i class="formulario__validacion-estado fas fa-times-circle"></i>
					</div>
					<p class="formulario__input-error"></p>
				</div>

				<!-- Grupo: Correo Electronico -->
				<div class="formulario__grupo" id="grupo__correo">
					<div class="contval">
						<label for="email" class="formulario__label">Correo electrónico</label>
						<p class="signo">*</p>
					</div>
					<div class="formulario__grupo-input">
						<input type="email" class="formulario__input" name="email" id="email" placeholder="ejemplo@servidor.com">
						<i class="formulario__validacion-estado fas fa-times-circle"></i>
					</div>
					<p class="formulario__input-error"></p>
				</div>


				<!-- Grupo: Sition web -->
				<div class="formulario__grupo" id="grupo__correo">
					<div class="contval">
						<label for="web" class="formulario__label">Sitio web</label>
						<p class="signo">*</p>
					</div>
					<div class="formulario__grupo-input">
						<input type="text" class="formulario__input" name="web" id="web" placeholder="http://example.com">
						<i class="formulario__validacion-estado fas fa-times-circle"></i>
					</div>
					<p class="formulario__input-error"></p>
				</div>
				

				<!-- Grupo: tipoUsuario -->
				<div class="formulario__grupo" id="grupo__tipoUsuario">
					<div class="contval">
						<label for="product_type" class="formulario__label">Tipo de producto</label>
						<p class="signo">*</p>
					</div>
					<div class="formulario__grupo-input">
						<select class="formulario__input tipoUsuario" id="product_type" name="product_type">
							<option value="" disabled selected>Seleccione tipo usuario</option>
							<option value="Bebidas">Bebidas</option>
							<option value="Higiene personal">Higiene personal</option>
							<option value="Limpieza">Limpieza</option>
							<option value="Mascotas">Mascotas</option>
							<option value="Bebes">Bebes</option>
							<option value="Despensa">Despensa</option>
						</select>
					</div>
					<p class="formulario__input-error"></p>
				</div>

				<!-- Grupo: Teléfono -->
				<div class="formulario__grupo" id="grupo__telefono">
					<div class="contval">
						<label for="phone" class="formulario__label">Número de teléfono</label>
						<p class="signo">*</p>
					</div>
					<div class="formulario__grupo-input">
						<input type="text" class="formulario__input" name="phone" id="phone" placeholder="Ingrese número">
						<i class="formulario__validacion-estado fas fa-times-circle"></i>
					</div>
					<p class="formulario__input-error"></p>
				</div>

			</section>
		
			
			<!--Botones en el formulario guardar y cancelar-->
			<div class="formulario-buttons">
				<button type="submit" class="hero__cta">Guardar</button>
				<button type="button" class="hero__cta2" id="btn-cancel-reset">Cancelar</button>
			</div>

		</form>
	</section>

<?php require 'views/includes/footer.php' ?>