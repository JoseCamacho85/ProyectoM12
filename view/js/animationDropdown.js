$(document).ready(function () {
    showValuesPOI();
});

function validateUserPassword() {

}


function showValuesPOI() {
    showTypePoi();
    showTransportPoi();
    showEntornPoi();
    showCountryPoi();
    showCityPoi();
}


function showTypePoi(){
    var typePOI = jQuery('#checkTypePOI');
    var showType = jQuery('#typePOI');
    $(typePOI).click(function (event) {
        if (typePOI.is(':checked')) {
            showType.show();
        } else {
            showType.hide();
        }
    });
}

function showTransportPoi(){
    var typePOI = jQuery('#checkTransportPOI');
    var showType = jQuery('#transportPOI');
    $(typePOI).click(function (event) {
        if (typePOI.is(':checked')) {
            showType.show();
        } else {
            showType.hide();
        }
    });
}

function showEntornPoi(){
    var typePOI = jQuery('#checkEntornPOI');
    var showType = jQuery('#entornPOI');
    $(typePOI).click(function (event) {
        if (typePOI.is(':checked')) {
            showType.show();
        } else {
            showType.hide();
        }
    });
}

function showCountryPoi(){
    var typePOI = jQuery('#checkCountryPOI');
    var showType = jQuery('#countryPOI');
    $(typePOI).click(function (event) {
        if (typePOI.is(':checked')) {
            showType.show();
        } else {
            showType.hide();
        }
    });
}
function showCityPoi(){
    var typePOI = jQuery('#checkCityPOI');
    var showType = jQuery('#cityPOI');
    $(typePOI).click(function (event) {
        if (typePOI.is(':checked')) {
            showType.show();
        } else {
            showType.hide();
        }
    });
}