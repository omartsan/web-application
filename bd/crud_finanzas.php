<?php require_once "../vistas/parte_superior.php"?>
<?php require('exportToWord.inc.php');?>

<script src="script2.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.6/jspdf.plugin.autotable.min.js"></script>
<?php
include_once '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();
// Recepción de los datos enviados mediante POST desde el JS   

$fecha = (isset($_POST['fecha'])) ? $_POST['fecha'] : '';
$concepto = (isset($_POST['concepto'])) ? $_POST['concepto'] : '';
$tipo  = (isset($_POST['tipo'])) ? $_POST['tipo'] : '';
$monto  = (isset($_POST['monto'])) ? $_POST['monto'] : '';
$comentarios  = (isset($_POST['comentarios'])) ? $_POST['comentarios'] : '';
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$id = (isset($_POST['id'])) ? $_POST['id'] : '';
$fecha_inicio = (isset($_POST['fecha_inicio'])) ? $_POST['fecha_inicio'] : '';
$fecha_fin =  (isset($_POST['fecha_fin'])) ? $_POST['fecha_fin'] : '';



switch($opcion){
    case 1: //alta
        echo     '<script type="text/JavaScript"> 
        prompt("GeeksForGeeks");
        </script>' ;
        $consulta = "INSERT INTO finanzas values(DEFAULT,'$_POST[concepto]', '$_POST[tipo]','$_POST[monto]', '$_POST[fecha]', '$_POST[comentarios]') ";			
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 

        $consulta = "SELECT id, fecha, concepto, tipo, monto, comentarios FROM finanzas ORDER BY id DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 2: //modificación
        $consulta = "UPDATE finanzas SET concepto='$concepto',  tipo='$tipo', monto='$monto',  fecha='$fecha', comentarios='$comentarios' WHERE id='$id'";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        
        $consulta = "SELECT id, fecha, concepto, tipo, monto, comentarios FROM finanzas WHERE id='$id'";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;        
    case 3://baja
        $consulta = "DELETE FROM finanzas WHERE id='$id'";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;     
        
    case 4: //reporte   


        $css = '<style type = "text/css">.test {font-weight: 600;}</style>';
   
        $content =file_get_contents('.html'); 
        $file_name = 'prueba.doc';

        ExportToWord::htmlToDoc($content, $css, $file_name);

       
                  
        break; 
}

print json_encode($data, JSON_UNESCAPED_UNICODE); //enviar el array final en formato json a JS
$conexion = NULL;

?>

<?php require_once "../vistas/parte_inferior.php"?>