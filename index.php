<?php 


define('DS', DIRECTORY_SEPARATOR);
// definimos la ruta raíz de la app
define('ROOT', realpath(dirname(__FILE__)) . DS);
// la ruta app
define('APP_PATH', ROOT . 'application' . DS);

// lo probamos
echo(ROOT);

// incluimos archivos
require_once APP_PATH . 'Config.php';
require_once APP_PATH . 'Controller.php';
require_once APP_PATH . 'Model.php';
require_once APP_PATH . 'Registro.php';
require_once APP_PATH . 'Request.php';
require_once APP_PATH . 'View.php';
require_once APP_PATH . 'Bootstrap.php';

// lo probamos
echo "<pre>"; print_r(get_required_files());
 ?>


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
require_once APP_PATH . 'Model.php';
require_once APP_PATH . 'Registro.php';
require_once APP_PATH . 'Request.php';
require_once APP_PATH . 'View.php';
require_once APP_PATH . 'Bootstrap.php';

// lo probamos las filas incluidas y requeridas
// echo "<pre>"; print_r(get_required_files());
 
// instanciamos una request para probar el proceso de la url y la clase request
$request = new Request();

// mostramos el controlador y el método 
echo $request->getControlador() ."<br>";
echo $request->getMetodo() . "<pre>";
print_r($request->getArgumentos()); 
?>
