<?php 

require_once 'config/Database.php';

class Product{
    private $conn;

    public function __construct(){
        $this->conn = Database::getInstance();
    }

    public function getProducts(){

        $stmt = $this->conn->query("SELECT * FROM products");
        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $products;
    }
}