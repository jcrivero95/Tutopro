<?php
include "db.php";

$id = $_POST['idCita'];
$nombreContenido = $_POST['nombreContenido'];
$link = $_POST['link'];
$descripcion = $_POST['descripcion'];
// Cómo subir el archivo
$fichero = $_FILES["file"];

// Cargando el fichero en la carpeta "subidas"
//move_uploaded_file($fichero["tmp_name"], "subidas/".$id.$fichero["name"]);
cargarContenido($id, $nombreContenido, $link, $descripcion, $id.$fichero["name"]);

// Redirigiendo hacia atrás
header("Location: " . $_SERVER["HTTP_REFERER"]);
?>
