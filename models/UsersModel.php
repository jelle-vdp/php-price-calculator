<?php

    require "UserModel.php";

    class Users {
        
        private array $allUsers = [];

        public function __construct () {
            
            require "config/connect.php";
            
            $sql = "SELECT * FROM customer";
            $result = mysqli_query($conn, $sql);
            $allUsersTemp = mysqli_fetch_all($result, MYSQLI_ASSOC);

            foreach ($allUsersTemp as $user) {
               array_push($this->allUsers, new User(intval($user['id']), strtolower($user['firstname']), strtolower($user['lastname']), intval($user['group_id']), intval($user['fixed_discount']), intval($user['variable_discount'])));
            }
        }

        public function getAllUsers(): array {
            return $this->allUsers;
        }
    }

