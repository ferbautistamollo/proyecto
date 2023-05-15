/*$(".enviousuarios").DataTable({
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
  
  */
  


const checkboxese = document.querySelectorAll('.myCheckboxe');

  // Agrega un evento 'onclick' a cada input
  checkboxese.forEach(checkbox => {
    checkbox.addEventListener('click', actualizarValorDBe);
  });

  function actualizarValorDBe() {
    // Recupera el estado del input correspondiente
    const idval1 = this.checked ? 1 : 0;

    // Recupera el identificador del usuario del atributo 'data-usuario'
    const idsus1 = this.getAttribute('idsus1');

    

    // Envía una solicitud HTTP para actualizar el valor en la base de datos
    fetch('ajax/usuarios.ajax.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded'
      },
      body: 'idsus1=' + encodeURIComponent(idsus1) + '&idval1=' + encodeURIComponent(idval1)
    })
    .then(response => {
      
      if (!response.ok) {
        throw new Error('Error al actualizar el valor en la base de datos');
        

      }
      //location.reload();
    })
    .catch(error => {
      console.error(error);
    });

   
   
  }


  const checkboxesr = document.querySelectorAll('.myCheckboxr');

  // Agrega un evento 'onclick' a cada input
  checkboxesr.forEach(checkbox => {
    checkbox.addEventListener('click', actualizarValorDBr);
  });

  function actualizarValorDBr() {
    // Recupera el estado del input correspondiente
    const idval = this.checked ? 1 : 0;

    // Recupera el identificador del usuario del atributo 'data-usuario'
    const idsus = this.getAttribute('idsus');

    

    // Envía una solicitud HTTP para actualizar el valor en la base de datos
    fetch('ajax/usuarios.ajax.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded'
      },
      body: 'idsus=' + encodeURIComponent(idsus) + '&idval=' + encodeURIComponent(idval)
    })
    .then(response => {
      
      if (!response.ok) {
        throw new Error('Error al actualizar el valor en la base de datos');
        

      }
      //location.reload();
    })
    .catch(error => {
      console.error(error);
    });

   
   
  }