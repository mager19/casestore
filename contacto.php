<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$para = 'mager19@gmail.com';
$titulo =  $_POST['asunto'];
$header = 'From: ' . $email;
$msjCorreo = 'Name: $nombre\n E-Mail: $email\n Message:\n $mensaje';

if ($_POST['submit']) {
if (mail($para, $titulo, $msjCorreo, $header)) {
echo '<script language=’javascript’>
alert(‘Send, Thank you.’);
window.location.href = ‘electronics.pe’;
</script>';
} else {
echo 'Falló el envio';
}
}
?>