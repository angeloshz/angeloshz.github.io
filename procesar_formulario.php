<?php
// Verificar si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Obtener los datos del formulario
  $nombre = $_POST["name"];
  $correo = $_POST["email"];
  $mensaje = $_POST["message"];

  // Validar los datos
  if (empty($nombre) || empty($correo) || empty($mensaje)) {
    // Si hay algún campo vacío, mostrar mensaje de error
    echo "Error: Por favor complete todos los campos.";
  } else {
    // Si todos los campos están completos, enviar el correo
    $destinatario = "shzbeatzbusiness@gmail.com";
    $asunto = "Nuevo mensaje de contacto";
    $contenido = "Nombre: $nombre\nCorreo: $correo\nMensaje: $mensaje";
    $encabezados = "From: $correo";

    if (mail($destinatario, $asunto, $contenido, $encabezados)) {
      // Si el correo se envió correctamente, mostrar mensaje de éxito
      echo "¡Mensaje enviado exitosamente!";
    } else {
      // Si hubo un error al enviar el correo, mostrar mensaje de error
      echo "Error: No se pudo enviar el mensaje.";
    }
  }
}
?>