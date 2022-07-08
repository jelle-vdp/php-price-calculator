<?php

    class AllUsers {
        
        private array $allUsers;

        public function __construct () {
            
            require "config/connect.php";
            
            $sql = "SELECT * FROM customer";
            $result = mysqli_query($conn, $sql);
            $this->allUsers = mysqli_fetch_all($result, MYSQLI_ASSOC);
        }

        public function getAllUsers(): array {
            return $this->allUsers;
        }
    }

