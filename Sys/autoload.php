<?php

spl_autoload_register(static function ($class) {
    $file = __DIR__ . '/../' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($file)) {
        include $file;
    } else {
        $vendorFile = __DIR__ . '/../vendor/' . str_replace('\\', '/', $class) . '.php';
        if (file_exists($vendorFile)) {
            include $vendorFile;
        }
    }
});
