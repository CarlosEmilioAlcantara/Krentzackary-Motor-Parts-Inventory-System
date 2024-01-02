<?php
    $data = $_POST;
    // var_dump($data);
    $prod_Id = (int) $data['prod_id'];
    // var_dump($prod_Id);

    try {
        $command = "DELETE FROM products WHERE id={$prod_Id}";      
    
        // var_dump($command);
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