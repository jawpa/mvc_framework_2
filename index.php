 <?php 


define('DS', DIRECTORY_SEPARATOR);
// definimos la ruta raíz de la app
define('ROOT', realpath(dirname(__FILE__)) . DS);

define('APP_PATH', ROOT . 'application' . DS);

// lo probamos
// echo(ROOT);

// incluimos archivos
require_once APP_PATH . 'Config.php';
require_once APP_PATH . 'Request.php';

// lo probamos las filas incluidas y requeridas
// echo "<pre>"; print_r(get_required_files());
 
// instanciamos una request para probar el proceso de la url y la clase request
$request = new Request();

// mostramos el controlador y el método 
echo $request->getControlador() ."<br>";
echo $request->getMetodo() . "<pre>";
print_r($request->getArgumentos()); 
?>
