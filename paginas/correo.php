<?php
if(isset($_POST['enviar'])){
	if (!empty($_POST['nombre']) && !empty($_POST['correo']) && !empty($_POST['telefono']) && !empty($_POST['mensaje'])) {
		$destino = "dgalvezterrones@gmail.com";
		$nombre = $_POST['nombre'];
		$correo = $_POST['correo'];
		$telefono = $_POST['telefono'];
		$mensaje = $_POST['mensaje'];
		$contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTeléfono: " . $telefono . "\nMensaje: " . $mensaje;
		$mail = mail($destino,"Contacto", $contenido);
		if ($mail){
			echo "<h4>¡Formulario enviado exitosamente</h4>";
		}
	}
}
?>