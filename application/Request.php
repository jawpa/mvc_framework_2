<?php 

// recibe la url
class Request{
    private $controlador;
    private $metodo;
    private $argumentos;

    public function __construct()
    {
        if (isset($_GET["url"])) {
            // recibe la url mediante get, verifica que llege y la ponemos sana(le quitamos los caracteres raros)
            $url = filter_input(INPUT_GET,"url", FILTER_SANITIZE_URL);
            // la dividimos por slash y la ponemos en un array 
            // según la estructura de la url: el primero va a ser el controler
            // luego el método y por último los argumentos
            $url = explode("/",$url);
            // filtramos los elementos no válidos
            $url = array_filter($url);
        }

        // asignamos el controlador, el método o los argumentos:
        // el controlador y el método en minúscula para que se respete la convención
        // con shift extrae el primer elemmento y los devuelve
        $this->controlador = strtolower(array_shift($url));
        // extraemos el nuevo primer elemento
        $this->metodo = strtolower(array_shift($url));
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
        // los asignamos a un array vacío
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