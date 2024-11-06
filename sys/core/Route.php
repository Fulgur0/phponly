<?php

namespace sys\core;

class Route
{
    public string $path;
    public string $content;
    public string $method;

    public function get($path, $content)
    {
        $this->path = $path;
        $this->content = $content;
        $this->method = 'GET';
        if ($_SERVER['REQUEST_METHOD'] == 'GET' && $_SERVER['REQUEST_URI'] == $this->path) {
            echo $this->content;
        }
    }

    public function post($path, $content)
    {
        $this->path = $path;
        $this->content = $content;
        $this->method = 'POST';
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_SERVER['REQUEST_URI'] == $this->path) {
            echo $this->content;
        }
    }
}
