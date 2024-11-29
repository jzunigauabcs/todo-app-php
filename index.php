<?php
define('CONTROLLER', 'controllers');

$controller = $_GET['controller'] ?? 'home';
$action = $_GET['action'] ?? 'index';
switch($controller) {
    case 'home':
        require_once CONTROLLER . '/HomeController.php'; 
        $controller = new HomeController();
        break;
    case 'task':
        require_once CONTROLLER . '/TaskController.php';
        $controller = new TaskController();
        break;
    default:
        die("<h4>Controlador no encontrado</h4>");

}
if(method_exists($controller, $action)) {
    $controller->$action();
} else {
    die("<h4>Action no encontrado</h4>");
}
?>
