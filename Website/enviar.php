<?php
$name = $_POST['nombre'];
$phone = $_POST['telefono'];
$mail = $_POST['correo'];

$header = 'From: contacto@grupomonteverde.com.co ' . "\r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $name . "\nSu correo electronico es: " . $mail . "\nTelefono de contacto: " . $phone . "\nEnviado el: " . date('d/m/y', time());

$para = 'gerencia.grupomonteverde@gmail.com' ;
$asunto = 'Contacto Pagina Web';

mail($para, $asunto, utf8_decode($message), $header);

header("Location:Pages/registro.html");
?>
