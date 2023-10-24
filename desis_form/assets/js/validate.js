//https://cesarg.cl/validador-de-rut-chileno-con-javascript/
function validaRut(rutCompleto) {

    function dv(T){
        var M=0,S=1;
        for(;T;T=Math.floor(T/10))
            S=(S+T%10*(9-M++%6))%11;
        return S?S-1:'k';
    }

    if (!/^[0-9]+[-|‐]{1}[0-9kK]{1}$/.test( rutCompleto ))
        return false;
    var tmp     = rutCompleto.split('-');
    var digv    = tmp[1]; 
    var rut     = tmp[0];
    if ( digv == 'K' ) digv = 'k' ;
    return (dv(rut) == digv );
}


$(document).ready(function(){


    $("#rut").keyup(function(){
        if( $("#rut").val().length == 0 )return

        $("#rut").val( $("#rut").val().toLowerCase().replace(/[^0-9k]/g, '').slice(0, -1) + '-' + $("#rut").val().toLowerCase().replace(/[^0-9k]/g, '').slice(-1) );


    });


    $(".btn-submit").click(function(){

        $('.text-validator').remove();
        let error = false



        $(".required").each(function(){
            if(!$(this).val() || $(this).val() && $(this).val().replace(/\s/g,'').length == 0 ){
                $(this).after('<p class="text-danger text-validator">Este campo es obligatorio</p>');
                error=true;
            }
        })

        let regex = /^(?=.*[a-zA-Z])(?=.*\d).+$/;
        if( $("#alias").val() && !regex.test($("#alias").val())  ){
            $("#alias").after('<p class="text-danger text-validator">Debe contener letras y números</p>')
            error=true;
        }



        if( $("#rut").val().length > 0 && !validaRut($("#rut").val()) ){
            $("#rut").after('<p class="text-danger text-validator">El RUT ingresado no es válido</p>')
            error=true;
        }



        regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        if ( $("#email").val().length > 0 && !regex.test($("#email").val())){
            $("#email").after('<p class="text-danger text-validator">El email ingresado no es válido</p>')
            error=true;
        }

        if($('input[name="como_entero[]"]:checked').length < 2){
            $("#aler_como_entero").after('<p class="text-danger text-validator">Debe seleccionar por lo menos 2 opciones</p>')
            error=true;
        }

        if(error){
            event.preventDefault();
        }


    })

})