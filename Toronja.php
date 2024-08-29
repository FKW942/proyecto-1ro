<?php
$nombre = $_post["nombre"];
$Fecha = $_post["Fecha"];
$foto = $_post["foto"];
$contenido = $_post["contenido"];

$conexion = new mysql("localhost", "root", "proyecto1");

$sql = "INSERT INTO articulos 
(nombre, contenido, foto, fecha, autor ) 
VALUES
('nombre', 'contenido,', 'foto,', 'fecha,', 'autor', 1) ";

$conexion->query($sql);
if ($conexion->insert_id > 0) {
    echo json_encode([
        "respuesta" => "ok"
    ]);
}else{
    echo json_encode([
        "respuesta" => "error"
    ]);
}

$conexion->close()