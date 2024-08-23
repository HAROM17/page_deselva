<?php 
require_once("config/conexion.php");
require_once("controller/pagina.controller.php");

$controler = new pagina_controller();
$controler ->pagina();