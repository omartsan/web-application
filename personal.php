<?php require_once "vistas/parte_superior.php"?>

<script src="script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.6/jspdf.plugin.autotable.min.js"></script>
<!--INICIO del cont principal-->
<div class="container">
    <h1>Módulo Personal</h1>
    
    
    
 <?php
include 'bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();
$consulta = "SELECT  * FROM personal";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="container">
        <div class="row">
            <div class="col-lg-12">            
            <button id="btn_agregar_personal" type="button" class="btn btn-success" data-toggle="modal">Nuevo</button>    
            <button id="btn_reporte_personal" type="button" onclick="generate('personal')" class="btn btn-success" data-toggle="modal">Reporte</button>    

            </div>    
        </div>    
    </div>    
    <br>  
<div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="tablaPersonal" class="table table-striped table-bordered table-condensed" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>ID</th>                                
                                <th>Nombre</th>  
                                <th>Apellidos</th>
                                <th>Puesto</th>
                                <th>Teléfono</th>
                                <th>Fecha de ingreso</th>
                                <th>Salario</th>
                                <th>RFC</th>
                                <th>Cédula</th>
                                <th>Clave de elector</th>
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
                                <td><?php echo $dat['apellido'] ?></td>
                                <td><?php echo $dat['puesto'] ?></td>
                                <td><?php echo $dat['telefono'] ?></td>    
                                <td><?php echo $dat['fecha_ingreso'] ?></td>  
                                <td><?php echo $dat['salario'] ?></td>  
                                <td><?php echo $dat['rfc'] ?></td>    
                                <td><?php echo $dat['cedula'] ?></td>
                                <td><?php echo $dat['clave'] ?></td>    
    

  

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
        <form id="formPersonal">    
            <div class="modal-body">
                <div class="form-group">
                <label for="id" class="col-form-label">ID:</label>
                <input type="text" inputmode="numeric" class="form-control" id="id" pattern="[0-9]{3}"  oninvalid="this.setCustomValidity('Favor de ingresar 3 números positivos para el id ')" oninput="this.setCustomValidity('')" >
                </div>
                <div class="form-group">
                <label for="nombre" class="col-form-label">Nombre:</label>
                <input type="text" class="form-control" id="nombre">
                </div>   
                <div class="form-group">
                <label for="apellido" class="col-form-label">Apellidos:</label>
                <input type="text"  class="form-control" id="apellido" >
                </div>  
                <div class="form-group">
                <label for="puesto" class="col-form-label">Puesto:</label>
                <input type="text"  class="form-control" id="puesto" >
                </div>  

                <div class="form-group">
                <label for="telefono" class="col-form-label">Teléfono:</label>
                <input type="tel" class="form-control" id="telefono" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" oninvalid="this.setCustomValidity('Favor de ingresar número telefónico en formato xxx-xxx-xxxx')" oninput="this.setCustomValidity('')" >
                </div>  
                <div class="form-group">
                <label for="fecha_ingreso" class="col-form-label">Fecha de ingreso:</label>
                <input type="date" class="form-control" id="fecha_ingreso">
                </div> 
                <div class="form-group">
                <label for="salario" class="col-form-label">Salario:</label>
                <input type="number" inputmode="numeric" class="form-control" id="salario"  oninvalid="this.setCustomValidity('Favor de ingresar valores numéricos para el salario')" oninput="this.setCustomValidity('')" >
                </div>   
                <div class="form-group">
                <label for="rfc" class="col-form-label">RFC:</label>
                <input type="text" inputmode="numeric" class="form-control" id="rfc"  >
                </div>  
                <div class="form-group">
                <label for="cedula" class="col-form-label">Cédula:</label>
                <input type="text" inputmode="numeric" class="form-control" id="cedula"  >
                </div>  
                <div class="form-group">
                <label for="clave" class="col-form-label">Clave de elector:</label>
                <input type="text" inputmode="numeric" class="form-control" id="clave" >
                </div>  
         
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                <button type="submit" id="btn_guardar_personal" class="btn btn-dark">Guardar</button>
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
$res=mysqli_query($link,"select * from personal order by id asc ");
            echo"<table hidden id = 'tabla_personal' >";
            echo"<tr><img hidden src='img/logo2.png' width='200' ";
            echo"</tr>";  

            echo"<tr style='background-color:#3399FF'> ";
            echo"<th>";       echo"Id";      echo"</th>";
            echo"<th>";       echo"Nombre";      echo"</th>";

           echo"<th>";       echo"Apellidos";      echo"</th>";
           echo"<th>";       echo"Puesto";      echo"</th>";

           echo"<th>";       echo"RFC";      echo"</th>";


           echo"</tr>";  

            while($row=mysqli_fetch_array($res))
            {

            
                echo"<tr>";
                echo"<td>";       echo $row["id"];      echo"</td>";

                echo"<td>";       echo $row["nombre"];      echo"</td>";
             echo"<td>";        echo $row["apellido"];      echo"</td>";

                echo"<td>";        echo $row["puesto"];       echo"</td>";

                echo"<td>";        echo $row["rfc"];      echo"</td>";


                echo"</tr>";  


            }

            echo"</table>";
                ?>
<?php require_once "vistas/parte_inferior.php"?>