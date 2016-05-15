$(document).ready(function () {
    showValuesPOI();
});

function validateUserPassword() {

}


function showValuesPOI() {
    showTipoPoi();
    showTransportePoi();
    showEntornPoi();
    showCountryPoi();
    showCityPoi();
}


function showTipoPoi(){
    var tipoPOI = jQuery('#checkTipoPOI');
    var showTipo = jQuery('#selectTipoPOI');
    $(tipoPOI).click(function (event) {
        if (tipoPOI.is(':checked')) {
            showTipo.show();
        } else {
            showTipo.hide();
        }
    });
}

function showTransportePoi(){
    var tipoPOI = jQuery('#checkTransportePOI');
    var showTipo = jQuery('#selectTransportePOI');
    $(tipoPOI).click(function (event) {
        if (tipoPOI.is(':checked')) {
            showTipo.show();
        } else {
            showTipo.hide();
        }
    });
}

function showEntornPoi(){
    var tipoPOI = jQuery('#checkEntornoPOI');
    var showType = jQuery('#selectEntornoPOI');
    $(tipoPOI).click(function (event) {
        if (tipoPOI.is(':checked')) {
            showType.show();
        } else {
            showType.hide();
        }
    });
}

function showCountryPoi(){
    var tipoPOI = jQuery('#checkPaisPOI');
    var showType = jQuery('#selectPaisPOI');
    $(tipoPOI).click(function (event) {
        if (tipoPOI.is(':checked')) {
            showType.show();
        } else {
            showType.hide();
        }
    });
}
function showCityPoi(){
    var tipoPOI = jQuery('#checkCiudadPOI');
    var showType = jQuery('#selectCiudadPOI');
    $(tipoPOI).click(function (event) {
        if (tipoPOI.is(':checked')) {
            showType.show();
        } else {
            showType.hide();
        }
    });
}