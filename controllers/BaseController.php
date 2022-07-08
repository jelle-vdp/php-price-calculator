<?php
    class BaseController {

        private ProductService $productService;

        public function initTop(){
            require("views/includes/header.php");
            require("views/usersView.php");
            require("views/productsView.php");
        }

        public function calculatePrice($productId, $customerId){
            $discountedPrice = $this->productService->getDiscountedPrice($productId, $customerId) / 100;
            $originalPrice = $this->productService->getPrice($productId) / 100;
            require("views/priceView.php");
        }

        public function initBottom(){
            require("views/includes/footer.php");
        }
    }