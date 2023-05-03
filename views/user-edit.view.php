<?php require 'views/includes/header.php' ?>

<script defer type="module">
	import execRegisterValidation, { actionUpdate } from "./assets/js/registerValidation.js"
	execRegisterValidation(actionUpdate, true);
</script>

	<section class="page--content">
		<h1 class= "titulo-seccion" >Editar usuario</h1>
		<form action="<?=$_SERVER['PHP_SELF'] . "?id=" . $user['id']?>" class="formulario" id="formulario" method="POST">
		
			<section class="formulario-inputs-content">
				<!-- Grupo: Nombre -->
				<div class="formulario__grupo" id="grupo__nombre">
					<div class="contval">
						<label for="nombre" class="formulario__label">Nombre/s</label>
						<p class="signo">*</p>
					</div>
					<div class="formulario__grupo-input">
						<input type="text" class="formulario__input" name="nombre" id="nombre" value="<?=$user['nombre']?>" placeholder="Ingrese nombres">
						<i class="formulario__validacion-estado fas fa-times-circle"></i>
					</div>
					<p class="formulario__input-error"></p>
				</div>

				<!-- Grupo: apellidos -->
				<div class="formulario__grupo" id="grupo__apellidos">
					<div class="contval">
						<label for="apellidos" class="formulario__label">Apellido/s</label>
						<p class="signo">*</p>
					</div>
					<div class="formulario__grupo-input">
						<input type="text" class="formulario__input" name="apellidos" id="apellidos" value="<?=$user['apellido']?>" placeholder="Ingrese apellidos">
						<i class="formulario__validacion-estado fas fa-times-circle"></i>
					</div>
					<p class="formulario__input-error"></p>
				</div>

				<!-- Grupo: Correo Electronico -->
				<div class="formulario__grupo" id="grupo__correo">
					<div class="contval">
						<label for="correo" class="formulario__label">Correo electrónico</label>
						<p class="signo">*</p>
					</div>
					<div class="formulario__grupo-input">
						<input type="email" class="formulario__input" name="correo" id="correo" value="<?=$user['email']?>" placeholder="ejemplo@servidor.com">
						<i class="formulario__validacion-estado fas fa-times-circle"></i>
					</div>
					<p class="formulario__input-error"></p>
				</div>

				<!-- Grupo: direccion -->
				<div class="formulario__grupo" id="grupo__direccion">
					<div class="contval">
						<label for="direccion" class="formulario__label">Dirección</label>
						<p class="signo">*</p>
					</div>
					<div class="formulario__grupo-input">
						<input type="text" class="formulario__input" name="direccion" id="direccion" value="<?=$user['direccion']?>" placeholder="Ingrese dirección">
						<i class="formulario__validacion-estado fas fa-times-circle"></i>
					</div>
					<p class="formulario__input-error"></p>
				</div>

				<!-- Grupo: tipoUsuario -->
				<div class="formulario__grupo" id="grupo__tipoUsuario">
					<div class="contval">
						<label for="tipoUsuario" class="formulario__label">Tipo de usuario</label>
						<p class="signo">*</p>
					</div>
					<div class="formulario__grupo-input">
						<select class="formulario__input tipoUsuario" id="tipoUsuario" name="tipo_usr">
							<option value="<?=$user['tipo_usr']?>" selected><?=$user['tipo_usr']?></option>
							<option value="Vendedor">Vendedor</option>
							<option value="Almacenero">Almacenero</option>
							<option value="Gerente">Gerente</option>
						</select>
					</div>
					<p class="formulario__input-error"></p>
				</div>

				<!-- Grupo: Teléfono -->
				<div class="formulario__grupo" id="grupo__telefono">
					<div class="contval">
						<label for="telefono" class="formulario__label">Número de teléfono</label>
						<p class="signo">*</p>
					</div>
					<div class="formulario__grupo-input">
						<input type="text" class="formulario__input" name="telefono" id="telefono" value="<?=$user['telefono']?>" placeholder="Ingrese número">
						<i class="formulario__validacion-estado fas fa-times-circle"></i>
					</div>
					<p class="formulario__input-error"></p>
				</div>

				<!-- Grupo: Contraseña -->
				<div class="formulario__grupo" id="grupo__password">
					<div class="contval">
						<label for="password" class="formulario__label">Contraseña</label>
						<p class="signo">*</p>
					</div>
					<div class="formulario__grupo-input">
						<input type="password" class="formulario__input" name="password" id="password" value="<?=$user['pass']?>" placeholder="Ingrese contraseña">
						<i class="formulario__validacion-estado fas fa-times-circle"></i>
					</div>
					<p class="formulario__input-error"></p>
				</div>
				
				<!-- Grupo: Ci -->
				<div class="formulario__grupo" id="grupo__ci">
					<div class="contval">
						<label for="ci" class="formulario__label">C.I.</label>
						<p class="signo">*</p>
					</div>
					<div class="formulario__grupo-input">
						<input type="text" class="formulario__input" name="ci" id="ci" value="<?=$user['ci']?>" placeholder="Ingrese ci">
						<i class="formulario__validacion-estado fas fa-times-circle"></i>
					</div>
					<p class="formulario__input-error"></p>
				</div>

				<!-- Grupo: Contraseña 2 -->
				<div class="formulario__grupo" id="grupo__password2">
					<div class="contval">
						<label for="password2" class="formulario__label">Confirmar contraseña</label>
						<p class="signo">*</p>
					</div>
					<div class="formulario__grupo-input">
						<input type="password" class="formulario__input" name="password2" id="password2" value="<?=$user['pass']?>" placeholder="Ingrese contraseña">
						<i class="formulario__validacion-estado fas fa-times-circle"></i>
					</div>
					<p class="formulario__input-error"></p>
					<div class="campo"><br><br><br>
						* Campo obligatorio
					</div>
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