<?php
session_start();

spl_autoload_register(function ($class_name) {
    if (file_exists('controllers/' . $class_name . '.php')) {
        require_once 'controllers/' . $class_name . '.php';
    } elseif (file_exists('models/' . $class_name . '.php')) {
        require_once 'models/' . $class_name . '.php';
    } elseif (file_exists('lib/' . $class_name . '.php')) {
        require_once 'lib/' . $class_name . '.php';
    }
});
?>