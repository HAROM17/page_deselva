<?php

class PlantillaControlador{

    // LLAMAMOS A PLANTILLA
    public function plantilla(){

        include "vistas/plantilla.php";

    }

    // LLAMAMOS A LOS ESTILOS DINAMICOS DE LA PLANTILLA DE LA BD
    static public function ctrEstiloPlantilla(){

        $tabla = "plantilla";

        $respuesta = ModeloPlantilla::mdlEstiloPlantilla($tabla);

        return $respuesta;

    }

}