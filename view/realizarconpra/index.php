<?php  require_once("../../config/conexion.php");
$url = Conectar::ruta();
?>
    <?php require_once("../modules/head.php") ?>

<body>
<?php require_once("../modules/header.php")?>

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
                            <p>Welcome to Bucker Bakery Shop</p>
                        </div>
                        <div id="menu" class="text-left ">
                            <ul class="offcanvas_main_menu">
                                <li class="menu-item-has-children active"><span class="menu-expand"><i class="fa fa-angle-down"></i></span>
                                    <a href="#">Home</a>
                                    <ul class="sub-menu" style="display: none;">
                                        <li><a href="index.html">Home 01</a></li>
                                        <li><a href="index-2.html">Home 02</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">About Us</a></li>
                                <li class="menu-item-has-children"><span class="menu-expand"><i class="fa fa-angle-down"></i></span><a href="#">Pages</a>
                                    <ul class="sub-menu" style="display: none;">
                                        <li><a href="faq.html">FAQ</a></li>
                                        <li><a href="404.html">Error 404</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><span class="menu-expand"><i class="fa fa-angle-down"></i></span><a href="#">Shop</a>
                                    <ul class="sub-menu" style="display: none;">
                                        <li class="menu-item-has-children"><span class="menu-expand"><i class="fa fa-angle-down"></i></span><a href="#">Shop Layout</a>
                                            <ul class="sub-menu" style="display: none;">
                                                <li>
                                                    <a href="shop-fullwidth.html">Shop Fullwidth</a>
                                                </li>
                                                <li>
                                                    <a href="shop-left-sidebar.html">Shop Left Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="shop-right-sidebar.html">Shop Right Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="shop-list-fullwidth.html">Shop List Fullwidth</a>
                                                </li>
                                                <li>
                                                    <a href="shop-list-left-sidebar.html">Shop List Left Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="shop-list-right-sidebar.html">Shop List Right
                                                        Sidebar</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><span class="menu-expand"><i class="fa fa-angle-down"></i></span><a href="#">Product Style</a>
                                            <ul class="sub-menu" style="display: none;">
                                                <li>
                                                    <a href="single-product.html">Single Product Default</a>
                                                </li>
                                                <li>
                                                    <a href="single-product-group.html">Single Product Group</a>
                                                </li>
                                                <li>
                                                    <a href="single-product-variable.html">Single Product
                                                        Variable</a>
                                                </li>
                                                <li>
                                                    <a href="single-product-sale.html">Single Product Sale</a>
                                                </li>
                                                <li>
                                                    <a href="single-product-sticky.html">Single Product Sticky</a>
                                                </li>
                                                <li>
                                                    <a href="single-product-affiliate.html">Single Product
                                                        Affiliate</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><span class="menu-expand"><i class="fa fa-angle-down"></i></span><a href="#">Popular Products</a>
                                            <ul class="sub-menu" style="display: none;">
                                                <li>
                                                    <a href="shop-left-sidebar.html">Classic Carrot Cake</a>
                                                </li>
                                                <li>
                                                    <a href="shop-left-sidebar.html">Gingerbread Cake</a>
                                                </li>
                                                <li>
                                                    <a href="shop-left-sidebar.html">Yellow Cupcakes</a>
                                                </li>
                                                <li>
                                                    <a href="shop-left-sidebar.html">Hawaiian Cake Roll</a>
                                                </li>
                                                <li>
                                                    <a href="shop-left-sidebar.html">Banana Snack Cake</a>
                                                </li>
                                                <li>
                                                    <a href="shop-left-sidebar.html">Chocolate Cake</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><span class="menu-expand"><i class="fa fa-angle-down"></i></span><a href="#">Product Related</a>
                                            <ul class="sub-menu" style="display: none;">
                                                <li>
                                                    <a href="my-account.html">My Account</a>
                                                </li>
                                                <li>
                                                    <a href="login-register.html">Login | Register</a>
                                                </li>
                                                <li>
                                                    <a href="cart.html">Shopping Cart</a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html">Wishlist</a>
                                                </li>
                                                <li>
                                                    <a href="compare.html">Compare</a>
                                                </li>
                                                <li>
                                                    <a href="checkout.html">Checkout</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><span class="menu-expand"><i class="fa fa-angle-down"></i></span><a href="blog-fullwidth.html">blog</a>
                                    <ul class="sub-menu" style="display: none;">
                                        <li class="menu-item-has-children"><span class="menu-expand"><i class="fa fa-angle-down"></i></span><a href="#">Blog Holder</a>
                                            <ul class="sub-menu" style="display: none;">
                                                <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                                <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                                <li><a href="blog-fullwidth.html">Blog Fullwidth</a></li>
                                                <li><a href="blog-list-left-sidebar.html">Blog List Left Sidebar</a>
                                                </li>
                                                <li><a href="blog-list-right-sidebar.html">Blog List Right
                                                        Sidebar</a>
                                                </li>
                                                <li><a href="blog-list-fullwidth.html">Blog List Fullwidth</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><span class="menu-expand"><i class="fa fa-angle-down"></i></span><a href="#">Blog Details Holder</a>
                                            <ul class="sub-menu" style="display: none;">
                                                <li><a href="blog-detail-fullwidth.html">Blog Detail Fullwidth</a>
                                                </li>
                                                <li><a href="blog-detail-left-sidebar.html">Blog Detail Left
                                                        Sidebar</a></li>
                                                <li><a href="blog-detail-right-sidebar.html">Blog Detail Right
                                                        Sidebar</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
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
    

    <!--mini cart-->
    <div class="mini_cart">
        <div class="cart_gallery">
            <div class="cart_close">
                <div class="cart_text">
                    <h3>cart</h3>
                </div>
                <div class="mini_cart_close">
                    <a href="#"><i class="ion-android-close"></i></a>
                </div>
            </div>
            <div class="cart-item">
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
            <div class="cart-item">
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
                <a href="cart.html">View cart</a>
            </div>
            <div class="cart_button">
                <a href="checkout.html"><i class="fa fa-sign-in"></i> Checkout</a>
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
    <div class="breadcrumbs_aree breadcrumbs_bg mb-110" data-bgimg="<?php echo $url ?>assets/img/others/breadcrumbs-bg.png" style="background-image: url(&quot;<?php echo $url ?>assets/img/others/breadcrumbs-bg.png&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs_text">
                        <h1>verificar compra</h1>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li> // verificar</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumbs area end -->
    <div class="checkout-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="coupon-accordion">
                        <h3>Returning customer? <span id="showlogin">Click here to login</span></h3>
                        <div id="checkout-login" class="coupon-content">
                            <div class="coupon-info">
                                <p class="coupon-text mb-1">Quisque gravida turpis sit amet nulla posuere lacinia. Cras
                                    sed
                                    est
                                    sit amet ipsum luctus.</p>
                                <form action="#">
                                    <p class="form-row-first">
                                        <label class="mb-1">Username or email <span class="required">*</span></label>
                                        <input type="text">
                                    </p>
                                    <p class="form-row-last">
                                        <label>Password <span class="required">*</span></label>
                                        <input type="text">
                                    </p>
                                    <p class="form-row">
                                        <input type="checkbox" id="remember_me">
                                        <label for="remember_me">Remember me</label>
                                    </p>
                                    <p class="lost-password"><a href="#">Lost your password?</a></p>
                                </form>
                            </div>
                        </div>
                        <h3>Have a coupon? <span id="showcoupon">Click here to enter your code</span></h3>
                        <div id="checkout_coupon" class="coupon-checkout-content">
                            <div class="coupon-info">
                                <form action="#">
                                    <p class="checkout-coupon">
                                        <input placeholder="Coupon code" type="text">
                                        <input class="coupon-inner_btn" value="Apply Coupon" type="submit">
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-12">
                    <form action="#">
                        <div class="checkbox-form">
                            <h3>Billing Details</h3>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="country-select clearfix">
                                        <label>Country <span class="required">*</span></label>
                                        <select class="myniceselect nice-select wide" style="display: none;">
                                            <option data-display="Bangladesh">Bangladesh</option>
                                            <option value="uk">London</option>
                                            <option value="rou">Romania</option>
                                            <option value="fr">French</option>
                                            <option value="de">Germany</option>
                                            <option value="aus">Australia</option>
                                        </select><div class="nice-select myniceselect wide" tabindex="0"><span class="current">Bangladesh</span><ul class="list"><li data-value="Bangladesh" data-display="Bangladesh" class="option selected">Bangladesh</li><li data-value="uk" class="option">London</li><li data-value="rou" class="option">Romania</li><li data-value="fr" class="option">French</li><li data-value="de" class="option">Germany</li><li data-value="aus" class="option">Australia</li></ul></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>First Name <span class="required">*</span></label>
                                        <input placeholder="" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Last Name <span class="required">*</span></label>
                                        <input placeholder="" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Company Name</label>
                                        <input placeholder="" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Address <span class="required">*</span></label>
                                        <input placeholder="Street address" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <input placeholder="Apartment, suite, unit etc. (optional)" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Town / City <span class="required">*</span></label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>State / County <span class="required">*</span></label>
                                        <input placeholder="" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Postcode / Zip <span class="required">*</span></label>
                                        <input placeholder="" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Email Address <span class="required">*</span></label>
                                        <input placeholder="" type="email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Phone <span class="required">*</span></label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list create-acc">
                                        <input id="cbox" type="checkbox">
                                        <label for="cbox">Create an account?</label>
                                    </div>
                                    <div id="cbox-info" class="checkout-form-list create-account">
                                        <p>Create an account by entering the information below. If you are a returning
                                            customer please login at the top of the page.</p>
                                        <label>Account password <span class="required">*</span></label>
                                        <input placeholder="password" type="password">
                                    </div>
                                </div>
                            </div>
                            <div class="different-address">
                                <div class="ship-different-title">
                                    <h3>
                                        <label>Ship to a different address?</label>
                                        <input id="ship-box" type="checkbox">
                                    </h3>
                                </div>
                                <div id="ship-box-info" class="row">
                                    <div class="col-md-12">
                                        <div class="myniceselect country-select clearfix">
                                            <label>Country <span class="required">*</span></label>
                                            <select class="myniceselect nice-select wide" style="display: none;">
                                                <option data-display="Bangladesh">Bangladesh</option>
                                                <option value="uk">London</option>
                                                <option value="rou">Romania</option>
                                                <option value="fr">French</option>
                                                <option value="de">Germany</option>
                                                <option value="aus">Australia</option>
                                            </select><div class="nice-select myniceselect wide" tabindex="0"><span class="current">Bangladesh</span><ul class="list"><li data-value="Bangladesh" data-display="Bangladesh" class="option selected">Bangladesh</li><li data-value="uk" class="option">London</li><li data-value="rou" class="option">Romania</li><li data-value="fr" class="option">French</li><li data-value="de" class="option">Germany</li><li data-value="aus" class="option">Australia</li></ul></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>First Name <span class="required">*</span></label>
                                            <input placeholder="" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Last Name <span class="required">*</span></label>
                                            <input placeholder="" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Company Name</label>
                                            <input placeholder="" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Address <span class="required">*</span></label>
                                            <input placeholder="Street address" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <input placeholder="Apartment, suite, unit etc. (optional)" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Town / City <span class="required">*</span></label>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>State / County <span class="required">*</span></label>
                                            <input placeholder="" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Postcode / Zip <span class="required">*</span></label>
                                            <input placeholder="" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Email Address <span class="required">*</span></label>
                                            <input placeholder="" type="email">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Phone <span class="required">*</span></label>
                                            <input type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="order-notes">
                                    <div class="checkout-form-list checkout-form-list-2">
                                        <label>Order Notes</label>
                                        <textarea id="checkout-mess" cols="30" rows="10" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="your-order">
                        <h3>Your order</h3>
                        <div class="your-order-table table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="cart-product-name">Product</th>
                                        <th class="cart-product-total">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="cart-item">
                                        <td class="cart-product-name"> Vestibulum suscipit<strong class="product-quantity">
                                                × 1</strong></td>
                                        <td class="cart-product-total"><span class="amount">$165.00</span></td>
                                    </tr>
                                    <tr class="cart-item">
                                        <td class="cart-product-name"> Vestibulum suscipit<strong class="product-quantity">
                                                × 1</strong></td>
                                        <td class="cart-product-total"><span class="amount">$165.00</span></td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr class="cart-subtotal">
                                        <th>Cart Subtotal</th>
                                        <td><span class="amount">$215.00</span></td>
                                    </tr>
                                    <tr class="order-total">
                                        <th>Order Total</th>
                                        <td><strong><span class="amount">$215.00</span></strong></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="payment-method">
                            <div class="payment-accordion">
                                <div id="accordion">
                                    <div class="card">
                                        <div class="card-header" id="#payment-1">
                                            <h5 class="panel-title">
                                                <a href="#" class="" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true">
                                                    Direct Bank Transfer.
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
                                            <div class="card-body">
                                                <p class="mb-3">Make your payment directly into our bank account. Please
                                                    use your
                                                    Order
                                                    ID as the payment
                                                    reference. Your order won’t be shipped until the funds have cleared
                                                    in
                                                    our account.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="#payment-2">
                                            <h5 class="panel-title">
                                                <a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false">
                                                    Cheque Payment
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
                                            <div class="card-body">
                                                <p class="mb-3">Make your payment directly into our bank account. Please
                                                    use your
                                                    Order
                                                    ID as the payment
                                                    reference. Your order won’t be shipped until the funds have cleared
                                                    in
                                                    our account.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="#payment-3">
                                            <h5 class="panel-title">
                                                <a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false">
                                                    PayPal
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapseThree" class="collapse" data-bs-parent="#accordion">
                                            <div class="card-body">
                                                <p>Make your payment directly into our bank account. Please use your
                                                    Order
                                                    ID as the payment
                                                    reference. Your order won’t be shipped until the funds have cleared
                                                    in
                                                    our account.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="order-button-payment">
                                    <input value="Place order" type="submit">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
    <!-- Main JS -->
    <script src="assets/js/main.js"></script><a id="scrollUp" href="#top" style="position: fixed; z-index: 2147483647; display: none;"><i class="ion-arrow-up-c"></i></a>




</body>