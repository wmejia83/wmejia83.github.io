<?php

/*=============================================
Depurar errores                            
=============================================*/

ini_set("display_errors", 1);
ini_set("log_errors", 1);
ini_set("error_log", "C:/xampp/htdocs/ministerio-imjer/storage/errores");

/*=============================================
Incluir Plantilla en el Index
=============================================*/

require_once 'controladores/plantilla-controlador.php';

/*=============================================
Requeridos
=============================================*/
// require_once 'controladores/suscripcion/sedes-controlador.php';
// require_once 'controladores/autenticacion/ingreso-controlador.php';
// require_once 'controladores/eventos/eventos-controlador.php';
// require_once "controladores/ventas/libros-controlador.php";


/*=============================================
Instancio la clase que incluye la plantilla
=============================================*/

$index = new ControladorPlantilla();
$index -> index();