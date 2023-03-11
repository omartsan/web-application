<?php
include_once '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();
// Recepción de los datos enviados mediante POST desde el JS   

$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
$apellido = (isset($_POST['apellido'])) ? $_POST['apellido'] : '';
$matricula = (isset($_POST['matricula'])) ? $_POST['matricula'] : '';
$direction  = (isset($_POST['direction'])) ? $_POST['direction'] : '';
// $clases  = (isset($_POST['clases'])) ? $_POST['clases'] : '';
$clases  = "";
$telefono  = (isset($_POST['telefono'])) ? $_POST['telefono'] : '';
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';

switch($opcion){
    case 1: //alta
       // $clases = implode(", ",$_POST['current_select']);
        $consulta1 = "SELECT * FROM estudiantes WHERE matricula='$matricula'";
        $resultado1 = $conexion->prepare($consulta1);
        $resultado1->execute();
        $count = $resultado1->rowCount();


        if ($count >= 1){

            $data=$resultado1->fetchAll(PDO::FETCH_ASSOC);
        }

        elseif($count < 1){

            $consulta2 = "INSERT INTO estudiantes (nombre, apellido, matricula, direction, clases, telefono) VALUES('$nombre', '$apellido', '$matricula', '$direction', '$clases', '$telefono' )";
            $resultado2 = $conexion->prepare($consulta2);
            $resultado2->execute(); 		
       
    
    
            $consulta3 = "SELECT nombre, apellido, matricula, direction, clases, telefono FROM estudiantes WHERE matricula='$matricula'";
            $resultado3 = $conexion->prepare($consulta3);
            $resultado3->execute();
            $data=$resultado3->fetchAll(PDO::FETCH_ASSOC);

        }

        break;
    case 2: //modificación
        $consulta = "UPDATE estudiantes SET nombre='$nombre', apellido='$apellido', matricula='$matricula', direction='$direction' , clases='$clases', telefono='$telefono'  WHERE matricula='$matricula' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        
        $consulta = "SELECT nombre, apellido, matricula, direction, clases, telefono FROM estudiantes WHERE matricula='$matricula' ";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;        
    case 3://baja
        $consulta = "DELETE FROM estudiantes WHERE matricula='$matricula' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;    

    case 4:

        $consulta = "SELECT nombre, apellido, matricula, direction, clases, telefono FROM estudiantes ";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;        

        
   
}

print json_encode($data, JSON_UNESCAPED_UNICODE); //enviar el array final en formato json a JS
$conexion = NULL;
