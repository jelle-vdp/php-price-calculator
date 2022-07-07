<?php
    declare(strict_types=1);

    class Products {
        
        private array $allProducts;

        public function __construct () {
            
            require "config/connect.php";
            
            $sql = "SELECT * FROM products";
            $result = mysqli_query($conn, $sql);
            $this->allProducts = mysqli_fetch_all($result, MYSQLI_ASSOC);
        }

        public function getAllProducts(): array {
            return $this->allProducts;
        }
    }

// NOT DONE
// name - capitalize 1st of each string
// pricedisplay - format to currency (in notes)