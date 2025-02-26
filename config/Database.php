<?php

class Database{

    private static $instance = null;
    private $conn;

    private function __construct(){

      try{
        $this->conn = new PDO('mysql:host=localhost;dbname=orange_store','root','');
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo 'Connected to database';
      }
      catch(PDOException $e){
        echo 'Connection failed: '.$e->getMessage();
      }
    }

    public static function getInstance(){
      if(!self::$instance){
        self::$instance = new Database();
      }
      return self::$instance->conn;
    }
}