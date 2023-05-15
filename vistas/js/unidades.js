$(".tablaunidades").DataTable({
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


$(".limpiarunidades").on("click", ".crear-unidades", function(){
	$("#limunidades").val("");
	

})

/*EDITAR USUARIOI*/

$(".tablaunidades").on("click", ".btneditarunidades", function(){

	var idunidades2 = $(this).attr("idunidades2");

	//console.log(idunidades2);

	var datos = new FormData();

	datos.append("idunidades2", idunidades2);


	$.ajax({

		url:"ajax/unidades.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function (respuesta) {
			           
			$('input[name="id_unidadesE"]').val(respuesta["id_unidades"]);
			$('input[name="nom_unidadesE"]').val(respuesta["nom_unidades"]);

		}


	})

})












/**ELIMINAR unidades */

$(".tablaunidades").on("click", ".btneliminarunidades", function(){

	var idunidades1 = $(this).attr("idunidades1");
	
	
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
			datos.append("idunidades1", idunidades1);
					
			$.ajax({

				url: "ajax/unidades.ajax.php",
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

								window.location = "unidades";
								
                     }
                })

             }

          }

        })

      }

    })

})