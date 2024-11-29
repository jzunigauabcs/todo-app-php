<?php
require_once('models/Task.php');

class TaskController 
{
    public function __construct()
    {
        
    }

    public function index()
    {
        $tasks = Task::finAll();
        require_once('views/tasks/index.php');
    }
    
    public function create()
    {
        if(!$_SERVER['REQUEST_METHOD'] === "POST") {
            die('Método incorrecto');
        } else {
            if(!isset($_POST['task'])) {
                die('El campo task no puede estar vacío');
            } else {
                $task = $_POST['task'];
                Task::store($task);
                header('Location: ?controller=task');
            }
        }
    }
}


