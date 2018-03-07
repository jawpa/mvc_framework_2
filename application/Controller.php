<?php 

abstract class Controller
{

    protected $view;	
    
    // el constructor del controlador principal instancia a una vista
    public function __construct()
	{
		$this->view = new View(new Request);
	}

	abstract public function index();
}


 ?>