<?php
    class DB {
        protected $server = "mysql:host=localhost;dbname=chair_shop;charset=utf8";
        protected $username = "root";
        protected $password = "";
        public $conn;
        public function __construct()
        {
            $this->conn = $this->connect_db();
        }
        public function connect_db()
        {
            try {
                $this->conn = new PDO($this->server,$this->username,$this->password);
            }catch (PDOException $e){
                echo "Connection failed: " . $e->getMessage();
            }
            return $this->conn;
        }
    }
?>