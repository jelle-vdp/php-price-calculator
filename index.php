<?php

    require "config/connect.php";

    $sql = "SELECT firstname FROM customer";
    $result = mysqli_query($conn, $sql);
    $allCustomers = mysqli_fetch_all($result, MYSQLI_ASSOC);

    var_dump($allCustomers);