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

    <!--mini cart-->
    
    <div class="mini_cart">
        <div class="cart_gallery">
            <div class="cart_close">
                <div class="cart_text">
                    <h3>cart</h3>
                </div>
                <div class="mini_cart_close">
                    <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                </div>
            </div>
            <div class="cart_item">
                <div class="cart_img">
                    <a href="single-product.php"><img src="assets/img/product/product1.png" alt=""></a>
                </div>
                <div class="cart_info">
                    <a href="single-product.php">Primis In Faucibus</a>
                    <p>1 x <span> $65.00 </span></p>
                </div>
                <div class="cart_remove">
                    <a href="#"><i class="ion-android-close"></i></a>
                </div>
            </div>
            <div class="cart_item">
                <div class="cart_img">
                    <a href="single-product.php"><img src="assets/img/product/product2.png" alt=""></a>
                </div>
                <div class="cart_info">
                    <a href="single-product.php">Letraset Sheets</a>
                    <p>1 x <span> $60.00 </span></p>
                </div>
                <div class="cart_remove">
                    <a href="#"><i class="ion-android-close"></i></a>
                </div>
            </div>
        </div>
        <div class="mini_cart_table">
            <div class="cart_table_border">
                <div class="cart_total">
                    <span>Sub total:</span>
                    <span class="price">$125.00</span>
                </div>
                <div class="cart_total mt-10">
                    <span>total:</span>
                    <span class="price">$125.00</span>
                </div>
            </div>
        </div>
        <div class="mini_cart_footer">
            <div class="cart_button">
                <a href="cart.php">View cart</a>
            </div>
            <div class="cart_button">
                <a href="checkout.php"><i class="fa fa-sign-in"></i> Checkout</a>
            </div>
        </div>
    </div>
    <!--mini cart end-->

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
    <div class="breadcrumbs_aree breadcrumbs_bg mb-110" data-bgimg="assets/img/others/breadcrumbs-bg.png">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs_text">
                        <h1>About Us</h1>
                        <ul>
                            <li><a href="index.php">Home </a></li>
                            <li> // About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumbs area end -->

    <!-- about video section start -->
    <div class="about_video-section wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="about_video_thumb">
                    <img src="assets/img/bg/about-bg.png" alt="Background">
                    <div class="video_play_icon">
                        <a class="video_popup" href="https://www.youtube.com/watch?v=2Zt8va_6HRk">
                            <img src="assets/img/others/video-play.png" alt="Play Icon">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- about video section end -->

    <!-- about description section start -->
    <div class="about_description_section mb-105">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="about_desc wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
                        <h2>Nuestra Vision</h2>
                        <p>"helados y chupetes super frio´s tiene como vision ser una empresa lider basada con objetivos en el bio comercio con oportunidades de negocios nacionales y en el extrajero, destacando la calidad de nuestros productos para brindar una experiencia de satisfaccion a nuestros clientes y estar en la vanguadia de la industria</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="about_desc wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
                        <h2>Nuestra Mision</h2>
                        <p>"somos una empresa dedicada a la elaboracion de helados con frutos seleccionar de nuestra amazonia, somos una institucion que se enfoca en los objetivos a cumplir en el presente y se define de manera precisa y concreta para guiar al grupo de trabajo en el dia a dia y mejorar nuestra calidad e inocuidar de nuestros productos"</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about description section end -->

    <!-- brand section start -->
    <div class="brand_section_area mb-105 wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="brand_inner slick__activation" data-slick='{
                        "slidesToShow": 5,
                        "slidesToScroll": 1,
                        "arrows": false,
                        "dots": false,
                        "autoplay": false,
                        "speed": 300,
                        "infinite": true ,  
                        "responsive":[  
                          {"breakpoint":992, "settings": { "slidesToShow": 4 } },  
                          {"breakpoint":768, "settings": { "slidesToShow": 3 } }, 
                          {"breakpoint":576, "settings": { "slidesToShow": 2 } }, 
                          {"breakpoint":300, "settings": { "slidesToShow": 1 } }  
                         ]                                                     
                    }'>
                        <div class="single_brand ">
                            <a class="primary" href="#"><img src="<?php echo $url ?>assets/img/others/brand1.png" alt=""></a>
                            <a class="secondary" href="#"><img src="assets/img/others/brand-hover1.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a class="primary" href="#"><img src="<?php echo $url ?>assets/img/others/brand2.png" alt=""></a>
                            <a class="secondary" href="#"><img src="assets/img/others/brand-hover2.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a class="primary" href="#"><img src="<?php echo $url ?>assets/img/others/brand3.png" alt=""></a>
                            <a class="secondary" href="#"><img src="assets/img/others/brand-hover3.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a class="primary" href="#"><img src="assets/img/others/brand4.png" alt=""></a>
                            <a class="secondary" href="#"><img src="assets/img/others/brand-hover4.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a class="primary" href="#"><img src="assets/img/others/brand5.png" alt=""></a>
                            <a class="secondary" href="#"><img src="assets/img/others/brand-hover5.png" alt=""></a>
                        </div>
                        <div class="single_brand ">
                            <a class="primary" href="#"><img src="assets/img/others/brand1.png" alt=""></a>
                            <a class="secondary" href="#"><img src="assets/img/others/brand-hover1.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- brand section end -->

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