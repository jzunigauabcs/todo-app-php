<?php
require_once('models/Task.php');

class TaskController 
{
    public function __construct()
    {
        
    }

    public function index()
    {
        $tasks = Task::findAll();
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

    public function delete()
    {
        if(!isset($_GET['task'])) {
            die('No se ha especificado tarea para eliminar');
        } else {
            $task_id = $_GET['task'];
            Task::remove($task_id);
            header('Location: ?controller=task');
        }
    }
}


