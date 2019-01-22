<?php
session_start();
ini_set('display_errors', true);
error_reporting(E_ALL);

$routes = array(
  'index' => array(
    'controller' => 'act',
    'action' => 'index'
  ),
  'programma' => array(
    'controller' => 'act',
    'action' => 'programma'
  ),
  'detail' => array(
    'controller' => 'act',
    'action' => 'detail'
  )
);

if(empty($_GET['page'])) {
  $_GET['page'] = 'index';
}
if(empty($routes[$_GET['page']])) {
  header('Location: index.php');
  exit();
}

$route = $routes[$_GET['page']];
$controllerName = $route['controller'] . 'Controller';

require_once __DIR__ . '/controller/' . $controllerName . ".php";

$controllerObj = new $controllerName();
$controllerObj->route = $route;
$controllerObj->filter();
$controllerObj->render();
