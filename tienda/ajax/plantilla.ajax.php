<?php

// controlador
require_once "../controladores/plantilla.controlador.php";
// meodelo
require_once "../modelos/plantilla.modelo.php";

class AjaxPlantilla{

    static public function ajaxEstiloPlantilla(){

        $respuesta = PlantillaControlador::ctrEstiloPlantilla();
        // var_dump($respuesta);
        echo json_encode($respuesta);

    }


}

$objeto = new AjaxPlantilla();
$objeto -> ajaxEstiloPlantilla();