<?php


class Core
{
    private $controller;
    private $metodo;
    private $parametro = array();

    public function __construct() {
        $this->verificarUri();
    }

    public function run()
    {    //app\controllers\cliente => getController()
        $controllerCorrente = $this->getController();
        $controller = new $controllerCorrente;

        call_user_func_array(array($controller, $this->getMetodo()), $this->getParametro());


    }


    public function verificarUri()
    {
        $url = explode("index.php", $_SERVER["PHP_SELF"]);
        $url = end($url);

        if ($url != "") {
            $url = explode("/", $url);
            array_shift($url);

            if (isset($url[0])) {
                $this->controller = ucfirst($url[0]) ."Controller";
                array_shift($url);
            }

            if (isset($url[0])) {
                $this->metodo = $url[0];
                array_shift($url);
            }

            if (isset($url)) {
                $this->parametro = array_filter($url);
            }
        }else {
            $this->controller = NAMESPACE_PADRAO .ucfirst(CONTROLLER_PADRAO) ."Controller";
        }
    }

    // METODO GETTERS

    public function getController(){
        if (class_exists(NAMESPACE_PADRAO .$this->controller)) {
            return NAMESPACE_PADRAO .$this->controller;
        }
        return NAMESPACE_PADRAO .ucfirst(CONTROLLER_PADRAO) ."Controller";
    }

    public function getMetodo(){
        if (method_exists(NAMESPACE_PADRAO .$this->controller, $this->metodo)) {
            return $this->metodo;
        }
        return METODO_PADRAO;
    }


    public function getParametro(){
        return $this->parametro;
    }
    
}