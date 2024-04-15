<!-- TOP -->
<div class="container-fluid barraSuperior" id="top">
    <div class="container">
        <div class="row">
            <!-- REDES SOCIALES -->
            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 social">
                <ul>
                    <?php

                    $social = PlantillaControlador::ctrEstiloPlantilla();
                    // var_dump(json_encode($social["redesSociales"]));
                    // var_dump(json_decode($social["redesSociales"],true));
                    $jsonRedesSociales = json_decode($social["redesSociales"], true);
                    foreach ($jsonRedesSociales as $key => $value) {
                        echo ' <li>
                            <a href="' . $value["url"] . '" target="_blank">
                                <i class="fa ' . $value["red"] . ' redSocial ' . $value["estilo"] . '" aria-hidden="true"></i>
                            </a>
                        </li>';
                    }

                    ?>

                </ul>
            </div>
            <!-- INICIAR/REGISTRAR -->
            <div class="col-lg-3 col-md-9 col-sm-4 col-xs-12 registro">
                <ul>
                    <li><a href="#modalIngreso" data-toogle="modal">Ingresar</a></li>
                    <li>|</li>
                    <li><a href="#modalRegistro" data-toogle="modal">Crea una cuenta</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- HEADER -->
<header class="container-fluid">

    <div class="container">

        <div class="row" id="cabezote">

            <!-- LOGO -->
            <div class="col-lg-3 col-md-3 col-sm-2 col-xs-12" id="logotipo">

                <a href="#">
                    <img src="http://localhost:90/backend/<?php echo $social["logo"] ?>" class="img-responsive">
                </a>

            </div>
            <!--=====================================
			BLOQUE CATEGORÍAS Y BUSCADOR
			======================================-->

            <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">

                <!--=====================================
                    BOTÓN CATEGORÍAS
                    ======================================-->

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 backColor" id="btnCategorias">

                    <p>CATEGORÍAS

                        <span class="pull-right">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </span>

                    </p>

                </div>

                <!--=====================================
                    BUSCADOR
                    ======================================-->

                <div class="input-group col-lg-8 col-md-8 col-sm-8 col-xs-12" id="buscador">

                    <input type="search" name="buscar" class="form-control" placeholder="Buscar...">

                    <span class="input-group-btn">

                        <a href="#">

                            <button class="btn btn-default backColor" type="submit">

                                <i class="fa fa-search"></i>

                            </button>

                        </a>

                    </span>

                </div>

            </div>

            <!-- CARRITO DE COMPRAS -->
            <div class="col-lg-3 col-md-3 col-sm-2 col-xs-12" id="carrito">

                <a href="#">
                    <button class="btn btn-default pull-left backColor">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    </button>
                </a>

                <p>TU CESTA <span class="cantidadCesta">3</span><br> PEN S/. <span class="sumaCesta">20</span></p>

            </div>

        </div>

        <!-- CATEGORIAS -->
        <div class="col-xs-12 backColor" id="categorias">

            <?php
            
            $item = null;
            $valor = null;

            $categorias = ControladorProductos::ctrMostrarCategorias($item, $valor);
            foreach ($categorias as $key => $value) {
                // var_dump($value["categoria"]);
                echo '<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">

                <h4>
                    <a href="' . $value["ruta"] . '" class="pixelCategorias">' . $value["categoria"] . '</a>
                </h4>

                <hr>

                <ul>';
                $item  = "id_categoria";
				$valor = $value["id"];

                $subcategoria = ControladorProductos::ctrMostrarSubCategorias($item,$valor);
                foreach ($subcategoria as $key => $value) {

                    // var_dump($value["subcategoria"]);

                    echo '<li><a href="' . $value["ruta"] . '" class="pixelSubCategorias">' . $value["subcategoria"] . '</a></li>';
                }
                echo '</ul>
                
                  
            </div>';
            }

            ?>

            <!-- <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">

                <h4>
                    <a href="#" class="pixelCategorias">Lorem Ipsum</a>
                </h4>

                <hr>

                <ul>
                    <li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
                    <li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
                    <li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
                    <li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
                    <li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
                </ul>

            </div> -->

            <!-- <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">

                <h4>
                    <a href="#" class="pixelCategorias">Lorem Ipsum</a>
                </h4>

                <hr>

                <ul>
                    <li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
                    <li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
                    <li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
                    <li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
                    <li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
                </ul>

            </div> -->

            <!-- <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">

                <h4>
                    <a href="#" class="pixelCategorias">Lorem Ipsum</a>
                </h4>

                <hr>

                <ul>
                    <li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
                    <li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
                    <li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
                    <li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
                    <li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
                </ul>

            </div> -->

            <!-- <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">

                <h4>
                    <a href="#" class="pixelCategorias">Lorem Ipsum</a>
                </h4>

                <hr>

                <ul>
                    <li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
                    <li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
                    <li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
                    <li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
                    <li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
                </ul>

            </div> -->

            <!-- <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">

                <h4>
                    <a href="#" class="pixelCategorias">Lorem Ipsum</a>
                </h4>

                <hr>

                <ul>
                    <li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
                    <li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
                    <li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
                    <li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
                    <li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
                </ul>

            </div> -->

        </div>

    </div>

</header>