<?php

// llamar a la conexion de la base de datos
require_once "conexion.php";

class ModeloProductos{

    // Consulta para mostrar categorias
    static public function mdlMostrarCategorias($tabla, $item, $valor){

        if($item != null){

            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

            $stmt -> bindParam(":".$item,$valor,PDO::PARAM_INT);

            $stmt -> execute();

            return $stmt->fetch();

        }else{

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

        $stmt -> execute();

        return $stmt->fetchAll();

        }

        $stmt -> close();

        $stmt = null;



    }

    // CONSULTA PARA MOSTRAR SUBCATEGORIAS
    static public function mdlMostrarSubCategorias($tabla,$item,$valor){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

        $stmt -> bindParam(":".$item, $valor, PDO::PARAM_INT);

        $stmt -> execute();

        return $stmt->fetchAll();

        $stmt -> close();

        $stmt = null;

    }

}