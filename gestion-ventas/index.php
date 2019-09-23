<!DOCTYPE html>
<html>

<head>
    <title>Clicpiso | Formulario</title>
    <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false&key=AIzaSyC8O4ePCAqUwz-ABWIH_vPoBPGZyC9lgSQ&libraries=places"></script>

</head>

<body>



<div class="container-fluid mt-5" id="contenedor_uno" style="display: block">


    <div class="row">



       <div class="menu">
         <img id="menu_icono"src="./img/CLICPISO_logo.png">
           <div class="precio_clic" id="total_sum">PLAN CLICPISO + 0 €</div>
       </div>

    </div>


    <div class="mt-5">


        <div class="card mb-5" style="width: 100%; box-shadow: 0 6px 8px -2px grey; margin-top: 80px !important;">
            <div class="card-body" style="background: #0084CA; width: 100%;">
                <h1 class="card-title text-center">PLAN CLICPISO</h1>
                <p class="card-text text-center" style="font-size: 25px; color: #ffffff">Todo lo necesario para vender tu piso de manera rápida y sencilla.<br>
                ¡Sin complicaciones!</p>
            </div>

            <div>
            <div class="precio_clic1">Total 4.990 €</div>
            </div>

            <div class="mt-4 ml-4">
                <h3>Valoracion de la vivienda</h3>
                <p>El analisis más exhaustivo del mercado</p>
                <h3>Análisis registral de la vivienda</h3>
                <p>El equipo legal analiza tu vivienda y además te dará la nota simple.</p>
                <h3>Anuncio personalizado</h3>
                <p>Somos expertos en sacar el máximo partido a tu vivienda.</p>
                <h3>Reportaje fotográfico profesional con edición digital + Plano de la vivienda </h3>
                <h3>Publicación del anuncio en los principales portales inmobiliarios + destacados preferentes/TOP en el principal portal</h3>
                <p>(Idealista; Fotocasa; Wallapop; Vibbo; Mil anuncios; Habitaclia; Anuncioneon.com; anuncit; plandeproteccióndealquiler.com;
                 divendo; granmanzana; instalate.com; más profesional; micasa; mitula; pisoscasas.com; trovimap).</p>
                <h3>Cartel: "SE VENDE" (sin comisiones)</h3>
                <h3>Asistente personal telefónico</h3>
                <p>Para que no perdamos ni una sola oportunidad de venta.</p>
                <h3>Gestión de agenda</h3>
                <p>Calendario de visitas ajustándonos a tu disponibilidad.</p>
                <h3>Gestión de visitas</h3>
                <p>Nuestros expertos inmobiliarios te acompañarán durante todas las visitas sacando el mayor partido a tu vivienda.</p>
                <h3>Asesoramiento legal</h3>
                <p>Asesoramiento legal de principio a fin por parte de nuestro departamento legal. Desde resolverte todas las dudas que tengas hasta la elaboracion del contrato
                     de Arras (gastos a cuenta del comprador) y el acompañamiento a la escritura de compraventa con nuestro gestor de firmas.</p>
                <h3>Informe semanal</h3>
                <p>Elaboramos un informe con todas las estadísticas relevantes para que sepas cómo está funcionando la venta de tu vivienda. (visitas recibidas en portales,
                     favoritos, contactos recibidos, visitas realizadas, ofertas recibidas...)</p>
                </div>



                    <div class="text-center mb-5 mt-4">
                        <p style="font-size: 1em; font-style: normal;">SÓLO PAGARÁS SI VENDEMOS Y SÓLO 3 MESES DE EXCLUSIVIDAD.</p>
                    </div>

            <p style="font-size: 1.3em; text-align: end; margin-right: 25px;">*Precios sin I.V.A.</p>

        </div>

<h1 class="text-center" style="color: #ffffff; font-style: italic;">Nuestros clientes también eligen:</h1>



        <div id="paquete_legal" class="mt-5">
            <div class="card mb-5" style="width: 100%; box-shadow: 0 6px 8px -2px grey;">
                <div class="card-body" style="background: #0084CA; width: 100%;">
                    <h1 class="card-title text-center">PACK LEGAL</h1>
                    <a id="boton_legal" style="box-shadow: 0 7px 7px -3px grey; background: #ffffff; float:right; margin-top: -70px;padding: 6px; border-radius: 15px !important; color: #0084CA;" href="#">AÑADIR PAQUETE</a>
                    <p class="card-text text-center" style="font-size: 25px; color: #ffffff">¡Y olvídate de problemas y trámites legales!</p>
                </div>
                <div class="form-check mt-5 ml-3">

                    <label class="cuadro form-check-label" for="check_uno_legal"><h3>Certificado de eficiencia energética<span style="font-weight: bold; float: right; margin-right: 50px;">70 €</span></h3>
                        <input type="checkbox" rel="70" class="form-check-input radio" dirname="legal" id="check_uno_legal">
                        <p>Es obligatorio para poder vender tu casa, asi que nosotros te lo conseguimos y en un tiempo récord</p>
                        <span class="checkmark"></span>
                    </label>


                    <label class="cuadro form-check-label" for="check_legal"><h3>Legal 360º</h3>
                        <input type="checkbox" class="form-check-input radio" rel="0" dirname="legal" id="check_legal">
                        <p>Te asesoramos y resolvemos todas las dudas que puedan surgirte. Herencias y extinciones de condominio, cancelaciones de todo tipo de carga, reclamación
                            Plusvalía Municipal, indemnizaciones por demoras u otros incumplimientos de contrato.</p>
                        <span class="checkmark"></span>
                    </label>


                    <div class="form-group">
                        <textarea class="form-control info_legal" id="exampleFormControlTextarea1" rows="3" placeholder="Escribe aqui qué servicios legales necesitas..."></textarea>
                    </div>

                    <p style="font-size: 1.3em;text-align: end;margin-right: 27px;position: relative;margin-top: 70px;">*Precio a presupuestar</p>

                    <p style="font-size: 1.3em; text-align: end; margin-right: 25px;">*Precios sin I.V.A.</p>

                </div>
            </div>
        </div>


        <div class="mt-5">
            <div class="card mb-5" style="width: 100%; box-shadow: 0 6px 8px -2px grey;">
                <div class="card-body" style="background: #0084CA; width: 100%;">
                    <h1 class="card-title text-center">PACK REFORMA</h1>
                    <a id="boton_reforma" style="box-shadow: 0 7px 7px -3px grey; background: #ffffff; float:right; margin-top: -70px;padding: 6px; border-radius: 15px !important; color: #0084CA;" href="#">AÑADIR PAQUETE</a>
                    <p class="card-text text-center" style="font-size: 25px;color: #ffffff">¡Diferénciate de la competencia y vende tu piso antes que ellos!</p>
                </div>
                <div class="form-check mt-5 ml-3">
                    <div>
                    <label class="cuadro form-check-label" for="reforma_check_uno"><h3>Proyecto actual y reformado <span style="float: right;margin-right: 50px;">595 €</span></h3>
                        <input type="checkbox" class="form-check-input radio" rel="595" value="" name="fooby[1][]" id="reforma_check_uno">
                        <span class="checkmark"></span>
                    </label>
                    </div>

                    <div>
                    <label class="cuadro form-check-label" for="reforma_check_dos"><h3>Proyecto actual y reformado + Renders <span style="float: right;margin-right: 50px;">995 €</span></h3>
                        <input type="checkbox" class="form-check-input radio" rel="995" value="" name="fooby[1][]" id="reforma_check_dos">
                        <span class="checkmark"></span>
                    </label>
                    </div>

                    <div>
                    <label class="cuadro form-check-label" for="reforma_check_tres"><h3>Proyecto actual y reformado + Renders + Video 3D<span style="float: right;margin-right: 50px;">1.995 €</span></h3>
                        <input type="checkbox" class="form-check-input radio" rel="1995" value="" name="fooby[1][]" dirname="reforma" id="reforma_check_tres">
                        <span class="checkmark"></span>
                    </label>
                    </div>

                    <div>
                    <label class="cuadro form-check-label" for="reforma_check_cuatro"><h3>Home Staying <span style="float: right;margin-right: 50px;">2.195 €</span></h3>
                        <input type="checkbox" class="form-check-input radio" rel="2195" dirname="reforma" id="reforma_check_cuatro">
                        <span class="checkmark"></span>
                    </label>
                    </div>

                    <p style="font-size: 1.3em; text-align: end; margin-right: 25px;">*Precios sin I.V.A.</p>
                </div>
            </div>
        </div>


       <div class="mb-5" style="text-align: center;">
           <button class="botones_form" id="boton_continuar">Continuar</button>
       </div>

</div>

</div>










<div class="container-fluid mt-5" id="contenedor2" style="display: none">


    <div class="row">
        <div class="col-12 text-center menu">
            <img id="menu_icono" src="./img/CLICPISO_logo.png">
        </div>
    </div>


    <div class="mt-5">

        <h1 class="text-center mt-5 mb-5" style="margin-top: 100px !important;">Resumen de la compra</h1>

        <div class="card mb-5" style="width: 100%; box-shadow: 0 6px 8px -2px grey;">
            <div id="plan_clicpiso">
            <div class="card-body" style="background: #0084CA; padding: 0;">
                <h1 class="card-title text-center" style="margin-left: 20px;">PLAN CLICPISO</h1>
            </div>

            <div class="mt-5 ml-4">
                <h3><img src="img/visto.png">Valoracion de la vivienda</h3>
                <h3><img src="img/visto.png">Análisis registral de la vivienda</h3>
                <h3><img src="img/visto.png">Anuncio personalizado</h3>
                <h3><img src="img/visto.png">Reportaje fotográfico profesional con edición digital + Plano de la vivienda </h3>
                <h3><img src="img/visto.png">Publicación del anuncio en los principales portales inmobiliarios + destacados preferentes/TOP en el principal portal</h3>
                <h3><img src="img/visto.png">Cartel: "SE VENDE" (sin comisiones)</h3>
                <h3><img src="img/visto.png">Asistente personal telefónico</h3>
                <h3><img src="img/visto.png">Gestión de agenda</h3>
                <h3><img src="img/visto.png">Gestión de visitas</h3>
                <h3><img src="img/visto.png">Asesoramiento legal</h3>
                <h3><img src="img/visto.png">Informe semanal</h3>
                </div>
            </div>

            <p style="font-size: 1.3em; text-align: end; margin-right: 25px;">*Precios sin I.V.A.</p>

            <div id="pack_legal" style="display: none">
                    <div class="card-body" style="background: #0084CA; padding: 0;">
                        <h1 class="card-title text-center" style="margin-left: 20px;">PACK LEGAL</h1>
                    </div>
                    <div class="form-check mt-5 ml-3">
                       <h3 id="certificado_energetica" style="display: none"><img src="img/check.png">Certificado de eficiencia energética  <span style="font-weight: bold; float: right;margin-right: 50px; font-size: 22px;">70 €</span></h3>
                        <div id="legal_360" style="display: none">
                        <h3><img src="img/check.png">Legal 360º</h3>
                            <div class="form-group" id="informacion_legal"></div>
                        </div>


                        <p style="font-size: 1.3em; text-align: end; margin-right: 25px;">*Precios sin I.V.A.</p>

                    </div>
            </div>

            <div id="pack_reforma" style="display: none">
            <div class="card-body" style="background: #0084CA; padding: 0;">
                <h1 class="card-title text-center" style="margin-left: 20px;">PACK REFORMA</h1>
            </div>
            <div class="form-check mt-5 ml-3">
                <h3 id="opcion_uno" style="display: none"><img src="img/check.png">Proyecto actual y reformado <span style="float: right; margin-right: 50px;">595 €</span></h3>
                <h3 id="opcion_dos" style="display: none"><img src="img/check.png">Proyecto actual y reformado + Renders <span style="float: right; margin-right: 50px;">995 €</span></h3>
                <h3 id="opcion_tres" style="display: none"><img src="img/check.png">Proyecto actual y reformado + Renders + Video 3D<span style="float: right; margin-right: 50px;">1.995 €</span></h3>
                <h3 id="opcion_cuatro" style="display: none"><img src="img/check.png">Home Staying <span style="float: right; margin-right: 50px;">2.195 €</span></h3></label>
            </div>
                <p style="font-size: 1.3em; text-align: end; margin-right: 25px;">*Precios sin I.V.A.</p>
            </div>

    </div>





        <div class="row mt-5">
            <div class="cuadro_personal">
                <div class="" style="padding: 0 110px;">
                    <h1 class="text-center mt-3" style="color: #ffffff">DATOS PERSONALES</h1>
                    <form>

                        <div class="form-group">
                            <input type="text" class="form-control formulario cajas" id="campo_nombre" placeholder="Nombre Completo*" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control formulario cajas" id="campo_email" placeholder="Email*" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control formulario cajas" id="campo_direccion" placeholder="Dirección*" autocomplete="off" required>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <input type="text" class="form-control formulario cajas" id="campo_numero" placeholder="Numero*" required>
                            </div>
                            <div class="form-group col-md-4">
                                <input type="text" class="form-control formulario cajas" id="campo_puerta" placeholder="Puerta*" required>
                            </div>
                            <div class="form-group col-md-4">
                                <input type="text" class="form-control formulario cajas" id="campo_codigo" placeholder="C.P*" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control formulario cajas" id="campo_telefono" placeholder="Teléfono*" required>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control formulario cajas" id="campo_dni" placeholder="DNI*" required>
                            </div>
                        </div>
                        <div class="form-group col-md-6 offset-3">
                            <input type="text" class="form-control formulario cajas" id="campo_go" placeholder="Código Go">
                        </div>


                    </form>

                </div>
            </div>
        </div>








        <div class="row mt-5">
            <div class="cuadro_inmueble">
                <div class="" style="padding: 0 110px;">
                    <h1 class="text-center mt-3" style="color: #ffffff">DATOS INMUEBLE</h1>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control formulario cajas" id="campo_direccion_dos" placeholder="Dirección*" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control formulario cajas" id="campo_codigo_dos" placeholder="Código Postal*" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control formulario cajas" id="campo_ciudad" placeholder="Ciudad*" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control formulario cajas" id="campo_referencia" placeholder="Referencia Catrastal">
                        </div>





                        <div class="text-center m-4">
                        <label class="cuadro form-check-label" for="acepto" style="color: #ffffff;">Acepto la politica de privacidad de clicpiso.
                            <input type="checkbox" rel="0" class="form-check-input radio" id="acepto">
                            <span class="checkmark" style="top: 3px;left: 110px;"></span>
                        </label>
                        </div>


                    </form>
                </div>
            </div>
        </div>



        <div class="mt-5 mb-5" style="text-align: center">
            <button class="botones_form" type="button" name="btnprueba" id="boton_volver">VOLVER</button>
            <button class="botones_form" type="button" name="btnprueba" id="carrito_comprar"></button>
        </div>


        <p class="mt-3" style="color: #99adbb; text-align: center; font-style: normal;">SÓLO PAGARÁS SI VENDEMOS. SÓLO TRES MESES DE EXLUSIVIDAD </p>

    </div>

<!--
    <div id="modal_gracias" class="card mb-5" style="width: 100%; box-shadow: 0 6px 8px -2px grey; display: none">
        <div class="card-body text-center" style="background: #f9f9f9;">
            <h1 style="color: #99adbb; font-weight: bold;">¡Gracias por confiar en Clicpiso!</h1>
            <p style="color: #99adbb;">Por favor, comprueba tu correo. En breves momentos recibirá un email con toda la documentación para la realización del pago.</p>
        </div>
    </div>
 -->

</div>










<script>
        $("input[type=checkbox]").change(function(){
            recalculate();
        });
        function recalculate(){
            var sum = 0;
            $("input[type=checkbox]:checked").each(function(){
                sum += parseInt($(this).attr("rel"));
            });
            //  alert(sum);
            document.getElementById('total_sum').innerHTML = 'PLAN CLICPISO + '+ sum+' €';
        };

        $('#boton_legal').click(function() {
            var sum = 0;
            $('input[dirname=legal]').prop('checked', true);
            $("input[type=checkbox]:checked").each(function(){
                sum += parseInt($(this).attr("rel"));
            });
            document.getElementById('total_sum').innerHTML = 'PLAN CLICPISO + '+ sum+' €';
        });


        $('#boton_reforma').click(function() {
            var sum = 0;
            $('input[dirname=reforma]').prop('checked', true);
            $("input[type=checkbox]:checked").each(function(){
                sum += parseInt($(this).attr("rel"));
            });
            document.getElementById('total_sum').innerHTML = 'PLAN CLICPISO + '+ sum+' €';
        });

        $(function () {
            $('#boton_legal').bind("click", function () {
                var dest = $("#boton_reforma").offset().top;
                $("html, body").animate({scrollTop: dest});
            });
        });

        $(function () {
            $('#boton_reforma').bind("click", function () {
                var dest = $("#boton_continuar").offset().top;
                $("html, body").animate({scrollTop: dest});
            });
        });
















</script>


<script src="./js/index.js"></script>




<footer>
    <?php require('footer.php');?>
</footer>
</body>










</html>