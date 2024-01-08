<?php

    class DatabaseConn
    {
        private $host = "HOST_DB";
        private $username = "HOST_USER";
        private $password = "HOST_PASS";
        private $database = "HOST_DBNAME";
        public $con;

        public function __construct(){
            try{
                $this->con = new PDO("mysql:host=$this->host;dbname=$this->database", $this->username, $this->password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch (PDOException $e){
                echo "Connection Faild:". $e->getMessage();
            }
        }
    }

?>