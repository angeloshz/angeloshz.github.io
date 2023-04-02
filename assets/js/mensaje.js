<script>
    // Obtener el div para mostrar el mensaje
    var mensajeDiv = document.getElementById("mensaje");

    // Obtener el mensaje de la URL
    var urlParams = new URLSearchParams(window.location.search);
    var mensaje = urlParams.get('mensaje');

    // Mostrar el mensaje correspondiente
    if (mensaje == "exito") {
        mensajeDiv.innerHTML = "¡Mensaje enviado correctamente!";
        mensajeDiv.classList.add("exito");
    } else if (mensaje == "error") {
        mensajeDiv.innerHTML = "Error: No se pudo enviar el mensaje. Inténtelo de nuevo más tarde.";
        mensajeDiv.classList.add("error");
    }
</script>