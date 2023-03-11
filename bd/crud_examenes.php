<?php
include_once '../bd/conexion.php';
require('exportToWord.inc.php');

$objeto = new Conexion();
$conexion = $objeto->Conectar();
// Recepción de los datos enviados mediante POST desde el JS   

$id = (isset($_POST['id'])) ? $_POST['id'] : '';
$id_examen = (isset($_POST['id_examen'])) ? $_POST['id_examen'] : '';
$id_clase = (isset($_POST['id_clase'])) ? $_POST['id_clase'] : '';

$num_reactivo  = (isset($_POST['num_reactivo'])) ? $_POST['num_reactivo'] : '';
$des_reactivo  = (isset($_POST['des_reactivo'])) ? $_POST['des_reactivo'] : '';
$opcion_1  = (isset($_POST['opcion_1'])) ? $_POST['opcion_1'] : '';
$opcion_2  = (isset($_POST['opcion_2'])) ? $_POST['opcion_2'] : '';
$opcion_3  = (isset($_POST['opcion_3'])) ? $_POST['opcion_3'] : '';
$respuesta  = (isset($_POST['respuesta'])) ? $_POST['respuesta'] : '';
$nombre_examen = (isset($_POST['nombre_examen'])) ? $_POST['nombre_examen'] : '';
$id_clase_gen = (isset($_POST['id_clase_gen'])) ? $_POST['id_clase_gen'] : '';




$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';

switch($opcion){
    case 1: //alta
        $consulta = "INSERT INTO examenes values(DEFAULT, '$_POST[id_examen]', '$_POST[id_clase]', '$_POST[num_reactivo]','$_POST[des_reactivo]','$_POST[opcion_1]','$_POST[opcion_2]','$_POST[opcion_3]','$_POST[respuesta]') ";			
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 

        $consulta = "SELECT id, id_examen, id_clase, num_reactivo, des_reactivo, opcion_1, opcion_2, opcion_3, respuesta FROM examenes ORDER BY id DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 2: //modificación
        $consulta = "UPDATE examenes SET id_examen='$id_examen', id_clase='$id_clase', num_reactivo='$num_reactivo', des_reactivo='$des_reactivo' , opcion_1='$opcion_1', opcion_2='$opcion_2', opcion_3='$opcion_3', respuesta='$respuesta'  WHERE id='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        
        $consulta = "SELECT id, id_examen, id_clase, num_reactivo, des_reactivo, opcion_1, opcion_2, opcion_3, respuesta FROM examenes WHERE id='$id' ";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;        
    case 3://baja
        $consulta = "DELETE FROM examenes WHERE id='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;        


    case 4://Generar

        $server="localhost";
        $usuario="root";
        $pass="";
        $db="coba";
        $link=mysqli_connect($server,$usuario,$pass,$db);
        $con=mysqli_select_db($link,$db);
        $res=mysqli_query($link,"SELECT examenes.id_clase, clases.nombre,  examenes.des_reactivo, examenes.opcion_1, examenes.opcion_2, examenes.opcion_3 
        FROM examenes INNER JOIN clases ON examenes.id_clase = clases.id  
        WHERE examenes.id_clase= $id_clase_gen ORDER BY RAND ( )  LIMIT 10  ");
        $rows_final = mysqli_fetch_all($res, MYSQLI_ASSOC);
        $nombre_examen_doc = $nombre_examen . '.doc';                         
        $css = '<style type = "text/css">.test {font-weight: 600;}</style>';
   
        $content = str_replace(
                 array('[id_clase]', '[nombre]', 
                            '[des_reactivo]1','[opcion_1]1', '[opcion_2]1', '[opcion_3]1', 
                            '[des_reactivo]2','[opcion_1]2', '[opcion_2]2', '[opcion_3]2', 
                            '[des_reactivo]3','[opcion_1]3', '[opcion_2]3', '[opcion_3]3', 
                            '[des_reactivo]4','[opcion_1]4', '[opcion_2]4', '[opcion_3]4', 
                            '[des_reactivo]5','[opcion_1]5', '[opcion_2]5', '[opcion_3]5', 
                            '[des_reactivo]6','[opcion_1]6', '[opcion_2]6', '[opcion_3]6', 
                            '[des_reactivo]7','[opcion_1]7', '[opcion_2]7', '[opcion_3]7', 
                            '[des_reactivo]8','[opcion_1]8', '[opcion_2]8', '[opcion_3]8', 
                            '[des_reactivo]9','[opcion_1]9', '[opcion_2]9', '[opcion_3]9', 
                            '[des_reactivo]0','[opcion_1]0', '[opcion_2]0', '[opcion_3]0', 
                        ),
                array($rows_final[0]["id_clase"], $rows_final[0]["nombre"], $rows_final[0]['des_reactivo'], $rows_final[0]['opcion_1'], $rows_final[0]['opcion_2'], $rows_final[0]['opcion_3'], 
                $rows_final[1]['des_reactivo'], $rows_final[1]['opcion_1'], $rows_final[1]['opcion_2'], $rows_final[1]['opcion_3'],
                $rows_final[2]['des_reactivo'], $rows_final[2]['opcion_1'], $rows_final[2]['opcion_2'], $rows_final[2]['opcion_3'],
                $rows_final[3]['des_reactivo'], $rows_final[3]['opcion_1'], $rows_final[3]['opcion_2'], $rows_final[3]['opcion_3'],
                $rows_final[4]['des_reactivo'], $rows_final[4]['opcion_1'], $rows_final[4]['opcion_2'], $rows_final[4]['opcion_3'],
                $rows_final[5]['des_reactivo'], $rows_final[5]['opcion_1'], $rows_final[5]['opcion_2'], $rows_final[5]['opcion_3'],
                $rows_final[6]['des_reactivo'], $rows_final[6]['opcion_1'], $rows_final[6]['opcion_2'], $rows_final[6]['opcion_3'],
                $rows_final[7]['des_reactivo'], $rows_final[7]['opcion_1'], $rows_final[7]['opcion_2'], $rows_final[7]['opcion_3'],
                $rows_final[8]['des_reactivo'], $rows_final[8]['opcion_1'], $rows_final[8]['opcion_2'], $rows_final[8]['opcion_3'],
                $rows_final[9]['des_reactivo'], $rows_final[9]['opcion_1'], $rows_final[9]['opcion_2'], $rows_final[9]['opcion_3']),

                file_get_contents('examen.html')); 
                         


        ExportToWord::htmlToDoc($content, $css, $nombre_examen_doc);
        
        break;   
}

print json_encode($data, JSON_UNESCAPED_UNICODE); //enviar el array final en formato json a JS
$conexion = NULL;
