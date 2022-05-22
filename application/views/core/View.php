<?php

class View {
    protected $controller;
    protected $action;
    protected $layout = 'default';
    protected $args = NULL;
    protected $route;

    function __construct($route, $args = NULL)
    {
        $this->route = $route;
        $this->controller = str_replace("Controller", "", $route["controller"]);
        $this->action = $route["action"];
        $this->folderPath = $_SERVER["DOCUMENT_ROOT"].'/application/views/';
        $this->args = $args;
    }

    function render() {
        ob_start();
        // var_dump($this->route);
        $args = $this->args;
        
        require $this->folderPath.$this->controller.'/'.$this->action.'.php';

        $body = ob_get_clean();


        require $_SERVER["DOCUMENT_ROOT"].'/application/layout/'.$this->layout.'.php';
    }
}