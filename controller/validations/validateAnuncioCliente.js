$(document).ready(function () {
    validarAnuncio();
});
/**
 * método que comprueba que los valores insertado al crear un anuncio son correctos
 * @returns {undefined}
 */
function validarAnuncio() {

    $("#ok").hide();

    $("#formAnuncio").validate({
        rules: {
            imagenAnuncio: {required: false, minlength: 3},
            tituloAnuncio: {required: true, minlength: 2, maxlength: 15},
            descripcionAnuncio: {required: true, minlength: 5, maxlength: 200}
        },
        messages: {
            imagenAnuncio: "Formato de imágen no válido.",
            tituloAnuncio: "Debe introducir un título entre 2 y 15 caracteres.",
            descripcionAnuncio: "Debe introducir una descripción entre 5 y 200 caracteres."
        }
    });

    $('#crearAnuncio').click(function () {

         if ($('#POIAnuncio option:selected').index() == 0) {
            $(".erroresAnuncioSelect").html('Debe seleccionar un POI.');

        }

    });
    
     $('#modificarAnuncio').click(function () {

        if ($('#POIAnuncio option:selected').index() == 0) {
            $(".erroresAnuncioSelect").html('Debe seleccionar un POI.');

        }

    });

}