$(document).ready(function(){

    $("#region").change(function(){
        $('#comuna').empty();
        $.ajax({

            type: "POST",
            url: "/app/route.php?controller=ComunaController@getComunaByRegion", // La URL del servidor que procesará el POST.
            data: {region_id:$("#region").val()},
            dataType: "json", // El tipo de datos que esperas de respuesta.
            success: function(response) {
                var select = $("#comuna");  

                var option = $('<option value="" >Seleccione...</option>');
                select.append(option);
                for (var i = response.length - 1; i >= 0; i--) {

                    var option = $("<option></option>").val(response[i]['id']).text(response[i]['comuna']);
                    select.append(option);

                }

            },
            error: function(error) {
                //console.log("Error en la solicitud AJAX", error);
            }
        });
    })

	$.ajax({

            type: "POST",
            url: "/app/route.php?controller=RegionController@all", // La URL del servidor que procesará el POST.
            data: {},
            dataType: "json", // El tipo de datos que esperas de respuesta.
            success: function(response) {
                
                var select = $("#region");

                for (var i = response.length - 1; i >= 0; i--) {

                    var option = $("<option></option>").val(response[i]['id']).text(response[i]['region']);
                    select.append(option);

                }

            },
            error: function(error) {
                console.log("Error en la solicitud AJAX", error);
            }
    });


    $.ajax({

            type: "POST",
            url: "/app/route.php?controller=CandidatoController@all", // La URL del servidor que procesará el POST.
            data: {},
            dataType: "json", // El tipo de datos que esperas de respuesta.
            success: function(response) {
                
                var select = $("#candidato");

                for (var i = response.length - 1; i >= 0; i--) {

                    var option = $("<option></option>").val(response[i]['id']).text(response[i]['nombre']);
                    select.append(option);

                }

            },
            error: function(error) {
                console.log("Error en la solicitud AJAX", error);
            }
    });


    


})