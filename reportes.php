

<?php
$server="localhost";
$usuario="root";
$pass="";
$db="coba";
$link=mysqli_connect($server,$usuario,$pass,$db);
$con=mysqli_select_db($link,$db);

    $res=mysqli_query($link,"select * from clases");
            echo"   
             <div class='table-wrapper'>

            
            <table  id = 'tabla_clases' border = 1 class='table-responsive card-list-table'  >";

                echo"<tr>";
                echo"<th>";       echo"ID";      echo"</th>";
                echo"<th>";       echo"Nombre";      echo"</th>";
                echo"<th>";       echo"ID Maestro";      echo"</th>";
                echo"</tr>";  

                while($row=mysqli_fetch_array($res))
                {

                
                    echo"<tr>";
                    echo"<td>";       echo $row["id"];      echo"</td>";
                    echo"<td>";        echo $row["nombre"];       echo"</td>";

                    echo"<td>";        echo $row["id_maestro"];      echo"</td>";
                    echo"</tr>";  

                }

                echo"</table>";

                echo"</div>";


            

?>




<?php
     $res=mysqli_query($link,"select * from estudiantes");
     echo"<div class='table-wrapper'>

     <table  id = 'tabla_estudiantes' class='table-responsive card-list-table'  >";

     echo "<thead>";


         echo"<tr>";
         echo"<th>";       echo"Nombre";      echo"</th>";
          echo"<th>";       echo"Apellidos";      echo"</th>";

         echo"<th>";       echo"Matrícula";      echo"</th>";

         echo"<th>";       echo"Clases";      echo"</th>";
         echo"<th>";       echo"Teléfono";      echo"</th>";
         echo"</tr>";  

         echo "</thead>";

         echo "<tbody>";


         while($row=mysqli_fetch_array($res))
         {

         
             echo"<tr>";
             echo"<td data-title='Nombre'>";       echo $row["nombre"];      echo"</td>";
             echo"<td data-title='Apellidos'>";       echo $row["apellido"];      echo"</td>";
             echo"<td data-title='Matricula'>";       echo $row["matricula"];      echo"</td>";
             echo"<td data-title='Clases'>";       echo $row["clases"];      echo"</td>";
             
             echo"<td data-title='telefono'>";       echo $row["telefono"];      echo"</td>";

         }

         echo"</tbody>";

         echo"</table>";
         echo"</div>";

?>

<?php
     $res=mysqli_query($link,"select * from eventos ");
     echo"<div class='table-wrapper'>

     <table  id = 'tabla_eventos' class='table-responsive card-list-table'  >";

     echo "<thead>";


     echo"<tr>";
     echo"<th>";       echo"ID";      echo"</th>";
      echo"<th>";       echo"Fecha de inicio";      echo"</th>";

     echo"<th>";       echo"Fecha de termino";      echo"</th>";
     echo"<th>";       echo"Título";      echo"</th>";

     echo"<th>";       echo"Prioridad";      echo"</th>";
     echo"<th>";       echo"Personal responsable";      echo"</th>";
     echo"</tr>";  

         echo "</thead>";

         echo "<tbody>";


         while($row=mysqli_fetch_array($res))
         {

         
             echo"<tr>";
             echo"<td>";       echo $row["id"];      echo"</td>";
          echo"<td>";        echo $row["fecha_inicio"];      echo"</td>";

             echo"<td>";        echo $row["fecha_termino"];       echo"</td>";
            echo"<td>";        echo $row["titulo"];       echo"</td>";

             echo"<td>";        echo $row["prioridad"];      echo"</td>";
             echo"<td>";       echo $row["id_personal"];      echo"</td>";
             echo"</tr>";  

         }
         echo"</tbody>";

         echo"</table>";
         echo"</div>";

?>



<?php
     $res=mysqli_query($link,"select * from inventario");
     echo"<div class='table-wrapper'>

     <table  id = 'tabla_inventario' class='table-responsive card-list-table'  >";

     echo "<thead>";

     echo"<tr>";
     echo"<th>";       echo"ID";      echo"</th>";
      echo"<th>";       echo"Fecha";      echo"</th>";

     echo"<th>";       echo"Artículo";      echo"</th>";
     echo"<th>";       echo"Cantidad";      echo"</th>";

     echo"<th>";       echo"Descripción";      echo"</th>";
     echo"</tr>";  

         echo "</thead>";

         echo "<tbody>";



         while($row=mysqli_fetch_array($res))
         {

         
             echo"<tr>";
             echo"<td>";       echo $row["id"];      echo"</td>";
          echo"<td>";        echo $row["fecha"];      echo"</td>";

             echo"<td>";        echo $row["articulo"];       echo"</td>";
            echo"<td>";        echo $row["cantidad"];       echo"</td>";

             echo"<td>";        echo $row["descripcion"];      echo"</td>";
             echo"</tr>";  

         }
         echo"</tbody>";

         echo"</table>";
         echo"</div>";

?>


<?php
     $res=mysqli_query($link,"select * from personal");
     echo"<div class='table-wrapper'>

     <table  id = 'tabla_personal' class='table-responsive card-list-table'  >";

     echo "<thead>";

     echo"<tr>";
     echo"<th>";       echo"Id";      echo"</th>";
      echo"<th>";       echo"Nombre";      echo"</th>";

     echo"<th>";       echo"Apellidos";      echo"</th>";
     echo"<th>";       echo"Puesto";      echo"</th>";

     echo"<th>";       echo"Teléfono";      echo"</th>";
     echo"<th>";       echo"Fecha de ingreso";      echo"</th>";
     echo"<th>";       echo"Salario";      echo"</th>";
     echo"<th>";       echo"RFC";      echo"</th>";
     echo"<th>";       echo"Cédula";      echo"</th>";
     echo"<th>";       echo"Clave de elector";      echo"</th>";

     echo"</tr>";   

         echo "</thead>";

         echo "<tbody>";



         while($row=mysqli_fetch_array($res))
         {

         
             echo"<tr>";
             echo"<td>";       echo $row["id"];      echo"</td>";

             echo"<td>";       echo $row["nombre"];      echo"</td>";
          echo"<td>";        echo $row["apellido"];      echo"</td>";

             echo"<td>";        echo $row["puesto"];       echo"</td>";
             echo"<td>";       echo $row["telefono"];      echo"</td>";

            echo"<td>";        echo $row["fecha_ingreso"];       echo"</td>";

             echo"<td>";        echo $row["salario"];      echo"</td>";
             echo"<td>";        echo $row["rfc"];      echo"</td>";
             echo"<td>";        echo $row["cedula"];      echo"</td>";
             echo"<td>";        echo $row["clave"];      echo"</td>";

             echo"</tr>";  

         }

         echo"</tbody>";

         echo"</table>";
         echo"</div>";

?>

