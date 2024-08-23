<?php 
$url = Conectar::ruta();
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>D' Selva</title>
     <?php require_once("modules/head.php")?>
</head>

<body>
    <!--header area start-->
    <?php require_once("view/modules/header.php"); ?>
    <?php require_once("view/modules/slider.php") ?>
    <?php require_once("view/modules/categoria.php") ?>
    <?php require_once("view/modules/productos.php") ?>
    <?php require_once("view/modules/oferta.php") ?>
    <?php require_once("view/modules/mensaje.php") ?>
    <?php require_once("view/modules/footer.php") ?>
    <!-- JS
============================================ -->

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
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
</body>