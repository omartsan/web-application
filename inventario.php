<?php require_once "vistas/parte_superior.php"?>
<script src="script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.6/jspdf.plugin.autotable.min.js"></script>

<!--INICIO del cont principal-->
<div class="container">
    <h1>Módulo Inventario</h1>
    
    
    
 <?php
include 'bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();
$consulta = "SELECT  * FROM inventario";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>


<div class="container">
        <div class="row">
            <div class="col-lg-12">            
            <button id="btn_agregar_inventario" type="button" class="btn btn-success" data-toggle="modal">Nuevo</button>   
            <button id="btn_reporte_inventario" type="button" class="btn btn-success" onclick="generate('inventario')" data-toggle="modal">Reporte</button>    
 
            </div>    
        </div>    
    </div>    
    <br>  
<div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="tablaInventario" class="table table-striped table-bordered table-condensed" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>ID</th>
                                <th>Fecha</th>                                
                                <th>Artículo</th>  
                                <th>Cantidad</th>
                                <th>Descripción</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php                            
                            foreach($data as $dat) {                                                        
                            ?>
                            <tr>
                                <td><?php echo $dat['id'] ?></td>
                                <td><?php echo $dat['fecha'] ?></td>
                                <td><?php echo $dat['articulo'] ?></td>
                                <td><?php echo $dat['cantidad'] ?></td>
                                <td><?php echo $dat['descripcion'] ?></td>    
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
        <form id="formInventario">    
            <div class="modal-body">
                <div class="form-group">
                <label for="fecha" class="col-form-label">Fecha:</label>
                <input type="date" class="form-control" id="fecha" required>
                </div>
                <div class="form-group">
                <label for="articulo" class="col-form-label">Artículo:</label>
                <input type="text" class="form-control" id="articulo" required>
                </div>   
                <div class="form-group">
                <label for="canidad" class="col-form-label">Cantidad:</label>
                <input type="number" inputmode="numeric" class="form-control" id="cantidad"  oninvalid="this.setCustomValidity('Favor de ingresar valores numéricos enteros para la cantidad')" oninput="this.setCustomValidity('')" >
                </div>  
                <div class="form-group">
                <label for="descripcion" class="col-form-label">Descripción:</label>
                <input type="text"  class="form-control" id="descripcion" >
                </div> 
         
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                <button type="submit" id="btn_guardar_inventario" class="btn btn-dark">Guardar</button>
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
$res=mysqli_query($link,"select * from inventario order by id asc ");
            echo"<table hidden id = 'tabla_inventario' >";
            echo"<tr>";
            echo"<th>";       echo"ID";      echo"</th>";
             echo"<th>";       echo"Fecha";      echo"</th>";

            echo"<th>";       echo"Artículo";      echo"</th>";
            echo"<th>";       echo"Cantidad";      echo"</th>";

            echo"<th>";       echo"Descripción";      echo"</th>";
            echo"</tr>";  

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

            echo"</table>";
                ?>
<?php require_once "vistas/parte_inferior.php"?>