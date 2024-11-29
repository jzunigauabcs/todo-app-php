<?php
class Database {
    private $host = 'localhost';
    private $db_name = 'TODO_APP';
    private $db_user = 'root';
    private $db_password = 'root';
    private $charset = 'utf8mb4';

    public function getconnection() {
        $dsn = "mysql:host={$this->host};dbname={$this->db_name};charset={$this->charset}";
        try {
            $pdo = new PDO($dsn, $this->db_user);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch(PDOException $e) {
            die("Ocurrió un error al intentar la conexión en la base de dato " . $e->getMessage());
        }
    }
}
?>
