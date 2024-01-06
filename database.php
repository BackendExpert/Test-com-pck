<?php

class Database
{
    // private $host;
    // private $username;
    // private $password;
    // private $database;
    public $conn;

    public function __construct($host, $username, $password, $database)
    {
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->database", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function closeConnection()
    {
        $this->conn = null;
    }
}
?>
