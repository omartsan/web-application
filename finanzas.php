<?php require_once "vistas/parte_superior.php"?>
<script src="script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.6/jspdf.plugin.autotable.min.js"></script>

<!--INICIO del cont principal-->
<div class="container">
    <h1>Módulo Finanzas</h1>
    
    
    
 <?php
include 'bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();
$consulta = "SELECT  * FROM finanzas";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>


<div class="container">
        <div class="row">
            <div class="col-lg-12">            
            <button id="btn_agregar_finanzas" type="button" class="btn btn-success" data-toggle="modal">Nuevo</button>    
            <button id="btn_reporte_finanzas" type="button"  class="btn btn-success" data-toggle="modal">Reporte</button>    

            </div>    
        </div>    
    </div>    
    <br>  
<div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="tablaFinanzas" class="table table-striped table-bordered table-condensed" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>ID</th>
                                <th>fecha</th>                                
                                <th>concepto</th>  
                                <th>tipo</th>
                                <th>monto</th>
                                <th>comentarios</th>
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
                                <td><?php echo $dat['concepto'] ?></td>
                                <td><?php echo $dat['tipo'] ?></td>
                                <td><?php echo $dat['monto'] ?></td>    
                                <td><?php echo $dat['comentarios'] ?></td>    
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
        <form id="formFinanzas">    
            <div class="modal-body">
                <div class="form-group">
                <label for="fecha" class="col-form-label">Fecha:</label>
                <input type="date" class="form-control" id="fecha" required oninvalid="this.setCustomValidity('Este campo es obligatorio')" oninput="this.setCustomValidity('')">
                </div>
                <div class="form-group">
                <label for="concepto" class="col-form-label">Concepto:</label>
                <input type="text" class="form-control" id="concepto" required oninvalid="this.setCustomValidity('Este campo es obligatorio')" oninput="this.setCustomValidity('')">
                </div>   
                <div class="form-group">
                <label for="tipo" >Tipo:</label>
                <select id="tipo" name="tipo" size="4" required oninvalid="this.setCustomValidity('Este campo es obligatorio')" oninput="this.setCustomValidity('')">
                 <option value="ingreso">Ingreso</option>
                 <option value="egreso">Egreso</option>
                </select>                
                </div>  
                <div class="form-group">
                <label for="monto" class="col-form-label">Monto:</label>
                <input type="number" inputmode="numeric" step=any class="form-control" id="monto" oninvalid="this.setCustomValidity('Favor de ingresar valores numéricos para el monto')" oninput="this.setCustomValidity('')" >
                </div>  
                <div class="form-group">
                <label for="comentarios" class="col-form-label">Comentarios:</label>
                <input type="text" class="form-control" id="comentarios"  >
                </div>  
         
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                <button type="submit" id="btn_guardar_finanzas" class="btn btn-dark">Guardar</button>
            </div>
        </form>    
        </div>
    </div>
</div>  
      


<!--Modal para REPORTE-->
<div class="modal fade" id="modalGEN" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        <form id="formFinanzasRep">    
            <div class="modal-body">
                <div class="form-group">
                <label for="fecha_inicio" class="col-form-label">Fecha inicio:</label>
                <input type="date" name = "fecha_inicio" class="form-control" id="fecha_inicio" >
                </div>
                <div class="form-group">
                <label for="fecha_fin" class="col-form-label">Fecha fin:</label>
                <input type="date" name = "fecha_fin" class="form-control" id="fecha_fin"  >
                </div>   
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                <button type="submit" id="btn_guardar_reporte" class="btn btn-dark">Generar</button>
            </div>
        </form>    
        </div>
    </div>
</div>  



    
    
</div>
<!--FIN del cont principal-->


<?php
$fecha_inicio = (isset($_POST['fecha_inicio'])) ? $_POST['fecha_inicio'] : '';
$fecha_fin =  (isset($_POST['fecha_fin'])) ? $_POST['fecha_fin'] : '';

$server="localhost";
$usuario="root";
$pass="";
$db="coba";
$link=mysqli_connect($server,$usuario,$pass,$db);
$con=mysqli_select_db($link,$db);
$res=mysqli_query($link,"select fecha, concepto, tipo, monto FROM finanzas  ORDER BY fecha ");
echo"<table hidden id= 'tabla_finanzas'  >";
echo"<tr>";
 echo"<th>";       echo"Fecha";      echo"</th>";

echo"<th>";       echo"Concepto";      echo"</th>";
echo"<th>";       echo"Tipo";      echo"</th>";

echo"<th>";       echo"Monto";      echo"</th>";
echo"</tr>";  

                while($row=mysqli_fetch_array($res))
                {

                
                    echo"<tr>";
                 echo"<td>";        echo $row["fecha"];      echo"</td>";

                    echo"<td>";        echo $row["concepto"];       echo"</td>";
                   echo"<td>";        echo $row["tipo"];       echo"</td>";

                    echo"<td>";        echo $row["monto"];      echo"</td>";
                    echo"</tr>"; 

                }

                echo"</table>";
                ?>
<?php require_once "vistas/parte_inferior.php"?>