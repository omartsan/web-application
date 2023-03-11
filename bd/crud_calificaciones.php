<?php
include_once '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();
// Recepción de los datos enviados mediante POST desde el JS   

$id = (isset($_POST['id'])) ? $_POST['id'] : '';
$nombre_estudiante = (isset($_POST['nombre_estudiante'])) ? $_POST['nombre_estudiante'] : '';
$apellido_estudiante = (isset($_POST['apellido_estudiante'])) ? $_POST['apellido_estudiante'] : '';
$matricula  = (isset($_POST['matricula'])) ? $_POST['matricula'] : '';
$id_clase  = (isset($_POST['id_clase'])) ? $_POST['id_clase'] : '';
$calificacion  = (isset($_POST['calificacion'])) ? $_POST['calificacion'] : '';
$id_maestro  = (isset($_POST['id_maestro'])) ? $_POST['id_maestro'] : '';
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';

switch($opcion){
    case 1: //alta
        $consulta = "INSERT INTO calificaciones values(DEFAULT, '$nombre_estudiante', '$apellido_estudiante', '$matricula','$id_clase', '$calificacion', '$id_maestro') ";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 

        $consulta = "SELECT id, nombre_estudiante, apellido_estudiante, matricula, id_clase, calificacion, id_maestro FROM calificaciones ORDER BY matricula DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 2: //modificación
        $consulta = "UPDATE calificaciones SET nombre_estudiante='$nombre_estudiante', apellido_estudiante='$apellido_estudiante', matricula='$matricula', id_clase='$id_clase' , calificacion='$calificacion', id_maestro='$id_maestro' WHERE id='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        
        $consulta = "SELECT id, nombre_estudiante, apellido_estudiante, matricula, id_clase, calificacion, id_maestro FROM calificaciones WHERE id='$id' ";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;        
    case 3://baja
        $consulta = "DELETE FROM calificaciones WHERE id='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;        
}

print json_encode($data, JSON_UNESCAPED_UNICODE); //enviar el array final en formato json a JS
$conexion = NULL;
