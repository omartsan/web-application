
$(document).ready(function(){
    tablaEstudiantes = $("#tablaEstudiantes").DataTable({
        buttons: {
            extend:    'excel',
            text:      '<i class="fas fa-file-pdf"></i> ',
            titleAttr: 'Exportar a excel',
            className: 'btn btn-danger'
        },
       "columnDefs":[{
        "targets": -1,
        "data":null,
        "scrollX": true,
        "defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btn_editar_estudiantes'>Editar</button><button class='btn btn-danger btn_borrar_estudiantes'>Borrar</button></div></div>"  
       }],
        
    "language": {
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sSearch": "Buscar:",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast":"Último",
                "sNext":"Siguiente",
                "sPrevious": "Anterior"
             },
             "sProcessing":"Procesando...",
        },


    });

// TABLA PERSONAL

    tablaPersonal = $("#tablaPersonal").DataTable({
        "columnDefs":[{
         "targets": -1,
         "data":null,
         "scrollX": true,
         "defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btn_editar_personal'>Editar</button><button class='btn btn-danger btn_borrar_personal'>Borrar</button></div></div>"  
        }],
         
     "language": {
             "lengthMenu": "Mostrar _MENU_ registros",
             "zeroRecords": "No se encontraron resultados",
             "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
             "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
             "infoFiltered": "(filtrado de un total de _MAX_ registros)",
             "sSearch": "Buscar:",
             "oPaginate": {
                 "sFirst": "Primero",
                 "sLast":"Último",
                 "sNext":"Siguiente",
                 "sPrevious": "Anterior"
              },
              "sProcessing":"Procesando...",
         }
     });

     // TABLA CLASES



    tablaClases = $("#tablaClases").DataTable({
        "columnDefs":[{
         "targets": -1,
         "data":null,
         "scrollX": true,
         "defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btn_editar_clase'>Editar</button><button class='btn btn-danger btn_borrar_clase'>Borrar</button></div></div>"  
        }],
         
     "language": {
             "lengthMenu": "Mostrar _MENU_ registros",
             "zeroRecords": "No se encontraron resultados",
             "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
             "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
             "infoFiltered": "(filtrado de un total de _MAX_ registros)",
             "sSearch": "Buscar:",
             "oPaginate": {
                 "sFirst": "Primero",
                 "sLast":"Último",
                 "sNext":"Siguiente",
                 "sPrevious": "Anterior"
              },
              "sProcessing":"Procesando...",
         }
     });

          // TABLA FINANZAS



     tablaFinanzas = $("#tablaFinanzas").DataTable({
        "columnDefs":[{
         "targets": -1,
         "data":null,
         "scrollX": true,
         "defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btn_editar_finanzas'>Editar</button><button class='btn btn-danger btn_borrar_finanzas'>Borrar</button></div></div>"  
        }],
         
     "language": {
             "lengthMenu": "Mostrar _MENU_ registros",
             "zeroRecords": "No se encontraron resultados",
             "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
             "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
             "infoFiltered": "(filtrado de un total de _MAX_ registros)",
             "sSearch": "Buscar:",
             "oPaginate": {
                 "sFirst": "Primero",
                 "sLast":"Último",
                 "sNext":"Siguiente",
                 "sPrevious": "Anterior"
              },
              "sProcessing":"Procesando...",
         }
     });


          // TABLA INVENTARIO



     tablaInventario = $("#tablaInventario").DataTable({
        "columnDefs":[{
         "targets": -1,
         "data":null,
         "scrollX": true,
         "defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btn_editar_inventario'>Editar</button><button class='btn btn-danger btn_borrar_inventario'>Borrar</button></div></div>"  
        }],
         
     "language": {
             "lengthMenu": "Mostrar _MENU_ registros",
             "zeroRecords": "No se encontraron resultados",
             "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
             "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
             "infoFiltered": "(filtrado de un total de _MAX_ registros)",
             "sSearch": "Buscar:",
             "oPaginate": {
                 "sFirst": "Primero",
                 "sLast":"Último",
                 "sNext":"Siguiente",
                 "sPrevious": "Anterior"
              },
              "sProcessing":"Procesando...",
         }
     });

    // TABLA EVENTOS

    tablaEventos = $("#tablaEventos").DataTable({
        "columnDefs":[{
         "targets": -1,
         "data":null,
         "scrollX": true,
         "defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btn_editar_eventos'>Editar</button><button class='btn btn-danger btn_borrar_eventos'>Borrar</button></div></div>"  
        }],
         
     "language": {
             "lengthMenu": "Mostrar _MENU_ registros",
             "zeroRecords": "No se encontraron resultados",
             "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
             "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
             "infoFiltered": "(filtrado de un total de _MAX_ registros)",
             "sSearch": "Buscar:",
             "oPaginate": {
                 "sFirst": "Primero",
                 "sLast":"Último",
                 "sNext":"Siguiente",
                 "sPrevious": "Anterior"
              },
              "sProcessing":"Procesando...",
         }
     });
   

    // TABLA CALIFICACIONES


    tablaCalificaciones = $("#tablaCalificaciones").DataTable({
        "columnDefs":[{
         "targets": -1,
         "data":null,
         "scrollX": true,
         "defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btn_editar_calificaciones'>Editar</button><button class='btn btn-danger btn_borrar_calificaciones'>Borrar</button></div></div>"  
        }],
         
     "language": {
             "lengthMenu": "Mostrar _MENU_ registros",
             "zeroRecords": "No se encontraron resultados",
             "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
             "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
             "infoFiltered": "(filtrado de un total de _MAX_ registros)",
             "sSearch": "Buscar:",
             "oPaginate": {
                 "sFirst": "Primero",
                 "sLast":"Último",
                 "sNext":"Siguiente",
                 "sPrevious": "Anterior"
              },
              "sProcessing":"Procesando...",
         }
     });


// TABLA EXAMENES


tablaExamenes = $("#tablaExamenes").DataTable({
    "columnDefs":[{
     "targets": -1,
     "data":null,
     "scrollX": true,
     "defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btn_editar_examenes'>Editar</button><button class='btn btn-danger btn_borrar_examenes'>Borrar</button></div></div>"  
    }],
     
 "language": {
         "lengthMenu": 'Display <select>'+
                     '<option value="5">5</option>'+
                     '<option value="10">10</option>'+
                   '<option value="15">15</option>'+
                    '<option value="40">40</option>'+
                     '<option value="50">50</option>'+
                     '<option value="-1">All</option>'+
                     '</select> records',
         "zeroRecords": "No se encontraron resultados",
         "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
         "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
         "infoFiltered": "(filtrado de un total de _MAX_ registros)",
         "sSearch": "Buscar:",
         "oPaginate": {
             "sFirst": "Primero",
             "sLast":"Último",
             "sNext":"Siguiente",
             "sPrevious": "Anterior"
          },
          "sProcessing":"Procesando...",
     }
 });


 // TABLA USUARIOS


tablaUsuarios = $("#tablaUsuarios").DataTable({
    "columnDefs":[{
     "targets": -1,
     "data":null,
     "scrollX": true,
     "defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btn_editar_usuarios'>Editar</button><button class='btn btn-danger btn_borrar_usuarios'>Borrar</button></div></div>"  
    }],
     
 "language": {
         "lengthMenu": "Mostrar _MENU_ registros",
         "zeroRecords": "No se encontraron resultados",
         "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
         "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
         "infoFiltered": "(filtrado de un total de _MAX_ registros)",
         "sSearch": "Buscar:",
         "oPaginate": {
             "sFirst": "Primero",
             "sLast":"Último",
             "sNext":"Siguiente",
             "sPrevious": "Anterior"
          },
          "sProcessing":"Procesando...",
     }
 });


 // TABLA CONTRATOS


tablaContratos = $("#tablaContratos").DataTable({
    "columnDefs":[{
     "targets": -1,
     "data":null,
     "scrollX": true,
    "defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btn_descargar_contratos'>Descargar</button><button class='btn btn-danger btn_borrar_contratos'>Borrar</button></div></div>" 
 
    }],
     
 "language": {
         "lengthMenu": "Mostrar _MENU_ registros",
         "zeroRecords": "No se encontraron resultados",
         "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
         "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
         "infoFiltered": "(filtrado de un total de _MAX_ registros)",
         "sSearch": "Buscar:",
         "oPaginate": {
             "sFirst": "Primero",
             "sLast":"Último",
             "sNext":"Siguiente",
             "sPrevious": "Anterior"
          },
          "sProcessing":"Procesando...",
     }
 });
    

 //MODULO ESTUDIANTES   

$("#btn").click(function(){
    $("#formEstudiantes").trigger("reset");
    $(".modal-header").css("background-color", "#1cc88a");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Nuevo estudiante");            
    $("#modalCRUD").modal("show");        
    id=null;
    opcion = 1; //alta
});    


    
var fila; //capturar la fila para editar o borrar el registro
    
 //botón EDITAR  ESTUDIANTES  
$(document).on("click", ".btn_editar_estudiantes", function(){
    fila = $(this).closest("tr");
    nombre = fila.find('td:eq(0)').text();
    apellido = fila.find('td:eq(1)').text();
    matricula = fila.find('td:eq(2)').text();
    direction = fila.find('td:eq(3)').text();
    clases = fila.find('td:eq(4)').text();
    telefono = fila.find('td:eq(5)').text();

    
    $("#nombre").val(nombre);
    $("#apellido").val(apellido);
    $("#matricula").val(matricula);
    $("#direction").val(direction);
    $("#clases").val(clases);
    $("#telefono").val(telefono);
    opcion = 2; //editar
    
    $(".modal-header").css("background-color", "#4e73df");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Editar Estudiante");            
    $("#modalCRUD").modal("show");  
    
});

//botón BORRAR ESTUDIANTES
$(document).on("click", ".btn_borrar_estudiantes", function(){    
    fila = $(this);
    matricula = $(this).closest("tr").find('td:eq(2)').text();
    opcion = 3 //borrar
    var respuesta = confirm("¿Está seguro de eliminar la matricula: "+matricula+"?");
    if(respuesta){
        $.ajax({
            url: "bd/crud_estudiantes.php",
            type: "POST",
            dataType: "json",
            data: {opcion:opcion, matricula:matricula},
            success: function(){
                tablaEstudiantes.row(fila.parents('tr')).remove().draw();
            }
        });
    }   
}); 

// GENERAR REPORTE

$("#btn_reporte_estudiantes").click(function(){
    opcion = 4 //borrar
    var respuesta = confirm("Se generará un reporte de estudiantes");
    if(respuesta){
        generate("estudiantes");
    }  

});  
    
$("#formEstudiantes").submit(function(e){
    e.preventDefault();    
    nombre = $.trim($("#nombre").val());
    apellido = $.trim($("#apellido").val());
    matricula = $.trim($("#matricula").val());    
    direction = $.trim($("#direction").val());
    clases = $.trim($("#clases").val());
    telefono = $.trim($("#telefono").val());    
    $.ajax({
        url: "bd/crud_estudiantes.php",
        type: "POST",
        dataType: "json",
        data: {nombre:nombre, apellido:apellido, matricula:matricula, direction:direction, clases:clases, telefono:telefono, opcion:opcion},
        success: function(data){  
            console.log(data);
            nombre = data[0].nombre;
            apellido = data[0].apellido;
            matricula = data[0].matricula;
            direction = data[0].direction;
            clases = data[0].clases;
            telefono = data[0].telefono;

            if(opcion == 1){
                
                var table = $('#tablaEstudiantes').DataTable();
 
                var filteredData = table
                .column(2, {search: 'applied'})
                .data()
                .filter( function ( value, index ) {
                    return value == matricula ? true : false;
                } );

                numrows = filteredData.count();


                if(numrows > 0){
                    var respuesta = confirm("La matrícula "+matricula+" ya existe, favor de ingresar nueva matrícula o editar existente");
                }
                
                else{
                    var respuesta = confirm("El registro con la matrícula "+matricula+" se agregará");
                    tablaEstudiantes.row.add([nombre,apellido, matricula, direction, clases, telefono]).draw();


                }

            
            
            }
            else{tablaEstudiantes.row(fila).data([nombre,apellido, matricula, direction, clases, telefono]).draw();}            
        }        
    });
    $("#modalCRUD").modal("hide");    
    
});    





//MODULO CLASES   ******************** 

$("#btn_agregar_clase").click(function(){
    $("#formClases").trigger("reset");
    $(".modal-header").css("background-color", "#1cc88a");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Nueva clase");            
    $("#modalCRUD").modal("show");        
    id=null;
    opcion = 1; //alta
});    
    
var fila; //capturar la fila para editar o borrar el registro
    
 //botón EDITAR CLASE  
$(document).on("click", ".btn_editar_clase", function(){
    fila = $(this).closest("tr");
    id = fila.find('td:eq(0)').text();
    nombre = fila.find('td:eq(1)').text();
    id_maestro = fila.find('td:eq(2)').text();


    
    $("#id").val(id);
    $("#nombre").val(nombre);
    $("#id_maestro").val(id_maestro);

    opcion = 2; //editar
    
    $(".modal-header").css("background-color", "#4e73df");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Editar clase");            
    $("#modalCRUD").modal("show");  
    
});

//botón BORRAR CLASE
$(document).on("click", ".btn_borrar_clase", function(){    
    fila = $(this);
    id = parseInt($(this).closest("tr").find('td:eq(0)').text());
    opcion = 3; //borrar
    var respuesta = confirm("¿Está seguro de eliminar la clase: "+id+"?");
    if(respuesta){
        $.ajax({
            url: "bd/crud_clases.php",
            type: "POST",
            dataType: "json",
            data: {opcion:opcion, id:id},
            success: function(){
                tablaClases.row(fila.parents('tr')).remove().draw();

            }
        });
    }   
}); 


// GENERAR REPORTE

$("#btn_reporte_clases").click(function(){
    opcion = 4 //borrar
    var respuesta = confirm("Se generará un reporte de clase");
    if(respuesta){
        generate("clases");
    }  

});   
    
$("#formClases").submit(function(e){
    e.preventDefault();    
    id = $.trim($("#id").val());
    nombre = $.trim($("#nombre").val());
    id_maestro = $.trim($("#id_maestro").val());  

    $.ajax({
        url: "bd/crud_clases.php",
        type: "POST",
        dataType: "json",
        data: {id:id, nombre:nombre, id_maestro:id_maestro, opcion:opcion},
        success: function(data){  
            console.log(data);
            id = data[0].id;
            nombre = data[0].nombre;
            id_maestro = data[0].id_maestro;

            if(opcion == 1){

                var table = $('#tablaClases').DataTable();

                var filteredData = table
                .column(0, {search: 'applied'})
                .data()
                .filter( function ( value, index ) {
                    return value == id ? true : false;
                } );

                numrows = filteredData.count();


                if(numrows > 0){
                    var respuesta = confirm("El id "+id+" ya existe, favor de ingresar nueva id o editar existente");
                }
                
                else{
                    var respuesta = confirm("El registro con el id "+id+" de agregará");
                    tablaClases.row.add([id,nombre,id_maestro]).draw();


                }
                

                }
            
            else{tablaClases.row(fila).data([id,nombre,id_maestro]).draw();}            
        }        
    });
    $("#modalCRUD").modal("hide");    
    
});    






//MODULO FINANZAS   ********************

$("#btn_agregar_finanzas").click(function(){
    $("#formFinanzas").trigger("reset");
    $(".modal-header").css("background-color", "#1cc88a");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Nueva Finanza");            
    $("#modalCRUD").modal("show");        
    id=null;
    opcion = 1; //alta
});    
    
var fila; //capturar la fila para editar o borrar el registro
    
 //botón EDITAR  FINANZAS  
$(document).on("click", ".btn_editar_finanzas", function(){
    fila = $(this).closest("tr");
    id = parseInt(fila.find('td:eq(0)').text());
    fecha = fila.find('td:eq(1)').text();
    concepto = fila.find('td:eq(2)').text();
    tipo = fila.find('td:eq(3)').text();
    monto = parseFloat(fila.find('td:eq(4)').text());
    comentarios = fila.find('td:eq(5)').text();

    
    $("#fecha").val(fecha);
    $("#concepto").val(concepto);
    $("#tipo").val(tipo);
    $("#monto").val(monto);
    $("#comentarios").val(comentarios);
    opcion = 2; //editar
    
    $(".modal-header").css("background-color", "#4e73df");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Editar Finanzas");            
    $("#modalCRUD").modal("show");  
    
});

//botón BORRAR FINANZAS
$(document).on("click", ".btn_borrar_finanzas", function(){    
    fila = $(this);
    id = parseInt($(this).closest("tr").find('td:eq(0)').text());
    opcion = 3; //borrar
    var respuesta = confirm("¿Está seguro de eliminar el id: "+id+"?");
    if(respuesta){
        $.ajax({
            url: "bd/crud_finanzas.php",
            type: "POST",
            dataType: "json",
            data: {opcion:opcion, id:id},
            success: function(){
                tablaFinanzas.row(fila.parents('tr')).remove().draw();
            }
        });
    }   
}); 



 $("#btn_reporte_finanzas").click(function(){
/*     $("#formFinanzasRep").trigger("reset");
    $(".modal-header").css("background-color", "#1cc88a");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Nuevo reporte de finanzas");            
    $("#modalGEN").modal("show");        
    id=null;
    opcion = 4; //alta */

    var respuesta = confirm("Se generará un reporte de finanzas");
    if(respuesta){
        generate("finanzas");
    }  
    


});   
    
$("#formFinanzas").submit(function(e){
    e.preventDefault();    
    fecha = $.trim($("#fecha").val());
    concepto = $.trim($("#concepto").val());
    tipo = $.trim($("#tipo").val());    
    monto = $.trim($("#monto").val());
    comentarios = $.trim($("#comentarios").val());
    $.ajax({
        url: "bd/crud_finanzas.php",
        type: "POST",
        dataType: "json",
        data: {id:id,fecha:fecha, concepto:concepto, tipo:tipo, monto:monto, comentarios:comentarios, opcion:opcion},
        success: function(data){  
            console.log(data);
            id = data[0].id;
            fecha = data[0].fecha;
            concepto = data[0].concepto;
            tipo = data[0].tipo;
            monto = data[0].monto;
            comentarios = data[0].comentarios;

            if(opcion == 1){tablaFinanzas.row.add([id,fecha, concepto, tipo, monto, comentarios]).draw();}
            else{tablaFinanzas.row(fila).data([id,fecha, concepto, tipo, monto, comentarios]).draw();}            
        }        
    });
    $("#modalCRUD").modal("hide");    

});   


$("#formFinanzasRep").submit(function(e){
    e.preventDefault();    
    fecha_inicio = $.trim($("#fecha_inicio").val());
    fecha_fin = $.trim($("#fecha_fin").val());
    var respuesta = confirm("Presione OK para descargar el reporte: ");

    if(respuesta){
        $.ajax({
            url: "bd/crud_finanzas.php",
            type: "POST",
            dataType: "json",
            data: { opcion:opcion},
            success: function(){
    
              alert("creado");
            }
        });
    }    




    $("#modalGEN").modal("hide");    

}); 


//MODULO PERSONAL   ********************

$("#btn_agregar_personal").click(function(){
    $("#formPersonal").trigger("reset");
    $(".modal-header").css("background-color", "#1cc88a");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Nuevo personal");            
    $("#modalCRUD").modal("show");        
    id=null;
    opcion = 1; //alta
});    
    
var fila; //capturar la fila para editar o borrar el registro
    
 //botón EDITAR  PERSONAL  
$(document).on("click", ".btn_editar_personal", function(){
    fila = $(this).closest("tr");
    id = fila.find('td:eq(0)').text();
    nombre = fila.find('td:eq(1)').text();
    apellido = fila.find('td:eq(2)').text();
    puesto = fila.find('td:eq(3)').text();
    telefono = fila.find('td:eq(4)').text();
    fecha_ingreso = fila.find('td:eq(5)').text();
    salario = parseInt(fila.find('td:eq(6)').text());
    rfc = fila.find('td:eq(7)').text();
    cedula = fila.find('td:eq(8)').text();
    clave = fila.find('td:eq(9)').text();


    $("#id").val(id);
    $("#nombre").val(nombre);
    $("#apellido").val(apellido);
    $("#puesto").val(puesto);
    $("#telefono").val(telefono);
    $("#fecha_ingreso").val(fecha_ingreso);
    $("#salario").val(salario);
    $("#rfc").val(rfc);
    $("#cedula").val(cedula);
    $("#clave").val(clave);

    opcion = 2; //editar
    
    $(".modal-header").css("background-color", "#4e73df");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Editar Personal");            
    $("#modalCRUD").modal("show");  
    
});

//botón BORRAR PERSONAL
$(document).on("click", ".btn_borrar_personal", function(){    
    fila = $(this);
    id = parseInt($(this).closest("tr").find('td:eq(0)').text());
    opcion = 3 //borrar
    var respuesta = confirm("¿Está seguro de eliminar el id: "+id+"?");
    if(respuesta){
        $.ajax({
            url: "bd/crud_personal.php",
            type: "POST",
            dataType: "json",
            data: {opcion:opcion, id:id},
            success: function(){
                tablaPersonal.row(fila.parents('tr')).remove().draw();
            }
        });
    }   
}); 
    

$("#btn_reporte_personal").click(function(){
    opcion = 4 

   alert("Se generará un reporte de personal");


});  
    
$("#formPersonal").submit(function(e){
    e.preventDefault();    
    id = $.trim($("#id").val());
    nombre = $.trim($("#nombre").val());
    apellido = $.trim($("#apellido").val());
    puesto = $.trim($("#puesto").val());    
    telefono = $.trim($("#telefono").val());
    fecha_ingreso = $.trim($("#fecha_ingreso").val());
    salario = $.trim($("#salario").val());
    rfc = $.trim($("#rfc").val());
    cedula = $.trim($("#cedula").val());
    clave = $.trim($("#clave").val());

    $.ajax({
        url: "bd/crud_personal.php",
        type: "POST",
        dataType: "json",
        data: {id:id, nombre:nombre, apellido:apellido, puesto:puesto, telefono:telefono, fecha_ingreso:fecha_ingreso, salario:salario,rfc:rfc,cedula:cedula,clave:clave, opcion:opcion},
        success: function(data){  
            console.log(data);
            id = data[0].id;
            nombre = data[0].nombre;
            apellido = data[0].apellido;
            puesto = data[0].puesto;
            telefono = data[0].telefono;
            fecha_ingreso = data[0].fecha_ingreso;
            salario = data[0].salario;
            rfc = data[0].rfc;
            cedula = data[0].cedula;
            clave = data[0].clave;


            if(opcion == 1){
                
                var table = $('#tablaPersonal').DataTable();


                var filteredData = table.rows().eq( 0 ).filter( function (rowIdx) {
                    return table.cell( rowIdx, 0 ).data() == id || table.cell( rowIdx, 7 ).data() == rfc || 
                    table.cell( rowIdx, 8 ).data() == cedula
                    || table.cell( rowIdx, 9 ).data() == clave ? true : false;
                } );

                numrows = filteredData.count();


                if(numrows > 0){
                    var respuesta = confirm("Registro de id personal "+id+" con valores repetidos, favor de ingresar id, rfc, cédula y clave únicos");
                }
                
                else{
                    var respuesta = confirm("El registro con el id "+id+" se agregará");
                    tablaPersonal.row.add([id,nombre, apellido, puesto, telefono, fecha_ingreso, salario,rfc,cedula,clave, opcion]).draw();


                }
                
                
            
        
                           }

            else{tablaPersonal.row(fila).data([id,nombre, apellido, puesto, telefono, fecha_ingreso, salario,rfc,cedula,clave, opcion]).draw();}            
        }        
    });
    $("#modalCRUD").modal("hide");    

    
    
});    




//MODULO INVENTARIO   ********************

$("#btn_agregar_inventario").click(function(){
    $("#formInventario").trigger("reset");
    $(".modal-header").css("background-color", "#1cc88a");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Nuevo inventario");            
    $("#modalCRUD").modal("show");        
    id=null;
    opcion = 1; //alta
});    
    
var fila; //capturar la fila para editar o borrar el registro
    
 //botón EDITAR INVENTARIO  
$(document).on("click", ".btn_editar_inventario", function(){
    fila = $(this).closest("tr");
    id = parseInt(fila.find('td:eq(0)').text());
    fecha = fila.find('td:eq(1)').text();
    articulo = fila.find('td:eq(2)').text();
    cantidad = fila.find('td:eq(3)').text();
    descripcion = fila.find('td:eq(4)').text();

    
    $("#fecha").val(fecha);
    $("#articulo").val(articulo);
    $("#cantidad").val(cantidad);
    $("#descripcion").val(descripcion);
    opcion = 2; //editar
    
    $(".modal-header").css("background-color", "#4e73df");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Editar inventario");            
    $("#modalCRUD").modal("show");  
    
    
});

//botón BORRAR INVENTARIO
$(document).on("click", ".btn_borrar_inventario", function(){    
    fila = $(this);
    id = parseInt($(this).closest("tr").find('td:eq(0)').text());
    opcion = 3 //borrar
    var respuesta = confirm("¿Está seguro de eliminar el inventario id: "+id+"?");
    if(respuesta){
        $.ajax({
            url: "bd/crud_inventario.php",
            type: "POST",
            dataType: "json",
            data: {opcion:opcion, id:id},
            success: function(){
                tablaInventario.row(fila.parents('tr')).remove().draw();
            }
        });
    }   
}); 

$("#btn_reporte_inventario").click(function(){
    opcion = 4 

   alert("Se generará un reporte de inventario");


});  
    
$("#formInventario").submit(function(e){
    e.preventDefault();    
    fecha = $.trim($("#fecha").val());
    articulo = $.trim($("#articulo").val());
    cantidad = $.trim($("#cantidad").val());    
    descripcion = $.trim($("#descripcion").val());
    $.ajax({
        url: "bd/crud_inventario.php",
        type: "POST",
        dataType: "json",
        data: {id:id, fecha:fecha, articulo:articulo, cantidad:cantidad, descripcion:descripcion, opcion:opcion},
        success: function(data){  
            console.log(data);
            id = data[0].id;
            fecha = data[0].fecha;
            articulo = data[0].articulo;
            cantidad = data[0].cantidad;
            descripcion = data[0].descripcion;

            if(opcion == 1){tablaInventario.row.add([id,fecha, articulo, cantidad, descripcion]).draw();}
            else{tablaInventario.row(fila).data([id,fecha, articulo, cantidad, descripcion]).draw();}            
        }        
    });
    $("#modalCRUD").modal("hide");    

    
    
});    



//MODULO CALIFICACIONES   ********************

$("#btn_agregar_calificaciones").click(function(){
    $("#formCalificaciones").trigger("reset");
    $(".modal-header").css("background-color", "#1cc88a");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Nueva calificación");            
    $("#modalCRUD").modal("show");        
    id=null;
    opcion = 1; //alta
});    
    
var fila; //capturar la fila para editar o borrar el registro
    
 //botón EDITAR CALIFICACIONES  
$(document).on("click", ".btn_editar_calificaciones", function(){
    fila = $(this).closest("tr");
    id = parseInt(fila.find('td:eq(0)').text());
    nombre_estudiante = fila.find('td:eq(1)').text();
    apellido_estudiante = fila.find('td:eq(2)').text();
    matricula = fila.find('td:eq(3)').text();
    id_clase = fila.find('td:eq(4)').text();
    calificacion = fila.find('td:eq(5)').text();
    id_maestro = fila.find('td:eq(6)').text();

    
    $("#nombre_estudiante").val(nombre_estudiante);
    $("#apellido_estudiante").val(apellido_estudiante);
    $("#matricula").val(matricula);
    $("#id_clase").val(id_clase);
    $("#calificacion").val(calificacion);
    $("#id_maestro").val(id_maestro);
    opcion = 2; //editar
    
    $(".modal-header").css("background-color", "#4e73df");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Editar calificacion");            
    $("#modalCRUD").modal("show");  
    
});

//botón BORRAR CALIFICACIONES
$(document).on("click", ".btn_borrar_calificaciones", function(){    
    fila = $(this);
    id = parseInt($(this).closest("tr").find('td:eq(0)').text());
    opcion = 3 //borrar
    var respuesta = confirm("¿Está seguro de eliminar el id: "+id+"?");
    if(respuesta){
        $.ajax({
            url: "bd/crud_calificaciones.php",
            type: "POST",
            dataType: "json",
            data: {opcion:opcion, id:id},
            success: function(){
                tablaCalificaciones.row(fila.parents('tr')).remove().draw();
            }
        });
    }   
}); 
    
$("#formCalificaciones").submit(function(e){
    e.preventDefault();    
    nombre_estudiante = $.trim($("#nombre_estudiante").val());
    apellido_estudiante = $.trim($("#apellido_estudiante").val());
    matricula = $.trim($("#matricula").val());    
    id_clase = $.trim($("#id_clase").val());
    calificacion = $.trim($("#calificacion").val());
    id_maestro = $.trim($("#id_maestro").val());

    $.ajax({
        url: "bd/crud_calificaciones.php",
        type: "POST",
        dataType: "json",
        data: {id:id, nombre_estudiante:nombre_estudiante, apellido_estudiante:apellido_estudiante, 
            matricula:matricula, id_clase:id_clase, calificacion:calificacion, id_maestro:id_maestro, opcion:opcion},
        success: function(data){  
            console.log(data);
            id = data[0].id;
            nombre_estudiante = data[0].nombre_estudiante;
            apellido_estudiante = data[0].apellido_estudiante;
            matricula = data[0].matricula;
            id_clase = data[0].id_clase;
            calificacion = data[0].calificacion;
            id_maestro = data[0].id_maestro;


            if(opcion == 1){tablaCalificaciones.row.add([id,nombre_estudiante, apellido_estudiante, matricula, id_clase, calificacion, id_maestro]).draw();}
            else{tablaCalificaciones.row(fila).data([id,nombre_estudiante, apellido_estudiante, matricula, id_clase, calificacion, id_maestro]).draw();}            
        }        
    });
    $("#modalCRUD").modal("hide");    

    
    
});   

//MODULO EVENTOS   ********************

$("#btn_agregar_eventos").click(function(){
    $("#formEventos").trigger("reset");
    $(".modal-header").css("background-color", "#1cc88a");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Nuevo evento");            
    $("#modalCRUD").modal("show");        
    id=null;
    opcion = 1; //alta
});    
    
var fila; //capturar la fila para editar o borrar el registro
    
 //botón EDITAR EVENTOS  
$(document).on("click", ".btn_editar_eventos", function(){
    fila = $(this).closest("tr");
    id = parseInt(fila.find('td:eq(0)').text());
    fecha_inicio = fila.find('td:eq(1)').text();
    fecha_termino = fila.find('td:eq(2)').text();
    titulo = fila.find('td:eq(3)').text();
    prioridad = fila.find('td:eq(4)').text();
    id_personal = fila.find('td:eq(5)').text();


    
    $("#fecha_inicio").val(fecha_inicio);
    $("#fecha_termino").val(fecha_termino);
    $("#titulo").val(titulo);
    $("#prioridad").val(prioridad);
    $("#id_personal").val(id_personal);

    opcion = 2; //editar
    
    $(".modal-header").css("background-color", "#4e73df");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Editar evento");            
    $("#modalCRUD").modal("show");  
    
    
});

//botón BORRAR EVENTOS
$(document).on("click", ".btn_borrar_eventos", function(){    
    fila = $(this);
    id = parseInt($(this).closest("tr").find('td:eq(0)').text());
    opcion = 3 //borrar
    var respuesta = confirm("¿Está seguro de eliminar el evento: "+id+"?");
    if(respuesta){
        $.ajax({
            url: "bd/crud_eventos.php",
            type: "POST",
            dataType: "json",
            data: {opcion:opcion, id:id},
            success: function(){
                tablaEventos.row(fila.parents('tr')).remove().draw();
            }
        });
    }   
}); 


$("#btn_reporte_eventos").click(function(){
    opcion = 4 

   alert("Se generará un reporte de eventos");


});  
    
$("#formEventos").submit(function(e){
    e.preventDefault();    
    fecha_inicio = $.trim($("#fecha_inicio").val());
    fecha_termino = $.trim($("#fecha_termino").val());
    titulo = $.trim($("#titulo").val());    
    prioridad = $.trim($("#prioridad").val());
    id_personal = $.trim($("#id_personal").val());

    $.ajax({
        url: "bd/crud_eventos.php",
        type: "POST",
        dataType: "json",
        data: {id:id, fecha_inicio:fecha_inicio, fecha_termino:fecha_termino, titulo:titulo, prioridad:prioridad, id_personal:id_personal, opcion:opcion},
        success: function(data){  
            console.log(data);
            id = data[0].id;
            fecha_inicio = data[0].fecha_inicio;
            fecha_termino = data[0].fecha_termino;
            titulo = data[0].titulo;
            prioridad = data[0].prioridad;
            id_personal = data[0].id_personal;

            if(opcion == 1){

                var respuesta = confirm("El evento "+titulo+" se agregará");
                tablaEventos.row.add([id,fecha_inicio, fecha_termino, titulo, prioridad, id_personal]).draw();
 
            
            }
            else{tablaEventos.row(fila).data([id,fecha_inicio, fecha_termino, titulo, prioridad, id_personal]).draw();}            
        }        
    });
    $("#modalCRUD").modal("hide");    
 

    
    
});   



//MODULO EXAMENES   ********************

$("#btn_agregar_examenes").click(function(){
    $("#formExamenes").trigger("reset");
    $(".modal-header").css("background-color", "#1cc88a");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Nuevo reactivo");            
    $("#modalCRUD").modal("show");        
    id=null;
    opcion = 1; //alta
});    

 //botón GENERAR EXAMENES  

$("#btn_generar_examenes").click(function(){


            
    $("#formExamenesGen").trigger("reset");
    $(".modal-header").css("background-color", "#1cc88a");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Generar examen");            
    $("#modalGEN").modal("show");        
    id=null;
    opcion = 4; //generar



});   
    
var fila; //capturar la fila para editar o borrar el registro
    
 //botón EDITAR EXAMENES  

$(document).on("click", ".btn_editar_examenes", function(){
    fila = $(this).closest("tr");
    id = parseInt(fila.find('td:eq(0)').text());
    id_examen = fila.find('td:eq(1)').text();
    id_clase = parseInt(fila.find('td:eq(2)').text());
    num_reactivo = parseInt(fila.find('td:eq(3)').text());
    des_reactivo = fila.find('td:eq(4)').text();
    opcion_1 = fila.find('td:eq(5)').text();
    opcion_2 = fila.find('td:eq(6)').text();
    opcion_3 = fila.find('td:eq(7)').text();
    respuesta = fila.find('td:eq(8)').text();



    
    $("#id_examen").val(id_examen);
    $("#id_clase").val(id_clase);
    $("#num_reactivo").val(num_reactivo);
    $("#des_reactivo").val(des_reactivo);
    $("#opcion_1").val(opcion_1);
    $("#opcion_2").val(opcion_2);
    $("#opcion_3").val(opcion_3);
    $("#respuesta").val(respuesta);


    opcion = 2; //editar
    
    $(".modal-header").css("background-color", "#4e73df");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Editar reactivo");            
    $("#modalCRUD").modal("show");  
    
});

//botón BORRAR EXAMENES
$(document).on("click", ".btn_borrar_examenes", function(){    
    fila = $(this);
    id = parseInt($(this).closest("tr").find('td:eq(0)').text());
    opcion = 3 //borrar
    var respuesta = confirm("¿Está seguro de eliminar el reactivo: "+id+"?");
    if(respuesta){
        $.ajax({
            url: "bd/crud_examenes.php",
            type: "POST",
            dataType: "json",
            data: {opcion:opcion, id:id},
            success: function(){
                tablaExamenes.row(fila.parents('tr')).remove().draw();
            }
        });
    }   
}); 
    
$("#formExamenesGen").submit(function(e){
    e.preventDefault();    
    id_clase_gen = parseInt($.trim($("#id_clase_gen").val()));
   nombre_examen = $.trim($("#nombre_examen").val());
   var respuesta = confirm("Presione OK para descargar el examen: "+nombre_examen);
   var nombre_examen_descargar = nombre_examen+".doc"

   if(respuesta){
    $.ajax({
        url: "bd/crud_examenes.php",
        type: "POST",
        dataType: "json",
        data: { id_clase_gen:id_clase_gen, nombre_examen:nombre_examen, opcion:opcion},
        success: function(){

            var link = document.createElement('a');
            link.download = nombre_examen_descargar;
            link.href = 'bd/'+nombre_examen_descargar;  
            link.click(); 
        }
    });
}   

    $.ajax({
        url: "bd/crud_examenes.php",
        type: "POST",
        dataType: "json",
        data: { id_clase_gen:id_clase_gen, nombre_examen:nombre_examen, opcion:opcion},
        success: function(data){  
            console.log(data);
            //id = data[0].id;
            id_examen_gen = data[0].id_examen_gen;
            nombre_examen = data[0].nombre_examen;
            if (nombre_examen && nombre_examen !=='') {

              }
           /*  num_reactivo = data[0].num_reactivo;
            opcion_1 = data[0].opcion_1;
            opcion_2 = data[0].opcion_2;
            opcion_3 = data[0].opcion_3;
            respuesta = data[0].respuesta;
 */
            if(opcion == 4){
 
            }          
        }        
    });
    $("#modalGEN").modal("hide");    

    
    
}); 


$("#formExamenes").submit(function(e){
    e.preventDefault();    
    id_examen = $.trim($("#id_examen").val());
    id_clase = $.trim($("#id_clase").val());
    num_reactivo = $.trim($("#num_reactivo").val());    
    des_reactivo = $.trim($("#des_reactivo").val());
    opcion_1 = $.trim($("#opcion_1").val());
    opcion_2 = $.trim($("#opcion_2").val());
    opcion_3 = $.trim($("#opcion_3").val());
    respuesta = $.trim($("#respuesta").val());

    $.ajax({
        url: "bd/crud_examenes.php",
        type: "POST",
        dataType: "json",
        data: {id:id, id_examen:id_examen, id_clase:id_clase, num_reactivo:num_reactivo, des_reactivo:des_reactivo, opcion_1:opcion_1, opcion_2:opcion_2, opcion_3:opcion_3, respuesta:respuesta, opcion:opcion},
        success: function(data){  
            console.log(data);
            id = data[0].id;
            id_examen = data[0].id_examen;
            id_clase = data[0].id_clase;
            num_reactivo = data[0].num_reactivo;
            des_reactivo = data[0].des_reactivo;
            opcion_1 = data[0].opcion_1;
            opcion_2 = data[0].opcion_2;
            opcion_3 = data[0].opcion_3;
            respuesta = data[0].respuesta;


            if(opcion == 1){tablaExamenes.row.add([id, id_examen, id_clase, num_reactivo, des_reactivo, opcion_1, opcion_2, opcion_3, respuesta]).draw();}
            else{tablaExamenes.row(fila).data([id, id_examen, id_clase, num_reactivo, des_reactivo, opcion_1, opcion_2, opcion_3, respuesta]).draw();}            
        }        
    });
    $("#modalCRUD").modal("hide");    

    
    
});  


//MODULO CONTRATOS   ********************

$("#btn_agregar_contratos").click(function(){
    $("#formContratos").trigger("reset");
    $(".modal-header").css("background-color", "#1cc88a");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Generar contrato");            
    $("#modalCRUD").modal("show");        
    id=null;
    opcion = 1; //alta
});    

    
var fila; //capturar la fila para editar o borrar el registro
    
 //botón DESCARGAR CONTRATOS  
$(document).on("click", ".btn_descargar_contratos", function(){
    fila = $(this);
    id = parseInt($(this).closest("tr").find('td:eq(0)').text());
    nombre = $(this).closest("tr").find('td:eq(1)').text();
    opcion = 2 //descargar

   var nombre_contrato = nombre+".doc"

    if (nombre_contrato && nombre_contrato !=='') {
      var link = document.createElement('a');
      link.download = nombre_contrato;
      link.href = 'bd/'+nombre_contrato;  
      link.click();
    }

    var respuesta = confirm("Nombre de contrato: "+nombre_contrato);

    if(respuesta){
        $.ajax({
            url: "bd/crud_contratos.php",
            type: "POST",
            dataType: "json",
            data: {opcion:opcion, id:id},
            success: function(){ 

            }
        });
    }    

    
});

//botón BORRAR CONTRATOS
$(document).on("click", ".btn_borrar_contratos", function(){    
    fila = $(this);
    id = parseInt($(this).closest("tr").find('td:eq(0)').text());
    nombre = $(this).closest("tr").find('td:eq(1)').text();

    opcion = 3 //borrar
    var nombre_contrato = nombre+".doc"
    var respuesta = confirm("¿Está seguro de eliminar el contrato: "+nombre+"?");

    if(respuesta){
        $.ajax({
            url: "bd/crud_contratos.php",
            type: "POST",
            dataType: "json",
            data: {opcion:opcion, id:id},
            success: function(){
                tablaContratos.row(fila.parents('tr')).remove().draw();
            }
        });
    }   
}); 
    
$("#formContratos").submit(function(e){
    e.preventDefault();    
    nombre = $.trim($("#nombre").val());
    id_personal = $.trim($("#id_personal").val());


    $.ajax({
        url: "bd/crud_contratos.php",
        type: "POST",
        dataType: "json",
        data: {nombre:nombre, id_personal:id_personal, opcion:opcion},
        success: function(data){  
            console.log(data);
            id = data[0].id;
            nombre = data[0].nombre;
            id_personal = data[0].id_personal;


            if(opcion == 1){tablaContratos.row.add([id,nombre, id_personal]).draw();}
            else{tablaContratos.row(fila).data([id,nombre, id_personal]).draw();}            
        }        
    });
    $("#modalCRUD").modal("hide");     

    
    
});  


//MODULO USUARIOS ************

$("#btn_agregar_usuarios").click(function(){
    $("#formUsuarios").trigger("reset");
    $(".modal-header").css("background-color", "#1cc88a");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Nuevo usuario");            
    $("#modalCRUD").modal("show");        
    id=null;
    opcion = 1; //alta
});    
    
var fila; //capturar la fila para editar o borrar el registro
    
 //botón EDITAR USUARIOS  
$(document).on("click", ".btn_editar_usuarios", function(){
    fila = $(this).closest("tr");
    usuario = fila.find('td:eq(0)').text();
    password = fila.find('td:eq(1)').text();

    
    $("#usuario").val(usuario);
    $("#password").val(password);
    opcion = 2; //editar
    
    $(".modal-header").css("background-color", "#4e73df");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Editar usuario");            
    $("#modalCRUD").modal("show");  
    
});

//botón BORRAR USUARIOS
$(document).on("click", ".btn_borrar_usuarios", function(){    
    fila = $(this);
    usuario = $(this).closest("tr").find('td:eq(0)').text();
    opcion = 3 //borrar
    var respuesta = confirm("¿Está seguro de eliminar el usuario: "+usuario+"?");
    if(respuesta){
        $.ajax({
            url: "bd/crud_usuarios.php",
            type: "POST",
            dataType: "json",
            data: {usuario:usuario, opcion:opcion},
            success: function(){
                tablaUsuarios.row(fila.parents('tr')).remove().draw();
            }
        });
    }   
}); 
    
$("#formUsuarios").submit(function(e){
    e.preventDefault();    
    usuario = $.trim($("#usuario").val());
    password = $.trim($("#password").val());

    $.ajax({
        url: "bd/crud_usuarios.php",
        type: "POST",
        dataType: "json",
        data: {usuario:usuario, password:password, opcion:opcion},
        success: function(data){  
            console.log(data);
            usuario = data[0].usuario;
            password = data[0].password;

            if(opcion == 1){
                var table = $('#tablaUsuarios').DataTable();

                var filteredData = table
                .column(0, {search: 'applied'})
                .data()
                .filter( function ( value, index ) {
                    return value == usuario ? true : false;
                } );

                numrows = filteredData.count();


                if(numrows > 0){
                    var respuesta = confirm("El usuario "+usuario+" ya existe, favor de ingresar nuevo usuario");
                }
                
                else{
                    var respuesta = confirm("El usuario con el nombre: "+usuario+" se agregará");
                    tablaUsuarios.row.add([usuario, password]).draw();


                }
            
            
            }
            else{tablaUsuarios.row(fila).data([usuario, password]).draw();}            
        }        
    });
    $("#modalCRUD").modal("hide");    

    
    
});  



    
});




 


