$(".tablapuestos").DataTable({
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


$(".limpiarpuestos").on("click", ".crear-puestos", function(){
	$("#limpuestos").val("");
	

})

/*EDITAR USUARIOI*/

$(".tablapuestos").on("click", ".btneditarpuestos", function(){

	var idpuestos2 = $(this).attr("idpuestos2");

	//console.log(idpuestos2);

	var datos = new FormData();

	datos.append("idpuestos2", idpuestos2);


	$.ajax({

		url:"ajax/puestos.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function (respuesta) {
			           
			$('input[name="id_puestosE"]').val(respuesta["id_puestos"]);
			$('input[name="nom_puestosE"]').val(respuesta["nom_puestos"]);

		}


	})

})












/**ELIMINAR puestos */

$(".tablapuestos").on("click", ".btneliminarpuestos", function(){

	var idpuestos1 = $(this).attr("idpuestos1");
	
	
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
			datos.append("idpuestos1", idpuestos1);
					
			$.ajax({

				url: "ajax/puestos.ajax.php",
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

								window.location = "puestos";
								
                     }
                })

             }

          }

        })

      }

    })

})