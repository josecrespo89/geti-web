<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoge los datos del formulario
    $nombre = $_POST['name2'];
    $email = $_POST['email2'];
    $mensaje = $_POST['message2'];

    // Dirección de correo electrónico a la que deseas enviar el formulario
    $destinatario = "jose.crespo@conicet.gov.ar";

    // Asunto del correo electrónico
    $asunto = "Nuevo mensaje del formulario de contacto";

    // Construye el cuerpo del correo electrónico
    $cuerpoMensaje = "Nombre: $nombre\n";
    $cuerpoMensaje .= "Email: $email\n";
    $cuerpoMensaje .= "Mensaje:\n$mensaje";

    // Envía el correo electrónico
    mail($destinatario, $asunto, $cuerpoMensaje);

    // Redirecciona a una página de confirmación o muestra un mensaje de éxito
    header('Location: gracias.html');
} else {
    // Si no se envía el formulario correctamente, redirige a una página de error
    header('Location: error.html');
}
?>
