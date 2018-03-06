<?php 
class Bootstrap{

   public static function run(Request $peticion)
   {
   	    // almacena el controlador de la petición y lo transforma a la convención
   	    $controller = $peticion->getControlador() . "Controller";
   	    // almacena la ruta del controlador 
   	    $rutaController = ROOT . "controllers" . DS . $controller . ".php";
   
        echo($rutaController);
        exit();
   }

}
?>