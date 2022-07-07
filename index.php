<?php

    define("DB_HOST", "localhost");
    define("DB_USER", "jelle");
    define("DB_PASS", "shrimp123");
    define("DB_NAME", "price-calculator");

    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT COUNT(*) as total FROM customer";
    $result = mysqli_query($conn, $sql);
    $amountOfCustomers = mysqli_fetch_all($result, MYSQLI_ASSOC);

    echo $amountOfCustomers[0]["total"];