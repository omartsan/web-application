<?php require_once "vistas/parte_superior.php"?>
<script src="script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.6/jspdf.plugin.autotable.min.js"></script>
<!--INICIO del cont principal-->
<div class="container">
    <h1>Módulo Eventos</h1>
    
    
    
 <?php
include 'bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();
$consulta = "SELECT  * FROM eventos";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>


<div class="container">
        <div class="row">
            <div class="col-lg-12">            
            <button id="btn_agregar_eventos" type="button" class="btn btn-success" data-toggle="modal">Nuevo</button>   
            <button id="btn_reporte_eventos" type="button" class="btn btn-success" onclick="generate('eventos')" data-toggle="modal">Reporte</button>    
 
            </div>    
        </div>    
    </div>    
    <br>  
<div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="tablaEventos" class="table table-striped table-bordered table-condensed" style="width:100%">
                        <thead class="text-center">
                            <tr>
                            <th>ID</th>
                                <th>Fecha de inicio</th>                                
                                <th>Fecha de termino</th>  
                                <th>Título</th>
                                <th>Prioridad</th>
                                <th>Id personal</th>
                                <th>Acciones</th>



                            </tr>
                        </thead>
                        <tbody>
                            <?php                            
                            foreach($data as $dat) {                                                        
                            ?>
                            <tr>
                                <td><?php echo $dat['id'] ?></td>
                                <td><?php echo $dat['fecha_inicio'] ?></td>
                                <td><?php echo $dat['fecha_termino'] ?></td>
                                <td><?php echo $dat['titulo'] ?></td>
                                <td><?php echo $dat['prioridad'] ?></td>    
                                <td><?php echo $dat['id_personal'] ?></td>    
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
        <form id="formEventos">    
            <div class="modal-body">
                <div class="form-group">
                <label for="fecha_inicio" class="col-form-label">Fecha de inicio:</label>
                <input type="date" class="form-control" id="fecha_inicio">
                </div>   
                <div class="form-group">
                <label for="fecha_termino" class="col-form-label">Fecha de termino:</label>
                <input type="date" class="form-control" id="fecha_termino">
                </div>  
                <div class="form-group">
                <label for="titulo" class="col-form-label">Título:</label>
                <input type="text" class="form-control" id="titulo">
                </div>  

                <div class="form-group">
                <label for="prioridad" class="col-form-label">Prioridad:</label>
                <select id="prioridad" name="prioridad" size="4">
                 <option value="alta">Alta</option>
                 <option value="media">Media</option>
                 <option value="baja">Baja</option>

                </select>                 
            </div>  
                <div class="form-group">
                <label for="id_personal" class="col-form-label">Id de personal:</label>
                <input type="text" inputmode="numeric" class="form-control" id="id_personal" pattern="[0-9]{3}"  oninvalid="this.setCustomValidity('Favor de ingresar 3 números positivos para el id ')" oninput="this.setCustomValidity('')" >
                </div> 

         
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                <button type="submit" id="btn_guardar_evento" class="btn btn-dark">Guardar</button>
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
$res=mysqli_query($link,"select *, DATEDIFF (fecha_inicio, NOW()) as dias_inicio  from eventos order by fecha_inicio ASC ");
            echo"<table hidden id = 'tabla_eventos' >";
                echo"<tr>";
                echo"<th>";       echo"ID";      echo"</th>";
                 echo"<th>";       echo"Fecha de inicio";      echo"</th>";

                echo"<th>";       echo"Fecha de termino";      echo"</th>";
                echo"<th>";       echo"Título";      echo"</th>";

                echo"<th>";       echo"Prioridad";      echo"</th>";
                echo"<th>";       echo"Personal responsable";      echo"</th>";
                echo"<th>";       echo"Días para iniciar";      echo"</th>";

                echo"</tr>";  

                while($row=mysqli_fetch_array($res))
                {

                
                    echo"<tr>";
                    echo"<td>";       echo $row["id"];      echo"</td>";
                 echo"<td>";        echo $row["fecha_inicio"];      echo"</td>";

                    echo"<td>";        echo $row["fecha_termino"];       echo"</td>";
                   echo"<td>";        echo $row["titulo"];       echo"</td>";

                    echo"<td>";        echo $row["prioridad"];      echo"</td>";
                    echo"<td>";       echo $row["id_personal"];      echo"</td>";
                    echo"<td>";       echo $row["dias_inicio"];      echo"</td>";

                    echo"</tr>";  

                }

                echo"</table>";
                ?>
<?php require_once "vistas/parte_inferior.php"?>