<?php

namespace sys\core;

class Route
{
    public string $path;
    public string $method;
    public string $controller;
    public string $function;

    public function get($path, $controller, $function)
    {
        $this->path = $path;
        $this->controller = $controller;
        $this->method = 'GET';
        $this->function = $function;
        $this->execute();
    }

    public function post($path, $controller, $function)
    {
        $this->path = $path;
        $this->controller = $controller;
        $this->method = 'POST';
        $this->function = $function;
        $this->execute();
    }

    public function execute()
    {
        $controller = new $this->controller;
        $controller->{$this->function}();
    }
}
