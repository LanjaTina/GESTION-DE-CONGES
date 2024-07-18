<?php
require 'config/config.php';

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'User';
$action = isset($_GET['action']) ? $_GET['action'] : 'login';

$controllerName = $controller . 'Controller';
$controllerInstance = new $controllerName();
$controllerInstance->$action();
?>
