$(".enviosusuarios").DataTable({
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


  $(".enviosusuarios").on("click", ".btncrear-contraseñas", function () {
    var idUsuario = $(this).attr("idContraseee");
    var mensajeValidacion = document.getElementById("idusu20");
    var mensajeValidacion1 = document.getElementById("idusu21");
    //console.log(idUsuario);
  
    var datos = new FormData();
  
    datos.append("idUsuario", idUsuario);
  
    $.ajax({
      url: "ajax/usuarios.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType: "json",
  
      success: function (respuesta) {
        $("#idusu20").val(respuesta["nom_usuarios"]);
        $("#idusu").val(respuesta["id_usuarios"]);
        $("#apellidou").val(respuesta["ap_usuarios"]);
        $("#nombreu").val(respuesta["nom_usuarios"]);
        $("#usuariou").val(respuesta["usu_usuarios"]);
  
        mensajeValidacion.innerHTML = respuesta["ap_usuarios"]+" "+respuesta["nom_usuarios"];
        mensajeValidacion1.innerHTML ="Usuario: "+respuesta["usu_usuarios"];
      },
    });
  
    
  });


  $(".enviosusuarios").on("click", ".btnenviar-contrase", function () {
  
    var idUsuario = $(this).attr("idContrase");
   
    
    var mensajeValidacion1 = document.getElementById("idusu091");
  
    //console.log(idUsuario);
  
    var datos = new FormData();
  
    datos.append("idUsuario", idUsuario);
  
    $.ajax({
      url: "ajax/usuarios.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType: "json",
  
      success: function (respuesta) {
        $("#idusu1").val(respuesta["id_usuarios"]);
        $("#apellidou1").val(respuesta["ap_usuarios"]);
        $("#nombreu1").val(respuesta["nom_usuarios"]);
        $("#usuariou1").val(respuesta["usu_usuarios"]);
        $("#correou1").val(respuesta["correo_usuarios"]);
  
       
        mensajeValidacion1.innerHTML =respuesta["correo_usuarios"];
        
      },
    });
  
    
  });


  $(".enviosusuarios").on("click", ".btneditar-contrase", function () {
    var idUsuario = $(this).attr("idContrasee");
    var mensajeValidacion = document.getElementById("idusu05");
    var mensajeValidacion1 = document.getElementById("idusu051");
   
    //console.log(idUsuario);
  
    var datos = new FormData();
  
    datos.append("idUsuario", idUsuario);
  
    $.ajax({
      url: "ajax/usuarios.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType: "json",
  
      success: function (respuesta) {
        $("#idusu5").val(respuesta["id_usuarios"]);
        $("#apellidou5").val(respuesta["ap_usuarios"]);
        $("#nombreu5").val(respuesta["nom_usuarios"]);
        $("#usuariou5").val(respuesta["usu_usuarios"]);
  
        mensajeValidacion.innerHTML = "De: "+respuesta["ap_usuarios"]+" "+respuesta["nom_usuarios"];
        mensajeValidacion1.innerHTML ="Us: "+respuesta["usu_usuarios"];
  
      },
    });
  
    
  });