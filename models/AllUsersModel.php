<?php

    declare(strict_types=1);

    class AllUsers {
        
        private array $allUsers;

        public function __construct () {
            
            require $_SERVER['DOCUMENT_ROOT'] . "/php-price-calculator/config/connect.php";
            
            $sql = "SELECT * FROM customer";
            $result = mysqli_query($conn, $sql);
            $this->allUsers = mysqli_fetch_all($result, MYSQLI_ASSOC);
        }

        public function getAllUsers(): array {
            return $this->allUsers;
        }
    }

