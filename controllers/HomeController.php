<?php
class HomeController 
{
    public function __contructor() {

    }

    public function index() {
        require_once 'views/home/index.php';
    }

    public function registro() {
        require_once 'views/home/registro.php';
    }
}
?>
