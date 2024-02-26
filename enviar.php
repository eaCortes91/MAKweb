<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    $destinatario = 'tu@email.com'; // Coloca aquí tu dirección de correo electrónico

    $asunto = 'Nuevo mensaje de ' . $nombre;
    $contenido = "Nombre: $nombre\n";
    $contenido .= "Email: $email\n";
    $contenido .= "Mensaje:\n$mensaje\n";

    // Envía el correo electrónico
    mail($destinatario, $asunto, $contenido);

    // Redirecciona a una página de confirmación
    header('Location: confirmacion.html');
}
?>
