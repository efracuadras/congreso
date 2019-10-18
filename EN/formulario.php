<?php $ingles = true ?>
<?php include('../site/header.php') ?>

<div class="view formulario">
	<div class="section1 o-h" id="inicio">
		<div class="yellow-box relative">
			<div class="title">
				Form
			</div>
			<form id="formulariocontacto" onsubmit="return false;">
				<div class="input o-h">
					<div class="text">Name</div>
					<input type="text" class="valTexto" name="name">
				</div>
				<div class="input o-h">
					<div class="text">Last name</div>
					<input type="text" class="valTexto" name="name">
				</div>
				<div class="input o-h">
					<div class="text">E-mail</div>
					<input type="email" class="valCorreo" name="mail">
				</div>
				<div class="input o-h">
					<div class="text">Company</div>
					<input type="text" class="valTexto" name="name">
				</div>
				<div class="input o-h">
					<div class="text">Position</div>
					<input type="text" class="valTexto" name="name">
				</div>
				<div class="input o-h">
					<div class="text">Phone</div>
					<input type="number" class="valCorreo" name="phone">
				</div>
				<div class="input o-h">
					<div class="text">Exhibition Booth Number </div>
					<input type="text" class="valTexto" name="name">
				</div>
				<div class="input o-h">
					<div class="text">Extra requirements</div>
					<textarea name="comment" type="text"></textarea>
				</div>
			</form>
			<button onclick="enviar();">Send</button>
			<div id="respuesta"></div>
			<input type="reset" value="Limpiar" id="limpiar" name="limpiar" style="display:none">
		</div>
	</div>
</div>

<?php include('../site/footer.php') ?>