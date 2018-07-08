var x;
x = $(document);
x.ready(inicializarEventos);

function inicializarEventos() {
    loadDataTableProcess();
    tooltip();
    rgProceso();
}

function rgProceso() {
    $('#formregistroproceso').submit(function(event) {
        alert('ff');
        return;

    })
}

function loadDataTableProcess() {
    $('#example1').DataTable({
        "bDeferRender": true,
        "ajax": "../controlador/loadListController.php?action=process",
        "columns": [
            { "data": "id" },
            { "data": "paterno" },
            { "data": "materno" },
            { "data": "nombre" },
            { "data": "usuario" },

        ],
        "sPaginationType": "full_numbers",
        "oLanguage": {
            "sProcessing": "Procesando...",
            "sLengthMenu": 'Mostrar <select>' +
                '<option value="10">10</option>' +
                '<option value="20">20</option>' +
                '<option value="30">30</option>' +
                '<option value="40">40</option>' +
                '<option value="50">50</option>' +
                '<option value="-1">Todos</option>' +
                '</select> registros',
            "sZeroRecords": "No se encontraron resultados",
            "sEmptyTable": "Ningún dato disponible en esta tabla",
            "sInfo": "Mostrando del (_START_ al _END_) de un total de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando del 0 al 0 de un total de 0 registros",
            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix": "",
            "sSearch": "Filtrar:",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Por favor espere - cargando...",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        }
    });
}

function tooltip() {
    $('[data-toggle="tooltip"]').tooltip();
}