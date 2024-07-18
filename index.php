<?php
require_once 'config/config.php';

$controller = isset($_GET['controller']) ? $_GET['controller'] . 'Controller' : 'UserController';
$action = isset($_GET['action']) ? $_GET['action'] : 'login';

require_once 'controllers/' . $controller . '.php';
$controllerInstance = new $controller();
$controllerInstance->$action();
?>