<?php
include ("header.php");
include 'makeDropdownLists.php';
?>
<a href="showPOI.php"><button class="btn btn-info">VOLVER</button></a> 
<div class="container-fluid text-center">    
    <div class="row content">
        <div class="col-sm-12 text-center">

            <h2>búsqueda avanzada</h2>
            <div>
                <!-- Script para generarar dropdown ciudades-->
                <script type="text/javascript"><?php include ("js/cambioPais.js"); ?></script>

                <!-- <form type="POST">action="../controller/controllerSearchPOI.php"--> 
                <div class="container col-md-12" style="background: #E7FFFF;">    
                    <div class="col-md-offset-1 col-md-2">
                        <p>Tipo <input type="checkbox" id="checkTipoPOI" name="checkTipoPOI"></p>
                        <select id="selectTipoPOI" id="selectTipoPOI" name="selectTipoPOI" class="form-control" style="display:none">
                            <?php makeDropdownlistTipos(); ?>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <p>Transporte <input type="checkbox" id="checkTransportePOI" name="checkTransportePOI"></p>
                        <select id="selectTransportePOI" id="selectTransportePOI" name="selectTransportePOI"  class="form-control" style="display:none">
                            <?php makeDropdownlistTransportes(); ?>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <p>Entorno  <input type="checkbox" id="checkEntornoPOI" name="checkEntornoPOI"></p>
                        <select id="selectEntornoPOI" id="selectEntornoPOI" name="selectEntornoPOI"  class="form-control" style="display:none">
                            <?php makeDropdownlistEntornos(); ?>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <p>Pais  <input type="checkbox" id="checkPaisPOI" name="checkPaisPOI"></p>
                        <select id="selectPaisPOI" id="selectPaisPOI" name="selectPaisPOI"  class="form-control" style="display:none" onchange="cambioPais(this.value)">
                            <?php makeDropdownlistPaises(); ?>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <p>Ciudad  <input type="checkbox" id="checkCiudadPOI" name="checkCiudadPOI"></p>
                        <select id="selectCiudadPOI" id="selectCiudadPOI" name="selectCiudadPOI"  class="form-control" style="display:none">
                            <?php makeDropdownlistCiudades(); ?>
                        </select>
                    </div>
                </div>
                <button id="searchPOI" class="btn btn-info">Buscar puntos de interés</button>                
            </div>

        </div>
    </div>
</div>
<div class="camposOb" id="seleccionados">
    El resultado de la búsqueda aparecerá aquí
</div>
<script type="text/javascript">
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

    /*
     $('#checkTipoPOI').click(function () {
     if ($('#checkTipoPOI').prop('checked')) {
     //$("#selectTipoPOI").on("change", function () {
     tipo = {
     checkTipoPOI: $("#checkTipoPOI").val(),
     selectTipoPOI: $("#selectTipoPOI").val()
     }
     //});
     } else {
     tipo = {
     checkTipoPOI: null,
     selectTipoPOI: null
     }
     }
     
     });
     $('#checkTipoPOI').click(function () {
     if ($('#checkTransportePOI').prop('checked')) {
     $("#selectTransportePOI").on("change", function () {
     tipo = {
     checkTransportePOI: $("#checkTransportePOI").val(),
     selectTransportePOI: $("#selectTransportePOI").val()
     }
     });
     } else {
     transporte = {
     checkTransportePOI: null,
     checkTransportePOI: null
     }
     }
     
     });*/
    /*
     $("#selectTransportePOI").on("click", function () {
     transporte = {
     "checkTransportePOI": $("#checkTransportePOI").val(),
     "selectTransportePOI": $("#selectTransportePOI").val()
     };
     
     });
     
     $('#checkEntornoPOI').click(function () {
     if ($('#checkEntornoPOI').prop('checked')) {
     tipo = {
     checkEntornoPOI: $("#checkEntornoPOI").val(),
     selectEntornoPOI: $("#selectEntornoPOI").val()
     }
     } else {
     delete data.checkEntornoPOI;
     delete data.selectEntornoPOI;
     }
     
     });
     
     /*
     $("#selectEntornoPOI").on("click", function () {
     entorno = {
     "checkEntornoPOI": $("#checkEntornoPOI").val(),
     "selectEntornoPOI": $("#selectEntornoPOI").val()
     };
     $('#checkEntornoPOI').click(function () {
     if ($('#checkEntornoPOI').prop('checked')) {
     entorno = {
     checkEntornoPOI: $("#checkEntornoPOI").val(),
     selectEntornoPOI: $("#selectEntornoPOI").val()
     }
     } else {
     entorno = {
     checkEntornoPOI: null,
     selectEntornoPOI: null
     };
     }
     });
     });
     $("#selectPaisPOI").on("click", function () {
     pais = {
     "checkPaisPOI": $("#checkPaisPOI").val(),
     "selectPaisPOI": $("#selectPaisPOI").val()
     };
     $('#checkPaisPOI').click(function () {
     if ($('#checkPaisPOI').prop('checked')) {
     pais = {
     checkPaisPOI: $("#checkPaisPOI").val(),
     selectPaisPOI: $("#selectPaisPOI").val()
     }
     } else {
     pais = {
     checkPaisPOI: null,
     selectPaisPOI: null
     };
     }
     });
     });
     $("#selectCiudadPOI").on("click", function () {
     ciudad = {
     "checkCiudadPOI": $("#checkCiudadPOI").val(),
     "selectCiudadPOI": $("#selectCiudadPOI").val()
     };
     $('#checkCiudadPOI').click(function () {
     if ($('#checkCiudadPOI').prop('checked')) {
     ciudad = {
     checkCiudadPOI: $("#checkCiudadPOI").val(),
     selectCiudadPOI: $("#selectCiudadPOI").val()
     }
     } else {
     ciudad = {
     checkCiudadPOI: null,
     selectCiudadPOI: null
     };
     }
     });
     });*/

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


</script>


<?php
include ("footer.php");
?>