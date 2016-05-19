<?php
include ("header.php");
include 'makeDropdownLists.php';
?>
<div class="container-fluid text-center">    
    <div class="row content">
        <div class="col-sm-12 text-center"> 
            <h2>Buscar POI</h2>
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
                <button id="searchPOI" class="btn btn-info">Buscar Puntos de interes</button>

                <!--</form>-->
                <a href="showPOI.php"><button class="btn btn-info">VOLVER</button></a>
            </div>
            <div id="seleccionados">
                ELEMENTOS SELECCIONADOS APARECERÁN AQUÍ
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var tipo = null;
    var transporte = null;
    var entorno = null;
    var pais = null;
    var ciudad = null;
    var data = null;
    
    
    
    $("#selectTipoPOI").on("change", function () {
        tipo = {
            checkTipoPOI: $("#checkTipoPOI").val(),
            selectTipoPOI: $("#selectTipoPOI").val(),
        };
        $('#checkTipoPOI').change(function () {
            if ($('#checkTipoPOI').prop('checked')) {
                tipo = {
                    checkTipoPOI: $("#checkTipoPOI").val(),
                    selectTipoPOI: $("#selectTipoPOI").val(),
                }
            } else {
                tipo = {
                    checkTipoPOI: null,
                    selectTipoPOI: null
                };
            }

        });
    });

    $("#selectTransportePOI").on("change", function () {
        transporte = {
            "checkTransportePOI": $("#checkTransportePOI").val(),
            "selectTransportePOI": $("#selectTransportePOI").val(),
        };
        $('#checkTransportePOI').change(function () {
            if ($('#checkTransportePOI').prop('checked')) {
                transporte = {
                    checkTransportePOI: $("#checkTransportePOI").val(),
                    selectTransportePOI: $("#selectTransportePOI").val(),
                }
            } else {
                transporte = {
                    checkTransportePOI: null,
                    selectTransportePOI: null
                };
            }
        });
    });

    $("#selectEntornoPOI").on("change", function () {
        entorno = {
            "checkEntornoPOI": $("#checkEntornoPOI").val(),
            "selectEntornoPOI": $("#selectEntornoPOI").val(),
        };
        $('#checkEntornoPOI').change(function () {
            if ($('#checkEntornoPOI').prop('checked')) {
                entorno = {
                    checkEntornoPOI: $("#checkEntornoPOI").val(),
                    selectEntornoPOI: $("#selectEntornoPOI").val(),
                }
            } else {
                entorno = {
                    checkEntornoPOI: null,
                    selectEntornoPOI: null
                };
            }
        });
    });
    /*
    $("#selectPaisPOI").on("change", function () {
        pais = {
            "checkPaisPOI": $("#checkPaisPOI").val(),
            "selectPaisPOI": $("#selectPaisPOI").val()
        };
        $('#checkPaisPOI').change(function () {
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

    $("#selectCiudadPOI").on("change", function () {
        ciudad = {
            "checkCiudadPOI": $("#checkCiudadPOI").val(),
            "selectCiudadPOI": $("#selectCiudadPOI").val()
        };
        $('#checkCiudadPOI').change(function () {
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
    });
*/

    $("#searchPOI").click(function () {
        data = $.extend(tipo, transporte, entorno);
        $.ajax({
            async: "true",
            type: "POST",
            url: "../controller/controllerSearchPOI.php",
            data: data,
            success: function (data) {
                $("#seleccionados").html(data);

            }
        });
    });


</script>


<?php
include ("footer.php");
?>