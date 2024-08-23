<?php
require_once("../../config/conexion.php");
$url = Conectar::ruta();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Términos y Condiciones - D'selva Panadería</title>
    <link rel="stylesheet" href="styles.css"> <!-- Archivo CSS para estilos -->
    <?php require_once("../modules/head.php") ?> <!-- Incluir encabezado común -->
</head>
<body>
    <div class="body_overlay"></div>
    
    <?php require_once("../modules/header.php") ?> <!-- Incluir encabezado de la página -->

    <div class="terms-container">
        <div class="container">
            <h1>Términos y Condiciones de D'selva Panadería</h1>
            
            <!-- Contenido de los términos y condiciones -->
            <h2>1. Uso del Sitio</h2>
            <p>El contenido del sitio web es proporcionado para tu información general y puede cambiar sin previo aviso. Eres responsable de verificar la exactitud, integridad y adecuación de la información disponible en nuestro sitio web antes de confiar en ella.</p>
            
            <h2>2. Productos y Servicios</h2>
            <p>D'selva Panadería se esfuerza por ofrecer productos frescos y de alta calidad, pero no garantiza la disponibilidad continua de todos los productos en todo momento. Nos reservamos el derecho de modificar o discontinuar cualquier producto o servicio sin previo aviso.</p>
            
            <h2>3. Propiedad Intelectual</h2>
            <p>Todo el contenido del sitio web, incluyendo pero no limitado a textos, gráficos, logotipos, imágenes y software, es propiedad de D'selva Panadería y está protegido por las leyes de propiedad intelectual correspondientes. No está permitida la reproducción, distribución o modificación del contenido sin autorización expresa por escrito.</p>
            
            <h2>4. Privacidad</h2>
            <p>Tu privacidad es importante para nosotros. Consulta nuestra <a href="politica_privacidad.html">Política de Privacidad</a> para entender cómo recopilamos, utilizamos y protegemos tu información personal.</p>
            
            <h2>5. Limitación de Responsabilidad</h2>
            <p>En la máxima medida permitida por la ley aplicable, D'selva Panadería no será responsable por daños directos, indirectos, incidentales, especiales o consecuentes resultantes del uso o la imposibilidad de utilizar nuestro sitio web o nuestros productos y servicios.</p>
            
            <h2>6. Enlaces a Terceros</h2>
            <p>Nuestro sitio web puede contener enlaces a sitios web de terceros que no están bajo nuestro control. No somos responsables del contenido, la precisión o las prácticas de privacidad de estos sitios enlazados. La inclusión de cualquier enlace no implica necesariamente una recomendación o endoso por parte de D'selva Panadería.</p>
            
            <h2>7. Modificaciones</h2>
            <p>Nos reservamos el derecho de modificar estos términos y condiciones en cualquier momento. Los cambios entrarán en vigencia al ser publicados en nuestro sitio web.</p>
            
            <h2>8. Ley Aplicable</h2>
            <p>Estos términos y condiciones se rigen por las leyes de [país/estado/provincia] y cualquier disputa relacionada con estos términos y condiciones estará sujeta a la jurisdicción exclusiva de los tribunales de [ciudad].</p>
            
            <p>Al utilizar nuestro sitio web y nuestros servicios, aceptas estos términos y condiciones en su totalidad. Si no estás de acuerdo con alguno de estos términos, por favor no utilices nuestro sitio web ni nuestros servicios.</p>
        </div>
    </div>

    
    <div class="privacy-container">
        <div class="container">
            <h1>Política de Privacidad de D'selva Panadería</h1>
            
            <p>En D'selva Panadería, la privacidad de nuestros usuarios es de suma importancia para nosotros. Esta política de privacidad describe cómo recopilamos, utilizamos, protegemos y gestionamos la información personal de nuestros usuarios.</p>
            
            <h2>Información que Recopilamos</h2>
            <p>Recopilamos información personal cuando los usuarios interactúan con nuestro sitio web, realizan pedidos o se suscriben a nuestro boletín informativo. Esta información puede incluir nombre, dirección de correo electrónico, dirección postal y detalles de pago.</p>
            
            <h2>Uso de la Información</h2>
            <p>Utilizamos la información recopilada para procesar pedidos, enviar actualizaciones sobre pedidos, responder consultas de servicio al cliente, enviar correos electrónicos promocionales y mejorar nuestros servicios.</p>
            
            <h2>Protección de la Información</h2>
            <p>Implementamos medidas de seguridad para proteger la información personal de nuestros usuarios contra accesos no autorizados, alteraciones, divulgaciones o destrucciones.</p>
            
            <h2>Divulgación a Terceros</h2>
            <p>No vendemos, comerciamos ni transferimos de ninguna manera información personal identificable a terceros, a menos que sea necesario para la prestación de servicios específicos, como la entrega de productos.</p>
            
            <h2>Cookies</h2>
            <p>Nuestro sitio web utiliza cookies para mejorar la experiencia del usuario. Las cookies son pequeños archivos de texto que se almacenan en el navegador del usuario y nos permiten reconocerlo en visitas futuras.</p>
            
            <h2>Enlaces a Terceros</h2>
            <p>Nuestro sitio web puede contener enlaces a sitios de terceros. No somos responsables de las prácticas de privacidad ni del contenido de estos sitios enlazados.</p>
            
            <h2>Consentimiento</h2>
            <p>Al utilizar nuestro sitio web y proporcionar información personal, los usuarios aceptan nuestra política de privacidad y el procesamiento de su información personal según lo descrito.</p>
            
            <h2>Modificaciones</h2>
            <p>Nos reservamos el derecho de modificar esta política de privacidad en cualquier momento. Los cambios entrarán en vigencia inmediatamente después de su publicación en nuestro sitio web.</p>
            
            <h2>Contacto</h2>
            <p>Si tienes preguntas sobre esta política de privacidad, por favor contáctanos a través de [correo electrónico de contacto] o [número de teléfono].</p>
            
        </div>
    </div>

    <?php require_once("../../view/modules/footer.php") ?> <!-- Incluir pie de página común -->

    <!-- JS -->
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery.scrollup.min.js"></script>
    <script src="assets/js/jquery.nice-select.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/mailchimp-ajax.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/jquery.zoom.min.js"></script>
    <script src="assets/js/main.js"></script>

    <style>
        /* Estilos específicos para los términos y condiciones */
    
        /* Estilos específicos para los términos y condiciones */
        .terms-container {
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
            background-color: #fff;
            border: 2px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .terms-container .container {
            text-align: justify;
        }

        .terms-container h1 {
            font-size: 28px;
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        .terms-container h2 {
            font-size: 24px;
            color: #333;
            margin-top: 30px;
        }

        .terms-container p {
            color: #666;
            line-height: 1.8;
            margin-bottom: 15px;
        }
    </style>
</body>
</html>
