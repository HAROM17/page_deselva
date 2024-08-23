<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galería</title>
    <link rel="stylesheet" href="path/to/slick.css">
    <link rel="stylesheet" href="path/to/slick-theme.css">
</head>
<body>
    <section id="galeria">
        <div class="product_section mb-80 wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="3.1s">
            <div class="container">
                <div class="section_title text-center mb-55">
                    <h2>Galería</h2>
                    <p>Un poco de cómo se fabrican los productos en D'selva para que ustedes puedan disfrutar de los ricos panesillos, kekes caseros y</p>
                </div>
                <div class="row product_slick slick_navigation slick__activation" data-slick='{
                    "slidesToShow": 4,
                    "slidesToScroll": 1,
                    "autoplay": true,
                    "speed": 300,
                    "infinite": true,
                    "responsive":[
                        {"breakpoint":992, "settings": { "slidesToShow": 3 } },
                        {"breakpoint":768, "settings": { "slidesToShow": 2 } },
                        {"breakpoint":500, "settings": { "slidesToShow": 1 } }
                    ]
                }'>
                    <div class="col-lg-3">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a><img src="assets/img/others/foto1.png" alt=""></a>
                                </div>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-3">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a><img src="assets/img/others/foto2.png" alt=""></a>
                                </div>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-3">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a><img src="assets/img/others/foto3.png" alt=""></a>
                                </div>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-3">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a><img src="assets/img/others/foto4.png" alt=""></a>
                                </div>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-3">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a><img src="assets/img/others/foto5.png" alt=""></a>
                                </div>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-3">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a><img src="assets/img/others/foto6.png" alt=""></a>
                                </div>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-3">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a><img src="assets/img/others/foto7.png" alt=""></a>
                                </div>
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-3">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a><img src="assets/img/others/foto5.png" alt=""></a>
                                </div>
                            </figure>
                        </article>
                    </div>
                </div>   
                <div class="text-center mt-3">
                    <a class="btn btn-link" href="<?php echo $url ?>/view/galeria/">Ver más</a>
                </div>
            </div>
        </div>
    </section>

    <script src="path/to/jquery.min.js"></script>
    <script src="path/to/slick.min.js"></script>
</body>
</html>

<style>
    .product_thumb img {
        width: 100%;
        height: 300px; /* Ajusta la altura según tus necesidades */
        object-fit: cover;
    }
    .single_product {
        padding: 5px; /* Añadir espacio entre los artículos */
    }
</style>
