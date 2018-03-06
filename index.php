<?php 


define('DS', DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)) . DS);
// definimos la ruta raíz de la app
define('APP_PATH', ROOT . 'application' . DS);



// incluimos archivos
require_once APP_PATH . 'Config.php';
require_once APP_PATH . 'Request.php';
require_once APP_PATH . 'Bootstrap.php';


// llamamos al método run de la clase Bootstrap
Bootstrap::run(new Request);


 ?>
