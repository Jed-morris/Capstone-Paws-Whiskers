<?php
    class Database {
        private $host = '127.0.0.1:3306';
        private $username = 'u977168850_root_capstone';
        private $password = 'capstone24_rootPass';
        private $database = 'u977168850_capstone_db';
        private $connection;
    }
        try {
         $conn = new PDO("mysql:host=$sName; dbname=$db_name", $uName, $pass);
         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      }
          catch (PDOException $e) {
           echo "Connection Failed:". $e->getMessage();
           }      
      ?>
      