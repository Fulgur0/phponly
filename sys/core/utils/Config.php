<?php

namespace sys\core\utils;

class Config
{
    public function get($key)
    {
        $config = require __DIR__ . '/../../../config/' . $key . '.php';
        return $config;
    }
}
