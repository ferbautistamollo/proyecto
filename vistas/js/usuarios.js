$(".tablausuarios").DataTable({
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


window.addEventListener('load', function() {
  const botonLimpiar = document.querySelector('#limpiar');
  botonLimpiar.addEventListener('click', function() {

    var fechaActual = new Date().toISOString().slice(0, 10);

    document.querySelector('#inputt1').value = '';
    document.querySelector('#inputt2').value = '';
    document.querySelector('#inputt3').value = '';
    document.querySelector('#inputt4').value = '';
    document.querySelector('#inputt5').value = '';
    document.querySelector('#inputt6').value = '';
    document.querySelector('#inputt13').value = '0';
    document.querySelector('#inputt14').value = fechaActual;
    document.querySelector('#inputt15').value = fechaActual;
    const miSelect = document.querySelector('#inputt7');
    miSelect.value = '4';

    document.querySelector('#inputt8').selectedIndex = 0;
    document.querySelector('#inputt9').selectedIndex = 0;
    document.querySelector('#inputt10').selectedIndex = 0;
    document.querySelector('#inputt11').selectedIndex = 0;
    document.querySelector('#inputt12').selectedIndex = 0;
   

  });
});




$(".limpiarregistro").on("click", ".crear-usuarios", function () {
  
  var fechaActual = new Date().toISOString().slice(0, 10);
 
  $("#inputt1").val("");
  $("#inputt2").val("");
  $("#inputt3").val("");
  $("#inputt4").val("");
  $("#inputt5").val("");
  $("#inputt6").val("");
  $("#inputt13").val("0");

  document.querySelector('#inputt8').selectedIndex = 0;
    document.querySelector('#inputt9').selectedIndex = 0;
    document.querySelector('#inputt10').selectedIndex = 0;
    document.querySelector('#inputt11').selectedIndex = 0;
    document.querySelector('#inputt12').selectedIndex = 0;

    document.getElementById("inputt5").addEventListener("input", function(evt) {
      var input = evt.target;
      var regex = /[^0-9]/g;
      input.value = input.value.replace(regex, "");
    });

  document.getElementById("inputt13").addEventListener("input", function(evt) {
    var input = evt.target;
    var regex = /[^0-9]/g;
    input.value = input.value.replace(regex, "");
  });
  
  $("#inputt14").val(fechaActual);
  $("#inputt15").val(fechaActual);

  const miSelect = document.querySelector('#inputt7');
  miSelect.value = '4';
  

});




   
/*EDITAR USUARIOI*/

$(".tablausuarios").on("click", ".btneditar-usuarios", function () {
  var idUsuario = $(this).attr("idUsuarios3");
  
  //console.log(idUsuarios3);

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
      $("#idusu3").val(respuesta["id_usuarios"]);
      $("#apellidou3").val(respuesta["ap_usuarios"]);
      $("#nombreu3").val(respuesta["nom_usuarios"]);
      $("#usuariou3").val(respuesta["usu_usuarios"]);
      $("#ci3").val(respuesta["ci_usuarios"].split(" ")[0]);
      $("#correo3").val(respuesta["correo_usuarios"]);
      $("#contrase3").val("S1st3m4s");
      $("#rol3").val(respuesta["id_roles"]);

      $("#direcciones3").val(respuesta["id_direcciones"]);
      $("#unidades3").val(respuesta["id_unidades"]);
      $("#areas3").val(respuesta["id_areas"]);

      $("#cargos3").val(respuesta["id_cargos"]);
      $("#puestos3").val(respuesta["id_puestos"]);
      
      $("#fecha_inc3").val(respuesta["fecha_inc"]);
      $("#fecha_nac3").val(respuesta["fecha_nac"]);

      $("#item3").val(respuesta["item_usuarios"]);

      document.getElementById("ci3").addEventListener("input", function(evt) {
        var input = evt.target;
        var regex = /[^0-9]/g;
        input.value = input.value.replace(regex, "");
      });

      document.getElementById("item3").addEventListener("input", function(evt) {
        var input = evt.target;
        var regex = /[^0-9]/g;
        input.value = input.value.replace(regex, "");
      });

      const miSelect1 = document.querySelector('#ex_usuarios1');
      miSelect1.value = respuesta["ci_usuarios"].split(" ")[1];

      
    },
  });
});





/**ELIMINAR USUARIO */
$(".tablausuarios").on("click", ".btneliminarusuarios", function () {
  var idusuarios2 = $(this).attr("idusuarios2");

  swal({
    title: "¿Está seguro de eliminar este Usuario?",
    text: "¡Si no lo está puede cancelar la acción!",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    cancelButtonText: "Cancelar",
    confirmButtonText: "Si, eliminar Usuario!",
  }).then(function (result) {
    if (result.value) {
      var datos = new FormData();
      
      datos.append("idusuarios2", idusuarios2);

      $.ajax({
        url: "ajax/usuarios.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        success: function (respuesta) {
          
          if (respuesta) {
            
            swal({
              type: "success",
              title: "¡CORRECTO!",
              text: "El usuario ha sido borrado correctamente",
              showConfirmButton: true,
              confirmButtonText: "Cerrar",
            }).then(function (result) {
              if (result.value) {
                window.location = "eliminar";
                
              }
            });

          }

        },

      });
    }
  });
});

$(".tablausuarios").on("click", ".btneliminarusuarios1", function () {
  var idusuarios21 = $(this).attr("idusuarios21");

  swal({
    title: "¿Está seguro de inhabilitar este Usuario?",
    text: "¡Si no lo está puede cancelar la acción!",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    cancelButtonText: "Cancelar",
    confirmButtonText: "Si, inhabilitar Usuario!",
  }).then(function (result) {
    if (result.value) {
      var datos = new FormData();
      
      datos.append("idusuarios21", idusuarios21);

      $.ajax({
        url: "ajax/usuarios.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        success: function (respuesta) {
          
          if (respuesta) {
            
            swal({
              type: "success",
              title: "¡CORRECTO!",
              text: "El usuario ha sido inhabilitado correctamente",
              showConfirmButton: true,
              confirmButtonText: "Cerrar",
            }).then(function (result) {
              if (result.value) {
                window.location = "usuarios";
                
              }
            });

          }

        },

      });
    }
  });
});

$(".tablausuarios").on("click", ".btneliminarusuarios2", function () {
  var idusuarios22 = $(this).attr("idusuarios22");

  swal({
    title: "¿Está seguro de habilitar este Usuario?",
    text: "¡Si no lo está puede cancelar la acción!",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    cancelButtonText: "Cancelar",
    confirmButtonText: "Si, Habilitar Usuario!",
  }).then(function (result) {
    if (result.value) {
      var datos = new FormData();
      
      datos.append("idusuarios22", idusuarios22);

      $.ajax({
        url: "ajax/usuarios.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        success: function (respuesta) {
          
          if (respuesta) {
            
            swal({
              type: "success",
              title: "¡CORRECTO!",
              text: "El usuario habilitado correctamente",
              showConfirmButton: true,
              confirmButtonText: "Cerrar",
            }).then(function (result) {
              if (result.value) {
                window.location = "eliminar";
                
              }
            });

          }

        },

      });
    }
  });
});

function validarUsuario() {
 
  var valorInput1 = document.getElementById("inputt1").value.split(" ")[0].toLowerCase();
  var valorInput2 = document.getElementById("inputt2").value.split(" ")[0].toLowerCase();
  var valorInput3 = document.getElementById("inputt5").value;
  
  document.getElementById("inputt6").value = valorInput3;
  
  if(valorInput1!='' && valorInput2==''){
    verificarUsuario(valorInput1);
    document.getElementById("inputt3").value = valorInput1;
    document.getElementById("inputt4").value = valorInput1+"@ait.gob.bo";
  }

  if(valorInput1=='' && valorInput2!=''){
    verificarUsuario(valorInput2);
    document.getElementById("inputt3").value = valorInput2;
    document.getElementById("inputt4").value = valorInput2+"@ait.gob.bo";
  }
  
  if(valorInput1!='' && valorInput2!=''){  
 
    document.getElementById("inputt3").value = valorInput2.slice(0,1)+valorInput1;
    document.getElementById("inputt4").value = valorInput2.slice(0,1)+valorInput1+"@ait.gob.bo";
    verificarUsuario1(valorInput2.slice(0,1)+valorInput1);
  }

  var mensajeValidacion = document.getElementById("mensaje-validacion");

  function verificarUsuario(usuario) {
    
    if (usuario != '') {
      // Hacer una solicitud AJAX al servidor para verificar si el usuario ya existe
      var xhr = new XMLHttpRequest();
      xhr.open("POST", "ajax/usuarios.ajax.php", true);
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          // Si la respuesta es "existe", mostrar un mensaje de validación
          if (this.responseText ==1) {
                       
            mensajeValidacion.innerHTML = "Usuario REPETIDO";
            mensajeValidacion.disabled = true;
          } else {    
                   
            mensajeValidacion.innerHTML = "Usuario VALIDO"; 
            mensajeValidacion.disabled = false;
          }
        }
      };
      xhr.send("input111=" + usuario);
    } else {
      mensajeValidacion.innerHTML = "";
    }

    

  }

  function verificarUsuario1(usuario) {

    
    if (usuario != '') {
      // Hacer una solicitud AJAX al servidor para verificar si el usuario ya existe
      var xhr = new XMLHttpRequest();
      xhr.open("POST", "ajax/usuarios.ajax.php", true);
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          // Si la respuesta es "existe", mostrar un mensaje de validación
          if (this.responseText ==1) {                      
            mensajeValidacion.innerHTML = "Usuario REPETIDO";
            mensajeValidacion.disabled = true;
          } else {
            mensajeValidacion.innerHTML = "Usuario VALIDO"; 
            mensajeValidacion.disabled = false;
          }
        }
      };

      xhr.send("input111=" + usuario);
    } else {
      mensajeValidacion.innerHTML = "";
    }

    

  }


}

function validarUsuario1() {
 
  var valorInput3 = document.getElementById("inputt3").value.toLowerCase();
 
  document.getElementById("inputt4").value = valorInput3+"@ait.gob.bo";

  verificarUsuario(valorInput3);
  
  

  var mensajeValidacion = document.getElementById("mensaje-validacion");


  function verificarUsuario(usuario) {
    
    if (usuario != '') {
      // Hacer una solicitud AJAX al servidor para verificar si el usuario ya existe
      var xhr = new XMLHttpRequest();
      xhr.open("POST", "ajax/usuarios.ajax.php", true);
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          // Si la respuesta es "existe", mostrar un mensaje de validación
          if (this.responseText==1) { 
                  
            mensajeValidacion.innerHTML = "Usuario REPETIDO";
            mensajeValidacion.disabled = true;
            
          } else {
              
            mensajeValidacion.innerHTML = "Usuario VALIDO"; 
            mensajeValidacion.disabled = false;           
          }
        }
      };
      xhr.send("input111=" + usuario);
    } else {
      mensajeValidacion.innerHTML = "";
    }

    

  }


}

