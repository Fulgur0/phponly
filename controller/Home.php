<?php

namespace controller;

use model\UserModel;
use sys\core\utils\Config;
use sys\core\Controller;

class Home extends Controller
{
    public function index()
    {
        $config = new Config();
        $user = new UserModel();
        echo 'Hello world!<br>' . json_encode($config->get('database') . json_encode($user->get(1)));
    }
}
