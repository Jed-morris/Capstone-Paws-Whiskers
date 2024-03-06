<?php
    class Database {
        private $host = '127.0.0.1:3306';
        private $username = 'u977168850_root_capstone';
        private $password = 'capstone24_rootPass';
        private $database = 'u977168850_capstone_db';
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