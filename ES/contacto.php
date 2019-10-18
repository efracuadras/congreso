<?php $ingles = false ?>

<?php include('../site/header.php') ?>

<div class="view contact">
	<div class="section1" id="inicio">
		<div class="title center-flex">
			Contacto
		</div>
		<div class="center-flex">
			<div class="contact-box">
				<form id="formulariocontacto" onsubmit="return false;">
					<div class="input">
						<div class="text">Nombre</div>
						<input type="text" class="valTexto" name="name">
					</div>
					<div class="input">
						<div class="text">Email</div>
						<input type="email" class="valCorreo" name="mail">
					</div>
					<div class="input">
						<div class="text">Teléfono</div>
						<input type="number" class="valCorreo" name="phone">
					</div>
					<div class="input">
						<div class="text">Mensaje</div>
						<textarea name="comment" type="text"></textarea>
					</div>
				</form>
				<button onclick="enviar();">Enviar mensaje</button>
				<div id="respuesta"></div>
				<input type="reset" value="Limpiar" id="limpiar" name="limpiar" style="display:none">
			</div>
		</div>
	</div>
</div>

<?php include('../site/footer.php') ?>