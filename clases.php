<?php require_once "vistas/parte_superior.php"?>
<script src="script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.6/jspdf.plugin.autotable.min.js"></script>
<!--INICIO del cont principal-->
<div class="container">
    <h1>Módulo clases</h1>
    
    
    
 <?php
include 'bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();
$consulta = "SELECT  * FROM clases";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>



<div class="container">
        <div class="row">
            <div class="col-lg-12">            
            <button id="btn_agregar_clase" type="button" class="btn btn-success" data-toggle="modal">Nuevo</button>   
            <button id="btn_reporte_clases" type="button"  class="btn btn-success" data-toggle="modal">Reporte</button>    
 
            </div>    
        </div>    
    </div>    
    <br>  
<div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="tablaClases" class="table table-striped table-bordered table-condensed" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>                                
                                <th>ID maestro</th>  
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php                            
                            foreach($data as $dat) {                                                        
                            ?>
                            <tr>
                                <td><?php echo $dat['id'] ?></td>
                                <td><?php echo $dat['nombre'] ?></td>
                                <td><?php echo $dat['id_maestro'] ?></td>

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
        <form id="formClases">    
            <div class="modal-body">
                <div class="form-group">
                <label for="id" class="col-form-label">ID:</label>
                <input type="number" class="form-control" id="id" min="1" max="25" oninvalid="this.setCustomValidity('Favor de ingresar el id del 1 al 22')" oninput="this.setCustomValidity('')"">
                </div>
                <div class="form-group">
                <label for="nombre" class="col-form-label">Nombre:</label>
                <input type="text" class="form-control" id="nombre">
                </div>   
                <div class="form-group">
                <label for="id_maestro" class="col-form-label">ID maestro:</label>
                <input type="text" inputmode="numeric" class="form-control" id="id_maestro" pattern="[0-9]{3}"  oninvalid="this.setCustomValidity('Favor de ingresar 3 números positivos para el id del maestro')" oninput="this.setCustomValidity('')" >
                </div>  
         
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                <button type="submit" id="btn_guardar_clase" class="btn btn-dark">Guardar</button>
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
    $res=mysqli_query($link,"select * from clases");
            echo"   
             <div class='table-wrapper'>

            
            <table hidden id = 'tabla_clases' border = 1 class='table-responsive card-list-table'  >";

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
<?php require_once "vistas/parte_inferior.php"?>