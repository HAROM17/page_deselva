<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Virtual</title>
    <?php
    $icono = PlantillaControlador::ctrEstiloPlantilla();
    echo '<link rel="shortcut icon" href="http://localhost:90/backend/' . $icono["icono"] . '" type="image/x-icon">';

    $url = Ruta::ctrRuta();


    ?>
    <!-- LIBRERIA CSS -->
    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/style.css">
    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/cabezote.css">
    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/productos.css">
    <!-- ESTILO PARA EL SLIDE -->
	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/slide.css">
    <!-- LIBRERIA GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <!-- LIBRERIA JS -->
    <script src="<?php echo $url; ?>vistas/js/plugins/jquery.min.js"></script>
    <script src="<?php echo $url; ?>vistas/js/plugins/bootstrap.min.js"></script>

    <!-- LIBRERIA PARA EL SLIDE -->
	<script src="<?php echo $url; ?>vistas/js/plugins/jquery.easing.js"></script>
</head>

<body>
    <?php

    include "modulos/cabezote.php";

    $rutas = array();
    $ruta =  null;

    if (isset($_GET["ruta"])) {
        // echo $_GET["ruta"];
        $rutas = explode("/", $_GET["ruta"]);
        $item =  "ruta";
        $valor = $rutas[0];

        // LLAMAR A LA TABLA CATEGORIA
        $rutaCategorias = ControladorProductos::ctrMostrarCategorias($item, $valor);
        // var_dump($rutas[0]);
        // var_dump($rutaCategorias["ruta"]);

        if($rutas[0] == $rutaCategorias["ruta"]){
            $ruta = $rutas[0];
        }

        // Url amigables de subcategorias

		$rutaSubCategorias = ControladorProductos::ctrMostrarSubCategorias($item, $valor);
		// var_dump($subcategorias[0]["ruta"]);

		foreach ($rutaSubCategorias as $key => $value) {

			if($rutas[0] == $value["ruta"]){

				$ruta = $rutas[0];

			}

		    }

            if ($ruta != null) {
                include "modulos/productos.php";
            }else{
                include "modulos/error404.php";
            }
            }else{
                include "modulos/slide.php";
                include "modulos/destacados.php";
            }

    ?>

    <script src="<?php echo $url; ?>vistas/js/cabezote.js"></script>
    <script src="<?php echo $url; ?>vistas/js/plantilla.js"></script>
    <script src="<?php echo $url; ?>vistas/js/slide.js"></script>
</body>

</html>