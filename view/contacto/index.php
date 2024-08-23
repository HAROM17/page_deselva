<?php  require_once("../../config/conexion.php");
$url = Conectar::ruta();
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <?php require_once("../modules/head.php") ?>

</head>

<body>
    <!--header area start-->
    <?php require_once("../modules/header.php")?>

    <!-- page search box -->
    <div class="page_search_box">
        <div class="search_close">
            <i class="ion-close-round"></i>
        </div>
        <form class="border-bottom" action="#">
            <input class="border-0" placeholder="Search products..." type="text">
            <button type="submit"><span class="pe-7s-search"></span></button>
        </form>
    </div>

    <!-- breadcrumbs area start -->
    <div class="breadcrumbs_aree breadcrumbs_bg mb-110" data-bgimg="<?php echo $url ?>assets/img/bg/logodeselva.jpg" style="background-image: url(&quot;<?php echo $url ?>assets/img/bg/logodeselva.jpg&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs_text">
                        <h1>Contactenos</h1>
                        <ul>
                            <li><a href="index.php">Home </a></li>
                            <li> // Contactenos</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumbs area end -->

    <!-- contact section start -->
    <div class="contact_page_section mb-100">
        <div class="container">
            <div class="contact_details">
                <div class="row">
                    <div class="col-lg-7 col-md-6">
                        <div class="contact_info_content">
                            <h2>¡Estamos aquí para ayudarte!
                                 Póngase en contacto con nosotros.</h2>
                            <div class="contact_search">
                              
                            </div>
                            <div class="contact_info_details mb-45">
                                <h3>Almacenar en obra nueva</h3>
                                <p>Su dirección va aquí.</p>
                                <p><a href="tel:0123456789">0123456789</a></p>
                                <p><a href="#">demo@example.com</a></p>
                                <p><a href="#">www.example.com</a></p>
                                <span>Ver en el mapa</span>
                            </div>
                            <div class="contact_info_details">
                                <h3>Almacenar en obra nueva</h3>
                                <p>Su dirección va aquí.</p>
                                <p><a href="tel:0123456789">0123456789</a></p>
                                <p><a href="#">demo@example.com</a></p>
                                <p><a href="#">www.example.com</a></p>
                                <span>Ver en el mapa</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        
                        <div class="contact_form" data-bgimg="<<?php echo $url ?>assets/img/others/breadcrumbs-bg.png" style="background-image: url(&quot;<?php echo $url ?>assets/img/others/breadcrumbs-bg.png&quot;);">
                            <h2>Enviar una mensaje</h2>
                            <form id="contact-form" action="">
                                <div class="form_input">
                                    <input name="con_name" placeholder="Nombre" type="text">
                                </div>
                                <div class="form_input">
                                    <input name="con_email" placeholder="E-Mail*" type="text">
                                </div>
                                <div class="form_input">
                                    <input name="con_subject" placeholder="Asusto" type="text">
                                </div>
                                <div class="form_textarea">
                                    <textarea name="con_message" placeholder="Mensaje Libre"></textarea>
                                </div>
                                <div class="form_input_btn">
                                    <button type="submit" class="btn btn-link">Enviar Mensaje</button>
                                </div>
                                <p class="form-message"></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact section end -->

    <!--contact map start-->
    <div class="contact_map mt-70">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d313.8256689801558!2d-74.54100385776896!3d-8.38644256226015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91a3bcfc7a509917%3A0xa9bb2786cab784b9!2sHelados%20Super%20Frios!5e0!3m2!1ses-419!2spe!4v1717703282151!5m2!1ses-419!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>       
    </div>
    <!--contact map end-->

    <!--footer area start-->
    <?php require_once("../../view/modules/footer.php") ?>
    <!--footer area end-->

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
    <script src="assets/js/ajax-mail.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>


</body>  


