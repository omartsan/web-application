<script src="script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.6/jspdf.plugin.autotable.min.js"></script>
<?php
include_once '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();
// Recepción de los datos enviados mediante POST desde el JS   

$id = (isset($_POST['id'])) ? $_POST['id'] : '';
$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
$id_maestro = (isset($_POST['id_maestro'])) ? $_POST['id_maestro'] : '';
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';


switch($opcion){
    case 1: //alta

        $consulta1 = "SELECT * FROM clases WHERE id='$id'";
        $resultado1 = $conexion->prepare($consulta1);
        $resultado1->execute();
        $count = $resultado1->rowCount();

        if ($count >= 1){

            $data=$resultado1->fetchAll(PDO::FETCH_ASSOC);
        }

        elseif($count < 1){

            $consulta2 = "INSERT INTO clases (id, nombre, id_maestro) VALUES('$id', '$nombre', '$id_maestro') ";
            $resultado2 = $conexion->prepare($consulta2);
            $resultado2->execute(); 		
       
    
    
            $consulta3 = "SELECT * FROM clases WHERE id='$id'";
            $resultado3 = $conexion->prepare($consulta3);
            $resultado3->execute();
            $data=$resultado3->fetchAll(PDO::FETCH_ASSOC);


        }
       
            


        
        break;
    case 2: //modificación
        $consulta = "UPDATE clases SET id='$id', nombre='$nombre', id_maestro='$id_maestro' WHERE id='$id'  ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        
        $consulta = "SELECT * FROM clases WHERE id='$id' ";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;        
    case 3://baja
        $consulta = "DELETE FROM clases WHERE id='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;     
        
        
    case 4://reporte
/*         $server="localhost";
        $usuario="root";
        $pass="";
        $db="coba";
        $link=mysqli_connect($server,$usuario,$pass,$db);
        $con=mysqli_select_db($link,$db);
        $res=mysqli_query($link,"SELECT * FROM clases "); */
        
        echo"<div class='table-wrapper'>

            <table  id = 'tabla_clases' class='table-responsive card-list-table'  >";


            echo "<thead>";


            echo"<tr>";
            echo"<th>";       echo"ID";      echo"</th>";
            echo"<th>";       echo"Nombre";      echo"</th>";

            echo"<th>";       echo"ID Maestro";      echo"</th>";
            echo"</tr>";  

                echo "</thead>";

                echo "<tbody>";

                echo"<tr>";
                echo"<td>";       echo "1";      echo"</td>";
                echo"<td>";        echo "2";       echo"</td>";

                echo"<td>";        echo "3";      echo"</td>";
                echo"</tr>";  


              /*   while($row=mysqli_fetch_array($res))
                {

                
                    echo"<tr>";
                    echo"<td>";       echo $row["id"];      echo"</td>";
                    echo"<td>";        echo $row["nombre"];       echo"</td>";

                    echo"<td>";        echo $row["id_maestro"];      echo"</td>";
                    echo"</tr>";  

                } */

                echo"</tbody>";

                echo"</table>";
                echo"</div>";

            echo '<script type="text/javascript">generate("clases");</script>';

            break;     


}

print json_encode($data, JSON_UNESCAPED_UNICODE); //enviar el array final en formato json a JS
$conexion = NULL;
