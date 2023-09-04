<?php
// Ruta de la carpeta que contiene las imágenes
$carpeta = 'filesimg';
// Obtiene la lista de archivos en la carpeta
$archivos = scandir($carpeta);
// Filtra los archivos para obtener solo las imágenes (puedes ajustar la extensión según tus necesidades)
$imagenes = array_filter($archivos, function ($archivo) {
    return in_array(pathinfo($archivo, PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png', 'gif']);
});
// Ordena la lista de imágenes por fecha de modificación (de más reciente a más antigua)
usort($imagenes, function ($a, $b) use ($carpeta) {
    return filemtime($carpeta . '/' . $b) - filemtime($carpeta . '/' . $a);
});
// Verifica si hay imágenes en la carpeta
if (count($imagenes) > 0) {
    // Obtiene el nombre del archivo de la imagen más reciente
    $imagenMasReciente = $imagenes[0];
    // Ruta completa del archivo de la imagen más reciente
    $rutaImagenMasReciente = $carpeta . '/' . $imagenMasReciente;
    // Obtiene el tipo MIME de la imagen (puede ser jpeg, png, gif, etc.)
    $tipoImagen = mime_content_type($rutaImagenMasReciente);
    // Establece el Content-Type adecuado para la imagen
    header('Content-Type: ' . $tipoImagen);
    // Muestra la imagen en el navegador
    readfile($rutaImagenMasReciente);
} else {
    echo 'No se encontraron imágenes en la carpeta.';
}
