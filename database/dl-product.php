<?php
    $data = $_POST;
    $prod_Id = (int) $data['prod_id'];

    try {
        $command = "DELETE FROM products WHERE id={$prod_Id}";      
    
        include('connection.php');

        $conn->exec($command);

        echo json_encode([
            'success' => true,
            'message' => 'Product successfully deleted'
        ]);
    } catch (PDOException $e) {
        echo json_encode([
            'success' => false,
            'message' => 'Product deletion error'
        ]);
    }
?>