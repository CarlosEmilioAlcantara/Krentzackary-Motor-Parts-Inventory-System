<?php
    session_start();

    $_SESSION['table'] = 'products';
    $table_name = $_SESSION['table'];
    $product_name = $_GET['product_name'];
    $category = $_GET['category'];
    $description = $_GET['description'];
    $attribute = $_GET['attribute'];
    $amount_held = $_GET['amount_held'];
    $amount_sold = $_GET['amount_sold'];
    $location = $_GET['location'];

    try {
        $insert_method = "INSERT INTO $table_name(product_name, category, description, attribute, amount_held, amount_sold, location, created_at, updated_at) VALUES ('".$product_name."', '".$category."', '".$description."', '".$attribute."', '".$amount_held."', '".$amount_sold."', '".$location."', 'NOW()', 'NOW()')";      
    
        include('connection.php');

        $conn->exec($insert_method);
        $response = [
            'success' => true,
            'message' => $product_name . ' of category ' . $category . ' with an amount held of ' . $amount_held . ' from ' . $location . ' is now being tracked.'
        ];
    } catch (PDOException $e) {
        $response = [
            'success' => false,
            'message' => $e->getMessage()
        ];
    }

    $_SESSION['response'] = $response;
    header('location: ../php/products.php');
?>