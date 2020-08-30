<?php 

$nombre = $_POST["nombre"];
$email = $_POST["email"];
$mensaje = $_POST["mensaje"];
$para = "luiscarvajal2693@gmail.com";
$titulo = "probando la pagina de dreams travel";
$header = "From: " . $email;
$msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Mensaje:\n $mensaje";

if ($_POST["submit"]) {
	if (mail($para, $titulo, $msjCorreo, $header)) {
		echo '<script language="javascript">alert("Mensaje enviado, muchas gracias.");</script>'; 
		//window.location.href = 'index.php';
	} else {
		echo '<script language="javascript">alert("fallo de envio");</script>'; 

	}
}
?>