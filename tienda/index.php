<?php
// CONTROLADORES
require_once "controladores/plantilla.controlador.php";
require_once "controladores/producto.controlador.php";

// MODELOS
require_once "modelos/plantilla.modelo.php";
require_once "modelos/producto.modelo.php";
require_once "modelos/rutas.php";
$plantilla = new PlantillaControlador();
$plantilla ->plantilla();