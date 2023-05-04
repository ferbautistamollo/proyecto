$(".tablaroles").DataTable({
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


$(".limpiarrol").on("click", ".crear-rol", function(){
	$("#limrol").val("");
	

})

/*EDITAR USUARIOI*/

$(".tablaroles").on("click", ".btneditarroles", function(){

	var idroles2 = $(this).attr("idroles2");

	//console.log(idroles2);

	var datos = new FormData();

	datos.append("idroles2", idroles2);


	$.ajax({

		url:"ajax/roles.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function (respuesta) {
			           
			$('input[name="id_rolE"]').val(respuesta["id_roles"]);
			$('input[name="nom_rolE"]').val(respuesta["nom_rol"]);

		}


	})

})












/**ELIMINAR roles */

$(".tablaroles").on("click", ".btneliminarroles", function(){

	var idroles1 = $(this).attr("idroles1");
	
	
	swal({
		title: '¿Está seguro de eliminar este rol?',
		text: "¡Si no lo está puede cancelar la acción!",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		cancelButtonText: 'Cancelar',
		confirmButtonText: 'Si, eliminar rol!'
	}).then(function(result){


		if (result.value) {

			var datos = new FormData();
			datos.append("idroles1", idroles1);
					
			$.ajax({

				url: "ajax/roles.ajax.php",
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
							text: "El rol ha sido borrado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar"
						}).then(function (result) {

							if (result.value){

								window.location = "roles";
								
                     }
                })

             }

          }

        })

      }

    })

})