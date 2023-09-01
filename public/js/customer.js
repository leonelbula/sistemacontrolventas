rutabase = document.getElementById("customerall").value;
/*$.ajax({
    url: rutabase,
    success: function (response) {
        console.log("respuesta", response);
    },
});
*/
$(".tablaclienteventa").DataTable({
    ajax: rutabase,
    deferRender: true,
    retrieve: true,
    processing: true,
    language: {
        sProcessing: "Procesando...",
        sLengthMenu: "Mostrar _MENU_ registros",
        sZeroRecords: "No se encontraron resultados",
        sEmptyTable: "Ningún dato disponible en esta tabla",
        sInfo: "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
        sInfoEmpty: "Mostrando registros del 0 al 0 de un total de 0",
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
            sSortAscending:
                ": Activar para ordenar la columna de manera ascendente",
            sSortDescending:
                ": Activar para ordenar la columna de manera descendente",
        },
    },
});

rutabaseId = document.getElementById("customerget").value;

$(".tablaclienteventa tbody").on("click", "button.agregarCliente", function () {
    var idCliente = $(this).attr("idCliente");

    $("#modalAgregarCliente").modal("hide");

    var datos = new FormData();
    datos.append("id", idCliente);

    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    $.ajax({
        url: rutabaseId,
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function (respuesta) {
            console.log("Respuesta", respuesta);
            var idCliente = respuesta.data[0]["id"];
            var Nit = respuesta.data[0]["identification_card"];
            var Nombre = respuesta.data[0]["full_name"];
            var Direccion = respuesta.data[0]["address"];
            var Ciudad = respuesta.data[0]["city"];
            var Telefono = respuesta.data[0]["phone"];

            $("#IdCliente").val(idCliente);
            $("#nombre").val(Nombre);
            $("#nit").val(Nit);
            $("#direccion").val(Direccion);
            $("#ciudad").val(Ciudad);
            $("#telefono").val(Telefono);
        },
    });
});

var idQuitarCliente = [];

localStorage.removeItem("quitarCliente");

$(".cabeceraVenta").on("click", "button.quitarCliente", function () {

    $(this).parent().parent().remove();

    var idCliente = $(this).attr("idCliente");


    if (localStorage.getItem("quitarCliente") == null) {
        idQuitarCliente = [];
    } else {
        idQuitarCliente.concat(localStorage.getItem("quitarCliente"));
    }
    idQuitarCliente.push({ idCliente: idCliente });

    localStorage.setItem("quitarCliente", JSON.stringify(idQuitarCliente));

    $("button.recuperarBoton[idCliente='" + idCliente + "']").removeClass(
        "btn-default"
    );

    $("button.recuperarBoton[idCliente='" + idCliente + "']").addClass(
        "btn-primary agregarCliente"
    );

    $("button.agregarCliente").addClass("btn-primary agregarCliente");

    $("button.agregarCliente").removeClass("disabled");
    location.reload();
});

$(".seleccionarTipoventa").change(function () {
    var tipo = $(this).val();
    if (tipo == 0) {
        console.log("respuesta", tipo);
      
        $(".plazoVenta").prop("disabled", "disabled");
    } else {
        $(".plazoVenta").attr("disabled", false);
    }
});
