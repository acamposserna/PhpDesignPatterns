<?php
    function app_autoloader($class) {
        // Convert namespace to full file path
        $path = './src/' . str_replace('\\', '/', $class) . '.php';
        include_once($path);
    }

    spl_autoload_register('app_autoloader');
