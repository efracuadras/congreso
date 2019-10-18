<?php
	//Enviar Correo //////////////////////////////////////////////////////
	require('class.phpmailer.php');

	$mail = new PHPMailer();
	$mail->CharSet = 'UTF-8';
	$mail->Host = "localhost";
	$mail->From = $_GET['mail'];
	$mail->FromName = $_GET['name'];
	$mail->Subject = "Template :: Gym | Contacto | ".$_GET['mail'];

	//Enviar
	$mail->AddAddress("kevin@geeklopers.com","Template :: Gym | Contacto");
	

	  
	$body = "Template :: Gym"."\n";
	$body .= "Nombre: ".$_GET['name']."\n";
	$body .= "Correo: ".$_GET['mail']."\n";
	$body .= "Mensaje: ".$_GET['comment']."\n";

	//echo $body;
	$mail->Body = $body;
	$mail->Send() or die ('<div class="alert alert-danger">Se presentó un problema al enviar el mensaje, intentelo nuevamente.</div><script>jQuery(".alert").fadeOut(5000);</script>');
	    echo'
		<div class="alert alert-success" style="margin-top: 40px;">Tu mensaje ha sido enviado correctamente, nos podremos en contacto.</div>
		<script type="text/javascript">
			jQuery("#limpiar").click();
			
		</script>
	';
	
?>