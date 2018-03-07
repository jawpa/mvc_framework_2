<?php 
class View{

    private $controlador;

    // el constructor asigna a un controlador
    public function __construct(Request $peticion)
    {
    	$this->controlador = $peticion->getControlador();
    }

    // método que obtiene una vista
    // y le genera una ruta a ese archivo
    public function renderizar($vista) 
    {
        // incluye la carpeta views y una carpeta con el nombte del controlador
    	$rutaView = ROOT . "views" . DS . $this->controlador . DS . $vista . ".phtml";

    	// verificamos si es legible la ruta del archivo y la incluimos en el index
    	// para incluir el archivo con la vista, dónde se llame al método renderizar de la clase view
    	if (is_readable($rutaView)) {
    	 	 include_once $rutaView;
    	 } 
    	 else{
    	 	throw new Exception("Error en la vista");
    	 	
    	 }
    }

}
