<?php require_once("../../config/conexion.php");
$url = Conectar::ruta();
?>

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title></title>
  <?php require_once("../modules/head.php") ?>
</head>

<body>



  <!--offcanvas menu area start-->
  <div class="body_overlay">
  </div>

  <!--offcanvas menu area end-->
  <!--header area start-->
  <?php require_once("../modules/header.php") ?>

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
          <a href="#"><img src="../../assets/img/product/product1.png" alt=""></a>
        </div>
        <div class="cart_info">
          <a href="single-product.php">primeros idiotas mirando</a>
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
  <div class="breadcrumbs_aree breadcrumbs_bg mb-110" data-bgimg="<?php echo $url ?>assets/img/bg/logodeselva.jpg" style="background-image: url(&quot;<?php echo $url ?>assets/img/bg/logodeselva.jpg&quot;);">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="breadcrumbs_text">
            <h1>Products</h1>
            <ul>
              <li><a href="index.php">Home </a></li>
              <li> // Shop Left Sidebar</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- breadcrumbs area end -->

  <!-- product page section start -->
  <div class="product_page_section mb-100">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 order-2 order-lg-1">
          <div class="product_sidebar product_widget">

            <div class="widget__list category wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.2s">
              <h3>category</h3>
              <div class="widget_category">
                <ul>
                  <li><a href="#">rosquilla <span>(65)</span></a></li>
                  <li><a href="#">rosquilla picante <span>(24)</span></a></li>
                  <li><a href="#">ñuto <span>(15)</span></a></li>
                  <li><a href="#">suspiro <span>(10)</span></a></li>
                  <li><a href="#">mixto <span>(22)</span></a></li>
                  <li><a href="#">biscuita <span>(15)</span></a></li>
                  <li><a href="#">keke casero <span>(10)</span></a></li>
                </ul>
              </div>
            </div>
            <div class="widget__list wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1.3s">
              <div class="widget_banner">
                <img src="assets/img/others/product-sidaber-banner.png" alt="">
              </div>
            </div>
            <div class="widget__list tags wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1.4s">
              <h3></h3>
              <div class="widget_tags">
                <ul>

                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-9 order-1 order-lg-2">
          <div class="product_page_wrapper">
            <!--shop toolbar area start-->
            <div class="product_sidebar_header mb-60 d-flex justify-content-between align-items-center">
              <div class="page__amount border">
                <p><span>12</span> Product Found of <span>30</span></p>
              </div>
              <div class="product_header_right d-flex align-items-center">
                <div class="sorting__by d-flex align-items-center">
                  <span>Sort By : </span>
                  <form class="select_option" action="#">
                    <select name="orderby" id="short">
                      <option selected value="1">Default</option>
                      <option value="2">Sort by popularity</option>
                      <option value="3">Sort by newness</option>
                      <option value="4"> low to high</option>
                      <option value="5"> high to low</option>
                      <option value="6">Product Name: Z</option>
                    </select>
                  </form>
                </div>
                <div class="product__toolbar__btn">
                  <ul class="nav" role="tablist">
                    <li class="nav-item">
                      <a class="active" data-bs-toggle="tab" href="#grid" role="tab" aria-controls="grid" aria-selected="true"><i class="ion-grid"></i></a>
                    </li>
                    <li class="nav-ite2.2..33.....0.0000nn0jhn02n0 20.m">
                      <a data-bs-toggle="tab" href="#list" aria-controls="list" role="tab" aria-selected="false"><i class="ion-ios-list"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!--shop toolbar area end-->


            <!--shop gallery start-->
            <div class="product-list-container flex-fill">
              <div class="row filter-bar d-md-none d-none">
                <ul>
                  <li class="filter-value">
                    <button data-href="/on/demandware.store/Sites-NikePeru-Site/es_PE/Search-ShowAjax?cgid=calzado&amp;srule=best-matches" class="btn text-left">
                      <span aria-hidden="true">Air Max</span>
                      <span class="sr-only">
                        Remover el filtro Actualmente Refinado por Ícono: Air Max
                      </span>
                    </button>
                  </li>
                </ul>
              </div>
              <div class="row product-grid" itemtype="http://schema.org/SomeProducts" itemid="#product">
<!--producto 1-->
                <div class="region col-6 col-lg-4" data-get-product="/on/demandware.store/Sites-NikePeru-Site/es_PE/Product-GetProductInfo">

             
                  <div class="product" data-pid="10911706011" data-gtm-vis-first-on-screen93232411_7="872" data-gtm-vis-total-visible-time93232411_7="100" data-gtm-vis-has-fired93232411_7="1">
                    <div class="product-tile">

                      <div class="image-container ">
                        <a href="/nike-air-max-solo-zapatillas-para-mujer/fn0784-004/10911706011.html">
                          <picture>
                            <source media="(min-width:1441px)" srcset="https://www.nike.com.pe/dw/image/v2/BJKZ_PRD/on/demandware.static/-/Sites-catalog-equinox/default/dw6ea9a960/images/hi-res/196968988600_1_20240305120000-mrtPeru.jpeg?sw=800&amp;sh=800">
                            <img loading="lazy" class="tile-image" src="https://www.nike.com.pe/dw/image/v2/BJKZ_PRD/on/demandware.static/-/Sites-catalog-equinox/default/dw6ea9a960/images/hi-res/196968988600_1_20240305120000-mrtPeru.jpeg?sw=500&amp;sh=500" alt="Nike Air Max Solo" title="Nike Air Max Solo">
                          </picture>
                        </a>
                        <a class="wishlistTile" href="/on/demandware.store/Sites-NikePeru-Site/es_PE/Wishlist-AddProduct" data-href="/on/demandware.store/Sites-NikePeru-Site/es_PE/Wishlist-AddProduct" title="Wishlist">
                          <span class="fa-stack fa-lg">
                            <i class="fa fa-circle fa-inverse fa-stack-2x"></i>
                            <i class="fa fa-heart-o fa-stack-1x"></i>
                          </span>
                        </a>
                      </div>
                      <div class="tile-body allowHide">

                        <div class="pdp-label     "></div>
                        <div class="pdp-link">
                          <div class="product-titles">
                            <h2 class="product-title">biscocho</h2>
                            <h3 class="product-subtitle">biscocho casero </h3>
                          </div>
                        </div>
                        <div class="pdp-count">
                          <div aria-label="Available in 6 Colores"></div>
                        </div>
                        <div class="price-wrapper slideUp">
                          <a href="/nike-air-max-solo-zapatillas-para-mujer/fn0784-004/10911706011.html">
                            <div class="price">
                              <span>
                                <span class="sales">
                                  <span class="value" content="321.93">
                                    S/ 321.93
                                  </span>
                                </span>
                                <del>
                                  <span class="strike-through list salesWithOut">
                                    <span class="value" content="321.93">
                                      S/ 459.90
                                    </span>
                                  </span>
                                </del>
                              </span>
                            </div>
                            <div class="discount">rico</div>
                          </a>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                <div class="region col-6 col-lg-4" data-get-product="/on/demandware.store/Sites-NikePeru-Site/es_PE/Product-GetProductInfo">

                  <div class="product" data-pid="10911707011" data-gtm-vis-first-on-screen93232411_7="873" data-gtm-vis-total-visible-time93232411_7="100" data-gtm-vis-has-fired93232411_7="1">
                    <div class="product-tile">

                      <div class="image-container ">
                        <a href="/nike-air-max-solo-zapatillas-para-mujer/fn0784-005/10911707011.html">
                          <picture>
                            <source media="(min-width:1441px)" srcset="https://www.nike.com.pe/dw/image/v2/BJKZ_PRD/on/demandware.static/-/Sites-catalog-equinox/default/dw2b981a0d/images/hi-res/196968988891_1_20240403-mrtPeru.jpg?sw=800&amp;sh=800">
                            <img loading="lazy" class="tile-image" src="https://www.nike.com.pe/dw/image/v2/BJKZ_PRD/on/demandware.static/-/Sites-catalog-equinox/default/dw2b981a0d/images/hi-res/196968988891_1_20240403-mrtPeru.jpg?sw=500&amp;sh=500" alt="Nike Air Max Solo" title="Nike Air Max Solo">
                          </picture>
                        </a>
                        <a class="wishlistTile" href="/on/demandware.store/Sites-NikePeru-Site/es_PE/Wishlist-AddProduct" data-href="/on/demandwacq_store/Sites-NikePeru-Site/es_PE/Wishlist-AddProduct" title="Wishlist">
                          <span class="fa-stack fa-lg">
                            <i class="fa fa-circle fa-inverse fa-stack-2x"></i>
                            <i class="fa fa-heart-o fa-stack-1x"></i>
                          </span>
                        </a>
                      </div>
                      <div class="tile-body allowHide">
                        <div class="color-swatches">

                        </div>
                        <div class="pdp-label     "></div>
                        <div class="pdp-link">
                          <div class="product-titles">
                            <h2 class="product-title">rosquilla</h2>
                            <h3 class="product-subtitle">picante / salado</h3>
                          </div>
                        </div>
                        <div class="pdp-count">
                          <div aria-label="Available in 6 Colores"></div>
                        </div>
                        <div class="price-wrapper slideUp">
                          <a href="/nike-air-max-solo-zapatillas-para-mujer/fn0784-005/10911707011.html">
                            <div class="price">
                              <span>
                                <span class="sales">
                                  <span class="value" content="367.92">
                                    S/ 367.92
                                  </span>
                                </span>
                                <del>
                                  <span class="strike-through list salesWithOut">
                                    <span class="value" content="367.92">
                                      S/ 459.90
                                    </span>
                                  </span>
                                </del>
                              </span>
                            </div>
                            <div class="discount">en descuento</div>
                          </a>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                <div class="region col-6 col-lg-4" data-get-product="/on/demandware.store/Sites-NikePeru-Site/es_PE/Product-GetProductInfo">

                  <div class="product" data-pid="10911708010" data-gtm-vis-first-on-screen93232411_7="873" data-gtm-vis-total-visible-time93232411_7="100" data-gtm-vis-has-fired93232411_7="1">
                    <div class="product-tile">

                      <div class="image-container ">
                        <a href="/nike-air-max-solo-zapatillas-para-mujer/fn0784-102/10911708010.html">
                          <picture>
                            <source media="(min-width:1441px)" srcset="https://www.nike.com.pe/dw/image/v2/BJKZ_PRD/on/demandware.static/-/Sites-catalog-equinox/default/dw87270ea5/images/hi-res/196968989041_1_20240403-mrtPeru.jpg?sw=800&amp;sh=800">
                            <img loading="lazy" class="tile-image" src="https://www.nike.com.pe/dw/image/v2/BJKZ_PRD/on/demandware.static/-/Sites-catalog-equinox/default/dw87270ea5/images/hi-res/196968989041_1_20240403-mrtPeru.jpg?sw=500&amp;sh=500" alt="Nike Air Max Solo" title="Nike Air Max Solo">
                          </picture>
                        </a>
                        <a class="wishlistTile" href="/on/demandware.store/Sites-NikePeru-Site/es_PE/Wishlist-AddProduct" data-href="/on/demandware.store/Sites-NikePeru-Site/es_PE/Wishlist-AddProduct" title="Wishlist">
                          <span class="fa-stack fa-lg">
                            <i class="fa fa-circle fa-inverse fa-stack-2x"></i>
                            <i class="fa fa-heart-o fa-stack-1x"></i>
                          </span>
                        </a>
                      </div>
                      <div class="tile-body allowHide">
                        <div class="color-swatches">

                        </div>
                        <div class="pdp-label     "></div>
                        <div class="pdp-link">
                          <div class="product-titles">
                            <h2 class="product-title">cupcakes</h2>
                            <h3 class="product-subtitle">cupcakes caseros</h3>
                          </div>
                        </div>
                        <div class="pdp-count">
                          <div aria-label="Available in 6 Colores"></div>
                        </div>
                        <div class="price-wrapper slideUp">
                          <a href="/nike-air-max-solo-zapatillas-para-mujer/fn0784-102/10911708010.html">
                            <div class="price">
                              <span>
                                <span class="sales">
                                  <span class="value" content="367.92">
                                    S/ 367.92
                                  </span>
                                </span>
                                <del>
                                  <span class="strike-through list salesWithOut">
                                    <span class="value" content="367.92">
                                      S/ 459.90
                                    </span>
                                  </span>
                                </del>
                              </span>
                            </div>
                            <div class="discount">20% de descuento</div>
                          </a>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                <div class="region col-6 col-lg-4" data-get-product="/on/demandware.store/Sites-NikePeru-Site/es_PE/Product-GetProductInfo">

                 
                  <div class="product" data-pid="10911708010" data-gtm-vis-first-on-screen93232411_7="873" data-gtm-vis-total-visible-time93232411_7="100" data-gtm-vis-has-fired93232411_7="1">
                    <div class="product-tile">

                      <div class="image-container ">
                        <a href="/nike-air-max-solo-zapatillas-para-mujer/fn0784-102/10911708010.html">
                          <picture>
                            <source media="(min-width:1441px)" srcset="https://www.nike.com.pe/dw/image/v2/BJKZ_PRD/on/demandware.static/-/Sites-catalog-equinox/default/dw87270ea5/images/hi-res/196968989041_1_20240403-mrtPeru.jpg?sw=800&amp;sh=800">
                            <img loading="lazy" class="tile-image" src="https://www.nike.com.pe/dw/image/v2/BJKZ_PRD/on/demandware.static/-/Sites-catalog-equinox/default/dw87270ea5/images/hi-res/196968989041_1_20240403-mrtPeru.jpg?sw=500&amp;sh=500" alt="Nike Air Max Solo" title="Nike Air Max Solo">
                          </picture>
                        </a>
                        <a class="wishlistTile" href="/on/demandware.store/Sites-NikePeru-Site/es_PE/Wishlist-AddProduct" data-href="/on/demandware.store/Sites-NikePeru-Site/es_PE/Wishlist-AddProduct" title="Wishlist">
                          <span class="fa-stack fa-lg">
                            <i class="fa fa-circle fa-inverse fa-stack-2x"></i>
                            <i class="fa fa-heart-o fa-stack-1x"></i>
                          </span>
                        </a>
                      </div>
                      <div class="tile-body allowHide">
                        <div class="color-swatches">

                        </div>
                        <div class="pdp-label     "></div>
                        <div class="pdp-link">
                          <div class="product-titles">
                            <h2 class="product-title">cupcakes</h2>
                            <h3 class="product-subtitle">cupcakes caseros</h3>
                          </div>
                        </div>
                        <div class="pdp-count">
                          <div aria-label="Available in 6 Colores"></div>
                        </div>
                        <div class="price-wrapper slideUp">
                          <a href="/nike-air-max-solo-zapatillas-para-mujer/fn0784-102/10911708010.html">
                            <div class="price">
                              <span>
                                <span class="sales">
                                  <span class="value" content="367.92">
                                    S/ 367.92
                                  </span>
                                </span>
                                <del>
                                  <span class="strike-through list salesWithOut">
                                    <span class="value" content="367.92">
                                      S/ 459.90
                                    </span>
                                  </span>
                                </del>
                              </span>
                            </div>
                            <div class="discount">20% de descuento</div>
                          </a>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>

                <div class="region col-6 col-lg-4">
                  <!-- CQuotient Activity Tracking (viewCategory-cquotient.js) -->
              

                  <div class="product" data-pid="10962429018" data-gtm-vis-first-on-screen93232411_7="6112" data-gtm-vis-total-visible-time93232411_7="100" data-gtm-vis-has-fired93232411_7="1">


                    <div class="product-tile">
                      <!-- dwMarker="product" dwContentID="9e68331c4e038c43caca59112a" -->


                      <div class="image-container ">
                        <a href="/nike-air-max-dn-zapatillas/dv3337-006/10962429018.html">
                          <picture>
                            <source media="(min-width:1441px)" srcset="https://www.nike.com.pe/dw/image/v2/BJKZ_PRD/on/demandware.static/-/Sites-catalog-equinox/default/dw35759976/images/hi-res/197594754683_1_20240605120000-mrtPeru.jpeg?sw=800&amp;sh=800">
                            <img loading="lazy" class="tile-image" src="https://www.nike.com.pe/dw/image/v2/BJKZ_PRD/on/demandware.static/-/Sites-catalog-equinox/default/dw35759976/images/hi-res/197594754683_1_20240605120000-mrtPeru.jpeg?sw=500&amp;sh=500" alt="Nike Air Max Dn" title="Nike Air Max Dn">
                          </picture>
                        </a>


                        <a class="wishlistTile" href="/on/demandware.store/Sites-NikePeru-Site/es_PE/Wishlist-AddProduct" data-href="/on/demandware.store/Sites-NikePeru-Site/es_PE/Wishlist-AddProduct" title="Wishlist">
                          <span class="fa-stack fa-lg">
                            <i class="fa fa-circle fa-inverse fa-stack-2x"></i>

                            <i class="fa fa-heart-o fa-stack-1x"></i>

                          </span>
                        </a>

                      </div>






                      <div class="tile-body allowHide">




                        <div class="pdp-link">
                          <div class="product-titles">
                            <h2 class="product-title">Nike Air Max</h2>

                            <h3 class="product-subtitle">Zapatillas Urbano Hombre</h3>

                          </div>
                        </div>

                        <div class="pdp-count">




                          <div aria-label="Available in 2 Colores">2 Colores</div>
                        </div>


                        <div class="price-wrapper slideDown">
                          <a href="/nike-air-max-dn-zapatillas/dv3337-006/10962429018.html">


                            <div class="price">

                              <span>


                                <span class="sales">



                                  <span class="value" content="699.90">

                                    S/ 699.90


                                  </span>
                                </span>

                              </span>

                            </div>



                            <div class="discount"></div>
                          </a>
                        </div>

                      </div>
                      <!-- END_dwmarker -->
                    </div>


                  </div>


                </div>

                <div class="region col-6 col-lg-4">
                  <!-- CQuotient Activity Tracking (viewCategory-cquotient.js) -->
        


                  <div class="product" data-pid="10858988013" data-gtm-vis-first-on-screen93232411_7="6114" data-gtm-vis-total-visible-time93232411_7="100" data-gtm-vis-has-fired93232411_7="1">


                    <div class="product-tile">
                      <!-- dwMarker="product" dwContentID="9495e852f1e723ef29ea13f14d" -->


                      <div class="image-container ">
                        <a href="/sandalias-para-hombre-nike-air-max-1/dh0295-102/10858988013.html">
                          <picture>
                            <source media="(min-width:1441px)" srcset="https://www.nike.com.pe/dw/image/v2/BJKZ_PRD/on/demandware.static/-/Sites-catalog-equinox/default/dw70badeb1/images/hi-res/196604332828_1_20240530120000-mrtPeru.jpg?sw=800&amp;sh=800">
                            <img loading="lazy" class="tile-image" src="https://www.nike.com.pe/dw/image/v2/BJKZ_PRD/on/demandware.static/-/Sites-catalog-equinox/default/dw70badeb1/images/hi-res/196604332828_1_20240530120000-mrtPeru.jpg?sw=500&amp;sh=500" alt="Nike Air Max 1" title="Nike Air Max 1">
                          </picture>
                        </a>


                        <a class="wishlistTile" href="/on/demandware.store/Sites-NikePeru-Site/es_PE/Wishlist-AddProduct" data-href="/on/demandware.store/Sites-NikePeru-Site/es_PE/Wishlist-AddProduct" title="Wishlist">
                          <span class="fa-stack fa-lg">
                            <i class="fa fa-circle fa-inverse fa-stack-2x"></i>

                            <i class="fa fa-heart-o fa-stack-1x"></i>

                          </span>
                        </a>

                      </div>
                      <div class="tile-body ">

                        <div class="pdp-label     "></div>
                        <div class="pdp-link">
                          <div class="product-titles">
                            <h2 class="product-title">Nike Air Max 1</h2>

                            <h3 class="product-subtitle">Sandalias para hombre</h3>

                          </div>
                        </div>

                        <div class="pdp-count">




                          <div aria-label="Available in 1 Color"></div>
                        </div>


                        <div class="price-wrapper slideUp">
                          <a href="/sandalias-para-hombre-nike-air-max-1/dh0295-102/10858988013.html">


                            <div class="price">

                              <span>


                                <span class="sales">



                                  <span class="value" content="230.93">

                                    S/ 230.93


                                  </span>
                                </span>

                                <del>
                                  <span class="strike-through list salesWithOut">
                                    <span class="value" content="230.93">
                                      S/ 329.90
                                    </span>
                                  </span>
                                </del>

                              </span>

                            </div>



                            <div class="discount">30% de descuento</div>
                          </a>
                        </div>

                      </div>
                      <!-- END_dwmarker -->
                    </div>


                  </div>


                </div>
                <div class="region col-6 col-lg-4" data-get-product="/on/demandware.store/Sites-NikePeru-Site/es_PE/Product-GetProductInfo">

                
                  <div class="product" data-pid="10911708010" data-gtm-vis-first-on-screen93232411_7="873" data-gtm-vis-total-visible-time93232411_7="100" data-gtm-vis-has-fired93232411_7="1">
                    <div class="product-tile">

                      <div class="image-container ">
                        <a href="/nike-air-max-solo-zapatillas-para-mujer/fn0784-102/10911708010.html">
                          <picture>
                            <source media="(min-width:1441px)" srcset="https://www.nike.com.pe/dw/image/v2/BJKZ_PRD/on/demandware.static/-/Sites-catalog-equinox/default/dw87270ea5/images/hi-res/196968989041_1_20240403-mrtPeru.jpg?sw=800&amp;sh=800">
                            <img loading="lazy" class="tile-image" src="https://www.nike.com.pe/dw/image/v2/BJKZ_PRD/on/demandware.static/-/Sites-catalog-equinox/default/dw87270ea5/images/hi-res/196968989041_1_20240403-mrtPeru.jpg?sw=500&amp;sh=500" alt="Nike Air Max Solo" title="Nike Air Max Solo">
                          </picture>
                        </a>
                        <a class="wishlistTile" href="/on/demandware.store/Sites-NikePeru-Site/es_PE/Wishlist-AddProduct" data-href="/on/demandware.store/Sites-NikePeru-Site/es_PE/Wishlist-AddProduct" title="Wishlist">
                          <span class="fa-stack fa-lg">
                            <i class="fa fa-circle fa-inverse fa-stack-2x"></i>
                            <i class="fa fa-heart-o fa-stack-1x"></i>
                          </span>
                        </a>
                      </div>
                      <div class="tile-body allowHide">
                        <div class="color-swatches">

                        </div>
                        <div class="pdp-label     "></div>
                        <div class="pdp-link">
                          <div class="product-titles">
                            <h2 class="product-title">cupcakes</h2>
                            <h3 class="product-subtitle">cupcakes caseros</h3>
                          </div>
                        </div>
                        <div class="pdp-count">
                          <div aria-label="Available in 6 Colores"></div>
                        </div>
                        <div class="price-wrapper slideUp">
                          <a href="/nike-air-max-solo-zapatillas-para-mujer/fn0784-102/10911708010.html">
                            <div class="price">
                              <span>
                                <span class="sales">
                                  <span class="value" content="367.92">
                                    S/ 367.92
                                  </span>
                                </span>
                                <del>
                                  <span class="strike-through list salesWithOut">
                                    <span class="value" content="367.92">
                                      S/ 459.90
                                    </span>
                                  </span>
                                </del>
                              </span>
                            </div>
                            <div class="discount">20% de descuento</div>
                          </a>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>

                <div class="region col-6 col-lg-4">
                  <!-- CQuotient Activity Tracking (viewCategory-cquotient.js) -->
               

                  <div class="product" data-pid="10962429018" data-gtm-vis-first-on-screen93232411_7="6112" data-gtm-vis-total-visible-time93232411_7="100" data-gtm-vis-has-fired93232411_7="1">


                    <div class="product-tile">
                      <!-- dwMarker="product" dwContentID="9e68331c4e038c43caca59112a" -->


                      <div class="image-container ">
                        <a href="/nike-air-max-dn-zapatillas/dv3337-006/10962429018.html">
                          <picture>
                            <source media="(min-width:1441px)" srcset="https://www.nike.com.pe/dw/image/v2/BJKZ_PRD/on/demandware.static/-/Sites-catalog-equinox/default/dw35759976/images/hi-res/197594754683_1_20240605120000-mrtPeru.jpeg?sw=800&amp;sh=800">
                            <img loading="lazy" class="tile-image" src="https://www.nike.com.pe/dw/image/v2/BJKZ_PRD/on/demandware.static/-/Sites-catalog-equinox/default/dw35759976/images/hi-res/197594754683_1_20240605120000-mrtPeru.jpeg?sw=500&amp;sh=500" alt="Nike Air Max Dn" title="Nike Air Max Dn">
                          </picture>
                        </a>


                        <a class="wishlistTile" href="/on/demandware.store/Sites-NikePeru-Site/es_PE/Wishlist-AddProduct" data-href="/on/demandware.store/Sites-NikePeru-Site/es_PE/Wishlist-AddProduct" title="Wishlist">
                          <span class="fa-stack fa-lg">
                            <i class="fa fa-circle fa-inverse fa-stack-2x"></i>

                            <i class="fa fa-heart-o fa-stack-1x"></i>

                          </span>
                        </a>

                      </div>






                      <div class="tile-body allowHide">




                        <div class="pdp-link">
                          <div class="product-titles">
                            <h2 class="product-title">Nike Air Max</h2>

                            <h3 class="product-subtitle">Zapatillas Urbano Hombre</h3>

                          </div>
                        </div>

                        <div class="pdp-count">




                          <div aria-label="Available in 2 Colores">2 Colores</div>
                        </div>


                        <div class="price-wrapper slideDown">
                          <a href="/nike-air-max-dn-zapatillas/dv3337-006/10962429018.html">


                            <div class="price">

                              <span>


                                <span class="sales">



                                  <span class="value" content="699.90">

                                    S/ 699.90


                                  </span>
                                </span>

                              </span>

                            </div>



                            <div class="discount"></div>
                          </a>
                        </div>

                      </div>
                      <!-- END_dwmarker -->
                    </div>


                  </div>


                </div>

                <div class="region col-6 col-lg-4">
                  <!-- CQuotient Activity Tracking (viewCategory-cquotient.js) -->
        .


                  <div class="product" data-pid="10858988013" data-gtm-vis-first-on-screen93232411_7="6114" data-gtm-vis-total-visible-time93232411_7="100" data-gtm-vis-has-fired93232411_7="1">


                    <div class="product-tile">
                      <!-- dwMarker="product" dwContentID="9495e852f1e723ef29ea13f14d" -->


                      <div class="image-container ">
                        <a href="/sandalias-para-hombre-nike-air-max-1/dh0295-102/10858988013.html">
                          <picture>
                            <source media="(min-width:1441px)" srcset="https://www.nike.com.pe/dw/image/v2/BJKZ_PRD/on/demandware.static/-/Sites-catalog-equinox/default/dw70badeb1/images/hi-res/196604332828_1_20240530120000-mrtPeru.jpg?sw=800&amp;sh=800">
                            <img loading="lazy" class="tile-image" src="https://www.nike.com.pe/dw/image/v2/BJKZ_PRD/on/demandware.static/-/Sites-catalog-equinox/default/dw70badeb1/images/hi-res/196604332828_1_20240530120000-mrtPeru.jpg?sw=500&amp;sh=500" alt="Nike Air Max 1" title="Nike Air Max 1">
                          </picture>
                        </a>


                        <a class="wishlistTile" href="/on/demandware.store/Sites-NikePeru-Site/es_PE/Wishlist-AddProduct" data-href="/on/demandware.store/Sites-NikePeru-Site/es_PE/Wishlist-AddProduct" title="Wishlist">
                          <span class="fa-stack fa-lg">
                            <i class="fa fa-circle fa-inverse fa-stack-2x"></i>

                            <i class="fa fa-heart-o fa-stack-1x"></i>

                          </span>
                        </a>

                      </div>
                      <div class="tile-body ">

                        <div class="pdp-label     "></div>
                        <div class="pdp-link">
                          <div class="product-titles">
                            <h2 class="product-title">Nike Air Max 1</h2>

                            <h3 class="product-subtitle">Sandalias para hombre</h3>

                          </div>
                        </div>

                        <div class="pdp-count">




                          <div aria-label="Available in 1 Color"></div>
                        </div>


                        <div class="price-wrapper slideUp">
                          <a href="/sandalias-para-hombre-nike-air-max-1/dh0295-102/10858988013.html">


                            <div class="price">

                              <span>


                                <span class="sales">



                                  <span class="value" content="230.93">

                                    S/ 230.93


                                  </span>
                                </span>

                                <del>
                                  <span class="strike-through list salesWithOut">
                                    <span class="value" content="230.93">
                                      S/ 329.90
                                    </span>
                                  </span>
                                </del>

                              </span>

                            </div>



                            <div class="discount">30% de descuento</div>
                          </a>
                        </div>

                      </div>
                      <!-- END_dwmarker -->
                    </div>


                  </div>


                </div>
                <div class="region col-6 col-lg-4" data-get-product="/on/demandware.store/Sites-NikePeru-Site/es_PE/Product-GetProductInfo">

                  
                  <div class="product" data-pid="10911708010" data-gtm-vis-first-on-screen93232411_7="873" data-gtm-vis-total-visible-time93232411_7="100" data-gtm-vis-has-fired93232411_7="1">
                    <div class="product-tile">

                      <div class="image-container ">
                        <a href="/nike-air-max-solo-zapatillas-para-mujer/fn0784-102/10911708010.html">
                          <picture>
                            <source media="(min-width:1441px)" srcset="https://www.nike.com.pe/dw/image/v2/BJKZ_PRD/on/demandware.static/-/Sites-catalog-equinox/default/dw87270ea5/images/hi-res/196968989041_1_20240403-mrtPeru.jpg?sw=800&amp;sh=800">
                            <img loading="lazy" class="tile-image" src="https://www.nike.com.pe/dw/image/v2/BJKZ_PRD/on/demandware.static/-/Sites-catalog-equinox/default/dw87270ea5/images/hi-res/196968989041_1_20240403-mrtPeru.jpg?sw=500&amp;sh=500" alt="Nike Air Max Solo" title="Nike Air Max Solo">
                          </picture>
                        </a>
                        <a class="wishlistTile" href="/on/demandware.store/Sites-NikePeru-Site/es_PE/Wishlist-AddProduct" data-href="/on/demandware.store/Sites-NikePeru-Site/es_PE/Wishlist-AddProduct" title="Wishlist">
                          <span class="fa-stack fa-lg">
                            <i class="fa fa-circle fa-inverse fa-stack-2x"></i>
                            <i class="fa fa-heart-o fa-stack-1x"></i>
                          </span>
                        </a>
                      </div>
                      <div class="tile-body allowHide">
                        <div class="color-swatches">

                        </div>
                        <div class="pdp-label     "></div>
                        <div class="pdp-link">
                          <div class="product-titles">
                            <h2 class="product-title">cupcakes</h2>
                            <h3 class="product-subtitle">cupcakes caseros</h3>
                          </div>
                        </div>
                        <div class="pdp-count">
                          <div aria-label="Available in 6 Colores"></div>
                        </div>
                        <div class="price-wrapper slideUp">
                          <a href="/nike-air-max-solo-zapatillas-para-mujer/fn0784-102/10911708010.html">
                            <div class="price">
                              <span>
                                <span class="sales">
                                  <span class="value" content="367.92">
                                    S/ 367.92
                                  </span>
                                </span>
                                <del>
                                  <span class="strike-through list salesWithOut">
                                    <span class="value" content="367.92">
                                      S/ 459.90
                                    </span>
                                  </span>
                                </del>
                              </span>
                            </div>
                            <div class="discount">20% de descuento</div>
                          </a>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>

                <div class="region col-6 col-lg-4">
                  <!-- CQuotient Activity Tracking (viewCategory-cquotient.js) -->
              


                  <div class="product" data-pid="10962429018" data-gtm-vis-first-on-screen93232411_7="6112" data-gtm-vis-total-visible-time93232411_7="100" data-gtm-vis-has-fired93232411_7="1">


                    <div class="product-tile">
                      <!-- dwMarker="product" dwContentID="9e68331c4e038c43caca59112a" -->


                      <div class="image-container ">
                        <a href="/nike-air-max-dn-zapatillas/dv3337-006/10962429018.html">
                          <picture>
                            <source media="(min-width:1441px)" srcset="https://www.nike.com.pe/dw/image/v2/BJKZ_PRD/on/demandware.static/-/Sites-catalog-equinox/default/dw35759976/images/hi-res/197594754683_1_20240605120000-mrtPeru.jpeg?sw=800&amp;sh=800">
                            <img loading="lazy" class="tile-image" src="https://www.nike.com.pe/dw/image/v2/BJKZ_PRD/on/demandware.static/-/Sites-catalog-equinox/default/dw35759976/images/hi-res/197594754683_1_20240605120000-mrtPeru.jpeg?sw=500&amp;sh=500" alt="Nike Air Max Dn" title="Nike Air Max Dn">
                          </picture>
                        </a>


                        <a class="wishlistTile" href="/on/demandware.store/Sites-NikePeru-Site/es_PE/Wishlist-AddProduct" data-href="/on/demandware.store/Sites-NikePeru-Site/es_PE/Wishlist-AddProduct" title="Wishlist">
                          <span class="fa-stack fa-lg">
                            <i class="fa fa-circle fa-inverse fa-stack-2x"></i>

                            <i class="fa fa-heart-o fa-stack-1x"></i>

                          </span>
                        </a>

                      </div>






                      <div class="tile-body allowHide">




                        <div class="pdp-link">
                          <div class="product-titles">
                            <h2 class="product-title">Nike Air Max</h2>

                            <h3 class="product-subtitle">Zapatillas Urbano Hombre</h3>

                          </div>
                        </div>

                        <div class="pdp-count">




                          <div aria-label="Available in 2 Colores">2 Colores</div>
                        </div>


                        <div class="price-wrapper slideDown">
                          <a href="/nike-air-max-dn-zapatillas/dv3337-006/10962429018.html">


                            <div class="price">

                              <span>


                                <span class="sales">



                                  <span class="value" content="699.90">

                                    S/ 699.90


                                  </span>
                                </span>

                              </span>

                            </div>



                            <div class="discount"></div>
                          </a>
                        </div>

                      </div>
                      <!-- END_dwmarker -->
                    </div>


                  </div>


                </div>

                <div class="region col-6 col-lg-4">
                  <!-- CQuotient Activity Tracking (viewCategory-cquotient.js) -->
        


                  <div class="product" data-pid="10858988013" data-gtm-vis-first-on-screen93232411_7="6114" data-gtm-vis-total-visible-time93232411_7="100" data-gtm-vis-has-fired93232411_7="1">


                    <div class="product-tile">
                      <!-- dwMarker="product" dwContentID="9495e852f1e723ef29ea13f14d" -->


                      <div class="image-container ">
                        <a href="/sandalias-para-hombre-nike-air-max-1/dh0295-102/10858988013.html">
                          <picture>
                            <source media="(min-width:1441px)" srcset="https://www.nike.com.pe/dw/image/v2/BJKZ_PRD/on/demandware.static/-/Sites-catalog-equinox/default/dw70badeb1/images/hi-res/196604332828_1_20240530120000-mrtPeru.jpg?sw=800&amp;sh=800">
                            <img loading="lazy" class="tile-image" src="https://www.nike.com.pe/dw/image/v2/BJKZ_PRD/on/demandware.static/-/Sites-catalog-equinox/default/dw70badeb1/images/hi-res/196604332828_1_20240530120000-mrtPeru.jpg?sw=500&amp;sh=500" alt="Nike Air Max 1" title="Nike Air Max 1">
                          </picture>
                        </a>


                        <a class="wishlistTile" href="/on/demandware.store/Sites-NikePeru-Site/es_PE/Wishlist-AddProduct" data-href="/on/demandware.store/Sites-NikePeru-Site/es_PE/Wishlist-AddProduct" title="Wishlist">
                          <span class="fa-stack fa-lg">
                            <i class="fa fa-circle fa-inverse fa-stack-2x"></i>

                            <i class="fa fa-heart-o fa-stack-1x"></i>

                          </span>
                        </a>

                      </div>
                      <div class="tile-body ">

                        <div class="pdp-label     "></div>
                        <div class="pdp-link">
                          <div class="product-titles">
                            <h2 class="product-title">Nike Air Max 1</h2>

                            <h3 class="product-subtitle">Sandalias para hombre</h3>

                          </div>
                        </div>

                        <div class="pdp-count">




                          <div aria-label="Available in 1 Color"></div>
                        </div>


                        <div class="price-wrapper slideUp">
                          <a href="/sandalias-para-hombre-nike-air-max-1/dh0295-102/10858988013.html">


                            <div class="price">

                              <span>


                                <span class="sales">



                                  <span class="value" content="230.93">

                                    S/ 230.93


                                  </span>
                                </span>

                                <del>
                                  <span class="strike-through list salesWithOut">
                                    <span class="value" content="230.93">
                                      S/ 329.90
                                    </span>
                                  </span>
                                </del>

                              </span>

                            </div>



                            <div class="discount">30% de descuento</div>
                          </a>
                        </div>

                      </div>
                      <!-- END_dwmarker -->
                    </div>


                  </div>


                </div>
                <div class="region col-6 col-lg-4" data-get-product="/on/demandware.store/Sites-NikePeru-Site/es_PE/Product-GetProductInfo">

                
                  <div class="product" data-pid="10911708010" data-gtm-vis-first-on-screen93232411_7="873" data-gtm-vis-total-visible-time93232411_7="100" data-gtm-vis-has-fired93232411_7="1">
                    <div class="product-tile">

                      <div class="image-container ">
                        <a href="/nike-air-max-solo-zapatillas-para-mujer/fn0784-102/10911708010.html">
                          <picture>
                            <source media="(min-width:1441px)" srcset="https://www.nike.com.pe/dw/image/v2/BJKZ_PRD/on/demandware.static/-/Sites-catalog-equinox/default/dw87270ea5/images/hi-res/196968989041_1_20240403-mrtPeru.jpg?sw=800&amp;sh=800">
                            <img loading="lazy" class="tile-image" src="https://www.nike.com.pe/dw/image/v2/BJKZ_PRD/on/demandware.static/-/Sites-catalog-equinox/default/dw87270ea5/images/hi-res/196968989041_1_20240403-mrtPeru.jpg?sw=500&amp;sh=500" alt="Nike Air Max Solo" title="Nike Air Max Solo">
                          </picture>
                        </a>
                        <a class="wishlistTile" href="/on/demandware.store/Sites-NikePeru-Site/es_PE/Wishlist-AddProduct" data-href="/on/demandware.store/Sites-NikePeru-Site/es_PE/Wishlist-AddProduct" title="Wishlist">
                          <span class="fa-stack fa-lg">
                            <i class="fa fa-circle fa-inverse fa-stack-2x"></i>
                            <i class="fa fa-heart-o fa-stack-1x"></i>
                          </span>
                        </a>
                      </div>
                      <div class="tile-body allowHide">
                        <div class="color-swatches">

                        </div>
                        <div class="pdp-label     "></div>
                        <div class="pdp-link">
                          <div class="product-titles">
                            <h2 class="product-title">cupcakes</h2>
                            <h3 class="product-subtitle">cupcakes caseros</h3>
                          </div>
                        </div>
                        <div class="pdp-count">
                          <div aria-label="Available in 6 Colores"></div>
                        </div>
                        <div class="price-wrapper slideUp">
                          <a href="/nike-air-max-solo-zapatillas-para-mujer/fn0784-102/10911708010.html">
                            <div class="price">
                              <span>
                                <span class="sales">
                                  <span class="value" content="367.92">
                                    S/ 367.92
                                  </span>
                                </span>
                                <del>
                                  <span class="strike-through list salesWithOut">
                                    <span class="value" content="367.92">
                                      S/ 459.90
                                    </span>
                                  </span>
                                </del>
                              </span>
                            </div>
                            <div class="discount">20% de descuento</div>
                          </a>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>

                <div class="region col-6 col-lg-4">
                  <!-- CQuotient Activity Tracking (viewCategory-cquotient.js) -->
                


                  <div class="product" data-pid="10962429018" data-gtm-vis-first-on-screen93232411_7="6112" data-gtm-vis-total-visible-time93232411_7="100" data-gtm-vis-has-fired93232411_7="1">


                    <div class="product-tile">
                      <!-- dwMarker="product" dwContentID="9e68331c4e038c43caca59112a" -->


                      <div class="image-container ">
                        <a href="/nike-air-max-dn-zapatillas/dv3337-006/10962429018.html">
                          <picture>
                            <source media="(min-width:1441px)" srcset="https://www.nike.com.pe/dw/image/v2/BJKZ_PRD/on/demandware.static/-/Sites-catalog-equinox/default/dw35759976/images/hi-res/197594754683_1_20240605120000-mrtPeru.jpeg?sw=800&amp;sh=800">
                            <img loading="lazy" class="tile-image" src="https://www.nike.com.pe/dw/image/v2/BJKZ_PRD/on/demandware.static/-/Sites-catalog-equinox/default/dw35759976/images/hi-res/197594754683_1_20240605120000-mrtPeru.jpeg?sw=500&amp;sh=500" alt="Nike Air Max Dn" title="Nike Air Max Dn">
                          </picture>
                        </a>


                        <a class="wishlistTile" href="/on/demandware.store/Sites-NikePeru-Site/es_PE/Wishlist-AddProduct" data-href="/on/demandware.store/Sites-NikePeru-Site/es_PE/Wishlist-AddProduct" title="Wishlist">
                          <span class="fa-stack fa-lg">
                            <i class="fa fa-circle fa-inverse fa-stack-2x"></i>

                            <i class="fa fa-heart-o fa-stack-1x"></i>

                          </span>
                        </a>

                      </div>






                      <div class="tile-body allowHide">




                        <div class="pdp-link">
                          <div class="product-titles">
                            <h2 class="product-title">Nike Air Max</h2>

                            <h3 class="product-subtitle">Zapatillas Urbano Hombre</h3>

                          </div>
                        </div>

                        <div class="pdp-count">




                          <div aria-label="Available in 2 Colores">2 Colores</div>
                        </div>


                        <div class="price-wrapper slideDown">
                          <a href="/nike-air-max-dn-zapatillas/dv3337-006/10962429018.html">


                            <div class="price">

                              <span>


                                <span class="sales">



                                  <span class="value" content="699.90">

                                    S/ 699.90


                                  </span>
                                </span>

                              </span>

                            </div>



                            <div class="discount"></div>
                          </a>
                        </div>

                      </div>
                      <!-- END_dwmarker -->
                    </div>


                  </div>


                </div>

                <div class="region col-6 col-lg-4">
                  <!-- CQuotient Activity Tracking (viewCategory-cquotient.js) -->
        


                  <div class="product" data-pid="10858988013" data-gtm-vis-first-on-screen93232411_7="6114" data-gtm-vis-total-visible-time93232411_7="100" data-gtm-vis-has-fired93232411_7="1">


                    <div class="product-tile">
                      <!-- dwMarker="product" dwContentID="9495e852f1e723ef29ea13f14d" -->


                      <div class="image-container ">
                        <a href="/sandalias-para-hombre-nike-air-max-1/dh0295-102/10858988013.html">
                          <picture>
                            <source media="(min-width:1441px)" srcset="https://www.nike.com.pe/dw/image/v2/BJKZ_PRD/on/demandware.static/-/Sites-catalog-equinox/default/dw70badeb1/images/hi-res/196604332828_1_20240530120000-mrtPeru.jpg?sw=800&amp;sh=800">
                            <img loading="lazy" class="tile-image" src="https://www.nike.com.pe/dw/image/v2/BJKZ_PRD/on/demandware.static/-/Sites-catalog-equinox/default/dw70badeb1/images/hi-res/196604332828_1_20240530120000-mrtPeru.jpg?sw=500&amp;sh=500" alt="Nike Air Max 1" title="Nike Air Max 1">
                          </picture>
                        </a>


                        <a class="wishlistTile" href="/on/demandware.store/Sites-NikePeru-Site/es_PE/Wishlist-AddProduct" data-href="/on/demandware.store/Sites-NikePeru-Site/es_PE/Wishlist-AddProduct" title="Wishlist">
                          <span class="fa-stack fa-lg">
                            <i class="fa fa-circle fa-inverse fa-stack-2x"></i>

                            <i class="fa fa-heart-o fa-stack-1x"></i>

                          </span>
                        </a>

                      </div>
                      <div class="tile-body ">

                        <div class="pdp-label     "></div>
                        <div class="pdp-link">
                          <div class="product-titles">
                            <h2 class="product-title">Nike Air Max 1</h2>

                            <h3 class="product-subtitle">Sandalias para hombre</h3>

                          </div>
                        </div>

                        <div class="pdp-count">




                          <div aria-label="Available in 1 Color"></div>
                        </div>


                        <div class="price-wrapper slideUp">
                          <a href="/sandalias-para-hombre-nike-air-max-1/dh0295-102/10858988013.html">


                            <div class="price">

                              <span>


                                <span class="sales">



                                  <span class="value" content="230.93">

                                    S/ 230.93


                                  </span>
                                </span>

                                <del>
                                  <span class="strike-through list salesWithOut">
                                    <span class="value" content="230.93">
                                      S/ 329.90
                                    </span>
                                  </span>
                                </del>

                              </span>

                            </div>



                            <div class="discount">30% de descuento</div>
                          </a>
                        </div>

                      </div>
                      <!-- END_dwmarker -->
                    </div>


                  </div>


                </div>
                <div class="region col-6 col-lg-4" data-get-product="/on/demandware.store/Sites-NikePeru-Site/es_PE/Product-GetProductInfo">

               
                  <div class="product" data-pid="10911708010" data-gtm-vis-first-on-screen93232411_7="873" data-gtm-vis-total-visible-time93232411_7="100" data-gtm-vis-has-fired93232411_7="1">
                    <div class="product-tile">

                      <div class="image-container ">
                        <a href="/nike-air-max-solo-zapatillas-para-mujer/fn0784-102/10911708010.html">
                          <picture>
                            <source media="(min-width:1441px)" srcset="https://www.nike.com.pe/dw/image/v2/BJKZ_PRD/on/demandware.static/-/Sites-catalog-equinox/default/dw87270ea5/images/hi-res/196968989041_1_20240403-mrtPeru.jpg?sw=800&amp;sh=800">
                            <img loading="lazy" class="tile-image" src="https://www.nike.com.pe/dw/image/v2/BJKZ_PRD/on/demandware.static/-/Sites-catalog-equinox/default/dw87270ea5/images/hi-res/196968989041_1_20240403-mrtPeru.jpg?sw=500&amp;sh=500" alt="Nike Air Max Solo" title="Nike Air Max Solo">
                          </picture>
                        </a>
                        <a class="wishlistTile" href="/on/demandware.store/Sites-NikePeru-Site/es_PE/Wishlist-AddProduct" data-href="/on/demandware.store/Sites-NikePeru-Site/es_PE/Wishlist-AddProduct" title="Wishlist">
                          <span class="fa-stack fa-lg">
                            <i class="fa fa-circle fa-inverse fa-stack-2x"></i>
                            <i class="fa fa-heart-o fa-stack-1x"></i>
                          </span>
                        </a>
                      </div>
                      <div class="tile-body allowHide">
                        <div class="color-swatches">

                        </div>
                        <div class="pdp-label     "></div>
                        <div class="pdp-link">
                          <div class="product-titles">
                            <h2 class="product-title">cupcakes</h2>
                            <h3 class="product-subtitle">cupcakes caseros</h3>
                          </div>
                        </div>
                        <div class="pdp-count">
                          <div aria-label="Available in 6 Colores"></div>
                        </div>
                        <div class="price-wrapper slideUp">
                          <a href="/nike-air-max-solo-zapatillas-para-mujer/fn0784-102/10911708010.html">
                            <div class="price">
                              <span>
                                <span class="sales">
                                  <span class="value" content="367.92">
                                    S/ 367.92
                                  </span>
                                </span>
                                <del>
                                  <span class="strike-through list salesWithOut">
                                    <span class="value" content="367.92">
                                      S/ 459.90
                                    </span>
                                  </span>
                                </del>
                              </span>
                            </div>
                            <div class="discount">20% de descuento</div>
                          </a>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>

                <div class="region col-6 col-lg-4">
                  <!-- CQuotient Activity Tracking (viewCategory-cquotient.js) -->
                


                  <div class="product" data-pid="10962429018" data-gtm-vis-first-on-screen93232411_7="6112" data-gtm-vis-total-visible-time93232411_7="100" data-gtm-vis-has-fired93232411_7="1">


                    <div class="product-tile">
                      <!-- dwMarker="product" dwContentID="9e68331c4e038c43caca59112a" -->


                      <div class="image-container ">
                        <a href="/nike-air-max-dn-zapatillas/dv3337-006/10962429018.html">
                          <picture>
                            <source media="(min-width:1441px)" srcset="https://www.nike.com.pe/dw/image/v2/BJKZ_PRD/on/demandware.static/-/Sites-catalog-equinox/default/dw35759976/images/hi-res/197594754683_1_20240605120000-mrtPeru.jpeg?sw=800&amp;sh=800">
                            <img loading="lazy" class="tile-image" src="https://www.nike.com.pe/dw/image/v2/BJKZ_PRD/on/demandware.static/-/Sites-catalog-equinox/default/dw35759976/images/hi-res/197594754683_1_20240605120000-mrtPeru.jpeg?sw=500&amp;sh=500" alt="Nike Air Max Dn" title="Nike Air Max Dn">
                          </picture>
                        </a>


                        <a class="wishlistTile" href="/on/demandware.store/Sites-NikePeru-Site/es_PE/Wishlist-AddProduct" data-href="/on/demandware.store/Sites-NikePeru-Site/es_PE/Wishlist-AddProduct" title="Wishlist">
                          <span class="fa-stack fa-lg">
                            <i class="fa fa-circle fa-inverse fa-stack-2x"></i>

                            <i class="fa fa-heart-o fa-stack-1x"></i>

                          </span>
                        </a>

                      </div>






                      <div class="tile-body allowHide">




                        <div class="pdp-link">
                          <div class="product-titles">
                            <h2 class="product-title">Nike Air Max</h2>

                            <h3 class="product-subtitle">Zapatillas Urbano Hombre</h3>

                          </div>
                        </div>

                        <div class="pdp-count">




                          <div aria-label="Available in 2 Colores">2 Colores</div>
                        </div>


                        <div class="price-wrapper slideDown">
                          <a href="/nike-air-max-dn-zapatillas/dv3337-006/10962429018.html">


                            <div class="price">

                              <span>


                                <span class="sales">



                                  <span class="value" content="699.90">

                                    S/ 699.90


                                  </span>
                                </span>

                              </span>

                            </div>



                            <div class="discount"></div>
                          </a>
                        </div>

                      </div>
                      <!-- END_dwmarker -->
                    </div>


                  </div>


                </div>

                <div class="region col-6 col-lg-4">
                  <!-- CQuotient Activity Tracking (viewCategory-cquotient.js) -->
        


                  <div class="product" data-pid="10858988013" data-gtm-vis-first-on-screen93232411_7="6114" data-gtm-vis-total-visible-time93232411_7="100" data-gtm-vis-has-fired93232411_7="1">


                    <div class="product-tile">
                      <!-- dwMarker="product" dwContentID="9495e852f1e723ef29ea13f14d" -->


                      <div class="image-container ">
                        <a href="/sandalias-para-hombre-nike-air-max-1/dh0295-102/10858988013.html">
                          <picture>
                            <source media="(min-width:1441px)" srcset="https://www.nike.com.pe/dw/image/v2/BJKZ_PRD/on/demandware.static/-/Sites-catalog-equinox/default/dw70badeb1/images/hi-res/196604332828_1_20240530120000-mrtPeru.jpg?sw=800&amp;sh=800">
                            <img loading="lazy" class="tile-image" src="https://www.nike.com.pe/dw/image/v2/BJKZ_PRD/on/demandware.static/-/Sites-catalog-equinox/default/dw70badeb1/images/hi-res/196604332828_1_20240530120000-mrtPeru.jpg?sw=500&amp;sh=500" alt="Nike Air Max 1" title="Nike Air Max 1">
                          </picture>
                        </a>


                        <a class="wishlistTile" href="/on/demandware.store/Sites-NikePeru-Site/es_PE/Wishlist-AddProduct" data-href="/on/demandware.store/Sites-NikePeru-Site/es_PE/Wishlist-AddProduct" title="Wishlist">
                          <span class="fa-stack fa-lg">
                            <i class="fa fa-circle fa-inverse fa-stack-2x"></i>

                            <i class="fa fa-heart-o fa-stack-1x"></i>

                          </span>
                        </a>

                      </div>
                      <div class="tile-body ">

                        <div class="pdp-label     "></div>
                        <div class="pdp-link">
                          <div class="product-titles">
                            <h2 class="product-title">Nike Air Max 1</h2>

                            <h3 class="product-subtitle">Sandalias para hombre</h3>

                          </div>
                        </div>

                        <div class="pdp-count">




                          <div aria-label="Available in 1 Color"></div>
                        </div>


                        <div class="price-wrapper slideUp">
                          <a href="/sandalias-para-hombre-nike-air-max-1/dh0295-102/10858988013.html">


                            <div class="price">

                              <span>


                                <span class="sales">



                                  <span class="value" content="230.93">

                                    S/ 230.93


                                  </span>
                                </span>

                                <del>
                                  <span class="strike-through list salesWithOut">
                                    <span class="value" content="230.93">
                                      S/ 329.90
                                    </span>
                                  </span>
                                </del>

                              </span>

                            </div>



                            <div class="discount">30% de descuento</div>
                          </a>
                        </div>

                      </div>
                      <!-- END_dwmarker -->
                    </div>


                  </div>


                </div>
                <div class="region col-6 col-lg-4" data-get-product="/on/demandware.store/Sites-NikePeru-Site/es_PE/Product-GetProductInfo">

                  
                  <div class="product" data-pid="10911708010" data-gtm-vis-first-on-screen93232411_7="873" data-gtm-vis-total-visible-time93232411_7="100" data-gtm-vis-has-fired93232411_7="1">
                    <div class="product-tile">

                      <div class="image-container ">
                        <a href="/nike-air-max-solo-zapatillas-para-mujer/fn0784-102/10911708010.html">
                          <picture>
                            <source media="(min-width:1441px)" srcset="https://www.nike.com.pe/dw/image/v2/BJKZ_PRD/on/demandware.static/-/Sites-catalog-equinox/default/dw87270ea5/images/hi-res/196968989041_1_20240403-mrtPeru.jpg?sw=800&amp;sh=800">
                            <img loading="lazy" class="tile-image" src="https://www.nike.com.pe/dw/image/v2/BJKZ_PRD/on/demandware.static/-/Sites-catalog-equinox/default/dw87270ea5/images/hi-res/196968989041_1_20240403-mrtPeru.jpg?sw=500&amp;sh=500" alt="Nike Air Max Solo" title="Nike Air Max Solo">
                          </picture>
                        </a>
                        <a class="wishlistTile" href="/on/demandware.store/Sites-NikePeru-Site/es_PE/Wishlist-AddProduct" data-href="/on/demandware.store/Sites-NikePeru-Site/es_PE/Wishlist-AddProduct" title="Wishlist">
                          <span class="fa-stack fa-lg">
                            <i class="fa fa-circle fa-inverse fa-stack-2x"></i>
                            <i class="fa fa-heart-o fa-stack-1x"></i>
                          </span>
                        </a>
                      </div>
                      <div class="tile-body allowHide">
                        <div class="color-swatches">

                        </div>
                        <div class="pdp-label     "></div>
                        <div class="pdp-link">
                          <div class="product-titles">
                            <h2 class="product-title">cupcakes</h2>
                            <h3 class="product-subtitle">cupcakes caseros</h3>
                          </div>
                        </div>
                        <div class="pdp-count">
                          <div aria-label="Available in 6 Colores"></div>
                        </div>
                        <div class="price-wrapper slideUp">
                          <a href="/nike-air-max-solo-zapatillas-para-mujer/fn0784-102/10911708010.html">
                            <div class="price">
                              <span>
                                <span class="sales">
                                  <span class="value" content="367.92">
                                    S/ 367.92
                                  </span>
                                </span>
                                <del>
                                  <span class="strike-through list salesWithOut">
                                    <span class="value" content="367.92">
                                      S/ 459.90
                                    </span>
                                  </span>
                                </del>
                              </span>
                            </div>
                            <div class="discount">20% de descuento</div>
                          </a>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>

                <div class="region col-6 col-lg-4">
                  <!-- CQuotient Activity Tracking (viewCategory-cquotient.js) -->
               

                  <div class="product" data-pid="10962429018" data-gtm-vis-first-on-screen93232411_7="6112" data-gtm-vis-total-visible-time93232411_7="100" data-gtm-vis-has-fired93232411_7="1">


                    <div class="product-tile">
                      <!-- dwMarker="product" dwContentID="9e68331c4e038c43caca59112a" -->


                      <div class="image-container ">
                        <a href="/nike-air-max-dn-zapatillas/dv3337-006/10962429018.html">
                          <picture>
                            <source media="(min-width:1441px)" srcset="https://www.nike.com.pe/dw/image/v2/BJKZ_PRD/on/demandware.static/-/Sites-catalog-equinox/default/dw35759976/images/hi-res/197594754683_1_20240605120000-mrtPeru.jpeg?sw=800&amp;sh=800">
                            <img loading="lazy" class="tile-image" src="https://www.nike.com.pe/dw/image/v2/BJKZ_PRD/on/demandware.static/-/Sites-catalog-equinox/default/dw35759976/images/hi-res/197594754683_1_20240605120000-mrtPeru.jpeg?sw=500&amp;sh=500" alt="Nike Air Max Dn" title="Nike Air Max Dn">
                          </picture>
                        </a>


                        <a class="wishlistTile" href="/on/demandware.store/Sites-NikePeru-Site/es_PE/Wishlist-AddProduct" data-href="/on/demandware.store/Sites-NikePeru-Site/es_PE/Wishlist-AddProduct" title="Wishlist">
                          <span class="fa-stack fa-lg">
                            <i class="fa fa-circle fa-inverse fa-stack-2x"></i>

                            <i class="fa fa-heart-o fa-stack-1x"></i>

                          </span>
                        </a>

                      </div>






                      <div class="tile-body allowHide">




                        <div class="pdp-link">
                          <div class="product-titles">
                            <h2 class="product-title">Nike Air Max</h2>

                            <h3 class="product-subtitle">Zapatillas Urbano Hombre</h3>

                          </div>
                        </div>

                        <div class="pdp-count">




                          <div aria-label="Available in 2 Colores">2 Colores</div>
                        </div>


                        <div class="price-wrapper slideDown">
                          <a href="/nike-air-max-dn-zapatillas/dv3337-006/10962429018.html">


                            <div class="price">

                              <span>


                                <span class="sales">



                                  <span class="value" content="699.90">

                                    S/ 699.90


                                  </span>
                                </span>

                              </span>

                            </div>



                            <div class="discount"></div>
                          </a>
                        </div>

                      </div>
                      <!-- END_dwmarker -->
                    </div>


                  </div>


                </div>

                <div class="region col-6 col-lg-4">
                  <!-- CQuotient Activity Tracking (viewCategory-cquotient.js) -->
        


                  <div class="product" data-pid="10858988013" data-gtm-vis-first-on-screen93232411_7="6114" data-gtm-vis-total-visible-time93232411_7="100" data-gtm-vis-has-fired93232411_7="1">


                    <div class="product-tile">
                      <!-- dwMarker="product" dwContentID="9495e852f1e723ef29ea13f14d" -->


                      <div class="image-container ">
                        <a href="/sandalias-para-hombre-nike-air-max-1/dh0295-102/10858988013.html">
                          <picture>
                            <source media="(min-width:1441px)" srcset="https://www.nike.com.pe/dw/image/v2/BJKZ_PRD/on/demandware.static/-/Sites-catalog-equinox/default/dw70badeb1/images/hi-res/196604332828_1_20240530120000-mrtPeru.jpg?sw=800&amp;sh=800">
                            <img loading="lazy" class="tile-image" src="https://www.nike.com.pe/dw/image/v2/BJKZ_PRD/on/demandware.static/-/Sites-catalog-equinox/default/dw70badeb1/images/hi-res/196604332828_1_20240530120000-mrtPeru.jpg?sw=500&amp;sh=500" alt="Nike Air Max 1" title="Nike Air Max 1">
                          </picture>
                        </a>


                        <a class="wishlistTile" href="/on/demandware.store/Sites-NikePeru-Site/es_PE/Wishlist-AddProduct" data-href="/on/demandware.store/Sites-NikePeru-Site/es_PE/Wishlist-AddProduct" title="Wishlist">
                          <span class="fa-stack fa-lg">
                            <i class="fa fa-circle fa-inverse fa-stack-2x"></i>

                            <i class="fa fa-heart-o fa-stack-1x"></i>

                          </span>
                        </a>

                      </div>
                      <div class="tile-body ">

                        <div class="pdp-label     "></div>
                        <div class="pdp-link">
                          <div class="product-titles">
                            <h2 class="product-title">Nike Air Max 1</h2>

                            <h3 class="product-subtitle">Sandalias para hombre</h3>

                          </div>
                        </div>

                        <div class="pdp-count">




                          <div aria-label="Available in 1 Color"></div>
                        </div>


                        <div class="price-wrapper slideUp">
                          <a href="/sandalias-para-hombre-nike-air-max-1/dh0295-102/10858988013.html">


                            <div class="price">

                              <span>


                                <span class="sales">



                                  <span class="value" content="230.93">

                                    S/ 230.93


                                  </span>
                                </span>

                                <del>
                                  <span class="strike-through list salesWithOut">
                                    <span class="value" content="230.93">
                                      S/ 329.90
                                    </span>
                                  </span>
                                </del>

                              </span>

                            </div>



                            <div class="discount">30% de descuento</div>
                          </a>
                        </div>

                      </div>
                      <!-- END_dwmarker -->
                    </div>


                  </div>


                </div>
<!------------------------------------------------------------------->
                <div class="region col-6 col-lg-4" data-get-product="/on/demandware.store/Sites-NikePeru-Site/es_PE/Product-GetProductInfo">

               
                  <div class="product" data-pid="10911708010" data-gtm-vis-first-on-screen93232411_7="873" data-gtm-vis-total-visible-time93232411_7="100" data-gtm-vis-has-fired93232411_7="1">
                    <div class="product-tile">

                      <div class="image-container ">
                        <a href="/nike-air-max-solo-zapatillas-para-mujer/fn0784-102/10911708010.html">
                          <picture>
                            <source media="(min-width:1441px)" srcset="https://www.nike.com.pe/dw/image/v2/BJKZ_PRD/on/demandware.static/-/Sites-catalog-equinox/default/dw87270ea5/images/hi-res/196968989041_1_20240403-mrtPeru.jpg?sw=800&amp;sh=800">
                            <img loading="lazy" class="tile-image" src="https://www.nike.com.pe/dw/image/v2/BJKZ_PRD/on/demandware.static/-/Sites-catalog-equinox/default/dw87270ea5/images/hi-res/196968989041_1_20240403-mrtPeru.jpg" alt="Nike Air Max Solo" title="Nike Air Max Solo">
                          </picture>
                        </a>
                        <a class="wishlistTile" href="/on/demandware.store/Sites-NikePeru-Site/es_PE/Wishlist-AddProduct" data-href="/on/demandware.store/Sites-NikePeru-Site/es_PE/Wishlist-AddProduct" title="Wishlist">
                          <span class="fa-stack fa-lg">
                            <i class="fa fa-circle fa-inverse fa-stack-2x"></i>
                            <i class="fa fa-heart-o fa-stack-1x"></i>
                          </span>
                        </a>
                      </div>
                      <div class="tile-body allowHide">
                        <div class="color-swatches">

                        </div>
                        <div class="pdp-label"></div>
                        <div class="pdp-link">
                          <div class="product-titles">
                            <h2 class="product-title">cupcakes</h2>
                            <h3 class="product-subtitle">cupcakes caseros</h3>
                          </div>
                        </div>
                        <div class="pdp-count">
                          <div aria-label="Available in 6 Colores"></div>
                        </div>
                        <div class="price-wrapper slideUp">
                          <a href="/nike-air-max-solo-zapatillas-para-mujer/fn0784-102/10911708010.html">
                            <div class="price">
                              <span>
                                <span class="sales">
                                  <span class="value" content="367.92">
                                    S/ 367.92
                                  </span>
                                </span>
                                <del>
                                  <span class="strike-through list salesWithOut">
                                    <span class="value" content="367.92">
                                      S/ 459.90
                                    </span>
                                  </span>
                                </del>
                              </span>
                            </div>
                            <div class="discount">20% de descuento</div>
                          </a>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
<!---------------------------------------------------------------------------->
                <div class="region col-6 col-lg-4">
                  <div class="product" data-pid="10962429018" data-gtm-vis-first-on-screen93232411_7="6112" data-gtm-vis-total-visible-time93232411_7="100" data-gtm-vis-has-fired93232411_7="1">
                    <div class="product-tile">
                      <div class="image-container ">
                          <picture>
                            <source media="(min-width:1441px)" srcset="https://www.nike.com.pe/dw/image/v2/BJKZ_PRD/on/demandware.static/-/Sites-catalog-equinox/default/dw35759976/images/hi-res/197594754683_1_20240605120000-mrtPeru.jpeg?sw=800&amp;sh=800">
                            <img loading="lazy" class="tile-image" src="../../assets/img/bg/po.png" alt="Nike Air Max Dn" title="Nike Air Max Dn">
                          </picture>
                      </div>
                      <div class="tile-body allowHide">
                        <div class="pdp-link">
                          <div class="product-titles">
                            <h2 class="product-title">Nike Air Max</h2>
                            <h3 class="product-subtitle">Zapatillas Urbano Hombre</h3>
                          </div>
                        </div>
                        <div class="pdp-count">
                          <div aria-label="Available in 2 Colores">2 Colores</div>
                        </div>
                        <div class="price-wrapper slideDown">
                          <a href="/nike-air-max-dn-zapatillas/dv3337-006/10962429018.html">
                            <div class="price">
                              <span>
                                <span class="sales">
                                  <span class="value" content="699.90">
                                    S/ 699.90
                                  </span>
                                </span>
                              </span>
                            </div>
                            <div class="discount"></div>
                          </a>
                        </div>
                      </div>
                      <!-- END_dwmarker -->
                    </div>
                  </div>
                </div>
<!------------------------------------------------------------------------------------>
                <div class="region col-6 col-lg-4">
                  <div class="product" data-pid="10858988013" data-gtm-vis-first-on-screen93232411_7="6114" data-gtm-vis-total-visible-time93232411_7="100" data-gtm-vis-has-fired93232411_7="1">
                    <div class="product-tile">
                      <div class="image-container ">
                          <picture>
                            <source media="(min-width:1441px)" srcset="">
                            <img loading="lazy" class="tile-image" src="../../assets/img/bg/producto.png">
                          </picture>
                      </div>
                      <div class="tile-body ">

                            <div class="product-titles">
                            <h2 class="product-title">rosquilla</h2>
                            <h3 class="product-subtitle">rosquillas de harina</h3>
                          </div>
                        </div>
                            <div class="price">
                              <span>
                                <span class="sales">
                                  <span class="value" content="230.93">
                                    S/ 230.93
                                  </span>
                                </span>
                                <del>
                                  <span class="strike-through list salesWithOut">
                                    <span class="value" content="230.93">
                                      S/ 329.90
                                    </span>
                                  </span>
                                </del>
                              </span>
                            </div>
                            <div class="discount">30% de descuento</div>                    
                        </div>
                      </div>
                      <!-- END_dwmarker -->
                </div>
<!------------------------------------------------------------------------------------>
                  </div>
                </div>









                <div class="col-12 grid-footer" data-sort-options="{&quot;options&quot;:[{&quot;displayName&quot;:&quot;Destacados&quot;,&quot;id&quot;:&quot;destacado&quot;,&quot;url&quot;:&quot;https://www.nike.com.pe/on/demandware.store/Sites-NikePeru-Site/es_PE/Search-UpdateGrid?cgid=calzado&amp;prefn1=icon&amp;prefv1=air-max&amp;srule=most-popular&amp;start=0&amp;sz=60&quot;},{&quot;displayName&quot;:&quot;Más reciente&quot;,&quot;id&quot;:&quot;fecha-lanza&quot;,&quot;url&quot;:&quot;https://www.nike.com.pe/on/demandware.store/Sites-NikePeru-Site/es_PE/Search-UpdateGrid?cgid=calzado&amp;prefn1=icon&amp;prefv1=air-max&amp;srule=Fecha%20de%20lanzamiento&amp;start=0&amp;sz=60&quot;},{&quot;displayName&quot;:&quot;Precio: alto-bajo&quot;,&quot;id&quot;:&quot;price-high-to-low&quot;,&quot;url&quot;:&quot;https://www.nike.com.pe/on/demandware.store/Sites-NikePeru-Site/es_PE/Search-UpdateGrid?cgid=calzado&amp;prefn1=icon&amp;prefv1=air-max&amp;srule=price-high-to-low&amp;start=0&amp;sz=60&quot;},{&quot;displayName&quot;:&quot;Precio: bajo-alto&quot;,&quot;id&quot;:&quot;price-low-to-high&quot;,&quot;url&quot;:&quot;https://www.nike.com.pe/on/demandware.store/Sites-NikePeru-Site/es_PE/Search-UpdateGrid?cgid=calzado&amp;prefn1=icon&amp;prefv1=air-max&amp;srule=price-low-to-high&amp;start=0&amp;sz=60&quot;}],&quot;ruleId&quot;:&quot;best-matches&quot;}" data-page-size="12.0" data-page-number="4">


                  <div class="show-more">
                    <div class="text-center">
                      <button class="btn btn-outline-primary col-12 col-sm-4 more d-none" data-url="https://www.nike.com.pe/on/demandware.store/Sites-NikePeru-Site/es_PE/Search-UpdateGrid?cgid=calzado&amp;prefn1=icon&amp;prefv1=air-max&amp;start=60&amp;sz=12" data-permalink="https://www.nike.com.pe/productos/calzado/air-max?start=0&amp;sz=60">
                        Cargar Más
                      </button>
                    </div>
                  </div>


                  <input type="hidden" class="permalink" value="https://www.nike.com.pe/productos/calzado/air-max?start=0&amp;sz=60">

                  <input type="hidden" class="category-id" value="calzado">

                </div>

                <!-- PLP GTMGA4 -->

                <script>
                  var viewDataLayerGA4User = '{&quot;event&quot;:&quot;view_item_list&quot;,&quot;ecommerce&quot;:{&quot;cart_id&quot;:&quot;63142e941d7f9f9bbab681b7f0&quot;,&quot;date_created_cart&quot;:&quot;2024-07-04T15:01:49.890Z&quot;,&quot;date_update_cart&quot;:&quot;2024-07-04T15:01:49.891Z&quot;,&quot;total_quantity_cart&quot;:0,&quot;total_price_cart&quot;:0,&quot;coupon&quot;:&quot;&quot;,&quot;items&quot;:[{&quot;item_name&quot;:&quot;Nike Air Max SYSTM&quot;,&quot;item_id&quot;:&quot;10962361001&quot;,&quot;price&quot;:349.9,&quot;price_without_discount&quot;:349.9,&quot;discount&quot;:[],&quot;item_brand&quot;:&quot;M001&quot;,&quot;item_category&quot;:&quot;Productos&quot;,&quot;item_variant&quot;:&quot;DQ0285-114&quot;,&quot;size&quot;:&quot;1Y&quot;,&quot;is_in_stock&quot;:true,&quot;image&quot;:[&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwb633f175/images/hi-res/197594232099_1_20240621-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw6fb2f509/images/hi-res/197594232099_2_20240621-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw7a4a6e75/images/hi-res/197594232099_3_20240621-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw005d5bcc/images/hi-res/197594232099_4_20240621-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw23a1e78b/images/hi-res/197594232099_5_20240621-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw671cf178/images/hi-res/197594232099_6_20240621-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw4504d803/images/hi-res/197594232099_7_20240621-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwd3026320/images/hi-res/197594232099_8_20240621-mrtPeru.jpg&quot;],&quot;quantity&quot;:1,&quot;currency&quot;:&quot;PEN&quot;,&quot;type&quot;:&quot;full price&quot;,&quot;is_on_sale&quot;:&quot;no&quot;,&quot;added_date&quot;:&quot;2024-06-24T17:36:36.000Z&quot;},{&quot;item_name&quot;:&quot;Nike Air Max 90 Futura&quot;,&quot;item_id&quot;:&quot;10911783010&quot;,&quot;price&quot;:527.92,&quot;price_without_discount&quot;:659.9,&quot;discount&quot;:[&quot;Boton_20&quot;],&quot;item_brand&quot;:&quot;M001&quot;,&quot;item_category&quot;:&quot;Productos&quot;,&quot;item_variant&quot;:&quot;FQ8881-618&quot;,&quot;size&quot;:&quot;5.5&quot;,&quot;is_in_stock&quot;:true,&quot;image&quot;:[&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw3797196d/images/hi-res/196969726003_1_20240207-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwb521bfe0/images/hi-res/196969726003_2_20240207-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dweca17438/images/hi-res/196969726003_3_20240207-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw721468a4/images/hi-res/196969726003_4_20240207-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw4a5c4639/images/hi-res/196969726003_5_20240207-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw6e503c8a/images/hi-res/196969726003_6_20240207-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwcca83953/images/hi-res/196969726003_7_20240207-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw93223148/images/hi-res/196969726003_8_20240207-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwe944611a/images/hi-res/196969726003_9_20240207-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw672bcc37/images/hi-res/196969726003_10_20240207-mrtPeru.jpg&quot;],&quot;quantity&quot;:1,&quot;currency&quot;:&quot;PEN&quot;,&quot;type&quot;:&quot;special price&quot;,&quot;is_on_sale&quot;:&quot;Yes&quot;,&quot;added_date&quot;:&quot;2023-11-16T06:01:36.000Z&quot;},{&quot;item_name&quot;:&quot;Nike Air Max Bliss&quot;,&quot;item_id&quot;:&quot;10911483010&quot;,&quot;price&quot;:377.94,&quot;price_without_discount&quot;:629.9,&quot;discount&quot;:[&quot;Boton_40&quot;],&quot;item_brand&quot;:&quot;M001&quot;,&quot;item_category&quot;:&quot;Productos&quot;,&quot;item_variant&quot;:&quot;FB8636-001&quot;,&quot;size&quot;:&quot;5.5&quot;,&quot;is_in_stock&quot;:true,&quot;image&quot;:[&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw69c3bcea/images/hi-res/196968983780_1_20240207120000-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw48ef03a9/images/hi-res/196968983780_2_20240207120000-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwaa648dff/images/hi-res/196968983780_3_20240207120000-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwbc501902/images/hi-res/196968983780_4_20240207120000-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw7e1475e4/images/hi-res/196968983780_5_20240207120000-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw4c99da7a/images/hi-res/196968983780_6_20240207120000-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw7b35558d/images/hi-res/196968983780_7_20240207120000-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw352a2629/images/hi-res/196968983780_8_20240207120000-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw7f00d3ca/images/hi-res/196968983780_9_20240207120000-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwfbe5ed72/images/hi-res/196968983780_10_20240207120000-mrtPeru.jpg&quot;],&quot;quantity&quot;:1,&quot;currency&quot;:&quot;PEN&quot;,&quot;type&quot;:&quot;special price&quot;,&quot;is_on_sale&quot;:&quot;Yes&quot;,&quot;added_date&quot;:&quot;2023-11-04T06:02:21.000Z&quot;},{&quot;item_name&quot;:&quot;Nike Air VaporMax 2023 Flyknit&quot;,&quot;item_id&quot;:&quot;10911605010&quot;,&quot;price&quot;:599.94,&quot;price_without_discount&quot;:999.9,&quot;discount&quot;:[&quot;Boton_40&quot;],&quot;item_brand&quot;:&quot;M001&quot;,&quot;item_category&quot;:&quot;Productos&quot;,&quot;item_variant&quot;:&quot;FD3148-001&quot;,&quot;size&quot;:&quot;5.5&quot;,&quot;is_in_stock&quot;:true,&quot;image&quot;:[&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwbdb1dbb9/images/hi-res/196968984152_1_20240207-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw3cdf8ce4/images/hi-res/196968984152_2_20240207-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw866f736a/images/hi-res/196968984152_3_20240207-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw89c47604/images/hi-res/196968984152_4_20240207-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw4e2518de/images/hi-res/196968984152_5_20240207-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwdd542694/images/hi-res/196968984152_6_20240207-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw8d26f791/images/hi-res/196968984152_7_20240207-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw67920c7a/images/hi-res/196968984152_8_20240207-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw6121f94c/images/hi-res/196968984152_9_20240207-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwa30f03d5/images/hi-res/196968984152_10_20240207-mrtPeru.jpg&quot;],&quot;quantity&quot;:1,&quot;currency&quot;:&quot;PEN&quot;,&quot;type&quot;:&quot;special price&quot;,&quot;is_on_sale&quot;:&quot;Yes&quot;,&quot;added_date&quot;:&quot;2023-11-04T06:02:40.000Z&quot;},{&quot;item_name&quot;:&quot;Nike Air VaporMax 2023 Flyknit&quot;,&quot;item_id&quot;:&quot;10931159010&quot;,&quot;price&quot;:699.93,&quot;price_without_discount&quot;:999.9,&quot;discount&quot;:[&quot;Boton_30&quot;],&quot;item_brand&quot;:&quot;M001&quot;,&quot;item_category&quot;:&quot;Productos&quot;,&quot;item_variant&quot;:&quot;FD3148-002&quot;,&quot;size&quot;:&quot;5.5&quot;,&quot;is_in_stock&quot;:true,&quot;image&quot;:[&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw4edd7f96/images/hi-res/196975871933_1_20240129120000-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw775f73bf/images/hi-res/196975871933_2_20240129120000-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw81cc591e/images/hi-res/196975871933_3_20240129120000-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw9e233da5/images/hi-res/196975871933_4_20240129120000-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw53a2ab30/images/hi-res/196975871933_5_20240129120000-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw9b4e7070/images/hi-res/196975871933_6_20240129120000-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwc4698a90/images/hi-res/196975871933_7_20240129120000-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwc48e36c8/images/hi-res/196975871933_8_20240129120000-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwf5204206/images/hi-res/196975871933_9_20240129120000-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw950a6783/images/hi-res/196975871933_10_20240129120000-mrtPeru.jpg&quot;],&quot;quantity&quot;:1,&quot;currency&quot;:&quot;PEN&quot;,&quot;type&quot;:&quot;special price&quot;,&quot;is_on_sale&quot;:&quot;Yes&quot;,&quot;added_date&quot;:&quot;2023-10-07T18:05:18.000Z&quot;},{&quot;item_name&quot;:&quot;Nike Air Max 90&quot;,&quot;item_id&quot;:&quot;10963080014&quot;,&quot;price&quot;:599.9,&quot;price_without_discount&quot;:599.9,&quot;discount&quot;:[],&quot;item_brand&quot;:&quot;M001&quot;,&quot;item_category&quot;:&quot;Productos&quot;,&quot;item_variant&quot;:&quot;FN6958-001&quot;,&quot;size&quot;:&quot;7.5&quot;,&quot;is_in_stock&quot;:true,&quot;image&quot;:[&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw0589c04a/images/hi-res/197593647955_1_20240610-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwc0377c7d/images/hi-res/197593647955_2_20240610-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw510ff9a4/images/hi-res/197593647955_3_20240610-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw3cbcb1b6/images/hi-res/197593647955_4_20240610-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwc7f2a75e/images/hi-res/197593647955_5_20240610-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwb14f2d2b/images/hi-res/197593647955_6_20240610-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw7c62cd4d/images/hi-res/197593647955_7_20240610-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwfbde348f/images/hi-res/197593647955_8_20240610-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw2dcf42be/images/hi-res/197593647955_9_20240610-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw44044fb5/images/hi-res/197593647955_10_20240610-mrtPeru.jpg&quot;],&quot;quantity&quot;:1,&quot;currency&quot;:&quot;PEN&quot;,&quot;type&quot;:&quot;full price&quot;,&quot;is_on_sale&quot;:&quot;no&quot;,&quot;added_date&quot;:&quot;2024-06-07T06:03:38.000Z&quot;},{&quot;item_name&quot;:&quot;Nike Air Max 90&quot;,&quot;item_id&quot;:&quot;10963084014&quot;,&quot;price&quot;:599.9,&quot;price_without_discount&quot;:599.9,&quot;discount&quot;:[],&quot;item_brand&quot;:&quot;M001&quot;,&quot;item_category&quot;:&quot;Productos&quot;,&quot;item_variant&quot;:&quot;FN6958-102&quot;,&quot;size&quot;:&quot;7.5&quot;,&quot;is_in_stock&quot;:true,&quot;image&quot;:[&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw4c1b48a9/images/hi-res/197593625069_1_20240624120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw3b408c1e/images/hi-res/197593625069_2_20240624120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw894a3de4/images/hi-res/197593625069_3_20240624120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw339e8b90/images/hi-res/197593625069_4_20240624120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwa0a3527c/images/hi-res/197593625069_5_20240624120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwd9145083/images/hi-res/197593625069_6_20240624120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwbff91e88/images/hi-res/197593625069_7_20240624120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwef13daff/images/hi-res/197593625069_8_20240624120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw43bfde2b/images/hi-res/197593625069_9_20240624120000-mrtPeru.jpeg&quot;],&quot;quantity&quot;:1,&quot;currency&quot;:&quot;PEN&quot;,&quot;type&quot;:&quot;full price&quot;,&quot;is_on_sale&quot;:&quot;no&quot;,&quot;added_date&quot;:&quot;2024-06-24T17:36:58.000Z&quot;},{&quot;item_name&quot;:&quot;Nike Air Max Pulse Roam&quot;,&quot;item_id&quot;:&quot;10963071015&quot;,&quot;price&quot;:789.9,&quot;price_without_discount&quot;:789.9,&quot;discount&quot;:[],&quot;item_brand&quot;:&quot;M001&quot;,&quot;item_category&quot;:&quot;Productos&quot;,&quot;item_variant&quot;:&quot;FN6920-001&quot;,&quot;size&quot;:&quot;8&quot;,&quot;is_in_stock&quot;:true,&quot;image&quot;:[&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwb687fe0e/images/hi-res/197593865045_1_20240624120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwe55119f5/images/hi-res/197593865045_2_20240624120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw74983d8d/images/hi-res/197593865045_3_20240624120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwb67d8441/images/hi-res/197593865045_4_20240624120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dweced03bd/images/hi-res/197593865045_5_20240624120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw39e849fe/images/hi-res/197593865045_6_20240624120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwb8ef7512/images/hi-res/197593865045_7_20240624120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw894f91a4/images/hi-res/197593865045_8_20240624120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw3cae2e23/images/hi-res/197593865045_9_20240624120000-mrtPeru.jpeg&quot;],&quot;quantity&quot;:1,&quot;currency&quot;:&quot;PEN&quot;,&quot;type&quot;:&quot;full price&quot;,&quot;is_on_sale&quot;:&quot;no&quot;,&quot;added_date&quot;:&quot;2024-06-24T17:36:58.000Z&quot;},{&quot;item_name&quot;:&quot;Nike Air Max Plus&quot;,&quot;item_id&quot;:&quot;10910884018&quot;,&quot;price&quot;:639.92,&quot;price_without_discount&quot;:799.9,&quot;discount&quot;:[&quot;Boton_20&quot;],&quot;item_brand&quot;:&quot;M001&quot;,&quot;item_category&quot;:&quot;Productos&quot;,&quot;item_variant&quot;:&quot;DM0032-008&quot;,&quot;size&quot;:&quot;9.5&quot;,&quot;is_in_stock&quot;:true,&quot;image&quot;:[&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw1ba9e0ec/images/hi-res/196969053246_1_20240403-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw0a5929b1/images/hi-res/196969053246_2_20240403-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwf506743e/images/hi-res/196969053246_3_20240403-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwc54cddfd/images/hi-res/196969053246_4_20240403-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw3ade0772/images/hi-res/196969053246_5_20240403-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwea47c94e/images/hi-res/196969053246_6_20240403-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwedf0a531/images/hi-res/196969053246_7_20240403-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw49ce81fb/images/hi-res/196969053246_8_20240403-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw7e881ebc/images/hi-res/196969053246_9_20240403-mrtPeru.jpg&quot;],&quot;quantity&quot;:1,&quot;currency&quot;:&quot;PEN&quot;,&quot;type&quot;:&quot;special price&quot;,&quot;is_on_sale&quot;:&quot;Yes&quot;,&quot;added_date&quot;:&quot;2024-04-09T06:00:34.000Z&quot;},{&quot;item_name&quot;:&quot;Nike Air Max Plus&quot;,&quot;item_id&quot;:&quot;10930660015&quot;,&quot;price&quot;:799.9,&quot;price_without_discount&quot;:799.9,&quot;discount&quot;:[],&quot;item_brand&quot;:&quot;M001&quot;,&quot;item_category&quot;:&quot;Productos&quot;,&quot;item_variant&quot;:&quot;DM0032-009&quot;,&quot;size&quot;:&quot;8&quot;,&quot;is_in_stock&quot;:true,&quot;image&quot;:[&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwe673ed35/images/hi-res/196975554966_1_20240305120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw3408215c/images/hi-res/196975554966_2_20240305120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw52ae80b2/images/hi-res/196975554966_3_20240305120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwc8e1fce8/images/hi-res/196975554966_4_20240305120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw0d42a793/images/hi-res/196975554966_5_20240305120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwc77e58ab/images/hi-res/196975554966_6_20240305120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw2d0cab10/images/hi-res/196975554966_7_20240305120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw3dbf7db0/images/hi-res/196975554966_8_20240305120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwf8abb32e/images/hi-res/196975554966_9_20240305120000-mrtPeru.jpeg&quot;],&quot;quantity&quot;:1,&quot;currency&quot;:&quot;PEN&quot;,&quot;type&quot;:&quot;full price&quot;,&quot;is_on_sale&quot;:&quot;no&quot;,&quot;added_date&quot;:&quot;2023-10-07T18:04:06.000Z&quot;},{&quot;item_name&quot;:&quot;Nike Air Max Excee&quot;,&quot;item_id&quot;:&quot;10931310011&quot;,&quot;price&quot;:359.92,&quot;price_without_discount&quot;:449.9,&quot;discount&quot;:[&quot;Boton_20&quot;],&quot;item_brand&quot;:&quot;M001&quot;,&quot;item_category&quot;:&quot;Productos&quot;,&quot;item_variant&quot;:&quot;FJ3232-001&quot;,&quot;size&quot;:&quot;6&quot;,&quot;is_in_stock&quot;:true,&quot;image&quot;:[&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw76a385c6/images/hi-res/196975574568_1_20240129120000-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwb69015d8/images/hi-res/196975574568_2_20240129120000-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw09837970/images/hi-res/196975574568_3_20240129120000-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwd0e7b6a9/images/hi-res/196975574568_4_20240129120000-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw91948480/images/hi-res/196975574568_5_20240129120000-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwe6a671f8/images/hi-res/196975574568_6_20240129120000-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw66216b2b/images/hi-res/196975574568_7_20240129120000-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw11169493/images/hi-res/196975574568_8_20240129120000-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw9c8e5404/images/hi-res/196975574568_9_20240129120000-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw5314d6dc/images/hi-res/196975574568_10_20240129120000-mrtPeru.jpg&quot;],&quot;quantity&quot;:1,&quot;currency&quot;:&quot;PEN&quot;,&quot;type&quot;:&quot;special price&quot;,&quot;is_on_sale&quot;:&quot;Yes&quot;,&quot;added_date&quot;:&quot;2023-10-07T18:06:03.000Z&quot;},{&quot;item_name&quot;:&quot;Nike Air Max Solo&quot;,&quot;item_id&quot;:&quot;10875131014&quot;,&quot;price&quot;:321.93,&quot;price_without_discount&quot;:459.9,&quot;discount&quot;:[&quot;Boton_30&quot;],&quot;item_brand&quot;:&quot;M001&quot;,&quot;item_category&quot;:&quot;Productos&quot;,&quot;item_variant&quot;:&quot;DX3666-100&quot;,&quot;size&quot;:&quot;7.5&quot;,&quot;is_in_stock&quot;:true,&quot;image&quot;:[&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw41a1ade1/images/hi-res/196607813232_1_20240129120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw8122babf/images/hi-res/196607813232_2_20240129120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw93c52491/images/hi-res/196607813232_3_20240129120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwbc07d4b3/images/hi-res/196607813232_4_20240129120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw72ec7fa1/images/hi-res/196607813232_5_20240129120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw2336ecf1/images/hi-res/196607813232_6_20240129120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw1f7749ac/images/hi-res/196607813232_7_20240129120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw491df727/images/hi-res/196607813232_8_20240129120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw5285377f/images/hi-res/196607813232_9_20240129120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw821f2d58/images/hi-res/196607813232_10_20240129120000-mrtPeru.jpeg&quot;],&quot;quantity&quot;:1,&quot;currency&quot;:&quot;PEN&quot;,&quot;type&quot;:&quot;special price&quot;,&quot;is_on_sale&quot;:&quot;Yes&quot;,&quot;added_date&quot;:&quot;2023-06-26T06:00:43.000Z&quot;}]}}';
                  if (viewDataLayerGA4User) {
                    dataLayer = [
                      JSON.parse(viewDataLayerGA4User.replace(/&quot;/g, '"'))
                    ]
                  }
                </script>


                <script src="/on/demandware.static/Sites-NikePeru-Site/-/es_PE/v1720069259131/js/gtmGaProduct.js"></script>

                <!-- PLP GTMGA4 -->

                <script>
                  var viewDataLayerGA4User = '{&quot;event&quot;:&quot;view_item_list&quot;,&quot;ecommerce&quot;:{&quot;cart_id&quot;:&quot;63142e941d7f9f9bbab681b7f0&quot;,&quot;date_created_cart&quot;:&quot;2024-07-04T15:01:49.890Z&quot;,&quot;date_update_cart&quot;:&quot;2024-07-04T15:01:49.891Z&quot;,&quot;total_quantity_cart&quot;:0,&quot;total_price_cart&quot;:0,&quot;coupon&quot;:&quot;&quot;,&quot;items&quot;:[{&quot;item_name&quot;:&quot;Nike Air Max 90 LV8&quot;,&quot;item_id&quot;:&quot;10931174011&quot;,&quot;price&quot;:649.9,&quot;price_without_discount&quot;:649.9,&quot;discount&quot;:[],&quot;item_brand&quot;:&quot;M001&quot;,&quot;item_category&quot;:&quot;Productos&quot;,&quot;item_variant&quot;:&quot;FD4328-001&quot;,&quot;size&quot;:&quot;6&quot;,&quot;is_in_stock&quot;:true,&quot;image&quot;:[&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw58b4415b/images/hi-res/196975558254_1_20240228120000-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw2bf56fb8/images/hi-res/196975558254_2_20240228120000-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwb212b068/images/hi-res/196975558254_3_20240228120000-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw0e56c624/images/hi-res/196975558254_4_20240228120000-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw97441d9c/images/hi-res/196975558254_5_20240228120000-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw22c5447a/images/hi-res/196975558254_6_20240228120000-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw2e625c2f/images/hi-res/196975558254_7_20240228120000-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw1e1a337b/images/hi-res/196975558254_8_20240228120000-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw2eebb54d/images/hi-res/196975558254_9_20240228120000-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwb98ca9a1/images/hi-res/196975558254_10_20240228120000-mrtPeru.jpg&quot;],&quot;quantity&quot;:1,&quot;currency&quot;:&quot;PEN&quot;,&quot;type&quot;:&quot;full price&quot;,&quot;is_on_sale&quot;:&quot;no&quot;,&quot;added_date&quot;:&quot;2023-10-07T18:05:29.000Z&quot;},{&quot;item_name&quot;:&quot;Nike Air Max 90 LV8&quot;,&quot;item_id&quot;:&quot;10931175012&quot;,&quot;price&quot;:649.9,&quot;price_without_discount&quot;:649.9,&quot;discount&quot;:[],&quot;item_brand&quot;:&quot;M001&quot;,&quot;item_category&quot;:&quot;Productos&quot;,&quot;item_variant&quot;:&quot;FD4328-100&quot;,&quot;size&quot;:&quot;6.5&quot;,&quot;is_in_stock&quot;:true,&quot;image&quot;:[&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwf8cf0cd0/images/hi-res/196975572564_1_20240228120000-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw739731d5/images/hi-res/196975572564_2_20240228120000-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw0a90b979/images/hi-res/196975572564_3_20240228120000-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw25b2717b/images/hi-res/196975572564_4_20240228120000-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwa4360729/images/hi-res/196975572564_5_20240228120000-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw495cb4d2/images/hi-res/196975572564_6_20240228120000-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwe40f20a2/images/hi-res/196975572564_7_20240228120000-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw1ff7982b/images/hi-res/196975572564_8_20240228120000-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwe2774a84/images/hi-res/196975572564_9_20240228120000-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwf53cc228/images/hi-res/196975572564_10_20240228120000-mrtPeru.jpg&quot;],&quot;quantity&quot;:1,&quot;currency&quot;:&quot;PEN&quot;,&quot;type&quot;:&quot;full price&quot;,&quot;is_on_sale&quot;:&quot;no&quot;,&quot;added_date&quot;:&quot;2023-10-07T18:05:29.000Z&quot;},{&quot;item_name&quot;:&quot;Nike Air Max 90 LV8&quot;,&quot;item_id&quot;:&quot;10931176010&quot;,&quot;price&quot;:649.9,&quot;price_without_discount&quot;:649.9,&quot;discount&quot;:[],&quot;item_brand&quot;:&quot;M001&quot;,&quot;item_category&quot;:&quot;Productos&quot;,&quot;item_variant&quot;:&quot;FD4328-101&quot;,&quot;size&quot;:&quot;5.5&quot;,&quot;is_in_stock&quot;:true,&quot;image&quot;:[&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw162c0c09/images/hi-res/196975584307_1_20240327-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw3a09192e/images/hi-res/196975584307_2_20240327-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwc9b8c677/images/hi-res/196975584307_3_20240327-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw8804020e/images/hi-res/196975584307_4_20240327-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwf4600605/images/hi-res/196975584307_5_20240327-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwba5207c2/images/hi-res/196975584307_6_20240327-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw6f1963c3/images/hi-res/196975584307_7_20240327-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw7319a5dc/images/hi-res/196975584307_8_20240327-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw695dcbaa/images/hi-res/196975584307_9_20240327-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw521ffb1f/images/hi-res/196975584307_10_20240327-mrtPeru.jpg&quot;],&quot;quantity&quot;:1,&quot;currency&quot;:&quot;PEN&quot;,&quot;type&quot;:&quot;full price&quot;,&quot;is_on_sale&quot;:&quot;no&quot;,&quot;added_date&quot;:&quot;2023-10-07T18:05:29.000Z&quot;},{&quot;item_name&quot;:&quot;Nike Air Max 90 LV8&quot;,&quot;item_id&quot;:&quot;10962717011&quot;,&quot;price&quot;:649.9,&quot;price_without_discount&quot;:649.9,&quot;discount&quot;:[],&quot;item_brand&quot;:&quot;M001&quot;,&quot;item_category&quot;:&quot;Productos&quot;,&quot;item_variant&quot;:&quot;FD4328-102&quot;,&quot;size&quot;:&quot;6&quot;,&quot;is_in_stock&quot;:true,&quot;image&quot;:[&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwd9bc9351/images/hi-res/197593630902_1_20240605120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwc0efd647/images/hi-res/197593630902_2_20240605120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw4de94577/images/hi-res/197593630902_3_20240605120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw37e4cee1/images/hi-res/197593630902_4_20240605120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwf4569f56/images/hi-res/197593630902_5_20240605120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw89f1b6db/images/hi-res/197593630902_6_20240605120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw02a05504/images/hi-res/197593630902_7_20240605120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw3179a6fa/images/hi-res/197593630902_8_20240605120000-mrtPeru.jpeg&quot;],&quot;quantity&quot;:1,&quot;currency&quot;:&quot;PEN&quot;,&quot;type&quot;:&quot;full price&quot;,&quot;is_on_sale&quot;:&quot;no&quot;,&quot;added_date&quot;:&quot;2024-06-03T22:23:03.000Z&quot;},{&quot;item_name&quot;:&quot;Nike Air Max 90 LV8&quot;,&quot;item_id&quot;:&quot;10962718010&quot;,&quot;price&quot;:649.9,&quot;price_without_discount&quot;:649.9,&quot;discount&quot;:[],&quot;item_brand&quot;:&quot;M001&quot;,&quot;item_category&quot;:&quot;Productos&quot;,&quot;item_variant&quot;:&quot;FD4328-103&quot;,&quot;size&quot;:&quot;5.5&quot;,&quot;is_in_stock&quot;:true,&quot;image&quot;:[&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw47efbca2/images/hi-res/197593633187_1_20240605120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw1f831c21/images/hi-res/197593633187_2_20240605120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwbbc521dd/images/hi-res/197593633187_3_20240605120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw367358c2/images/hi-res/197593633187_4_20240605120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw7f84e2fa/images/hi-res/197593633187_5_20240605120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw07c3f77b/images/hi-res/197593633187_6_20240605120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw2be9729a/images/hi-res/197593633187_7_20240605120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw8e8f9a88/images/hi-res/197593633187_8_20240605120000-mrtPeru.jpeg&quot;],&quot;quantity&quot;:1,&quot;currency&quot;:&quot;PEN&quot;,&quot;type&quot;:&quot;full price&quot;,&quot;is_on_sale&quot;:&quot;no&quot;,&quot;added_date&quot;:&quot;2024-06-03T22:23:03.000Z&quot;},{&quot;item_name&quot;:&quot;Nike Air Max SC&quot;,&quot;item_id&quot;:&quot;10931311011&quot;,&quot;price&quot;:349.9,&quot;price_without_discount&quot;:349.9,&quot;discount&quot;:[],&quot;item_brand&quot;:&quot;M001&quot;,&quot;item_category&quot;:&quot;Productos&quot;,&quot;item_variant&quot;:&quot;FJ3242-100&quot;,&quot;size&quot;:&quot;6&quot;,&quot;is_in_stock&quot;:true,&quot;image&quot;:[&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwe16e166b/images/hi-res/196975616480_1_20240222120000-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwbd70d457/images/hi-res/196975616480_2_20240222120000-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwdef55f65/images/hi-res/196975616480_3_20240222120000-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwa1df0e06/images/hi-res/196975616480_4_20240222120000-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw435123b0/images/hi-res/196975616480_5_20240222120000-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw0578b2bc/images/hi-res/196975616480_6_20240222120000-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwee7ba480/images/hi-res/196975616480_7_20240222120000-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwdbcee1c9/images/hi-res/196975616480_8_20240222120000-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwa2ef4d7c/images/hi-res/196975616480_9_20240222120000-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw79e8eda2/images/hi-res/196975616480_10_20240222120000-mrtPeru.jpg&quot;],&quot;quantity&quot;:1,&quot;currency&quot;:&quot;PEN&quot;,&quot;type&quot;:&quot;full price&quot;,&quot;is_on_sale&quot;:&quot;no&quot;,&quot;added_date&quot;:&quot;2023-10-07T18:06:03.000Z&quot;},{&quot;item_name&quot;:&quot;Nike Air Max Dawn&quot;,&quot;item_id&quot;:&quot;10728840011&quot;,&quot;price&quot;:549.9,&quot;price_without_discount&quot;:549.9,&quot;discount&quot;:[],&quot;item_brand&quot;:&quot;M001&quot;,&quot;item_category&quot;:&quot;Productos&quot;,&quot;item_variant&quot;:&quot;DC4068-001&quot;,&quot;size&quot;:&quot;6&quot;,&quot;is_in_stock&quot;:true,&quot;image&quot;:[&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw4a343c5c/images/hi-res/195243509738_1_20240129120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwc9907f40/images/hi-res/195243509738_2_20240129120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwdc5b27c1/images/hi-res/195243509738_3_20240129120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwa43fac73/images/hi-res/195243509738_4_20240129120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw73cb78aa/images/hi-res/195243509738_5_20240129120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw8aa3280b/images/hi-res/195243509738_6_20240129120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw2af1607d/images/hi-res/195243509738_7_20240129120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw42e6ad36/images/hi-res/195243509738_8_20240129120000-mrtPeru.jpeg&quot;],&quot;quantity&quot;:1,&quot;currency&quot;:&quot;PEN&quot;,&quot;type&quot;:&quot;full price&quot;,&quot;is_on_sale&quot;:&quot;no&quot;,&quot;added_date&quot;:&quot;2022-10-08T18:16:23.000Z&quot;},{&quot;item_name&quot;:&quot;Nike Air Max TW&quot;,&quot;item_id&quot;:&quot;10803657013&quot;,&quot;price&quot;:489.93,&quot;price_without_discount&quot;:699.9,&quot;discount&quot;:[&quot;Boton_30&quot;],&quot;item_brand&quot;:&quot;M001&quot;,&quot;item_category&quot;:&quot;Productos&quot;,&quot;item_variant&quot;:&quot;DQ3984-001&quot;,&quot;size&quot;:&quot;7&quot;,&quot;is_in_stock&quot;:true,&quot;image&quot;:[&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw7ee669ff/images/hi-res/196968160365_1_20240207-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw3f9a03cb/images/hi-res/196968160365_2_20240207-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw719bbe11/images/hi-res/196968160365_3_20240207-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwc3500e43/images/hi-res/196968160365_4_20240207-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw8a3a67e6/images/hi-res/196968160365_5_20240207-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwdc43e4c3/images/hi-res/196968160365_6_20240207-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwd8941e16/images/hi-res/196968160365_7_20240207-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dweda98966/images/hi-res/196968160365_8_20240207-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw5e7fca9a/images/hi-res/196968160365_9_20240207-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwfaeb517a/images/hi-res/196968160365_10_20240207-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw422840b8/images/hi-res/196968160365_11_20240207-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw56acc11e/images/hi-res/196968160365_12_20240207-mrtPeru.jpg&quot;],&quot;quantity&quot;:1,&quot;currency&quot;:&quot;PEN&quot;,&quot;type&quot;:&quot;special price&quot;,&quot;is_on_sale&quot;:&quot;Yes&quot;,&quot;added_date&quot;:&quot;2022-10-08T15:53:17.000Z&quot;},{&quot;item_name&quot;:&quot;Nike Air Max TW&quot;,&quot;item_id&quot;:&quot;10864704015&quot;,&quot;price&quot;:419.94,&quot;price_without_discount&quot;:699.9,&quot;discount&quot;:[&quot;Boton_40&quot;],&quot;item_brand&quot;:&quot;M001&quot;,&quot;item_category&quot;:&quot;Productos&quot;,&quot;item_variant&quot;:&quot;DQ3984-105&quot;,&quot;size&quot;:&quot;8&quot;,&quot;is_in_stock&quot;:true,&quot;image&quot;:[&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwd3745251/images/hi-res/196607806906_1_20240207-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwd4c4f3de/images/hi-res/196607806906_2_20240207-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw1e2b78be/images/hi-res/196607806906_3_20240207-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw92cb84eb/images/hi-res/196607806906_4_20240207-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw2bba6f93/images/hi-res/196607806906_5_20240207-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwee4c6115/images/hi-res/196607806906_6_20240207-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw9762d5c8/images/hi-res/196607806906_7_20240207-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwd6996147/images/hi-res/196607806906_8_20240207-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw24c8438c/images/hi-res/196607806906_9_20240207-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwd34e1677/images/hi-res/196607806906_10_20240207-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw6afad228/images/hi-res/196607806906_11_20240207-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw7c6686b0/images/hi-res/196607806906_12_20240207-mrtPeru.jpg&quot;],&quot;quantity&quot;:1,&quot;currency&quot;:&quot;PEN&quot;,&quot;type&quot;:&quot;special price&quot;,&quot;is_on_sale&quot;:&quot;Yes&quot;,&quot;added_date&quot;:&quot;2023-06-25T06:04:25.000Z&quot;},{&quot;item_name&quot;:&quot;Nike Air Max Excee&quot;,&quot;item_id&quot;:&quot;10911191014&quot;,&quot;price&quot;:449.9,&quot;price_without_discount&quot;:449.9,&quot;discount&quot;:[],&quot;item_brand&quot;:&quot;M001&quot;,&quot;item_category&quot;:&quot;Productos&quot;,&quot;item_variant&quot;:&quot;DZ0795-001&quot;,&quot;size&quot;:&quot;7.5&quot;,&quot;is_in_stock&quot;:true,&quot;image&quot;:[&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw3e723967/images/hi-res/196969060350_1_20240129120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwa403be20/images/hi-res/196969060350_2_20240129120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw58de79ce/images/hi-res/196969060350_3_20240129120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw70591539/images/hi-res/196969060350_4_20240129120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwc894f31f/images/hi-res/196969060350_5_20240129120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw6e70ba1d/images/hi-res/196969060350_6_20240129120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw271b7411/images/hi-res/196969060350_7_20240129120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw10ce4208/images/hi-res/196969060350_8_20240129120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw7c0d72ea/images/hi-res/196969060350_9_20240129120000-mrtPeru.jpeg&quot;],&quot;quantity&quot;:1,&quot;currency&quot;:&quot;PEN&quot;,&quot;type&quot;:&quot;full price&quot;,&quot;is_on_sale&quot;:&quot;no&quot;,&quot;added_date&quot;:&quot;2023-12-16T06:01:22.000Z&quot;},{&quot;item_name&quot;:&quot;Nike Air Max SYSTM&quot;,&quot;item_id&quot;:&quot;10859139001&quot;,&quot;price&quot;:349.9,&quot;price_without_discount&quot;:349.9,&quot;discount&quot;:[],&quot;item_brand&quot;:&quot;M001&quot;,&quot;item_category&quot;:&quot;Productos&quot;,&quot;item_variant&quot;:&quot;DQ0285-001&quot;,&quot;size&quot;:&quot;1Y&quot;,&quot;is_in_stock&quot;:true,&quot;image&quot;:[&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw66fa5b25/images/hi-res/196149539027_1_20240621-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw39e6da76/images/hi-res/196149539027_2_20240621-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw49101a74/images/hi-res/196149539027_3_20240621-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw4acbc979/images/hi-res/196149539027_4_20240621-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw90eee17b/images/hi-res/196149539027_5_20240621-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw5ae81fd4/images/hi-res/196149539027_6_20240621-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw3dcc596f/images/hi-res/196149539027_7_20240621-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwec51d109/images/hi-res/196149539027_8_20240621-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwdfc9a560/images/hi-res/196149539027_9_20240621-mrtPeru.jpg&quot;],&quot;quantity&quot;:1,&quot;currency&quot;:&quot;PEN&quot;,&quot;type&quot;:&quot;full price&quot;,&quot;is_on_sale&quot;:&quot;no&quot;,&quot;added_date&quot;:&quot;2023-06-25T06:02:47.000Z&quot;},{&quot;item_name&quot;:&quot;Nike Air Max SYSTM&quot;,&quot;item_id&quot;:&quot;10962360001&quot;,&quot;price&quot;:349.9,&quot;price_without_discount&quot;:349.9,&quot;discount&quot;:[],&quot;item_brand&quot;:&quot;M001&quot;,&quot;item_category&quot;:&quot;Productos&quot;,&quot;item_variant&quot;:&quot;DQ0285-113&quot;,&quot;size&quot;:&quot;1Y&quot;,&quot;is_in_stock&quot;:true,&quot;image&quot;:[&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw02a49822/images/hi-res/197594258112_1_20240430-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw39b2ca39/images/hi-res/197594258112_2_20240430-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwdb3de959/images/hi-res/197594258112_3_20240430-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwed352a65/images/hi-res/197594258112_4_20240430-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwec8fedf6/images/hi-res/197594258112_5_20240430-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw5e648b19/images/hi-res/197594258112_6_20240430-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw79eff090/images/hi-res/197594258112_7_20240430-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw2a41f66e/images/hi-res/197594258112_8_20240430-mrtPeru.jpg&quot;],&quot;quantity&quot;:1,&quot;currency&quot;:&quot;PEN&quot;,&quot;type&quot;:&quot;full price&quot;,&quot;is_on_sale&quot;:&quot;no&quot;,&quot;added_date&quot;:&quot;2024-05-04T06:01:32.000Z&quot;}]}}';

                  if (viewDataLayerGA4User) {
                    dataLayer = [
                      JSON.parse(viewDataLayerGA4User.replace(/&quot;/g, '"'))
                    ]
                  }
                </script>


                <script src="/on/demandware.static/Sites-NikePeru-Site/-/es_PE/v1720069259131/js/gtmGaProduct.js"></script>

                <!-- PLP GTMGA4 -->

                <script>
                  var viewDataLayerGA4User = '{&quot;event&quot;:&quot;view_item_list&quot;,&quot;ecommerce&quot;:{&quot;cart_id&quot;:&quot;2ba55fe613027fb9abd2782d58&quot;,&quot;date_created_cart&quot;:&quot;2024-07-04T15:01:23.855Z&quot;,&quot;date_update_cart&quot;:&quot;2024-07-04T15:01:23.856Z&quot;,&quot;total_quantity_cart&quot;:0,&quot;total_price_cart&quot;:0,&quot;coupon&quot;:&quot;&quot;,&quot;items&quot;:[{&quot;item_name&quot;:&quot;Nike Air Max 97 Futura&quot;,&quot;item_id&quot;:&quot;10962622010&quot;,&quot;price&quot;:799.9,&quot;price_without_discount&quot;:799.9,&quot;discount&quot;:[],&quot;item_brand&quot;:&quot;M001&quot;,&quot;item_category&quot;:&quot;Productos&quot;,&quot;item_variant&quot;:&quot;FB4496-003&quot;,&quot;size&quot;:&quot;5.5&quot;,&quot;is_in_stock&quot;:true,&quot;image&quot;:[&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwf22ef864/images/hi-res/197593641687_1_20240605120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw6d4d5adc/images/hi-res/197593641687_2_20240605120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwb074f7a9/images/hi-res/197593641687_3_20240605120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw8a9993e8/images/hi-res/197593641687_4_20240605120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw1486de7b/images/hi-res/197593641687_5_20240605120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw50c2f4f2/images/hi-res/197593641687_6_20240605120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwee773e9e/images/hi-res/197593641687_7_20240605120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw1b25eaab/images/hi-res/197593641687_8_20240605120000-mrtPeru.jpeg&quot;],&quot;quantity&quot;:1,&quot;currency&quot;:&quot;PEN&quot;,&quot;type&quot;:&quot;full price&quot;,&quot;is_on_sale&quot;:&quot;no&quot;,&quot;added_date&quot;:&quot;2024-06-03T22:23:03.000Z&quot;},{&quot;item_name&quot;:&quot;Nike Air Max Excee&quot;,&quot;item_id&quot;:&quot;10911323008&quot;,&quot;price&quot;:233.94,&quot;price_without_discount&quot;:389.9,&quot;discount&quot;:[&quot;Boton_40&quot;],&quot;item_brand&quot;:&quot;M001&quot;,&quot;item_category&quot;:&quot;Productos&quot;,&quot;item_variant&quot;:&quot;FB3058-004&quot;,&quot;size&quot;:&quot;4.5Y&quot;,&quot;is_in_stock&quot;:true,&quot;image&quot;:[&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw932f3a9b/images/hi-res/196969476281_1_20240213120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw21cd1f5c/images/hi-res/196969476281_2_20240213120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwd5f1484c/images/hi-res/196969476281_3_20240213120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwd0f5ffe8/images/hi-res/196969476281_4_20240213120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwdf240181/images/hi-res/196969476281_5_20240213120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw15dc931f/images/hi-res/196969476281_6_20240213120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwe299f971/images/hi-res/196969476281_7_20240213120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwc6b0001b/images/hi-res/196969476281_8_20240213120000-mrtPeru.jpeg&quot;],&quot;quantity&quot;:1,&quot;currency&quot;:&quot;PEN&quot;,&quot;type&quot;:&quot;special price&quot;,&quot;is_on_sale&quot;:&quot;Yes&quot;,&quot;added_date&quot;:&quot;2024-02-09T06:01:08.000Z&quot;},{&quot;item_name&quot;:&quot;Nike Air Max Excee&quot;,&quot;item_id&quot;:&quot;10911324011&quot;,&quot;price&quot;:389.9,&quot;price_without_discount&quot;:389.9,&quot;discount&quot;:[],&quot;item_brand&quot;:&quot;M001&quot;,&quot;item_category&quot;:&quot;Productos&quot;,&quot;item_variant&quot;:&quot;FB3058-103&quot;,&quot;size&quot;:&quot;6Y&quot;,&quot;is_in_stock&quot;:true,&quot;image&quot;:[&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw07e189aa/images/hi-res/196969495831_1_20240129120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwc14f25a4/images/hi-res/196969495831_2_20240129120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw634b490a/images/hi-res/196969495831_3_20240129120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwf7fb3b23/images/hi-res/196969495831_4_20240129120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw45226f93/images/hi-res/196969495831_5_20240129120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwe8fe6fc2/images/hi-res/196969495831_6_20240129120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwa4d75087/images/hi-res/196969495831_7_20240129120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw7b5ebac6/images/hi-res/196969495831_8_20240129120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwc7d2c5d5/images/hi-res/196969495831_9_20240129120000-mrtPeru.jpeg&quot;],&quot;quantity&quot;:1,&quot;currency&quot;:&quot;PEN&quot;,&quot;type&quot;:&quot;full price&quot;,&quot;is_on_sale&quot;:&quot;no&quot;,&quot;added_date&quot;:&quot;2023-11-16T06:01:22.000Z&quot;},{&quot;item_name&quot;:&quot;Nike Air Max Excee&quot;,&quot;item_id&quot;:&quot;10931032006&quot;,&quot;price&quot;:311.92,&quot;price_without_discount&quot;:389.9,&quot;discount&quot;:[&quot;Boton_20&quot;],&quot;item_brand&quot;:&quot;M001&quot;,&quot;item_category&quot;:&quot;Productos&quot;,&quot;item_variant&quot;:&quot;FB3058-005&quot;,&quot;size&quot;:&quot;3.5Y&quot;,&quot;is_in_stock&quot;:true,&quot;image&quot;:[&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw8e56b4c3/images/hi-res/196975935291_1_20240327-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwd19558a9/images/hi-res/196975935291_2_20240327-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwa0bb4958/images/hi-res/196975935291_3_20240327-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwc136a02f/images/hi-res/196975935291_4_20240327-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwce2b994e/images/hi-res/196975935291_5_20240327-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwde3981d7/images/hi-res/196975935291_6_20240327-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw86901474/images/hi-res/196975935291_7_20240327-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw908788a6/images/hi-res/196975935291_8_20240327-mrtPeru.jpg&quot;],&quot;quantity&quot;:1,&quot;currency&quot;:&quot;PEN&quot;,&quot;type&quot;:&quot;special price&quot;,&quot;is_on_sale&quot;:&quot;Yes&quot;,&quot;added_date&quot;:&quot;2023-10-07T18:05:04.000Z&quot;},{&quot;item_name&quot;:&quot;Nike Air Max Excee&quot;,&quot;item_id&quot;:&quot;10931033006&quot;,&quot;price&quot;:389.9,&quot;price_without_discount&quot;:389.9,&quot;discount&quot;:[],&quot;item_brand&quot;:&quot;M001&quot;,&quot;item_category&quot;:&quot;Productos&quot;,&quot;item_variant&quot;:&quot;FB3058-104&quot;,&quot;size&quot;:&quot;3.5Y&quot;,&quot;is_in_stock&quot;:true,&quot;image&quot;:[&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwcad92bcc/images/hi-res/196975933686_1_20240327-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw9c13463c/images/hi-res/196975933686_2_20240327-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwb09cbffa/images/hi-res/196975933686_3_20240327-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwd7b39a10/images/hi-res/196975933686_4_20240327-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwdac75d0e/images/hi-res/196975933686_5_20240327-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwda78a2a6/images/hi-res/196975933686_6_20240327-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwb1c93cdb/images/hi-res/196975933686_7_20240327-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwd66fd371/images/hi-res/196975933686_8_20240327-mrtPeru.jpg&quot;],&quot;quantity&quot;:1,&quot;currency&quot;:&quot;PEN&quot;,&quot;type&quot;:&quot;full price&quot;,&quot;is_on_sale&quot;:&quot;no&quot;,&quot;added_date&quot;:&quot;2023-10-07T18:05:04.000Z&quot;},{&quot;item_name&quot;:&quot;Nike Air Max Solo&quot;,&quot;item_id&quot;:&quot;10931370017&quot;,&quot;price&quot;:413.91,&quot;price_without_discount&quot;:459.9,&quot;discount&quot;:[&quot;Boton_10&quot;],&quot;item_brand&quot;:&quot;M001&quot;,&quot;item_category&quot;:&quot;Productos&quot;,&quot;item_variant&quot;:&quot;FN0136-001&quot;,&quot;size&quot;:&quot;9&quot;,&quot;is_in_stock&quot;:true,&quot;image&quot;:[&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw75fce603/images/hi-res/196975619986_1_20240305-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwe8e63323/images/hi-res/196975619986_2_20240305-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw541b52a2/images/hi-res/196975619986_3_20240305-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw2855d633/images/hi-res/196975619986_4_20240305-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw49d708f8/images/hi-res/196975619986_5_20240305-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw4dc3a85e/images/hi-res/196975619986_6_20240305-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw47a174a9/images/hi-res/196975619986_7_20240305-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw75387584/images/hi-res/196975619986_8_20240305-mrtPeru.jpg&quot;],&quot;quantity&quot;:1,&quot;currency&quot;:&quot;PEN&quot;,&quot;type&quot;:&quot;special price&quot;,&quot;is_on_sale&quot;:&quot;Yes&quot;,&quot;added_date&quot;:&quot;2023-10-07T18:06:06.000Z&quot;},{&quot;item_name&quot;:&quot;Nike Air Max Excee&quot;,&quot;item_id&quot;:&quot;10911747014&quot;,&quot;price&quot;:449.9,&quot;price_without_discount&quot;:449.9,&quot;discount&quot;:[],&quot;item_brand&quot;:&quot;M001&quot;,&quot;item_category&quot;:&quot;Productos&quot;,&quot;item_variant&quot;:&quot;FN7304-100&quot;,&quot;size&quot;:&quot;7.5&quot;,&quot;is_in_stock&quot;:true,&quot;image&quot;:[&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwba4dd969/images/hi-res/196969081850_1_20240207-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw090cd784/images/hi-res/196969081850_2_20240207-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw7ad45b23/images/hi-res/196969081850_3_20240207-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwf3357327/images/hi-res/196969081850_4_20240207-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw3eb9b916/images/hi-res/196969081850_5_20240207-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwb0081a5c/images/hi-res/196969081850_6_20240207-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw36308dbe/images/hi-res/196969081850_7_20240207-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwab46cff2/images/hi-res/196969081850_8_20240207-mrtPeru.jpg&quot;],&quot;quantity&quot;:1,&quot;currency&quot;:&quot;PEN&quot;,&quot;type&quot;:&quot;full price&quot;,&quot;is_on_sale&quot;:&quot;no&quot;,&quot;added_date&quot;:&quot;2023-12-16T06:01:48.000Z&quot;},{&quot;item_name&quot;:&quot;Nike Air Max Plus Drift&quot;,&quot;item_id&quot;:&quot;10931173014&quot;,&quot;price&quot;:799.9,&quot;price_without_discount&quot;:799.9,&quot;discount&quot;:[],&quot;item_brand&quot;:&quot;M001&quot;,&quot;item_category&quot;:&quot;Productos&quot;,&quot;item_variant&quot;:&quot;FD4290-003&quot;,&quot;size&quot;:&quot;7.5&quot;,&quot;is_in_stock&quot;:true,&quot;image&quot;:[&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw62269a9a/images/hi-res/196975585472_1_20240430-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwe644d4db/images/hi-res/196975585472_2_20240430-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwb716530e/images/hi-res/196975585472_3_20240430-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw3ac13db3/images/hi-res/196975585472_4_20240430-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwf26a9ceb/images/hi-res/196975585472_5_20240430-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwbf4cec5c/images/hi-res/196975585472_6_20240430-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwd6a4abb8/images/hi-res/196975585472_7_20240430-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw5e2d3d75/images/hi-res/196975585472_8_20240430-mrtPeru.jpg&quot;],&quot;quantity&quot;:1,&quot;currency&quot;:&quot;PEN&quot;,&quot;type&quot;:&quot;full price&quot;,&quot;is_on_sale&quot;:&quot;no&quot;,&quot;added_date&quot;:&quot;2023-10-07T18:05:28.000Z&quot;},{&quot;item_name&quot;:&quot;Nike Air Max Plus Drift&quot;,&quot;item_id&quot;:&quot;10962716013&quot;,&quot;price&quot;:799.9,&quot;price_without_discount&quot;:799.9,&quot;discount&quot;:[],&quot;item_brand&quot;:&quot;M001&quot;,&quot;item_category&quot;:&quot;Productos&quot;,&quot;item_variant&quot;:&quot;FD4290-400&quot;,&quot;size&quot;:&quot;7&quot;,&quot;is_in_stock&quot;:true,&quot;image&quot;:[&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwb90ce9cd/images/hi-res/197593650122_1_20240610-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw83b16bca/images/hi-res/197593650122_2_20240610-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwf53ece56/images/hi-res/197593650122_3_20240610-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwc0edef02/images/hi-res/197593650122_4_20240610-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw80e512f5/images/hi-res/197593650122_5_20240610-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw59ba8ee5/images/hi-res/197593650122_6_20240610-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw3163de32/images/hi-res/197593650122_7_20240610-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwe13d1f78/images/hi-res/197593650122_8_20240610-mrtPeru.jpg&quot;],&quot;quantity&quot;:1,&quot;currency&quot;:&quot;PEN&quot;,&quot;type&quot;:&quot;full price&quot;,&quot;is_on_sale&quot;:&quot;no&quot;,&quot;added_date&quot;:&quot;2024-06-07T06:03:22.000Z&quot;},{&quot;item_name&quot;:&quot;Nike Air Max Dn&quot;,&quot;item_id&quot;:&quot;10947746011&quot;,&quot;price&quot;:699.9,&quot;price_without_discount&quot;:699.9,&quot;discount&quot;:[],&quot;item_brand&quot;:&quot;M001&quot;,&quot;item_category&quot;:&quot;Urbano&quot;,&quot;item_variant&quot;:&quot;FJ3145-005&quot;,&quot;size&quot;:&quot;6&quot;,&quot;is_in_stock&quot;:true,&quot;image&quot;:[&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw5d9f52f2/images/hi-res/197600125629_1_20240321120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwa3049f6a/images/hi-res/197600125629_2_20240321120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw8bddb352/images/hi-res/197600125629_3_20240321120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw39acabd3/images/hi-res/197600125629_4_20240321120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwf4b9523b/images/hi-res/197600125629_5_20240321120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw16eb7cb5/images/hi-res/197600125629_6_20240321120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw1f6106b6/images/hi-res/197600125629_7_20240321120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwf07e5f60/images/hi-res/197600125629_8_20240321120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw86d1692c/images/hi-res/197600125629_9_20240321120000-mrtPeru.jpeg&quot;],&quot;quantity&quot;:1,&quot;currency&quot;:&quot;PEN&quot;,&quot;type&quot;:&quot;full price&quot;,&quot;is_on_sale&quot;:&quot;no&quot;,&quot;added_date&quot;:&quot;2023-11-30T06:00:40.000Z&quot;},{&quot;item_name&quot;:&quot;Nike Air Max Dn&quot;,&quot;item_id&quot;:&quot;10962776011&quot;,&quot;price&quot;:699.9,&quot;price_without_discount&quot;:699.9,&quot;discount&quot;:[],&quot;item_brand&quot;:&quot;M001&quot;,&quot;item_category&quot;:&quot;Urbano&quot;,&quot;item_variant&quot;:&quot;FJ3145-100&quot;,&quot;size&quot;:&quot;6&quot;,&quot;is_in_stock&quot;:true,&quot;image&quot;:[&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw0945525e/images/hi-res/197594597969_1_20240415-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwc4966274/images/hi-res/197594597969_2_20240415-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw57880473/images/hi-res/197594597969_3_20240415-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw43206b36/images/hi-res/197594597969_4_20240415-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw7af3a3c3/images/hi-res/197594597969_5_20240415-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwb2a64294/images/hi-res/197594597969_6_20240415-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw4b66b9d5/images/hi-res/197594597969_7_20240415-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwbb7af488/images/hi-res/197594597969_8_20240415-mrtPeru.jpg&quot;],&quot;quantity&quot;:1,&quot;currency&quot;:&quot;PEN&quot;,&quot;type&quot;:&quot;full price&quot;,&quot;is_on_sale&quot;:&quot;no&quot;,&quot;added_date&quot;:&quot;2024-04-13T06:01:30.000Z&quot;},{&quot;item_name&quot;:&quot;Nike Air Max Dn&quot;,&quot;item_id&quot;:&quot;10962777010&quot;,&quot;price&quot;:699.9,&quot;price_without_discount&quot;:699.9,&quot;discount&quot;:[],&quot;item_brand&quot;:&quot;M001&quot;,&quot;item_category&quot;:&quot;Urbano&quot;,&quot;item_variant&quot;:&quot;FJ3145-101&quot;,&quot;size&quot;:&quot;5.5&quot;,&quot;is_in_stock&quot;:true,&quot;image&quot;:[&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw594d9232/images/hi-res/197594584297_1_20240605120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw68ff01f5/images/hi-res/197594584297_2_20240605120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwf1054ee8/images/hi-res/197594584297_3_20240605120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwa614ec34/images/hi-res/197594584297_4_20240605120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwaa419d9d/images/hi-res/197594584297_5_20240605120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw22734b30/images/hi-res/197594584297_6_20240605120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw20a1e3e0/images/hi-res/197594584297_7_20240605120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw3ef37093/images/hi-res/197594584297_8_20240605120000-mrtPeru.jpeg&quot;],&quot;quantity&quot;:1,&quot;currency&quot;:&quot;PEN&quot;,&quot;type&quot;:&quot;full price&quot;,&quot;is_on_sale&quot;:&quot;no&quot;,&quot;added_date&quot;:&quot;2024-06-03T22:23:04.000Z&quot;}]}}';

                  if (viewDataLayerGA4User) {
                    dataLayer = [
                      JSON.parse(viewDataLayerGA4User.replace(/&quot;/g, '"'))
                    ]
                  }
                </script>


                <script src="/on/demandware.static/Sites-NikePeru-Site/-/es_PE/v1720069259131/js/gtmGaProduct.js"></script>

                <!-- PLP GTMGA4 -->

                <script>
                  var viewDataLayerGA4User = '{&quot;event&quot;:&quot;view_item_list&quot;,&quot;ecommerce&quot;:{&quot;cart_id&quot;:&quot;2ba55fe613027fb9abd2782d58&quot;,&quot;date_created_cart&quot;:&quot;2024-07-04T15:01:23.855Z&quot;,&quot;date_update_cart&quot;:&quot;2024-07-04T15:01:23.856Z&quot;,&quot;total_quantity_cart&quot;:0,&quot;total_price_cart&quot;:0,&quot;coupon&quot;:&quot;&quot;,&quot;items&quot;:[{&quot;item_name&quot;:&quot;Nike Air Max Dn&quot;,&quot;item_id&quot;:&quot;10962429018&quot;,&quot;price&quot;:699.9,&quot;price_without_discount&quot;:699.9,&quot;discount&quot;:[],&quot;item_brand&quot;:&quot;M001&quot;,&quot;item_category&quot;:&quot;Urbano&quot;,&quot;item_variant&quot;:&quot;DV3337-006&quot;,&quot;size&quot;:&quot;9.5&quot;,&quot;is_in_stock&quot;:true,&quot;image&quot;:[&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw35759976/images/hi-res/197594754683_1_20240605120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwb5e48b31/images/hi-res/197594754683_2_20240605120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw2fd9d5ea/images/hi-res/197594754683_3_20240605120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwb1edd54d/images/hi-res/197594754683_4_20240605120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwa22462c4/images/hi-res/197594754683_5_20240605120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw77868731/images/hi-res/197594754683_6_20240605120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw02d86abf/images/hi-res/197594754683_7_20240605120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw54e2f893/images/hi-res/197594754683_8_20240605120000-mrtPeru.jpeg&quot;],&quot;quantity&quot;:1,&quot;currency&quot;:&quot;PEN&quot;,&quot;type&quot;:&quot;full price&quot;,&quot;is_on_sale&quot;:&quot;no&quot;,&quot;added_date&quot;:&quot;2024-06-03T22:22:29.000Z&quot;},{&quot;item_name&quot;:&quot;Nike Air Max 1&quot;,&quot;item_id&quot;:&quot;10858988013&quot;,&quot;price&quot;:230.93,&quot;price_without_discount&quot;:329.9,&quot;discount&quot;:[&quot;Boton_30&quot;],&quot;item_brand&quot;:&quot;M001&quot;,&quot;item_category&quot;:&quot;Productos&quot;,&quot;item_variant&quot;:&quot;DH0295-102&quot;,&quot;size&quot;:&quot;7&quot;,&quot;is_in_stock&quot;:true,&quot;image&quot;:[&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw70badeb1/images/hi-res/196604332828_1_20240530120000-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw5b0104a7/images/hi-res/196604332828_2_20240530120000-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw143dbd58/images/hi-res/196604332828_3_20240530120000-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwd92a0192/images/hi-res/196604332828_4_20240530120000-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwd41a17da/images/hi-res/196604332828_5_20240530120000-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwb5e4983d/images/hi-res/196604332828_6_20240530120000-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw1db8a359/images/hi-res/196604332828_7_20240530120000-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw5f619491/images/hi-res/196604332828_8_20240530120000-mrtPeru.jpg&quot;],&quot;quantity&quot;:1,&quot;currency&quot;:&quot;PEN&quot;,&quot;type&quot;:&quot;special price&quot;,&quot;is_on_sale&quot;:&quot;Yes&quot;,&quot;added_date&quot;:&quot;2023-06-25T06:02:32.000Z&quot;},{&quot;item_name&quot;:&quot;Nike Air Max Plus&quot;,&quot;item_id&quot;:&quot;10931119014&quot;,&quot;price&quot;:799.9,&quot;price_without_discount&quot;:799.9,&quot;discount&quot;:[],&quot;item_brand&quot;:&quot;M001&quot;,&quot;item_category&quot;:&quot;Productos&quot;,&quot;item_variant&quot;:&quot;FB9722-002&quot;,&quot;size&quot;:&quot;7.5&quot;,&quot;is_in_stock&quot;:true,&quot;image&quot;:[&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw83385d85/images/hi-res/196975578795_1_20240305-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwc6b1dec5/images/hi-res/196975578795_2_20240305-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw5ae8bc80/images/hi-res/196975578795_3_20240305-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwec09ad73/images/hi-res/196975578795_4_20240305-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwb784b0fd/images/hi-res/196975578795_5_20240305-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw02f1afa8/images/hi-res/196975578795_6_20240305-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw33eb125a/images/hi-res/196975578795_7_20240305-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwa385cc11/images/hi-res/196975578795_8_20240305-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwb26f0625/images/hi-res/196975578795_9_20240305-mrtPeru.jpg&quot;],&quot;quantity&quot;:1,&quot;currency&quot;:&quot;PEN&quot;,&quot;type&quot;:&quot;full price&quot;,&quot;is_on_sale&quot;:&quot;no&quot;,&quot;added_date&quot;:&quot;2023-10-07T18:05:16.000Z&quot;},{&quot;item_name&quot;:&quot;Nike Air Max 90 Futura SE&quot;,&quot;item_id&quot;:&quot;10911793011&quot;,&quot;price&quot;:419.94,&quot;price_without_discount&quot;:699.9,&quot;discount&quot;:[&quot;Boton_40&quot;],&quot;item_brand&quot;:&quot;M001&quot;,&quot;item_category&quot;:&quot;Productos&quot;,&quot;item_variant&quot;:&quot;FV1168-100&quot;,&quot;size&quot;:&quot;6&quot;,&quot;is_in_stock&quot;:true,&quot;image&quot;:[&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw6271fbee/images/hi-res/196969815493_1_20240207-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw842f202f/images/hi-res/196969815493_2_20240207-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwe65f094d/images/hi-res/196969815493_3_20240207-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwb4b57e22/images/hi-res/196969815493_4_20240207-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwc19f470f/images/hi-res/196969815493_5_20240207-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw49b260e3/images/hi-res/196969815493_6_20240207-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw80f55225/images/hi-res/196969815493_7_20240207-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw0debdc50/images/hi-res/196969815493_8_20240207-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw68ca1914/images/hi-res/196969815493_9_20240207-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw9dc16cfb/images/hi-res/196969815493_10_20240207-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw02cacc06/images/hi-res/196969815493_11_20240207-mrtPeru.jpg&quot;],&quot;quantity&quot;:1,&quot;currency&quot;:&quot;PEN&quot;,&quot;type&quot;:&quot;special price&quot;,&quot;is_on_sale&quot;:&quot;Yes&quot;,&quot;added_date&quot;:&quot;2023-11-04T06:02:41.000Z&quot;},{&quot;item_name&quot;:&quot;Nike Air Max INTRLK Lite&quot;,&quot;item_id&quot;:&quot;10962516011&quot;,&quot;price&quot;:349.9,&quot;price_without_discount&quot;:349.9,&quot;discount&quot;:[],&quot;item_brand&quot;:&quot;M001&quot;,&quot;item_category&quot;:&quot;Productos&quot;,&quot;item_variant&quot;:&quot;DX3705-102&quot;,&quot;size&quot;:&quot;6&quot;,&quot;is_in_stock&quot;:true,&quot;image&quot;:[&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw7bc1d23c/images/hi-res/196977109287_1_20240423-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw1e1d9017/images/hi-res/196977109287_2_20240423-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw64bd5261/images/hi-res/196977109287_3_20240423-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw545a2106/images/hi-res/196977109287_4_20240423-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwf0afce59/images/hi-res/196977109287_5_20240423-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw2695ae28/images/hi-res/196977109287_6_20240423-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw2e3c7ae8/images/hi-res/196977109287_7_20240423-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwaa1c18a5/images/hi-res/196977109287_8_20240423-mrtPeru.jpg&quot;],&quot;quantity&quot;:1,&quot;currency&quot;:&quot;PEN&quot;,&quot;type&quot;:&quot;full price&quot;,&quot;is_on_sale&quot;:&quot;no&quot;,&quot;added_date&quot;:&quot;2024-04-23T06:02:03.000Z&quot;},{&quot;item_name&quot;:&quot;Nike Air Max Bliss&quot;,&quot;item_id&quot;:&quot;10911723010&quot;,&quot;price&quot;:419.94,&quot;price_without_discount&quot;:699.9,&quot;discount&quot;:[&quot;Boton_40&quot;],&quot;item_brand&quot;:&quot;M001&quot;,&quot;item_category&quot;:&quot;Productos&quot;,&quot;item_variant&quot;:&quot;FN3863-300&quot;,&quot;size&quot;:&quot;5.5&quot;,&quot;is_in_stock&quot;:true,&quot;image&quot;:[&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwcf46b6df/images/hi-res/196968989225_1_20240207-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw103c2496/images/hi-res/196968989225_2_20240207-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw45e4017b/images/hi-res/196968989225_3_20240207-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw3ce31426/images/hi-res/196968989225_4_20240207-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw8bbaf8f1/images/hi-res/196968989225_5_20240207-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw65c2e658/images/hi-res/196968989225_6_20240207-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw6351c3a1/images/hi-res/196968989225_7_20240207-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw3d9efe14/images/hi-res/196968989225_8_20240207-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwa4bf929b/images/hi-res/196968989225_9_20240207-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwf4c9a00d/images/hi-res/196968989225_10_20240207-mrtPeru.jpg&quot;],&quot;quantity&quot;:1,&quot;currency&quot;:&quot;PEN&quot;,&quot;type&quot;:&quot;special price&quot;,&quot;is_on_sale&quot;:&quot;Yes&quot;,&quot;added_date&quot;:&quot;2023-11-04T06:02:40.000Z&quot;},{&quot;item_name&quot;:&quot;Nike Air Max INTRLK Lite&quot;,&quot;item_id&quot;:&quot;10804481015&quot;,&quot;price&quot;:244.93,&quot;price_without_discount&quot;:349.9,&quot;discount&quot;:[&quot;Boton_30&quot;],&quot;item_brand&quot;:&quot;M001&quot;,&quot;item_category&quot;:&quot;Productos&quot;,&quot;item_variant&quot;:&quot;DZ7288-600&quot;,&quot;size&quot;:&quot;8&quot;,&quot;is_in_stock&quot;:true,&quot;image&quot;:[&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw66e70afd/images/hi-res/196152234339_1_20240313-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwa8b13901/images/hi-res/196152234339_2_20240313-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwa8d8eca0/images/hi-res/196152234339_3_20240313-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw3b667d8e/images/hi-res/196152234339_4_20240313-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw68076ebc/images/hi-res/196152234339_5_20240313-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwea6f1e02/images/hi-res/196152234339_6_20240313-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwd9561eac/images/hi-res/196152234339_7_20240313-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw68d0a51f/images/hi-res/196152234339_8_20240313-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwb4ea9e14/images/hi-res/196152234339_9_20240313-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw4265a583/images/hi-res/196152234339_10_20240313-mrtPeru.jpg&quot;],&quot;quantity&quot;:1,&quot;currency&quot;:&quot;PEN&quot;,&quot;type&quot;:&quot;special price&quot;,&quot;is_on_sale&quot;:&quot;Yes&quot;,&quot;added_date&quot;:&quot;2024-03-13T06:00:57.000Z&quot;},{&quot;item_name&quot;:&quot;Nike Air Max Plus&quot;,&quot;item_id&quot;:&quot;10930966011&quot;,&quot;price&quot;:639.92,&quot;price_without_discount&quot;:799.9,&quot;discount&quot;:[&quot;Boton_20&quot;],&quot;item_brand&quot;:&quot;M001&quot;,&quot;item_category&quot;:&quot;Productos&quot;,&quot;item_variant&quot;:&quot;DZ3671-104&quot;,&quot;size&quot;:&quot;6&quot;,&quot;is_in_stock&quot;:true,&quot;image&quot;:[&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwa773587c/images/hi-res/196975584048_1_20240403-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw9f2c6fa0/images/hi-res/196975584048_2_20240403-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw9625fcbb/images/hi-res/196975584048_3_20240403-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw766b0f4d/images/hi-res/196975584048_4_20240403-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw75201cd7/images/hi-res/196975584048_5_20240403-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw111551e0/images/hi-res/196975584048_6_20240403-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw6e3be325/images/hi-res/196975584048_7_20240403-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwb1cb50eb/images/hi-res/196975584048_8_20240403-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw70a608f3/images/hi-res/196975584048_9_20240403-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw99fa4ded/images/hi-res/196975584048_10_20240403-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw20533930/images/hi-res/196975584048_11_20240403-mrtPeru.jpg&quot;],&quot;quantity&quot;:1,&quot;currency&quot;:&quot;PEN&quot;,&quot;type&quot;:&quot;special price&quot;,&quot;is_on_sale&quot;:&quot;Yes&quot;,&quot;added_date&quot;:&quot;2023-10-07T18:05:01.000Z&quot;},{&quot;item_name&quot;:&quot;Nike Air Max 90 GORETEX&quot;,&quot;item_id&quot;:&quot;10911630014&quot;,&quot;price&quot;:449.94,&quot;price_without_discount&quot;:749.9,&quot;discount&quot;:[&quot;Boton_40&quot;],&quot;item_brand&quot;:&quot;M001&quot;,&quot;item_category&quot;:&quot;Productos&quot;,&quot;item_variant&quot;:&quot;FD5810-100&quot;,&quot;size&quot;:&quot;7.5&quot;,&quot;is_in_stock&quot;:true,&quot;image&quot;:[&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwee4d1831/images/hi-res/196969077426_1_20240305-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwf6bf1b06/images/hi-res/196969077426_2_20240305-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw28daa59f/images/hi-res/196969077426_3_20240305-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw67c2d1ea/images/hi-res/196969077426_4_20240305-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw5a26e5d5/images/hi-res/196969077426_5_20240305-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwb86a536e/images/hi-res/196969077426_6_20240305-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwe9fac879/images/hi-res/196969077426_7_20240305-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw69ec60c3/images/hi-res/196969077426_8_20240305-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwa70a919c/images/hi-res/196969077426_9_20240305-mrtPeru.jpg&quot;],&quot;quantity&quot;:1,&quot;currency&quot;:&quot;PEN&quot;,&quot;type&quot;:&quot;special price&quot;,&quot;is_on_sale&quot;:&quot;Yes&quot;,&quot;added_date&quot;:&quot;2024-03-09T06:00:30.000Z&quot;},{&quot;item_name&quot;:&quot;Nike Air Max 90 GORETEX&quot;,&quot;item_id&quot;:&quot;10911631013&quot;,&quot;price&quot;:599.92,&quot;price_without_discount&quot;:749.9,&quot;discount&quot;:[&quot;Boton_20&quot;],&quot;item_brand&quot;:&quot;M001&quot;,&quot;item_category&quot;:&quot;Productos&quot;,&quot;item_variant&quot;:&quot;FD5810-200&quot;,&quot;size&quot;:&quot;7&quot;,&quot;is_in_stock&quot;:true,&quot;image&quot;:[&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwf5817350/images/hi-res/196969077648_1_20240305-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw978565e1/images/hi-res/196969077648_2_20240305-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw679eedf4/images/hi-res/196969077648_3_20240305-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw9e2aa8e7/images/hi-res/196969077648_4_20240305-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwf58a09fc/images/hi-res/196969077648_5_20240305-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw53f7a2c4/images/hi-res/196969077648_6_20240305-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw5647c899/images/hi-res/196969077648_7_20240305-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwda812226/images/hi-res/196969077648_8_20240305-mrtPeru.jpg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwc476ada7/images/hi-res/196969077648_9_20240305-mrtPeru.jpg&quot;],&quot;quantity&quot;:1,&quot;currency&quot;:&quot;PEN&quot;,&quot;type&quot;:&quot;special price&quot;,&quot;is_on_sale&quot;:&quot;Yes&quot;,&quot;added_date&quot;:&quot;2024-03-09T06:00:30.000Z&quot;},{&quot;item_name&quot;:&quot;Nike Air Max 90 GORE-TEX&quot;,&quot;item_id&quot;:&quot;10931193014&quot;,&quot;price&quot;:599.92,&quot;price_without_discount&quot;:749.9,&quot;discount&quot;:[&quot;Boton_20&quot;],&quot;item_brand&quot;:&quot;M001&quot;,&quot;item_category&quot;:&quot;Productos&quot;,&quot;item_variant&quot;:&quot;FD5810-002&quot;,&quot;size&quot;:&quot;7.5&quot;,&quot;is_in_stock&quot;:true,&quot;image&quot;:[&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwc2651007/images/hi-res/196975555529_1_20240108120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwec4c68b7/images/hi-res/196975555529_2_20240108120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwbeb04f31/images/hi-res/196975555529_3_20240108120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw599e46d1/images/hi-res/196975555529_4_20240108120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwc8f34d8c/images/hi-res/196975555529_5_20240108120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwa804a573/images/hi-res/196975555529_6_20240108120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwb1bf005e/images/hi-res/196975555529_7_20240108120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwd58bb480/images/hi-res/196975555529_8_20240108120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw08bd2b94/images/hi-res/196975555529_9_20240108120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw2425b5a2/images/hi-res/196975555529_10_20240108120000-mrtPeru.jpeg&quot;],&quot;quantity&quot;:1,&quot;currency&quot;:&quot;PEN&quot;,&quot;type&quot;:&quot;special price&quot;,&quot;is_on_sale&quot;:&quot;Yes&quot;,&quot;added_date&quot;:&quot;2023-10-07T18:05:30.000Z&quot;},{&quot;item_name&quot;:&quot;Nike Air Max 97 Futura&quot;,&quot;item_id&quot;:&quot;10931042011&quot;,&quot;price&quot;:799.9,&quot;price_without_discount&quot;:799.9,&quot;discount&quot;:[],&quot;item_brand&quot;:&quot;M001&quot;,&quot;item_category&quot;:&quot;Productos&quot;,&quot;item_variant&quot;:&quot;FB4496-201&quot;,&quot;size&quot;:&quot;6&quot;,&quot;is_in_stock&quot;:true,&quot;image&quot;:[&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw2069a0bb/images/hi-res/196975569830_1_20240213120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw2a35fb38/images/hi-res/196975569830_2_20240213120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw0033b364/images/hi-res/196975569830_3_20240213120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw69cf13cf/images/hi-res/196975569830_4_20240213120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw3f11e53f/images/hi-res/196975569830_5_20240213120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw69a92ba6/images/hi-res/196975569830_6_20240213120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw360e6fee/images/hi-res/196975569830_7_20240213120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dw7f483f5b/images/hi-res/196975569830_8_20240213120000-mrtPeru.jpeg&quot;,&quot;https://www.nike.com.pe/on/demandware.static/-/Sites-catalog-equinox/default/dwf36a6b73/images/hi-res/196975569830_9_20240213120000-mrtPeru.jpeg&quot;],&quot;quantity&quot;:1,&quot;currency&quot;:&quot;PEN&quot;,&quot;type&quot;:&quot;full price&quot;,&quot;is_on_sale&quot;:&quot;no&quot;,&quot;added_date&quot;:&quot;2023-10-07T18:05:04.000Z&quot;}]}}';

                  if (viewDataLayerGA4User) {
                    dataLayer = [
                      JSON.parse(viewDataLayerGA4User.replace(/&quot;/g, '"'))
                    ]
                  }
                </script>


                <script src="/on/demandware.static/Sites-NikePeru-Site/-/es_PE/v1720069259131/js/gtmGaProduct.js"></script>
              </div>
            </div>


            <!--shop gallery end-->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- product page section end -->

  <!--footer area start-->
  <?php require_once("../../view/modules/footer.php") ?>
  <!--footer area end-->


  <!-- modal area start-->
  <div class="modal fade" id="modal_box" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="ion-android-close"></i></span>
        </button>
        <div class="modal_body">
          <div class="container">
            <div class="row">
              <div class="col-lg-5 col-md-5 col-sm-12">
                <div class="modal_tab">
                  <div class="tab-content product-details-large">
                    <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                      <div class="modal_tab_img">
                        <a href="#"><img src="assets/img/product/product1.png" alt=""></a>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="tab2" role="tabpanel">
                      <div class="modal_tab_img">
                        <a href="single-product.php"><img src="assets/img/product/product2.png" alt=""></a>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="tab3" role="tabpanel">
                      <div class="modal_tab_img">
                        <a href="#"><img src="assets/img/product/product3.png" alt=""></a>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="tab4" role="tabpanel">
                      <div class="modal_tab_img">
                        <a href="#"><img src="assets/img/product/product4.png" alt=""></a>
                      </div>
                    </div>
                  </div>
                  <div class="modal_tab_button">
                    <ul class="nav product_navactive owl-carousel" role="tablist">
                      <li>
                        <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false"><img src="assets/img/product/mini-product/product1.png" alt=""></a>
                      </li>
                      <li>
                        <a class="nav-link" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false"><img src="assets/img/product/mini-product/product2.png" alt=""></a>
                      </li>
                      <li>
                        <a class="nav-link button_three" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false"><img src="assets/img/product/mini-product/product3.png" alt=""></a>
                      </li>
                      <li>
                        <a class="nav-link" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false"><img src="assets/img/product/mini-product/product4.png" alt=""></a>
                      </li>

                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-7 col-md-7 col-sm-12">
                <div class="modal_right">
                  <div class="modal_title mb-10">
                    <h2>Donec Ac Tempus</h2>
                  </div>
                  <div class="modal_price mb-10">
                    <span class="new_price">$64.99</span>
                    <span class="old_price">$78.99</span>
                  </div>
                  <div class="modal_description mb-15">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste
                      laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti
                      nam
                      in quos qui nemo ipsum numquam, reiciendis maiores quidem aperiam, rerum
                      vel
                      recusandae </p>
                  </div>
                  <div class="variants_selects">
                    <div class="variants_size">
                      <h2>size</h2>
                      <select class="select_option">
                        <option selected value="1">s</option>
                        <option value="1">m</option>
                        <option value="1">l</option>
                        <option value="1">xl</option>
                        <option value="1">xxl</option>
                      </select>
                    </div>
                    <div class="variants_color">
                      <h2>color</h2>
                      <select class="select_option">
                        <option selected value="1">purple</option>
                        <option value="1">violet</option>
                        <option value="1">black</option>
                        <option value="1">pink</option>
                        <option value="1">orange</option>
                      </select>
                    </div>
                    <div class="modal_add_to_cart">
                      <form action="#">
                        <input min="1" max="100" step="1" value="1" type="number">
                        <button type="submit">add to cart</button>
                      </form>
                    </div>
                  </div>
                  <div class="modal_social">
                    <h2>Share this product</h2>
                    <ul>
                      <li class="facebook"><a href="#"><i class="ion-social-facebook"></i></a>
                      </li>
                      <li class="twitter"><a href="#"><i class="ion-social-twitter"></i></a>
                      </li>
                      <li class="pinterest"><a href="#"><i class="ion-social-pinterest"></i></a>
                      </li>
                      <li class="google-plus"><a href="#"><i class="ion-social-googleplus"></i></a>
                      </li>
                      <li class="linkedin"><a href="#"><i class="ion-social-linkedin"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- modal area end-->

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



<style>
  .product-tile {
    border: 1px solid #ddd;
    padding: 10px;
    margin: 10px;
    border-radius: 8px;
    transition: box-shadow 0.3s ease;
  }

  .product-tile:hover {
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
  }

  .image-container img {
    max-width: 100%;
    border-radius: 8px;
  }

  .product-title,
  .product-subtitle {
    margin: 0;
    padding: 0;
    font-weight: bold;
  }

  .product-subtitle {
    color: #777;
    font-size: 0.9em;
  }

  .price-wrapper {
    margin-top: 10px;
  }

  .sales {
    color: red;
    font-weight: bold;
  }

  .strike-through {
    color: #999;
    text-decoration: line-through;
  }

  .discount {
    color: green;
    font-weight: bold;
    margin-top: 5px;
  }

  .swatches .items {
    display: inline-block;
    margin-right: 5px;
  }

  .swatch-more {
    font-size: 0.9em;
    color: #007bff;
  }

  .wishlistTile {
    position: absolute;
    top: 10px;
    right: 10px;
  }

  .wishlistTile .fa-stack {
    color: red;
  }
</style>