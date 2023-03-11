<?php
include_once '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();
// Recepción de los datos enviados mediante POST desde el JS   

$id = (isset($_POST['id'])) ? $_POST['id'] : '';
$fecha_inicio = (isset($_POST['fecha_inicio'])) ? $_POST['fecha_inicio'] : '';
$fecha_termino = (isset($_POST['fecha_termino'])) ? $_POST['fecha_termino'] : '';
$titulo  = (isset($_POST['titulo'])) ? $_POST['titulo'] : '';
$prioridad  = (isset($_POST['prioridad'])) ? $_POST['prioridad'] : '';
$id_personal  = (isset($_POST['id_personal'])) ? $_POST['id_personal'] : '';
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';

switch($opcion){
    case 1: //alta

 

        $consulta = "INSERT INTO eventos values(DEFAULT, '$_POST[fecha_inicio]', '$_POST[fecha_termino]', '$_POST[titulo]','$_POST[prioridad]','$_POST[id_personal]') ";			
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 

        $consulta = "SELECT id, fecha_inicio, fecha_termino, titulo, prioridad, id_personal FROM eventos ORDER BY id DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);


        break;
          
    case 2: //modificación
        $consulta = "UPDATE eventos SET fecha_inicio='$fecha_inicio', fecha_termino='$fecha_termino', titulo='$titulo', prioridad='$prioridad', id_personal= '$id_personal'  WHERE id='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        
        $consulta = "SELECT id, fecha_inicio, fecha_termino, titulo, prioridad, id_personal FROM eventos WHERE id='$id' ";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;        
    case 3://baja
        $consulta = "DELETE FROM eventos WHERE id='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;        
}

print json_encode($data, JSON_UNESCAPED_UNICODE); //enviar el array final en formato json a JS
$conexion = NULL;
