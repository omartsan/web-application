<?php
include_once '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();
// Recepción de los datos enviados mediante POST desde el JS   

$id = (isset($_POST['id'])) ? $_POST['id'] : '';
$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
$apellido = (isset($_POST['apellido'])) ? $_POST['apellido'] : '';
$puesto = (isset($_POST['puesto'])) ? $_POST['puesto'] : '';
$telefono  = (isset($_POST['telefono'])) ? $_POST['telefono'] : '';
$fecha_ingreso  = (isset($_POST['fecha_ingreso'])) ? $_POST['fecha_ingreso'] : '';
$salario  = (isset($_POST['salario'])) ? $_POST['salario'] : '';
$rfc  = (isset($_POST['rfc'])) ? $_POST['rfc'] : '';
$cedula  = (isset($_POST['cedula'])) ? $_POST['cedula'] : '';
$clave  = (isset($_POST['clave'])) ? $_POST['clave'] : '';
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';

switch($opcion){
    case 1: //alta
        $consulta1 = "SELECT * FROM personal WHERE id='$id' OR rfc='$rfc' OR clave='$clave' OR cedula='$cedula' ";
        $resultado1 = $conexion->prepare($consulta1);
        $resultado1->execute();
        $count = $resultado1->rowCount();

        if ($count >= 1){

            $data=$resultado1->fetchAll(PDO::FETCH_ASSOC);
        }

        elseif($count < 1){

            $consulta2 = "INSERT INTO personal (id, nombre, apellido, puesto, telefono, fecha_ingreso, salario, rfc, cedula, clave) VALUES('$id','$nombre', '$apellido', '$puesto', '$telefono', '$fecha_ingreso', '$salario', '$rfc', '$cedula', '$clave' ) ";
            $resultado2 = $conexion->prepare($consulta2);
            $resultado2->execute(); 		
       
    
    
            $consulta3 = "SELECT id, nombre, apellido, puesto, telefono, fecha_ingreso, salario, rfc, cedula, clave FROM personal WHERE id='$id'";
            $resultado3 = $conexion->prepare($consulta3);
            $resultado3->execute();
            $data=$resultado3->fetchAll(PDO::FETCH_ASSOC);

        }

       
        break;
    case 2: //modificación
        $consulta = "UPDATE personal SET nombre='$nombre', apellido='$apellido', puesto='$puesto', telefono='$telefono' , salario='$salario', fecha_ingreso='$fecha_ingreso', rfc='$rfc', cedula='$cedula', clave='$clave'  WHERE id='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        
        $consulta = "SELECT id, nombre, apellido, puesto, telefono, fecha_ingreso, salario, rfc, cedula, clave FROM personal WHERE id='$id' ";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;        
    case 3://baja
        $consulta = "DELETE FROM personal WHERE id='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;        
}

print json_encode($data, JSON_UNESCAPED_UNICODE); //enviar el array final en formato json a JS
$conexion = NULL;
