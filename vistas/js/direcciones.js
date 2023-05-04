$(".tabladirecciones").DataTable({
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


$(".limpiardirecciones").on("click", ".crear-direcciones", function(){
	$("#limdirecciones").val("");
	

})

/*EDITAR USUARIOI*/

$(".tabladirecciones").on("click", ".btneditardirecciones", function(){

	var iddirecciones2 = $(this).attr("iddirecciones2");

	//console.log(iddirecciones2);

	var datos = new FormData();

	datos.append("iddirecciones2", iddirecciones2);


	$.ajax({

		url:"ajax/direcciones.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function (respuesta) {
			           
			$('input[name="id_direccionesE"]').val(respuesta["id_direcciones"]);
			$('input[name="nom_direccionesE"]').val(respuesta["nom_direcciones"]);

		}


	})

})












/**ELIMINAR direcciones */

$(".tabladirecciones").on("click", ".btneliminardirecciones", function(){

	var iddirecciones1 = $(this).attr("iddirecciones1");
	
	
	swal({
		title: '¿Está seguro de eliminar esta direccion?',
		text: "¡Si no lo está puede cancelar la acción!",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		cancelButtonText: 'Cancelar',
		confirmButtonText: 'Si, eliminar direccion!'
	}).then(function(result){


		if (result.value) {

			var datos = new FormData();
			datos.append("iddirecciones1", iddirecciones1);
					
			$.ajax({

				url: "ajax/direcciones.ajax.php",
				method: "POST",
				data: datos,
				cache: false,
				contentType: false,
				processData: false,
				success:function (respuesta) {					

					if (respuesta == "ok") {
						swal({
							type: "success",
							title: "¡CORRECTO!",
							text: "La direccion ha sido borrado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar"
						}).then(function (result) {

							if (result.value){

								window.location = "direcciones";
								
                     }
                })

             }

          }

        })

      }

    })

})