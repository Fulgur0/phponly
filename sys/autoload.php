<?php

spl_autoload_register(static function ($class) {
    include __DIR__ . '/../' . str_replace('\\', '/', $class) . '.php';
});