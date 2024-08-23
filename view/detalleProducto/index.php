<?php  require_once("../../config/conexion.php");
$url = Conectar::ruta();
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> </title>
    <?php require_once("../modules/head.php") ?>
</head>

<body>
<?php require_once("../modules/header.php")?>

    <!--offcanvas menu area start-->
    <div class="body_overlay">
        
    </div>
   
    <!--offcanvas menu area end-->

    <!--header area start-->
    

    <!--mini cart-->
    <div class="mini_cart">
        <div class="cart_gallery">
            <div class="cart_close">
                <div class="cart_text">
                    <h3>car</h3>
                </div>
                <div class="mini_cart_close">
                    <a href="#"><i class="ion-android-close"></i></a>
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
                <a href="cart.html">View cart</a>
            </div>
            <div class="cart_button">
                <a href="checkout.html"><i class="fa fa-sign-in"></i> Checkout</a>
            </div>
        </div>
    </div>
    <!--mini cart end-->

    <!-- page search box -->
 

    <!-- breadcrumbs area start -->
    <div class="breadcrumbs_aree breadcrumbs_bg mb-110" data-bgimg="<?php echo $url ?>assets/img/others/breadcrumbs-bg.png" style="background-image: url(&quot;<?php echo $url ?>assets/img/others/breadcrumbs-bg.png&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs_text">
                        <h1>carrito de compra</h1>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li> // carrito</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumbs area end -->
    <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
    <!-- Estilos CSS y JavaScript -->
    <link rel="stylesheet" href="styles.css">
    
</head>
<body>
    <div class="cart-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form id="cart-form" action="#">
                        <div class="table-content table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="product_remove">Eliminar</th>
                                        <th class="product-thumbnail">Imágenes</th>
                                        <th class="cart-product-name">Producto</th>
                                        <th class="product-price">Precio Unitario</th>
                                        <th class="product-quantity">Cantidad</th>
                                        <th class="product-subtotal">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Filas de productos -->
                                    <tr data-id="1" data-price="10">
                                        <td class="product_remove">
                                            <a href="#" class="remove-product">
                                                <i class="pe-7s-close" title="Eliminar"></i>
                                            </a>
                                        </td>
                                        <td class="product-thumbnail">
                                            <a href="#">
                                                <img src="<?php echo $url ?>assets/img/product/mini-product/product1.png" alt="Producto 1">
                                            </a>
                                        </td>
                                        <td class="product-name"><a href="#">Nombre del Producto 1</a></td>
                                        <td class="product-price"><span class="amount">$10</span></td>
                                        <td class="product_pro_button quantity">
                                            <div class="pro-qty border">
                                                <a href="#" class="dec qty-btn" data-id="1">-</a>
                                                <input type="text" value="1" class="qty-input" readonly style="width: 50px; text-align: center;">
                                                <a href="#" class="inc qty-btn" data-id="1">+</a>
                                            </div>
                                        </td>
                                        <td class="product-subtotal"><span class="amount">$10</span></td>
                                    </tr>
                                    <tr data-id="2" data-price="10">
                                        <td class="product_remove">
                                            <a href="#" class="remove-product">
                                                <i class="pe-7s-close" title="Eliminar"></i>
                                            </a>
                                        </td>
                                        <td class="product-thumbnail">
                                            <a href="#">
                                                <img src="<?php echo $url ?>assets/img/product/mini-product/product2.png" alt="Producto 2">
                                            </a>
                                        </td>
                                        <td class="product-name"><a href="#">Nombre del Producto 2</a></td>
                                        <td class="product-price"><span class="amount">$10</span></td>
                                        <td class="product_pro_button quantity">
                                            <div class="pro-qty border">
                                                <a href="#" class="dec qty-btn" data-id="2">-</a>
                                                <input type="text" value="1" class="qty-input" readonly style="width: 50px; text-align: center;">
                                                <a href="#" class="inc qty-btn" data-id="2">+</a>
                                            </div>
                                        </td>
                                        <td class="product-subtotal"><span class="amount">$10</span></td>
                                    </tr>
                                    <tr data-id="3" data-price="10">
                                        <td class="product_remove">
                                            <a href="#" class="remove-product">
                                                <i class="pe-7s-close" title="Eliminar"></i>
                                            </a>
                                        </td>
                                        <td class="product-thumbnail">
                                            <a href="#">
                                                <img src="<?php echo $url ?>assets/img/product/mini-product/product3.png" alt="Producto 3">
                                            </a>
                                        </td>
                                        <td class="product-name"><a href="#">Nombre del Producto 3</a></td>
                                        <td class="product-price"><span class="amount">$10</span></td>
                                        <td class="product_pro_button quantity">
                                            <div class="pro-qty border">
                                                <a href="#" class="dec qty-btn" data-id="3">-</a>
                                                <input type="text" value="1" class="qty-input" readonly style="width: 50px; text-align: center;">
                                                <a href="#" class="inc qty-btn" data-id="3">+</a>
                                            </div>
                                        </td>
                                        <td class="product-subtotal"><span class="amount">$10</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="coupon-all">
                                    <div class="coupon2">
                                        <input class="button" name="update_cart" value="Actualizar Carrito" type="submit">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 ml-auto">
                                <div class="cart-page-total">
                                    <h2>Total a Pagar</h2>
                                    <ul>
                                        <li>Subtotal <span id="subtotal">$0.00</span></li>
                                        <li>Total <span id="total">$0.00</span></li>
                                    </ul>
                                    <a href="#">Realizar Compra</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Script JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Función para actualizar los totales
            function updateTotals() {
                let subtotal = 0;

                // Recorrer cada fila de producto
                $('tbody tr').each(function() {
                    const price = parseFloat($(this).data('price')); // Precio del producto
                    const quantity = parseInt($(this).find('.qty-input').val()); // Cantidad del producto
                    const total = price * quantity; // Calcular total por producto
                    subtotal += total; // Sumar al subtotal total por producto
                    $(this).find('.product-subtotal .amount').text('$' + total.toFixed(2)); // Actualizar total por producto en la tabla
                });

                // Actualizar subtotal y total en el resumen del carrito
                $('#subtotal').text('$' + subtotal.toFixed(2));
                $('#total').text('$' + subtotal.toFixed(2));
            }

            // Actualizar totales al cargar la página
            updateTotals();

            // Manejar clics en botones de incrementar y decrementar cantidad
            $('.qty-btn').on('click', function(e) {
                e.preventDefault();
                const $input = $(this).siblings('.qty-input');
                let newValue = parseInt($input.val());

                if ($(this).hasClass('inc')) {
                    newValue++;
                } else if ($(this).hasClass('dec') && newValue > 1) {
                    newValue--;
                }

                $input.val(newValue); // Actualizar valor de la cantidad

                // Llamar a la función para actualizar totales
                updateTotals();
            });

            // Manejar clics en eliminar producto
            $('.remove-product').on('click', function(e) {
                e.preventDefault();
                $(this).closest('tr').remove(); // Eliminar la fila del producto
                updateTotals(); // Actualizar totales después de eliminar el producto
            });

            // Manejar envío del formulario de actualización del carrito
            $('form#cart-form').on('submit', function(e) {
                e.preventDefault();
                // Aquí puedes enviar el formulario si necesitas procesarlo
                alert('Carrito actualizado');
            });
        });
    </script>
</body>
</html>

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
    <script src="assets/js/main.js"></script><a id="scrollUp" href="#top" style="position: fixed; z-index: 2147483647; display: none;"><i class="ion-arrow-up-c"></i></a>




</body>