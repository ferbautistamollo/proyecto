$(".tablacargos").DataTable({
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


$(".limpiarcargos").on("click", ".crear-cargos", function(){
	$("#limcargos").val("");
	

})

/*EDITAR USUARIOI*/

$(".tablacargos").on("click", ".btneditarcargos", function(){

	var idcargos2 = $(this).attr("idcargos2");

	//console.log(idcargos2);

	var datos = new FormData();

	datos.append("idcargos2", idcargos2);


	$.ajax({

		url:"ajax/cargos.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function (respuesta) {
			           
			$('input[name="id_cargosE"]').val(respuesta["id_cargos"]);
			$('input[name="nom_cargosE"]').val(respuesta["nom_cargos"]);

		}


	})

})












/**ELIMINAR cargos */

$(".tablacargos").on("click", ".btneliminarcargos", function(){

	var idcargos1 = $(this).attr("idcargos1");
	
	
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
			datos.append("idcargos1", idcargos1);
					
			$.ajax({

				url: "ajax/cargos.ajax.php",
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

								window.location = "cargos";
								
                     }
                })

             }

          }

        })

      }

    })

})