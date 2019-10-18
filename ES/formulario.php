<?php $ingles = false ?>

<?php include('../site/header.php') ?>

<div class="view formulario">
	<div class="section1 o-h" id="inicio">
		<div class="yellow-box relative">
			<div class="title">
				Formulario
			</div>
			<form id="formulariocontacto" onsubmit="return false;">
				<div class="input o-h">
					<div class="text">Nombre</div>
					<input type="text" class="valTexto" name="name">
				</div>
				<div class="input o-h">
					<div class="text">Apellidos</div>
					<input type="text" class="valTexto" name="name">
				</div>
				<div class="input o-h">
					<div class="text">Email</div>
					<input type="email" class="valCorreo" name="mail">
				</div>
				<div class="input o-h">
					<div class="text">Compañia</div>
					<input type="text" class="valTexto" name="name">
				</div>
				<div class="input o-h">
					<div class="text">Cargo</div>
					<input type="text" class="valTexto" name="name">
				</div>
				<div class="input o-h">
					<div class="text">Teléfono</div>
					<input type="number" class="valCorreo" name="phone">
				</div>
				<div class="input o-h">
					<div class="text">Stands <br class="hide-on-med-and-down"> clave</div>
					<input type="text" class="valTexto" name="name">
				</div>
				<div class="input o-h">
					<div class="text">Requisitos <br class="hide-on-med-and-down"> extra</div>
					<textarea name="comment" type="text"></textarea>
				</div>
			</form>
			<button onclick="enviar();">Enviar</button>
			<div id="respuesta"></div>
			<input type="reset" value="Limpiar" id="limpiar" name="limpiar" style="display:none">
		</div>
	</div>
</div>

<?php include('../site/footer.php') ?>