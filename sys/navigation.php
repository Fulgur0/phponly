<?php

use controller\Home;
use sys\core\Route;

$route = new Route();

$route->get('/', Home::class, 'index');
