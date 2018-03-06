<?php 

// recibe las peticiones de la url
// procesa controlador, método y atributos
class Request{
    private $controlador;
    private $metodo;
    private $argumentos;

    public function __construct()
    {
    	if (isset($_GET['url'])) {
    		// recibe la url mediante get, verifica que llege y la ponemos sana de caracteres raros para una url
    		$url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
    		// la dividimos por slashs y la ponemos en un array 
    		// según la estructura de la url: el primero va a ser el controlador
    		// luego el método y por último los argumentos
    		$url = explode("/", $url);
    		// filtramos los elementos no válidos
    		$url = array_filter($url);
        }

        // asignamos el controlador, el método o los argumentos:

        // con shift extrae el primer elemmento y los devuelve
        $this->controlador = array_shift($url);
        // extraemos el nuevo primer elemento
        $this->metodo = array_shift($url);
        // extraemos los elementos que quedan
        $this->argumentos = $url;


        // nos fijamos si existe el controlador
        // si no está, le adjudicamos el controlador por default
        if (!$this->controlador) {
        	$this->controlador = DEFAULT_CONTROLLER;
        }

        // si no existe el método, le asignamos el index
        if (!$this->metodo) {
        	$this->metodo = "index";
        }

        // si los argumentos no están definidos
        // los asignamos a un array
        if (!isset($this->argumentos)) {
        	$this->argumentos = array();
        }
    }


    // métodos para retornar a los atributos
    public function getControlador()
    {
          return $this->controlador;	
    }

    public function getMetodo()
    {
          return $this->metodo;	
    }

    public function getArgumentos()
    {
          return $this->argumentos;	
    }
}
?>