<?php 
class Bootstrap{

    
   public static function run(Request $peticion)
   {
   	    // obtenemos el controlador de la petición y lo transforma a la convención
   	    $controller = $peticion->getControlador() . "Controller";
   	    // almacena la ruta del controlador 
   	    $rutaController = ROOT . "controllers" . DS . $controller . ".php";
   
        // si se puede leer
        if (is_readable($rutaController)) {
        	// requerimos la ruta
        	require_once $rutaController;
            
            // llamamos al método
            if (is_callable(array($controller,$method))) {
        		
        		$method = $peticion->getMetodo();
        	}
        	else{
                // si no es válido, definimos un método index
                $method = 'index';   
        	}

            call_user_func(array($controller,$method));
        	
        
        }
        // si la ruta del controlador no se puede leer
        else{
        	// lanzamos una excepción
            throw new Exception("Controlador no encontrado");
              
        }
   }
}

?>