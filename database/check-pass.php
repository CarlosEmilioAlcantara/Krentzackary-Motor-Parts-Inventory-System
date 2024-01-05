<?php
    $data = $_POST;
    $id = '1';
    // var_dump($data);
    $old_Pass = $data['old_pass'];

    try {
        include("../database/connection.php");

        $query = "SELECT password FROM user WHERE id={$id}";
        $stmt = $conn->prepare($query);
        $stmt->execute();

        $row = $stmt->fetch();
        $pass = $row['password'];
        if ($pass == $old_Pass) {
            echo json_encode([
                'status' => true,
            ]);
        } else {
            echo json_encode([
                'status' => false,
            ]);
        };
    } catch (PDOException $e) { // Para lang ito sa database error
        echo $e;
    }
    // var_dump($old_Pass);
    // echo $old_Pass;
?>