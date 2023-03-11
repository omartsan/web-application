<?php require_once "vistas/parte_superior.php"
?>


 

<!--INICIO del cont principal-->
<div class="container">
    <h1>Módulo Contratos</h1>
    
    
    
 <?php
include 'bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();
$consulta = "SELECT  * FROM contratos";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>


<div class="container">
        <div class="row">
            <div class="col-lg-12">            
            <button id="btn_agregar_contratos" type="button" class="btn btn-success" data-toggle="modal">Generar</button>  
            
            </div>    
        </div>    
    </div>    
    <br>  
<div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="tablaContratos" class="table table-striped table-bordered table-condensed" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>ID contrato</th>
                                <th>Nombre</th>                                
                                <th>ID personal</th>  
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
        <form id="formContratos">    
            <div class="modal-body"> 
                <div class="form-group">
                <label for="nombre" class="col-form-label">Nombre de contrato:</label>
                <input type="text" class="form-control" required id="nombre">
                </div>  
                <div class="form-group">
                <label for="id_personal" class="col-form-label">ID personal:</label>
                <input type="text" inputmode="numeric" class="form-control" id="id_personal" pattern="[0-9]{3}"  oninvalid="this.setCustomValidity('Favor de ingresar 3 números positivos para el id del personal ')" oninput="this.setCustomValidity('')" >
                </div>  


         
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                


                <button type="submit" id="btn_guardar_contrato" class="btn btn-dark">Generar</button>



            </div>
        </form>    
        </div>
    </div>
</div>  
      
    
    
</div>
<!--FIN del cont principal-->
<?php require_once "vistas/parte_inferior.php"?>