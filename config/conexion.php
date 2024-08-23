<?php 
class Conectar{
    public static function Conexion(){
        $pipe = new PDO("mysql:host=localhost;dbname=sistema_tropical","root","");
        return $pipe;
    }

    //Este método público estático devuelve la URL base del sistema 
    static public function ruta(){

        if(!empty($_SERVER["HTTPS"]) && ("on" == $_SERVER["HTTPS"])){

            return "https://".$_SERVER["SERVER_NAME"]."/";

        }else{

            return "http://".$_SERVER["SERVER_NAME"]."/";
        }

    }
    public static function ruta_backend(){
        return("http://localhost/sistema_tropical/");
    }


}



?>