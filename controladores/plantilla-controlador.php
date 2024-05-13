<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class ControladorPlantilla
{

    /*=============================================
    Traemos la vista principal de la plantilla 
    =============================================*/

    public function index()
    {
        include "vistas/plantilla.php";
    }

    /*=============================================
    Ruta principal o Dominio del sitio
    =============================================*/
    public static function ruta()
    {
        if (!empty($_SERVER["HTTPS"]) && ("on" == $_SERVER["HTTPS"])) {
            return "https://" . $_SERVER["SERVER_NAME"] . "/";
        } else {
            return "http://" . $_SERVER["SERVER_NAME"] . "/";
        }
    }


}//cierra metodo htmlClean
