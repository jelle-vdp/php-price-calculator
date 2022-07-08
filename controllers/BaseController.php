<?php
    class BaseController {
        
        public function initTop(){
            require("views/includes/header.php");
            require("views/usersView.php");
            require("views/productsView.php");
        }

        public function calculatePrice(){
            require("views/priceView.php");
        }

        public function initBottom(){
            require("views/includes/footer.php");
        }
    }