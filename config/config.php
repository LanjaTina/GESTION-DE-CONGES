<?php
session_start();

function __autoload($class_name) {
    if (file_exists('controllers/' . $class_name . '.php')) {
        require_once 'controllers/' . $class_name . '.php';
    } elseif (file_exists('models/' . $class_name . '.php')) {
        require_once 'models/' . $class_name . '.php';
    } elseif (file_exists('lib/' . $class_name . '.php')) {
        require_once 'lib/' . $class_name . '.php';
    }
}
?>
