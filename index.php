<?php
    declare(strict_types=1);

    require "controllers/BaseController.php";

    $baseController = new BaseController();

    $baseController->initTop();

    if(isset($_POST["customer"]) && isset($_POST["product"])){
        $baseController->calculatePrice();
    }

    $baseController->initBottom();

    
