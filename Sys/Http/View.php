<?php

namespace Sys\Http;

class View
{
    public static function render($view, $variables = [])
    {
        extract($variables);
        include '../views/' . $view . '.php';
    }
}
