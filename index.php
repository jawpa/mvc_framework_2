<?php 


define('DS', DIRECTORY_SEPARATOR);
// definimos la ruta raíz de la app
define('ROOT', realpath(dirname(__FILE__)) . DS);

define('APP_PATH', ROOT . 'application' . DS);

// lo probamos
// echo(ROOT);

// incluimos archivos
require_once APP_PATH . 'Config.php';
require_once APP_PATH . 'Controller.php';
require_once APP_PATH . 'Request.php';
require_once APP_PATH . 'Bootstrap.php';
require_once APP_PATH . 'View.php';

// llamamos al método run de la clase Bootstrap
// en caso de error, le pasamos un mensaje
try {
   Bootstrap::run(new Request);	
} catch (Exception $e) { 
	// captura la excepción de la clase Bootstrap
	echo($e->getMessage());
}

?>