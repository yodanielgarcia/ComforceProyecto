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
        event.preventDefault();
        var Numeroproceso = $("#Numeroproceso").val();
        var Descripcion = $("#Descripcion").val();
        var Fechacreacion = $("#Fechacreacion").val();
        var Sede = $("#Sede").val();
        var Presupuesto = $("#Presupuesto").val();

        if (Numeroproceso == null || Numeroproceso.length == 0) {
            $("#campoNumeroproceso").addClass("has-error");
            alert("Falta numero proceso");
            return false;
        } else {
            $("#campoNumeroproceso").removeClass("has-error");
        }

        if (Descripcion == null || Descripcion.length == 0) {
            $("#campoDescripcion").addClass("has-error");
            alert("Por favor ingresa Descripcion del producto");
            return false;
        } else {
            $("#campoDescripcion").removeClass("has-error");
        }

        if (Fechacreacion == null || Fechacreacion.length == 0) {
            $("#campoFechacreacion").addClass("has-error");
            alert("Por favor ingresa fecha")
            return false;
        } else {
            $("#campoFechacreacion").removeClass("has-error");
        }

        if (Sede == null || Sede.length == 0) {
            $("#campoSede").addClass("has-error");
            alert("Por favor ingresa tu usuario");
            return false;
        } else {
            $("#campoSede").removeClass("has-error");
        }

        if (Presupuesto == null || Presupuesto.length == 0) {
            $("#campoPresupuesto").addClass("has-error");
            alert("Por favor ingresa un presupuesto");
            return false;
        } else {
            $("#campoPresupuesto").removeClass("has-error");
        }
        $("#notificacion").html("");
        var datos = "action=insertprocess&" + $("#formregistroproceso").serialize();
        $.post("../controlador/usersController.php", datos, function(data) {
            $('#notificacionproceso').html(data);
            $('#notificacionproceso').fadeIn();
        });

    })
}

function traeDatosPROCESOId(user) {
    $("#mensaje1").html("");
    $('#contenido-updateprocesso').html("");
    var id = user.id;
    var datos = "action=updateProceso&id=" + id;
    $.post("../controlador/usersController.php", datos, function(data) {
        $('#contenido-updateprocesso').html(data);
    });
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
            { "data": "acciones" }
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

function upProceso() {
    $("#mensaje1").html("");
    var datos = "action=savedataprocess&" + $("#formactualizarprocess").serialize();
    $.post("../controlador/usersController.php", datos, function(data) {
        $('#mensaje1').html(data);
        $('#mensaje1').fadeIn();
    });
}

function delPROCESO(user) {
    if (confirm('¿Seguro que desea eliminar este proceso?')) {
        $("#mensaje-delete1").html("");
        var id = user.id;
        var datos = "action=deleteproc&id=" + id;
        $.post("../controlador/usersController.php", datos, function(data) {
            $('#mensaje-delete1').prepend(data);
            $('#mensaje-delete1').show('slow');
            $('#mensaje-delete1').fadeOut(5000);
        });
    }
}