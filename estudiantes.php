<?php require_once "vistas/parte_superior.php"?>

<!--INICIO del cont principal-->
<link href="jquery.multiselect.css" rel="stylesheet" type="text/css">
<script src="jquery.min.js"></script>
<script src="script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.6/jspdf.plugin.autotable.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
        crossorigin="anonymous"></script>
<script src="src/tableHTMLExport.js"></script>




<div class="container">
    <h1>Módulo estudiantes</h1>
<style>
.multiselect {
  width: 200px;
}

.selectBox {
  position: relative;
}

.selectBox select {
  width: 100%;
  font-weight: bold;
}

.overSelect {
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
}

#checkboxes {
  display: none;
  border: 1px #dadada solid;
}

#checkboxes label {
  display: block;
}

#checkboxes label:hover {
  background-color: #1e90ff;
}
</style>

    
 <?php
include 'bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();
$consulta = "SELECT  * FROM estudiantes";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
$server="localhost";
$usuario="root";
$pass="";
$db="coba";
$link=mysqli_connect($server,$usuario,$pass,$db);
$con=mysqli_select_db($link,$db);
?>


<div class="container">
        <div class="row">
            <div class="col-lg-12">            
            <button id="btn" type="button" class="btn btn-success" data-toggle="modal">Nuevo</button>    
            <button id="btn_reporte_estudiantes" type="button" onclick="generate('estudiantes')" class="btn btn-success" data-toggle="modal">Reporte</button>  
  

            </div>    
        </div>    
    </div>    
    <br>  
<div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="tablaEstudiantes" class="table table-striped table-bordered table-condensed" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>Nombre</th>
                                <th>Apellido</th>                                
                                <th>Matrícula</th>  
                                <th>Dirección</th>
                                <th>Clases</th>
                                <th>Teléfono</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php                            
                            foreach($data as $dat) {                                                        
                            ?>
                            <tr>
                                <td><?php echo $dat['nombre'] ?></td>
                                <td><?php echo $dat['apellido'] ?></td>
                                <td><?php echo $dat['matricula'] ?></td>
                                <td><?php echo $dat['direction'] ?></td>
                                <td><?php echo $dat['clases'] ?></td>    
                                <td><?php echo $dat['telefono'] ?></td>    
                                <td></td>
                            </tr>
                            <?php
                                }
                            ?>                                
                        </tbody>        
                       </table>                    
                    </div>
                </div>
        </div>  
    </div>    
      
<!--Modal para AÑADIR-->
<div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        
<script type="text/javascript">
   function prevent(e)
   {
     var keycode = (e.keycode ? e.keycode : e.which);
    if (keycode > 47 && keycode < 58 || keycode > 95 && keycode < 107 )
    {
    e.preventDefault();
    }


   }
   $('#langOpt').multiselect({
    columns: 1,
    placeholder: 'Select Languages'
});


</script>
    
        <form id="formEstudiantes">    
            <div class="modal-body">
                <div class="form-group">
                <label for="nombre" class="col-form-label">Nombre:</label>
                <input type="text" class="form-control" id="nombre" required onkeydown = "prevent(event)" onkeydown = "prevent(event)";>
                </div>
                <div class="form-group">
                <label for="apellido" class="col-form-label">Apellido:</label>
                <input type="text" class="form-control" id="apellido" required onkeydown = "prevent(event)" onkeydown = "prevent(event)";>
                </div>   
                <div class="form-group">
                <label for="matricula" class="col-form-label">Matrícula:</label>
                <input type="text" inputmode="numeric" class="form-control" id="matricula"  required pattern="[0-9]{4}"  oninvalid="this.setCustomValidity('Favor de ingresar 4 números positivos para la matrícula')" oninput="this.setCustomValidity('')" >
                </div>  
                <div class="form-group">
                <label for="direction" class="col-form-label">Dirección:</label>
                <input type="text" class="form-control" id="direction" required oninvalid="this.setCustomValidity('Este campo es requerido')" oninput="this.setCustomValidity('')" >
                </div>  
                <div class="form-group">
                <label for="clases" class="col-form-label">Clases:</label> 
                <select name="current_select[]" id = "clases[]" Size="4" multiple="multiple">
                <script src="jquery.multiselect.js"></script>

                  <option>Seleccionar clases</option>
                 <?php
                $qu=mysqli_query($link,"SELECT * FROM clases ORDER BY id ASC");
                $row=mysqli_num_rows($qu);
                if ($row > 0)
                 {
                     foreach($qu as $q)
                     {   
                         ?>
                         <option value="<?php echo isset($q['nombre']) ? $q['nombre'] : '' ?>"> <?php echo $q['id']; echo"-"; echo $q['nombre'];?> </option>
                         <?php
                         
                     }       
                 }
                 else
                 {
                     echo "No hay registro de clases";    
                 }
                ?>



                </select>



               <!--  <label for="clases" class="col-form-label">Clases:</label>
                <input type="text" class="form-control" id="clases" required oninvalid="this.setCustomValidity('Este campo es requerido')" oninput="this.setCustomValidity('')" > -->
                </div> 
                <div class="form-group">
                <label for="telefono" class="col-form-label">Teléfono:</label>
                <input type="tel" class="form-control" id="telefono"  required pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" oninvalid="this.setCustomValidity('Favor de ingresar número telefónico en formato xxx-xxx-xxxx')" oninput="this.setCustomValidity('')" >
                </div>            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                <button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>
            </div>
        </form>    
        </div>
    </div>
</div>  
      
    
    
</div>
<!--FIN del cont principal-->

<?php
$server="localhost";
$usuario="root";
$pass="";
$db="coba";
$link=mysqli_connect($server,$usuario,$pass,$db);
$con=mysqli_select_db($link,$db);
    $res=mysqli_query($link,"select * from estudiantes");
            echo"   
             <div class='table-wrapper'>

            
            <table hidden id = 'tabla_estudiantes' border = 1 class='table-responsive card-list-table'  >";

            echo"<tr>";
            echo"<th>";       echo"Nombre";      echo"</th>";
             echo"<th>";       echo"Apellidos";      echo"</th>";

            echo"<th>";       echo"Matrícula";      echo"</th>";

            echo"<th>";       echo"Clases";      echo"</th>";
            echo"<th>";       echo"Teléfono";      echo"</th>";
            echo"</tr>";  

                while($row=mysqli_fetch_array($res))
                {

                
                    echo"<tr>";
                    echo"<td>";        echo $row["nombre"];      echo"</td>";
                    echo"<td>";        echo $row["apellido"];      echo"</td>";

                    echo"<td>";        echo $row["matricula"];       echo"</td>";

                    echo"<td>";        echo $row["clases"];      echo"</td>";
                    echo"<td>";       echo $row["telefono"];      echo"</td>";
                    echo"</tr>"; 

                }

                echo"</table>";

                echo"</div>";

?>
<?php require_once "vistas/parte_inferior.php"?>