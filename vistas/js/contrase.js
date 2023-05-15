$(".tablacontrase").DataTable({
    deferRender: true,
    retrieve: true,
    processing: true,
    language: {
      sProcessing: "Procesando...",
      sLengthMenu: "Mostrar _MENU_ registros",
      sZeroRecords: "No se encontraron resultados",
      sEmptyTable: "Ningún dato disponible en esta tabla",
      sInfo: "Mostrando registros del _START_ al _END_",
      sInfoEmpty: "Mostrando registros del 0 al 0",
      sInfoFiltered: "(filtrado de un total de _MAX_ registros)",
      sInfoPostFix: "",
      sSearch: "Buscar:",
      sUrl: "",
      sInfoThousands: ",",
      sLoadingRecords: "Cargando...",
      oPaginate: {
        sFirst: "Primero",
        sLast: "Último",
        sNext: "Siguiente",
        sPrevious: "Anterior",
      },
      oAria: {
        sSortAscending: ": Activar para ordenar la columna de manera ascendente",
        sSortDescending:
          ": Activar para ordenar la columna de manera descendente",
      },
    },
  });
  
 
 
  //mostrar contras
  
  $(".tablausuarios").on("click", ".btnenviar-contrase", function () {
    var idContrase = $(this).attr("idContrase");
    var idnrosis = $(this).attr("idnrosis");


    for(var i=0; i<=idnrosis;i++){
    
    

    var datos = new FormData();
  
    datos.append("idContrase", idContrase);
    datos.append(("idnsistemasait"), $(this).attr(("idnsistemasait"+i)));

      $.ajax({
        url: "ajax/contrase.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",

        success: function (respuesta) {
                
          $("#idsis"+respuesta["id_sistemasait"]).val(respuesta["con_contrase"]+"");
                    
        },
        
      });
  
    }



  });


  $(".enviosusuarios").on("click", ".btneditar-contrase", function () {
    var idContrase = $(this).attr("idContrasee");
    var idnrosiss = $(this).attr("idnrosiss");


    for(var i=0; i<=idnrosiss;i++){
    
    

    var datos = new FormData();
  
    datos.append("idContrase", idContrase);
    datos.append(("idnsistemasait"), $(this).attr(("idnsistemasaitt"+i)));

      $.ajax({
        url: "ajax/contrase.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",

        success: function (respuesta) {
          
          $("#idsiss"+respuesta["id_sistemasait"]).val(respuesta["con_contrase"]+"");
                    
        },
        
      });
  
    }



  });
  
  
  $(".tablausuarios").on("click", ".btncrear-contraseñas", function () {
    var idContrase = $(this).attr("idContraseee");
    var idnrosis = $(this).attr("idnrosisss");


    for(var i=0; i<=idnrosis;i++){
    
    

    var datos = new FormData();
  
    datos.append("idContrase", idContrase);
    datos.append(("idnsistemasait"), $(this).attr(("idnsistemasaittt"+i)));

      $.ajax({
        url: "ajax/contrase.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",

        success: function (respuesta) {
                
          $("#idsisss"+respuesta["id_sistemasait"]).val("");
                    
          //respuesta["con_contrase"]
        },
        
      });
  
    }



  });
  
