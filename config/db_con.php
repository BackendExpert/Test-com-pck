<?php

    class DatabaseConn
    {
        public function __construct(){
            $con = mysqli_connect(HOST_DB,HOST_USER,HOST_PASS,HOST_DBNAME);

            if(!$con){
                die("Connection Lost");
            }
            return $this->con = $con;
        }
    }

?>