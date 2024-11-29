<?php
require_once('config/Database.php');

class Task
{
    private static $table = 'task';

    public static function findAll() 
    {
        try {
            $db = new Database();
            $pdo = $db->getconnection();
            $query = "SELECT * FROM task";
            $stmt = $pdo->prepare($query);
            $stmt->execute();
            $tasks = array();
            while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
                array_push($tasks, $row);
            }
            $pdo = null;
            return $tasks;
        }catch(PDOException $e) {
            die("Ocurrió un error " . $e->getMessage());
        }
    }

    public static function store($task)
    {
        try {
            $db = new Database();
            $pdo = $db->getconnection();
            $query = "INSERT INTO task(task) VALUE(:task)";
            $stmt = $pdo->prepare($query);
            $stmt->bindValue(":task", $task);
            $stmt->execute();
                
            $pdo = null;
        }catch(PDOException $e) {
            die("Ocurrió un error " . $e->getMessage());
        }
    }

    public static function remove($task_id)
    {
        try {
            $db = new Database();
            $pdo = $db->getconnection();
            $query = "DELETE FROM task WHERE id = :task_id";
            $stmt = $pdo->prepare($query);
            $stmt->bindValue(":task_id", $task_id);
            $stmt->execute();
                
            $pdo = null;
        }catch(PDOException $e) {
            die("Ocurrió un error " . $e->getMessage());
        }

    }
}
