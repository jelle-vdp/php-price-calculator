<?php
    class BaseController {
        public function __construct() {
            if(isset($_POST['customer']) && isset($_POST["product"])){
                echo $_POST['customer'];
                echo "<br>";
                echo $_POST['product'];
            }
        }
    }