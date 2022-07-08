<?php

    require "ProductModel.php";

    class Products {
        
        private array $allProducts = [];

        public function __construct () {
            
            require "config/connect.php";
            
            $sql = "SELECT * FROM product";
            $result = mysqli_query($conn, $sql);
            $allProductsTemp = mysqli_fetch_all($result, MYSQLI_ASSOC);
            
            foreach ($allProductsTemp as $product) {
                array_push($this->allProducts, new Product(intval($product['id']), $product['name'], intval($product['price'])));
            }

        }

        public function getAllProducts(): array {
            return $this->allProducts;
        }
    }