<?php
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$direccion = $_POST['direccion'];
$orden = $_POST['orden'];
$extras = $_POST['extras'];
$ = $_POST[''];

$header = 'From: ' . $mail . "\r\n";
$header .= "X-Mailesr: PHP/" . phpversion() . "\r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Orden de: " . $name . "\r\n";
$message .= "Correo de contacto: " . $correo . "\r\n";
$message .= "Direccion de entrega: " . $ . "\r\n";
$message .= "Orden: " . $_POST['orden'] . "\r\n";
$message .= "Extras" . $_POST['extras'] . "\r\n";

$para = 'xailesrukasa@gmail.com';
$asunto = 'Orden';

mail($para, $asunto, utf8_decode($message), $header);

header("Location:index.html");
?>