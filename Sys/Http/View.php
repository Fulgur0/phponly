<?php

namespace Sys\Http;

class View
{
    public static function render($view)
    {
        echo file_get_contents('../views/' . $view . '.php');
    }
}
