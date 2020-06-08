<?php

    /*=============================================
    =            Ruta del proyecto          =
    =============================================*/

    $url = Ruta::ctrRuta();

?>

<!doctype html>

<html data-wf-page="5d638efb45d893862658d5c9" data-wf-site="5d638efb45d893a76c58d5ca">

<head>

    <meta charset="utf-8">
    <title>Rehilete Agencia Digital</title>
    <meta name="description" content="Somos una agencia digital de marketing en Playa Del Carmen enfocada en diseñar y alinear estrategias integrales y eficaces para posicionar tu marca."/>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Webflow" name="generator">
    <meta name="theme-color" content="#19C1DD"/>

    <!-- **Font Awesome** -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css" integrity="sha256-PF6MatZtiJ8/c9O9HQ8uSUXr++R9KBYu4gbNG5511WE=" crossorigin="anonymous" />

    <link href="<?php echo $url?>views/css/normalize.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $url?>views/css/webflow.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $url?>views/css/sae-template.webflow.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300&display=swap" rel="stylesheet">
    <link href="<?php echo $url?>views/css/animate.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $url?>views/css/testimonial.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $url?>views/css/carousel.css" rel="stylesheet" type="text/css">

    <link href="<?php echo $url?>views/icons/icono.png" rel="shortcut icon" type="image/x-icon">
    <link href="<?php echo $url?>views/icons/icono.png" rel="apple-touch-icon">
    
</head>

<body>


<!-- Colocar el siguiente codigo dinámico entre el/los divs principales del body en la maquetación del sitio web -->
<!-- Inicio de divs-->
    
        
        <?php

            /*=============================================
            =            NAV          =
            =============================================*/

            include "modulos/default/nav.php"; // Ruta del archivo

                /*==============================================
                =             Contenido dinamico                =
                ==============================================*/
                
                $rutas = array();
                $ruta = null;
                $infoPropiedad = null;

                if(isset($_GET["ruta"])){

                    $rutas = explode("/", $_GET["ruta"]);

                    $item = "ruta";
                    $valor = $rutas[0];

                        /*==============================================
                        =       URL´s Amigables de paginas        =
                        ==============================================*/

                        $rutaPaginas = ControladorPaginas::ctrMostrarPaginas($item, $valor);

                        if($rutas[0] == $rutaPaginas["ruta"]){

                            $ruta = $rutas[0];

                        }

                        /*==============================================
                        =  Lista blanca de  URL´s Amigables (Páginas que se muestran) =
                        ==============================================*/

                        switch ($ruta) {

                            //Casos con respecto a la cantidad de páginas que habrá en el sitio web

                            case 'index':
                                include "modulos/index.php"; // Ruta del archivo de la página
                                break;

                            case 'nosotros':
                                    include "modulos/nosotros.php"; // Ruta del archivo de la página
                                    break;

                            case 'portafolio':
                                include "modulos/portafolio.php"; // Ruta del archivo de la página
                                break;

                            case 'servicios':
                                include "modulos/servicios.php"; // Ruta del archivo de la página
                                break;

                            case 'contacto':
                                include "modulos/contacto.php"; // Ruta del archivo de la página
                                break;

                            case 'cimaco':
                                include "modulos/cimaco.php"; // Ruta del archivo de la página
                                break;

                            case 'dulce-nostalgia':
                                include "modulos/dulce-nostalgia.php"; // Ruta del archivo de la página
                                break;

                            case 'gf-24':
                                include "modulos/gf-24.php"; // Ruta del archivo de la página
                                break;

                            case 'la-pampa':
                                include "modulos/la-pampa.php"; // Ruta del archivo de la página
                                break;

                            case 'looper':
                                include "modulos/looper.php"; // Ruta del archivo de la página
                                break;

                            case 'lucuma':
                                include "modulos/lucuma.php"; // Ruta del archivo de la página
                                break;

                            case 'malbicho':
                                include "modulos/malbicho.php"; // Ruta del archivo de la página
                                break;

                            case 'nulab':
                                include "modulos/nulab.php"; // Ruta del archivo de la página
                                break;

                            case 'oriental-grill':
                                include "modulos/oriental-grill.php"; // Ruta del archivo de la página
                                break;

                            case 'penoles':
                                include "modulos/penoles.php"; // Ruta del archivo de la página
                                break;
                            
                            // Página de error 404   
                            default:
                                include "modulos/default/404.php"; // Ruta del archivo
                                break;

                        }


                }else{

                    // Página index o home por defecto del sitio web
                    include "modulos/index.php"; // Ruta del archivo
          
                }

            /*=============================================
            =            Footer          =
            =============================================*/

            include "modulos/default/footer.php"; // Ruta del archivo

        ?>

    

<!-- Cierre de los divs principales del body -->
  
<!-- Colocación de todos los archivos/plugins de JS o JQuery -->

<script src="<?php echo $url?>views/js/jquery-3.4.1.min.js" stype="text/javascript"></script>

<script src="<?php echo $url?>views/js/webflow.js" type="text/javascript"></script>

<!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->

<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>

<script type="text/javascript">WebFont.load({  google: {    families: ["Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic","Merriweather:300,300italic,400,400italic,700,700italic,900,900italic","Gothic A1:100,200,300,regular,500,600,700,800,900"]  }});</script>
<!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
<script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
<script src="<?php echo $url?>views/js/eskju.jquery.scrollflow.min.js"></script>

<script src="<?php echo $url?>views/js/backtotop.js"></script>

<script src="<?php echo $url?>views/js/videoPortafolio.js"></script>

<script src="<?php echo $url?>views/js/jquery.mixitup.min.js"></script>

<script src="<?php echo $url?>views/js/portafolio.js"></script>

<script src="<?php echo $url?>views/js/carousel.js"></script>

<a id="back-to-top" href="#" class="btn btn-light btn-lg back-to-top" role="button" name="botonTop" style="display: inline;"><i class="fas fa-chevron-up"></i></a>

<a class="appWhatsApp animated bounceIn" target="_blank" href="https://api.whatsapp.com/send?phone=522221492260&text=¡Hola&nbsp;amigos&nbsp;de&nbsp;Rehilete!&nbsp;¿Pueden&nbsp;ayudarme?">

<img src="<?php echo $url?>views/icons/social-media.png" alt="WhatsApp">

</a>

<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>

<script>

window.fbAsyncInit = function() {
    FB.init({
    xfbml            : true,
    version          : 'v6.0'
    });
};

(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat" attribution=setup_tool page_id="100704531336749" theme_color="#1AC1DC" logged_in_greeting="¡Estamos listos para ayudarte!" logged_out_greeting="¡Estamos listos para ayudarte!" greeting_dialog_display="hide"></div>

<!-- GetButton.io widget
<script type="text/javascript">
(function () {
    var options = {
        whatsapp: "+522221492260", // WhatsApp number
        // call_to_action: "¡Contáctanos por WhatsApp!", // Call to action
        position: "right", // Position may be 'right' or 'left'
    };
    var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
    var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
    s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
    var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
})();
</script>
GetButton.io widget -->

</body>

</html>