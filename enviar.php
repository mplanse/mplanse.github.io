<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recopilar los datos del formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    // Crear el contenido que se va a escribir en el archivo
    $contenido = "Nombre: $nombre\n";
    $contenido .= "Correo electrónico: $email\n";
    $contenido .= "Asunto: $asunto\n";
    $contenido .= "Mensaje:\n$mensaje\n";

    // Escribir los datos en un archivo
    $archivo = fopen("datos.txt", "a");
    fwrite($archivo, $contenido);
    fclose($archivo);

    // Mostrar un mensaje al usuario
    echo "<p>Los datos se han guardado correctamente.</p>";
}
?>
