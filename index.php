<?php
    declare(strict_types=1);

    require "models/UsersModel.php";
    require "models/ProductsModel.php";

    require "controllers/BaseController.php";
    $baseController = new BaseController();

    $baseController->initTop();

    if(isset($_POST["customer"]) && isset($_POST["product"])){
        $baseController->calculatePrice();
    }

    $baseController->initBottom();

    
