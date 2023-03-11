<?php require_once "vistas/parte_superior.php"?>

<!--INICIO del cont principal-->
<div class="container">
    <h1>Módulo Examenes</h1>
    
    
    
 <?php
include 'bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();
$consulta = "SELECT  * FROM examenes";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>


<div class="container">
        <div class="row">
            <div class="col-lg-12">            
            <button id="btn_agregar_examenes" type="button" class="btn btn-success" data-toggle="modal">Nuevo</button>    
            <button id="btn_generar_examenes" type="button" class="btn btn-success" data-toggle="modal">Generar</button>    

            </div>    
        </div>    
    </div>    
    <br>  
<div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="tablaExamenes" class="table table-striped table-bordered table-condensed" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>ID</th>
                                <th>ID examen</th>                                
                                <th>ID clase</th>  
                                <th>Número reactivo</th>
                                <th>Descripción reactivo</th>
                                <th>Opcion 1</th>
                                <th>Opcion 2</th>
                                <th>Opcion 3</th>
                                <th>Respuesta</th>
                                <th>Acciones</th>





                            </tr>
                        </thead>
                        <tbody>
                            <?php                            
                            foreach($data as $dat) {                                                        
                            ?>
                            <tr>
                                <td><?php echo $dat['id'] ?></td>
                                <td><?php echo $dat['id_examen'] ?></td>
                                <td><?php echo $dat['id_clase'] ?></td>
                                <td><?php echo $dat['num_reactivo'] ?></td>
                                <td><?php echo $dat['des_reactivo'] ?></td>    
                                <td><?php echo $dat['opcion_1'] ?></td>    
                                <td><?php echo $dat['opcion_2'] ?></td>    
                                <td><?php echo $dat['opcion_3'] ?></td>    
                                <td><?php echo $dat['respuesta'] ?></td>    
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




        <form id="formExamenes">    
            <div class="modal-body">
                <div class="form-group">
                <label for="id_examen" class="col-form-label">ID examen:</label>
                <input type="text" class="form-control" id="id_examen" required  required oninvalid="this.setCustomValidity('Favor de ingresar un id de examen para generar')" oninput="this.setCustomValidity('')">
                </div>   
                <div class="form-group">
                <label for="id_clase" class="col-form-label">ID clase:</label>
                <input type="number" class="form-control" id="id_clase" min="1" max="22" required oninvalid="this.setCustomValidity('Favor de ingresar el id de la clase 1 al 22')" oninput="this.setCustomValidity('')">
                </div>  
                <div class="form-group">
                <label for="num_reactivo" class="col-form-label">Número de reativo:</label>
                <input type="number" class="form-control" id="num_reactivo" oninvalid="this.setCustomValidity('Favor de ingresar valor numerico')" oninput="this.setCustomValidity('')">
                </div>  
                <div class="form-group">
                <label for="des_reactivo" class="col-form-label">Descripción de reativo:</label>
                <input type="text" class="form-control" id="des_reactivo" required  oninvalid="this.setCustomValidity('Este campo es obligatorio')" oninput="this.setCustomValidity('')">
                </div>  
                <div class="form-group">
                <label for="opcion_1" class="col-form-label">Opción 1:</label>
                <input type="text" class="form-control" id="opcion_1" required oninvalid="this.setCustomValidity('Este campo es obligatorio')" oninput="this.setCustomValidity('')">
                </div>  
                <div class="form-group">
                <label for="opcion_2" class="col-form-label">Opción 2:</label>
                <input type="text" class="form-control" id="opcion_2" required oninvalid="this.setCustomValidity('Este campo es obligatorio')" oninput="this.setCustomValidity('')">
                </div>  
                <div class="form-group">
                <label for="opcion_3" class="col-form-label">Opción 3:</label>
                <input type="text" class="form-control" id="opcion_3" required oninvalid="this.setCustomValidity('Este campo es obligatorio')" oninput="this.setCustomValidity('')">
                </div>  
                <div class="form-group">
                <label for="respuesta" class="col-form-label">Respuesta:</label>
                <input type="text" class="form-control" id="respuesta"  required oninvalid="this.setCustomValidity('Este campo es obligatorio')" oninput="this.setCustomValidity('')">
                </div>  


         
            </div>




            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                <button type="submit" id="btn_guardar_examenes" class="btn btn-dark">Guardar</button>
            </div>
        </form>  
        



        </div>
    </div>
</div>  


<!--Modal para GENERAR-->
<div class="modal fade" id="modalGEN" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>



            
        <form id="formExamenesGen">    
            <div class="modal-body">
                <div class="form-group">
                <label for="nombre_examen" class="col-form-label">Nombre examen:</label>
                <input type="text" class="form-control" id="nombre_examen" required >
                </div>   
                <div class="form-group">
                <label for="id_clase_gen" class="col-form-label">ID clase:</label>
                <input type="number" class="form-control" id="id_clase_gen" min="1" max="22" oninvalid="this.setCustomValidity('Favor de ingresar el id de la clase 1 al 22')" oninput="this.setCustomValidity('')">
                </div>  

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                <button type="submit" id="btn_generar_examenes" class="btn btn-dark">Generar</button>
            </div>
        </form>    
        </div>
    </div>
</div>  
      
    
    
</div>
<!--FIN del cont principal-->
<?php require_once "vistas/parte_inferior.php"?>