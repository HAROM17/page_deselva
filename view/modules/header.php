<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>

</head>

<body>
    <!--offcanvas menu area start-->
    <div class="body_overlay">
    </div>
    <div class="offcanvas_menu">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="offcanvas_menu_wrapper">
                        <div class="canvas_close">
                            <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                        </div>
                        <div class="welcome_text text-center">
                            <p>bienvenidos ala Panaderia D'selva    </p>
                        </div>
                        <div id="menu" class="text-left ">
                            <ul class="offcanvas_main_menu">
                                <li class="menu-item-has-children active">
                                    <a href="<?php echo $url ?>">Home</a>
                                </li>
                                <li><a href="<?php echo $url ?>#categoria">categoria</a></li>
                                <li class="menu-item-has-children"><a href="<?php echo $url ?>#productos">productos</a>
                                </li>
                               <!-- <li class="menu-item-has-children"><a href="#">galeria</a>
                                </li>-->
                                <li class="menu-item-has-children"><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--offcanvas menu area end-->

    <!--header area start-->
    <header class="header_section">
    <div class="infinite-promo-bar">
      <div class="infinite-promo-bar__content">
        <div class="infinite-promo-bar__announcements">
          <p class="infinite-promo-bar__text">Bienvenidos a pastelería D'selva |</p>
          <span class="infinite-promo-bar__vertical-line"></span>
        </div>
        <div class="infinite-promo-bar__announcements">
          <p class="infinite-promo-bar__text">Bienvenidos a pastelería D'selva |</p>
          <span class="infinite-promo-bar__vertical-line"></span>
        </div>
        <div class="infinite-promo-bar__announcements">
          <p class="infinite-promo-bar__text">Bienvenidos a pastelería D'selva |</p>
          <span class="infinite-promo-bar__vertical-line"></span>
        </div>
        <div class="infinite-promo-bar__announcements">
          <p class="infinite-promo-bar__text">Bienvenidos a pastelería D'selva</p>
          <span class="infinite-promo-bar__vertical-line"></span>
        </div>
        <div class="infinite-promo-bar__announcements">
          <p class="infinite-promo-bar__text">Bienvenidos a pastelería D'selva</p>
          <span class="infinite-promo-bar__vertical-line"></span>
        </div>
        <div class="infinite-promo-bar__announcements">
          <p class="infinite-promo-bar__text">Bienvenidos a pastelería D'selva</p>
          <span class="infinite-promo-bar__vertical-line"></span>
        </div>
        <div class="infinite-promo-bar__announcements">
          <p class="infinite-promo-bar__text">Bienvenidos a pastelería D'selva</p>
          <span class="infinite-promo-bar__vertical-line"></span>
        </div>
        <div class="infinite-promo-bar__announcements">
          <p class="infinite-promo-bar__text">Bienvenidos a pastelería D'selva</p>
          <span class="infinite-promo-bar__vertical-line"></span>
        </div>
        <div class="infinite-promo-bar__announcements">
          <p class="infinite-promo-bar__text">Bienvenidos a pastelería D'selva</p>
          <span class="infinite-promo-bar__vertical-line"></span>
        </div>
        <div class="infinite-promo-bar__announcements">
          <p class="infinite-promo-bar__text">Bienvenidos a pastelería D'selva</p>
          <span class="infinite-promo-bar__vertical-line"></span>
        </div>
        <div class="infinite-promo-bar__announcements">
          <p class="infinite-promo-bar__text">Bienvenidos a pastelería D'selva</p>
          <span class="infinite-promo-bar__vertical-line"></span>
        </div>
        <div class="infinite-promo-bar__announcements">
          <p class="infinite-promo-bar__text">Bienvenidos a pastelería D'selva</p>
          <span class="infinite-promo-bar__vertical-line"></span>
        </div>
        <div class="infinite-promo-bar__announcements">
          <p class="infinite-promo-bar__text">Bienvenidos a pastelería D'selva</p>
          <span class="infinite-promo-bar__vertical-line"></span>
        </div>
        
        <!-- Repite los anuncios según sea necesario -->
      </div>
      
      </div>
      <style>
/* Estilo general para la barra */
.infinite-promo-bar {
  width: 100%;
  overflow: hidden;
  background-color: honeydew;
  border-bottom: 1px solid #ddd;
  white-space: nowrap;
  box-sizing: border-box;
  padding: 1px 0;
  position: relative;
  
}

/* Estilo del contenido */
.infinite-promo-bar__content {
  display: flex;
  white-space: nowrap;
  animation: scroll 30s linear infinite;
}

/* Estilo para los anuncios */
.infinite-promo-bar__announcements {
  display: flex;
  align-items: center;
  padding: 0 20px;
  white-space: nowrap;
}

.infinite-promo-bar__text {
  font-size: 20px;
  font-weight: bold;
  color: black;
  display: inline-block;
  animation: scrollText 30s linear infinite;
}

.infinite-promo-bar__vertical-line {
  margin-left: 10px;
  color: #ddd;
}

/* Animación de scroll para el contenedor */
@keyframes scroll {
  0% {
    transform: translateX(0%);
  }
  100% {
    transform: translateX(-100%);
  }
}

/* Animación de scroll para el texto */
@keyframes scrollText {
  0% {
    transform: translateX(0%);
  }
  100% {
    transform: translateX(-100%);
  }
}

      </style>
    </div>


    <div class="container">
        <div class="roww">
            <div class="col-12">
                <div class="main_header d-flex justify-content-between align-items-center">
                    <div class="">
                        <a class="sticky_none" href="<?php echo $url ?>"><img src="<?php echo $url ?>assets/img/logo/logo.png" alt="" height="100px " width="150px"></a>
                    </div>
                    <!--main menu start-->
                    <div class="main_menu d-none d-lg-block">
                        <nav>
                            <ul class="d-flex">
                                <li><a class="active" href="<?php echo $url ?>">Home</a></li>
                                <li><a href="<?php echo $url ?>#categoria">Categoria</a></li>
                                <li><a href="<?php echo $url ?>#productos">Productos</a></li>
                               <!-- <li><a href="<?php echo $url ?>#galeria">Galería</a></li>-->
                                <li><a href="<?php echo $url ?>view/contacto/">Contacto</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!--main menu end-->
                    <div class="header_account">
                        <ul class="d-flex">
                            <li class="shopping_cart"><a href="javascript:void(0)"><img src="<?php echo $url?>assets/img/bg/Carrito.png"></a><span class="item_count">2</span></li>
                            <li class="account_link">
                                <button class="account_button"><i class="icofont-user-alt-7"></i> Cuenta</button>
                                <ul class="dropdown_account_link">
                                    <li><a href="<?php echo $url ?>view/perfil/">Mi cuenta</a></li>
                                    <li><a href="<?php echo $url ?>view/acceso-registro/">Acceso</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="canvas_open">
                            <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


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
                    <a href="single-product.html"><img src="assets/img/product/product1.png" alt=""></a>
                </div>
                <div class="cart_info">
                    <a href="single-product.html">Primis In Faucibus</a>
                    <p>1 x <span> $65.00 </span></p>
                </div>
                <div class="cart_remove">
                    <a href="#"><i class="ion-android-close"></i></a>
                </div>
            </div>
            <div class="cart_item">
                <div class="cart_img">
                    <a href="single-product.html"><img src="assets/img/product/product2.png" alt=""></a>
                </div>
                <div class="cart_info">
                    <a href="single-product.html">Letraset Sheets</a>
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
                <a href="<?php echo $url ?>view/detalleProducto/">View cart</a>
            </div>
            <div class="cart_button">
                <a href="<?php echo $url ?>view/realizarconpra/"><i class="fa fa-sign-in"></i> Checkout</a>
            </div>
        </div>
    </div>

</body>

</html>
<style>
  
  
</style>