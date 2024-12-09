<?php

namespace Sys\Controller;

use Sys\Http\View;

class HomeController
{
    public function index()
    {
        View::render('welcome');
    }
}
