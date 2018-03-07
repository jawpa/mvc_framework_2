
<?php 
class Bootstrap{

    
   public static function run(Request $peticion)
   {
   	    // obtenemos el controlador de la petición y lo transforma a la convención
   	    $controller = $peticion->getControlador() . "Controller";
   	    // almacena la ruta del controlador 
   	    $rutaController = ROOT . "controllers" . DS . $controller . ".php";
   
        // obtenemos el método de la petición
        $method = $peticion->getMetodo();


        // verificamos si es accesible la ruta del controlador
        if (is_readable($rutaController)) {
        	// lo requerimos
        	require_once $rutaController;
            // instanciamos al controlador, con lo cual llamamos a su constructor
            // habilita el uso de vista/modelo en la url
         	$controller = new $controller;

            // verifico si envíe un mértodo válido
        	if (is_callable(array($controller,$method))) {
        		
        		$method = $peticion->getMetodo();
        	}
        	else{
                // si no es válido, envío un index
                $method = 'index';   
        	}

        	
        	// llamamos a la clase y al método
        	call_user_func(array($controller,$method));
        	
        }
        // si el archivo del controlador no es válido
        else{
        	// lanzamos una excepción
            throw new Exception("Controlador no encontrado");
              
        }
   }
}

?>