<?php  require_once("../../config/conexion.php");
$url = Conectar::ruta();
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <?php  require_once("../modules/head.php") ?></head>

<body>
<div class="body_overlay">
</div>
  <?php  require_once("../modules/header.php")?>
    <!-- page search box -->
   
    <br><br><br>
    <!-- about video section start -->
    <div class="historia-container">
    <div class="contenido">
        <div class="imagen">
            <img src="../../assets/img/others/foto1.png" alt="Imagen de la historia de la empresa">
        </div>
        <div class="texto">
            <h1>nuesra historia</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, rem molestias. Veritatis, aut sed! Veniam minima ad voluptatum impedit iure aperiam eius sapiente, voluptatem tempora accusantium dignissimos obcaecati, voluptate ut? <br>
             Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam velit et quae sed? Quaerat, soluta! Ipsum quas et illum perspiciatis minima totam porro esse voluptatum, deleniti omnis adipisci doloremque blanditiis. <br>
            </p>
        </div>
    </div>
</div>

    <!-- about video section end -->
<br><br><br><br>
    <!-- about description section start -->
    <div class="about_description_section mb-105">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="about_desc wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
                    <h2>Nuestra Visión</h2>
                    <p>"Helados y Chupetes Super Frio's tiene como visión ser una empresa líder basada en el comercio justo, con oportunidades de negocios nacionales e internacionales. Destacamos por la calidad de nuestros productos para brindar una experiencia de satisfacción a nuestros clientes y estar a la vanguardia de la industria."</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="about_desc wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
                    <h2>Nuestra Misión</h2>
                    <p>"Somos una empresa dedicada a la elaboración de helados con frutos seleccionados de nuestra Amazonía. Nos enfocamos en cumplir objetivos precisos para guiar a nuestro equipo en el día a día y mejorar continuamente la calidad e inocuidad de nuestros productos. " <br>
                 </p>.
                </div>
            </div>
        </div>
    </div>
</div>
   <!-- brand section end -->
<br><br>
    <!-- team member section start -->
    <div class="team_member_section mb-110">
        <div class="container">
            <div class="section_title text-center wow fadeInUp mb-50" data-wow-delay="0.1s" data-wow-duration="1.1s">
                <h2>Team Member</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <br> tempor incididunt
                    ut
                    labore et dolore magna</p>
            </div>
            <div class="team_member_inner">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="single_team_member wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
                            <div class="team_thumb">
                                <a href="#"><img src="assets/img/others/team1.png" alt=""></a>
                                <div class="team_text">
                                    <h3>Kianna Pham</h3>
                                    <h4>Team Member</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="single_team_member wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.2s">
                            <div class="team_thumb">
                                <a href="#"><img src="<?php echo $url ?>../../assets/img/others/team2.png" alt=""></a>
                                <div class="team_text">
                                    <h3>Kianna Pham</h3>
                                    <h4>Team Member</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="single_team_member wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1.3s">
                            <div class="team_thumb">
                                <a href="#"><img src="assets/img/others/team3.png" alt=""></a>
                                <div class="team_text">
                                    <h3>Kianna Pham</h3>
                                    <h4>Team Member</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- team member section end -->

    <!-- testimonial section start -->
    <div class="testimonial_section mb-110 wow fadeInUp" data-bgimg="<?php echo $url ?>assets/img/others/testimonial-bg.png"
        data-wow-delay="0.1s" data-wow-duration="1.1s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="testimonial_wrapper slick__activation" data-slick='{
                        "slidesToShow": 1,
                        "slidesToScroll": 1,
                        "arrows": false,
                        "dots": false,
                        "autoplay": false,
                        "speed": 300,
                        "infinite": true ,  
                        "responsive":[ 
                          {"breakpoint":500, "settings": { "slidesToShow": 1 } }  
                         ]                                                     
                    }'>
                        <div class="testimonial_inner d-flex align-items-center">
                            <div class="testimonial_thumb">
                                <img src="assets/img/others/testimonial-shap-thumb.png" alt="">
                            </div>
                            <div class="testimonial_content">
                                <div class="testimonial_rating">
                                    <ul>
                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                    </ul>
                                </div>
                                <div class="testimonial_author">
                                    <h3>Kianna Pham</h3>
                                    <h4>Customer</h4>
                                </div>
                                <div class="testimonial_desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicingl elit, sed do eiusmod
                                        tempor
                                        incididunt ut laboredolor magna aliqua. Ut enim ad minim veniam, quis
                                        nostru
                                        exercitation ullamco laboris</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial_inner d-flex align-items-center">
                            <div class="testimonial_thumb">
                                <img src="assets/img/others/testimonial-shap-thumb.png" alt="">
                            </div>
                            <div class="testimonial_content">
                                <div class="testimonial_rating">
                                    <ul>
                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                    </ul>
                                </div>
                                <div class="testimonial_author">
                                    <h3>Kianna Pham</h3>
                                    <h4>Customer</h4>
                                </div>
                                <div class="testimonial_desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicingl elit, sed do eiusmod
                                        tempor
                                        incididunt ut laboredolor magna aliqua. Ut enim ad minim veniam, quis
                                        nostru
                                        exercitation ullamco laboris</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial section end -->

    <!-- service section start-->
   
    <!-- service section end-->

    <!--footer area start-->
 <?php  require_once("../../view/modules/footer.php") ?>
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
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>


</body>

</php>