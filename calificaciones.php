<?php require_once "vistas/parte_superior.php"?>

<!--INICIO del cont principal-->
<div class="container">
    <h1>Módulo Calificaciones</h1>
    
    
    
 <?php
include 'bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();
$consulta = "SELECT  * FROM calificaciones";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>


<div class="container">
        <div class="row">
            <div class="col-lg-12">            
            <button id="btn_agregar_calificaciones" type="button" class="btn btn-success" data-toggle="modal">Nuevo</button>
            <button id="btn_reporte_calificaciones" type="button" class="btn btn-success" data-toggle="modal">Reporte</button>    
    
            </div>    
        </div>    
    </div>    
    <br>  
<div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="tablaCalificaciones" class="table table-striped table-bordered table-condensed" style="width:100%">
                        <thead class="text-center">
                            <tr>
                            <th>ID</th>
                                <th>Nombre</th>                                
                                <th>Apellidos</th>  
                                <th>Matrícula</th>
                                <th>id_clase</th>
                                <th>Calificacion</th>
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
                                <td><?php echo $dat['nombre_estudiante'] ?></td>
                                <td><?php echo $dat['apellido_estudiante'] ?></td>
                                <td><?php echo $dat['matricula'] ?></td>
                                <td><?php echo $dat['id_clase'] ?></td>    
                                <td><?php echo $dat['calificacion'] ?></td>    
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
      
    <script type="text/javascript">
   function prevent(e)
   
   {

var keycode = (e.keycode ? e.keycode : e.which);
if (keycode > 47 && keycode < 58 || keycode > 95 && keycode < 107 )
{
    e.preventDefault();
}


   }
</script>
<!--Modal para AÑADIR-->
<div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        <form id="formCalificaciones">    
            <div class="modal-body">
                <div class="form-group">
                <label for="nombre_estudiante" class="col-form-label">Nombre del estudiante:</label>
                <input type="text" class="form-control" id="nombre_estudiante" required onkeydown = "prevent(event)" onkeydown = "prevent(event)";>
                </div>   
                <div class="form-group">
                <label for="apellido_estudiante" class="col-form-label">Apellido del estudiante:</label>
                <input type="text"  class="form-control" id="apellido_estudiante" required onkeydown = "prevent(event)" onkeydown = "prevent(event)"; >
                </div>  
                <div class="form-group">
                <label for="matricula" class="col-form-label">Matrícula:</label>
                <input type="text" inputmode="numeric" class="form-control" id="matricula" required pattern="[0-9]{4}"  oninvalid="this.setCustomValidity('Favor de ingresar 4 números positivos para la matrícula')" oninput="this.setCustomValidity('')" >
                </div>  

                <div class="form-group">
                <label for="id_clase" class="col-form-label">Id de la clase:</label>
                <input type="number" class="form-control" id="id_clase" min="1" max="22" required oninvalid="this.setCustomValidity('Favor de ingresar el id del 1 al 22')" oninput="this.setCustomValidity('')">
                </div>  
                <div class="form-group">
                <label for="calificacion" class="col-form-label">Calificación:</label>
                <input type="float" inputmode="numeric" step=any  class="form-control" id="calificacion" required min="5" max="10" required oninvalid="this.setCustomValidity('Favor de ingresar la calificación del 5 al 10')" oninput="this.setCustomValidity('')">
                </div> 
                <div class="form-group">
                <label for="id_maestro" class="col-form-label">Id del maestro:</label>
                <input type="text" inputmode="numeric" class="form-control" id="id_maestro" pattern="[0-9]{3}" required oninvalid="this.setCustomValidity('Favor de ingresar 3 números positivos para el id ')" oninput="this.setCustomValidity('')" >
                </div>   
         
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                <button type="submit" id="btn_guardar_calificaciones" class="btn btn-dark">Guardar</button>
            </div>
        </form>    
        </div>
    </div>
</div>  
      
    
    
</div>
<!--FIN del cont principal-->
<?php require_once "vistas/parte_inferior.php"?>