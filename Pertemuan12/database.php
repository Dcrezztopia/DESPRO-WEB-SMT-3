<?php
    class database{
        private $host = "localhost";
        private $username = "root";
        private $password = "";
        private $database = "praktikdbweb";
        public $conn;
        public function __construct(){
            $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);

            if($this->conn->connect_error){
                die("Connection Failed: ". $this->conn->connect_error);
            }
        }
    }
?>