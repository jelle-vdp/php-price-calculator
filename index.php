<?php
    declare(strict_types=1);

    require "views/includes/header.php";
    require "views/usersView.php";
    require "views/productsView.php";
    require "views/includes/footer.php";

    require "controllers/BaseController.php";

    $baseController = new BaseController();
    
