<?php

spl_autoload_register(function ($class_name) {
    $file = $class_name . '.class.php';
    if (file_exists($file)) {
        require_once $file;
    }
});
