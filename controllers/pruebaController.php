<?php 

class pruebaController extends Controller{
    
    // incluimos al constructor del padre en el constructor para tener disponible al objeto vista
    public function __construct()
	{
		parent::__construct();
	}

    // podemos usar el método renderizar de la instancia de la clase view
    // que ya nos crear la ruta para la vista del index
    public function prueba()
    {
    	$this->view->renderizar('prueba');
    }

    public function index()
    {
    	echo("hola mundo desde el index de pruebaController");
    }

    
}




 ?>