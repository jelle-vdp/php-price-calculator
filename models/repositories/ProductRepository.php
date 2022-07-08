<?php

class ProductRepository
{
    private mysqli $conn;
    public function __construct()
    {
        require "config/connect.php";
        $this->conn = $conn;
    }

    public function findAllProducts(): array {
        $sql = "SELECT * FROM product";
        $result = mysqli_query($conn, $sql);
        $allProductsTemp = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $allProducts = [];
        foreach ($allProductsTemp as $product) {
            array_push($allProducts, new ProductModel(intval($product['id']), $product['name'], intval($product['price'])));
        }
        return $allProducts;
    }

    public function findProductById(int $id): Product {
        $sql = "SELECT * FROM product WHERE id = $id";
        $result = mysqli_query($conn, $sql);
        $allProductsTemp = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return new Product(intval($allProductsTemp['id']), $allProductsTemp['name'], intval($allProductsTemp['price']));
    }


}