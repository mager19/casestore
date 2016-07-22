
<?php
if(isset($_POST['email'])) {

// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
$email_to = "mager19@gmail.com";
$email_subject = "Contacto desde casestore";

// Aquí se deberían validar los datos ingresados por el usuario
if(!isset($_POST['nombre']) ||
!isset($_POST['email']) ||
!isset($_POST['tel']))||
!isset($_POST['mensaje'])) {

echo "<b>An error occurred and the form has not been sent .</b><br />";
echo "Please go back and check the information entered.<br />";
die();
}

$email_message = "\n Details contact form:\n\n";
$email_message .= "Name: " . $_POST['nombre'] . "\n\n";
$email_message .= "Email: " . $_POST['email'] . "\n\n";
$email_message .= "Tel: " . $_POST['tel'] . "\n\n";
$email_message .= "Message: " . $_POST['mensaje'] . "\n\n";


// Ahora se envía el e-mail usando la función mail() de PHP
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

echo "<script language='javascript'>
alert('Mensaje enviado, Gracias.');
window.location.href = 'https://mager19.github.io/casestore';
</script>";
}
?>
