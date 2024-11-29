<?php
define('CONTROLLER', 'controllers');

$controller = $_GET['controller'] ?? 'home';
$action = $_GET['action'] ?? 'index';

switch($controller) {
case 'auth':
    require_once CONTROLLER . '/AuthController.php'; 
}
?>
