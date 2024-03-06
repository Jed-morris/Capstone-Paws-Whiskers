<?php
    class Database {
        private $host = '173.252.167.200:3306';
        private $username = 'pawsandw_root_capstone';
        private $password = 'capstone_rootPass';
        private $database = 'pawsandw_capstone_db';
        private $connection;

        public function __construct() {
            $this->connection = new Mysqli($this->host, $this->username, $this->password, $this->database);
            if ($this->connection->connect_error) {
                die("Connection failed: " . $this->connection->connect_error);
            }
        }
        
        public function getConnection() {
            return $this->connection;
        }
    }
?>