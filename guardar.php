<?php
// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

// Crear el contenido que se va a escribir en el archivo
$contenido = "Nombre: $nombre\nCorreo electrónico: $correo\nMensaje: $mensaje\n\n";

// Escribir los datos en un archivo
$archivo = fopen("datos.txt", "a") or die("No se pudo abrir el archivo.");
fwrite($archivo, $contenido);
fclose($archivo);

// Redireccionar al usuario a una página de confirmación
header("Location: confirmacion.html");
?>
