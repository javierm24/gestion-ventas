$(document).ready(function(){
    let total = 0;



    let componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
    };

    initialize();




    $('#boton_continuar').on('click',function(){
        calculaCompra();
        let value = $("#exampleFormControlTextarea1").val();
        document.getElementById('informacion_legal').innerHTML = value;


        $('#contenedor_uno').css("display", "none");
        $('#contenedor2').toggle();

        $('html,body').animate({
            scrollTop: 0
        }, '400');
    });

    function calculaCompra(){
        if($('#check_uno_legal'). prop("checked") == true) {
            $('#pack_legal').css("display", "block");
            $('#certificado_energetica').css("display", "block");
            total += 70;
        }
        if($('#check_legal'). prop("checked") == true) {
            $('#pack_legal').css("display", "block");
            $('#legal_360').css("display", "block");
            total += 0;
        }
        if($('#reforma_check_uno'). prop("checked") == true) {
            $('#pack_reforma').css("display", "block");
            $('#opcion_uno').css("display", "block");
            total += 595;
        }
        if($('#reforma_check_dos'). prop("checked") == true) {
            $('#pack_reforma').css("display", "block");
            $('#opcion_dos').css("display", "block");
            total += 995;
        }
        if($('#reforma_check_tres'). prop("checked") == true) {
            $('#pack_reforma').css("display", "block");
            $('#opcion_tres').css("display", "block");
            total += 1995;
        }
        if($('#reforma_check_cuatro'). prop("checked") == true) {
            $('#pack_reforma').css("display", "block");
            $('#opcion_cuatro').css("display", "block");
            total += 2195;
        }

        document.getElementById('carrito_comprar').innerHTML ='<img src="./img/carrito.png" style="margin-right: 15px;">'+ total + ' €';

    }



    $("input:checkbox").on('click', function() {
        var $box = $(this);
        if ($box.is(":checked")) {
            var group = "input:checkbox[name='" + $box.attr("name") + "']";
            $(group).prop("checked", false);
            $box.prop("checked", true);
        } else {
            $box.prop("checked", false);
        }

    });



    $('#boton_volver').on('click',function(){
        $('#contenedor_uno').css("display", "block");
        $('#contenedor2').css("display", "none");
        $('#pack_legal').css("display", "none");
        $('#pack_reforma').css("display", "none");
        $('#opcion_uno').css("display", "none");
        $('#opcion_dos').css("display", "none");
        $('#opcion_tres').css("display", "none");
        $('#opcion_cuatro').css("display", "none");
        $('#certificado_energetica').css("display", "none");
        $('#legal_360').css("display", "none");
        total = 0;
        $('html,body').animate({
            scrollTop: 0
        }, '400');
    });


    /*
    $('#carrito_comprar').on('click',function(){
        $('#modal_gracias').css("display", "block");
    });
    */


    $("#carrito_comprar").click(function() {
        validaFormuLeads();
    });




    function validaFormuLeads(e) {
        let valid = true;
        let inputs = {
            0: {
                id: "campo_nombre"
                , value: $("#campo_nombre").val()
            }
            , 1: {
                id: "campo_email"
                , value: $("#campo_email").val()
            }
            , 2: {
                id: "campo_direccion"
                , value: $("#campo_direccion").val()
            }
            , 3: {
                id: "campo_piso"
                , value: $("#campo_piso").val()
            }
            , 4: {
                id: "campo_puerta"
                , value: $("#campo_puerta").val()
            }
            , 5: {
                id: "campo_codigo"
                , value: $("#campo_codigo").val()
            }
            , 6: {
                id: "campo_telefono"
                , value: $("#campo_telefono").val()
            }
            , 7: {
                id: "campo_dni"
                , value: $("#campo_dni").val()
            }
            , 8: {
                id: "campo_direccion_dos"
                , value: $("#campo_direccion_dos").val()
            }
            , 9: {
                id: "campo_codigo_dos"
                , value: $("#campo_codigo_dos").val()
            }
            , 10: {
                id: "campo_ciudad"
                , value: $("#campo_ciudad").val()
            }
        };

        $(".error_labels").remove();

        $.each(inputs, function (index, elem) {
            if (this.value === "" || this.value === undefined) {
                $('<label class="error_labels" for="' + this.id + '">Campo obligatorio</label>').appendTo($("#" + this.id).parent());
                valid = false;
            }
        });

        if (!(validateMin3Letters(inputs[0].value)) && !(inputs[0].value === "")) {
            $('<label class="error_labels" for="'+inputs[0].id+'">Introduce un nombre de mínimo 3 caracteres alfabéticos</label>').appendTo($("#" + inputs[0].id).parent());
            valid = false;
        }
        if( !validateEmail(inputs[1].value) && !(inputs[1].value === "")) {
            $('<label class="error_labels" for="'+inputs[1].id+'">Introduce un email válido</label>').appendTo($("#" + inputs[1].id).parent());
            valid = false;
        }
        if( (!(validateOnlyDigits(inputs[5].value)) || !(validate5Digits(inputs[5].value))) && !(inputs[5].value === "")) {
            $('<label class="error_labels" for="' + inputs[5].id + '">Introduce un código postal válido</label>').appendTo($("#" + inputs[5].id).parent());
            valid = false;
        }
        if( !(validateOnlyDigits(inputs[6].value)) && !(inputs[6].value === "")) {
            $('<label class="error_labels" for="'+inputs[6].id+'">Introduce un teléfono válido</label>').appendTo($("#" + inputs[6].id).parent());
            valid = false;
        }
        if( (!(validateOnlyDigits(inputs[9].value)) || !(validate5Digits(inputs[9].value))) && !(inputs[9].value === "")) {
            $('<label class="error_labels" for="' + inputs[9].id + '">Introduce un código postal válido</label>').appendTo($("#" + inputs[9].id).parent());
            valid = false;
        }
        if ( !($("#acepto").is(":checked"))) {
            $('<label id="grid_error" class="error_labels" for="acepto">Debes aceptar la política de privacidad para continuar</label>').appendTo($("#acepto").parent());
            valid = false;
        }

    };


    function validateOnlyDigits(valor) {
        let re = /^[0-9]+$/;
        return re.test(valor);
    }
    function validate5Digits(valor) {
        let re = /^\d{5}$/;
        return re.test(valor);
    }
    function validateEmail(email) {
        let re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }
    function validateMin3Letters(valor) {
        let re = /[a-zA-Z]{3,}/;
        return re.test(valor);
    }







    function initialize() {

        autocomplete = new google.maps.places.Autocomplete(
            (document.getElementById('campo_direccion')),
            { types: ['geocode'] });

        google.maps.event.addListener(autocomplete, 'place_changed', function() {
            fillInAddress2();
        });
        autocomplete_textarea = new google.maps.places.Autocomplete((document.getElementById('autocomplete_textarea')),
            { types: ['geocode'] }
        );
        google.maps.event.addListener(autocomplete_textarea, 'place_changed', function() {
            fillInAddress_textarea();
        });
    }
    var datos=new Array();
    var postal_code,street_number,route,locality,administrative_area_level_1;

    function fillInAddress2() {

        var place = autocomplete.getPlace();
        for (var component in componentForm) {

        }

        for (var i = 0; i < place.address_components.length; i++) {
            var addressType = place.address_components[i].types[0];
            if (componentForm[addressType]) {
                var val = place.address_components[i][componentForm[addressType]];
                //document.getElementById(addressType).value = val;
                datos.push(val)

                //addressType=val

                if(addressType=="postal_code") {
                    postal_code = val
                }
                if(addressType=="street_number"){
                    street_number=val
                }
                if(addressType=="route" ){
                    flagFormulario = true;
                    route=val
                }
                if(addressType=="locality"){
                    locality=val
                }
                if(addressType=="administrative_area_level_1"){
                    administrative_area_level_1=val
                }

            }
        }
        $("#campo_codigo").val(postal_code);
        $("#campo_numero").val(street_number);
        $("#campo_direccion").val(route);
        $("#provincia").val(administrative_area_level_1);
        $("#municipio").val(locality);
        console.log("administrative_area_level_1:"+administrative_area_level_1+"-Municipio:"+locality);





    }

















});



