<?php
    class BaseController {

        public function initTop(){
            $allUsers = new Users();
            $newProducts = new Products();  
            require("views/includes/header.php");
            require("views/usersView.php");
            require("views/productsView.php");
        }

        public function initPriceCalculationView(){
            $allProducts = new Products();  
            require("views/priceView.php");
        }

        public function initBottom(){
            require("views/includes/footer.php");
        }
    }