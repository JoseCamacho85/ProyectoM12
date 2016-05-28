    var tipo = null;
    var transporte = null;
    var entorno = null;
    var pais = null;
    var ciudad = null;
    var data = null;

    $("#selectTipoPOI").on("click", function () {
        tipo = {
            checkTipoPOI: $("#checkTipoPOI").val(),
            selectTipoPOI: $("#selectTipoPOI").val()
        };

    });
    $('#checkTipoPOI').click(function () {
        if ($('#checkTipoPOI').prop('checked')) {
            tipo = {
                checkTipoPOI: $("#checkTipoPOI").val(),
                selectTipoPOI: $("#selectTipoPOI").val()
            }
        } else {
            tipo = null;
        }

    });
    ////////////////////////////////////////////////////////////////////////////
    $("#selectTransportePOI").on("click", function () {
        transporte = {
            "checkTransportePOI": $("#checkTransportePOI").val(),
            "selectTransportePOI": $("#selectTransportePOI").val()
        };

    });

    $('#checkTransportePOI').click(function () {
        if ($('#checkTransportePOI').prop('checked')) {
            transporte = {
                checkTransportePOI: $("#checkTransportePOI").val(),
                selectTransportePOI: $("#selectTransportePOI").val()
            }
        } else {
            transporte = null;
        }

    });
    ////////////////////////////////////////////////////////////////////////////
    $("#selectEntornoPOI").on("click", function () {
        entorno = {
            "checkEntornoPOI": $("#checkEntornoPOI").val(),
            "selectEntornoPOI": $("#selectEntornoPOI").val()
        };

    });

    $('#checkEntornoPOI').click(function () {
        if ($('#checkEntornoPOI').prop('checked')) {
            entorno = {
                checkEntornoPOI: $("#checkEntornoPOI").val(),
                selectEntornoPOI: $("#selectEntornoPOI").val()
            }
        } else {
            entorno = null;
        }

    });
    ////////////////////////////////////////////////////////////////////////////
    $("#selectPaisPOI").on("click", function () {
        pais = {
            "checkPaisPOI": $("#checkPaisPOI").val(),
            "selectPaisPOI": $("#selectPaisPOI").val()
        };

    });

    $('#checkPaisPOI').click(function () {
        if ($('#checkPaisPOI').prop('checked')) {
            pais = {
                checkPaisPOI: $("#checkPaisPOI").val(),
                selectPaisPOI: $("#selectPaisPOI").val()
            }
        } else {
            pais = null;
        }

    });
    ////////////////////////////////////////////////////////////////////////////
    $("#selectCiudadPOI").on("click", function () {
        ciudad = {
            "checkCiudadPOI": $("#checkCiudadPOI").val(),
            "selectCiudadPOI": $("#selectCiudadPOI").val()
        };

    });

    $('#checkCiudadPOI').click(function () {
        if ($('#checkCiudadPOI').prop('checked')) {
            ciudad = {
                checkCiudadPOI: $("#checkCiudadPOI").val(),
                selectCiudadPOI: $("#selectCiudadPOI").val()
            }
        } else {
            ciudad = null;
        }

    });

    $("#searchPOI").click(function () {

        data = $.extend(tipo, transporte, entorno, pais, ciudad);
        console.log(data);
        $.ajax({
            async: "true",
            type: "POST",
            url: "../controller/controllerSearchPOI.php",
            data: data,
            success: function (data) {
                $("#seleccionados").html(data);

            }
        });

        console.log(data);
    });
