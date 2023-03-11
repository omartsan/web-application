<?php
include_once '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();
// Recepción de los datos enviados mediante POST desde el JS   

$usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : '';
$password = (isset($_POST['password'])) ? $_POST['password'] : '';
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';

switch($opcion){
    case 1: //alta

        $consulta1 = "SELECT * FROM usuarios WHERE usuario='$usuario'";
        $resultado1 = $conexion->prepare($consulta1);
        $resultado1->execute();
        $count = $resultado1->rowCount();


        if ($count >= 1){

            $data=$resultado1->fetchAll(PDO::FETCH_ASSOC);
        }

        elseif($count < 1){

            $consulta2 = "INSERT INTO usuarios (usuario, password ) VALUES('$usuario', '$password') ";			
            $resultado2 = $conexion->prepare($consulta2);
            $resultado2->execute(); 		
       
    
    
            $consulta3 = "SELECT * FROM usuarios WHERE usuario='$usuario'";
            $resultado3 = $conexion->prepare($consulta3);
            $resultado3->execute();
            $data=$resultado3->fetchAll(PDO::FETCH_ASSOC);

        }


        break;
    case 2: //modificación
        $consulta = "UPDATE usuarios SET usuario='$usuario', password='$password' WHERE usuario='$usuario'  ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        
        $consulta = "SELECT * FROM usuarios WHERE usuario='$usuario' ";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;        
    case 3://baja
        $consulta = "DELETE FROM usuarios WHERE usuario='$usuario' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;        
}

print json_encode($data, JSON_UNESCAPED_UNICODE); //enviar el array final en formato json a JS
$conexion = NULL;
