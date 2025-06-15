<?php
// Validar que los campos existen
if (
    isset($_POST['nombre'], $_POST['email'], $_POST['mensaje']) &&
    !empty($_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['mensaje'])
) {
    // Sanitizar datos
    $nombre = htmlspecialchars(strip_tags($_POST['nombre']));
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $mensaje = htmlspecialchars(strip_tags($_POST['mensaje']));

    // Validar email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: error.html");
        exit();
    }

    $para = "statistics.earaujor@gmail.com";
    $titulo = "Nuevo mensaje de contacto";
    $contenido = "Nombre: $nombre\nCorreo: $email\nMensaje:\n$mensaje";
    $headers = "From: $email";

    // Enviar correo
    if (mail($para, $titulo, $contenido, $headers)) {
        header("Location: gracias.html");
    } else {
        header("Location: error.html");
    }
    exit();
} else {
    header("Location: error.html");
    exit();
}
?>