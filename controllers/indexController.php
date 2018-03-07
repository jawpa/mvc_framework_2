<?php 
class indexController extends Controller{
    
    // incluimos al constructor del padre en el constructor para tener disponible al objeto vista
    public function __construct()
	{
		parent::__construct();
	}

    // podemos usar el método renderizar de la instancia de la clase view
    // que ya nos crear la ruta para la vista del index
    public function index()
    {
    	$this->view->renderizar('index');
    }

    
}
 ?>