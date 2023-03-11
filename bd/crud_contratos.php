<?php
include_once '../bd/conexion.php';
require('exportToWord.inc.php');

$objeto = new Conexion();
$conexion = $objeto->Conectar();
// Recepción de los datos enviados mediante POST desde el JS   

$id = (isset($_POST['id'])) ? $_POST['id'] : '';
$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
$id_personal = (isset($_POST['id_personal'])) ? $_POST['id_personal'] : '';
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

        $server="localhost";
        $usuario="root";
        $pass="";
        $db="coba";
        $link=mysqli_connect($server,$usuario,$pass,$db);
        $con=mysqli_select_db($link,$db);
        $res=mysqli_query($link,"SELECT id, nombre, apellido, puesto, telefono, fecha_ingreso, salario, rfc, cedula, clave FROM personal WHERE id='$id_personal' ");
       // $row=mysqli_num_rows($qu);
        $rows_final = mysqli_fetch_all($res, MYSQLI_ASSOC);
        $css = '<style type = "text/css">.test {font-weight: 600;}</style>';
        $nombre_contrato = $nombre . '.doc';

        $content = str_replace(
            array('[nombre]', '[apellido]', 
                       '[puesto]','[telefono]', '[fecha_ingreso]', '[salario]', 
                       '[rfc]','[cedula]', '[clave]', '[id]', 

                   ),
           array($rows_final[0]["nombre"], $rows_final[0]["apellido"], $rows_final[0]['puesto'], $rows_final[0]['telefono'], $rows_final[0]['fecha_ingreso'], $rows_final[0]['salario'], 
           $rows_final[0]['rfc'], $rows_final[0]['cedula'], $rows_final[0]['clave'], $rows_final[0]['id'],),

           file_get_contents('contrato.html')); 

        //$content = str_replace('{nombre}', $id_personal, file_get_contents('contrato.html')); 

        ExportToWord::htmlToDoc($content, $css, $nombre_contrato);

        $consulta = "INSERT INTO contratos values(DEFAULT, '$_POST[nombre]', '$_POST[id_personal]') ";			
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 

        $consulta = "SELECT id, nombre, id_personal FROM contratos ORDER BY id DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;

    case 2: //descargar
        $consulta = "SELECT id, nombre, id_personal FROM contratos WHERE id='$id'";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;    

    case 3://baja
        $nombre_archivo = strval($nombre) .".doc";
        unlink($nombre_archivo);
        $consulta = "DELETE FROM contratos WHERE id='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;  
        
}

print json_encode($data, JSON_UNESCAPED_UNICODE); //enviar el array final en formato json a JS
$conexion = NULL;
