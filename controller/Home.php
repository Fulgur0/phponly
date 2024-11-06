<?php

namespace controller;

use model\UserModel;
use sys\core\Controller;

class Home extends Controller
{
    public function index()
    {
        $user = new UserModel();
        echo 'Hello world ' . json_encode($user->get(1)[0]['username']);
    }
}
