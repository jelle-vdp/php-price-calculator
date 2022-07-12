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

        public function getSpecificPrice($name): int {
            foreach ($this->allProducts as $product) {
                if ($product->getName() == $name) {
                    return $product->getPrice();
                }
            }
        }

        
        // echo getPrice($product->getName());    echo getPrice($_POST['product']);
        public function getPrice($_POST['product']) {
            
            require "config/connect.php";
            
            $sql = "SELECT price FROM products WHERE name LIKE '$_POST['product']'";
            $result = mysqli_query($conn, $sql);
            return $originialItemPrice = mysqli_fetch_all($result, MYSQLI_ASSOC);
    }


        // echo getFixedDiscounts();
        public function getFixedDiscounts(): int {
        
            require "config/connect.php";

            $sql = "SELECT
            customer.fixed_discount, customer_group.fixed_discount
            INTO
            #temp_fixed_discount
            FROM
            customer, customer_group
            WHERE
            fixed_discount IS NOT NULL;
            SELECT SUM(fixed_discount) as total_fixed_discount
            FROM #temp_fixed_discount;";
            $result = mysqli_query($conn, $sql);
            return $fixedDiscount = mysqli_fetch_all($result, MYSQLI_TYPE_LONG);
        }


        // echo getVariableDiscounts();         // $variableDiscount
        public function getVariableDiscounts(): int {
            
            require "config/connect.php";

            $sql = "SELECT
            (price -
            (SELECT
            SUM(fixed_discount)
            FROM
            #temp_fixed_discount;)) - ((price -
            (SELECT
            SUM(fixed_discount)
            FROM
            #temp_fixed_discount;)) * (SELECT
            MAX(variable_discount)
            FROM
            customer, customer_group;) / 100)
            FROM
            products;";
            $result = mysqli_query($conn, $sql);
            return $variableDiscount = mysqli_fetch_all($result, MYSQLI_TYPE_LONG);
    }
    }
