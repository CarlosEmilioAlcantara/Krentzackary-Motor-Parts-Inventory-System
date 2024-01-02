<?php
    include("../database/connection.php");

    $stmt = $conn->prepare('SELECT * FROM products ORDER BY created_at DESC');
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    return $stmt->FetchAll();
?>