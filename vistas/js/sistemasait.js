$(".tablasistemasait").DataTable({
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

$(".limpiarsistema").on("click", ".crear-sistemasait", function(){
	$("#limsis").val("");

})

  $(".tablasistemasait").on("click", ".btneliminarsistemasait", function(){

	var idsistemasait1 = $(this).attr("idsistemasait1");
	
	
	swal({
		title: '¿Está seguro de eliminar este Sistema?',
		text: "¡Si no lo está puede cancelar la acción!",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		cancelButtonText: 'Cancelar',
		confirmButtonText: 'Si, eliminar Sistema!'
	}).then(function(result){

		if (result.value) {

			var datos = new FormData();
			datos.append("idsistemasait1", idsistemasait1);
			
			$.ajax({

				url: "ajax/sistemasait.ajax.php",
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
							text: "El sistema ha sido borrado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar"
						}).then(function (result) {

							if (result.value){

								window.location = "sistemasait";
								
                     }
                })

             }

          }

        })

      }

    })

})

$(".tablasistemasait").on("click", ".btneditarsistemasait", function(){

	var idsistemasait2 = $(this).attr("idsistemasait2");

	//console.log(idroles2);

	var datos = new FormData();

	datos.append("idsistemasait2", idsistemasait2);


	$.ajax({

		url:"ajax/sistemasait.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function (respuesta) {
			           
			$('input[name="id_sise"]').val(respuesta["id_sistemasait"]);
			$('input[name="nom_sise"]').val(respuesta["nom_sistemasait"]);
			$('input[name="url_sise"]').val(respuesta["url_sistemasait"]);
			$("#rol3e").val(respuesta["id_roles"]);
		}


	})

})