<?php
    $data = $_POST;
    $id = '3';
    $old_FirstName = $data['old_firstname'];
    $old_LastName = $data['old_lastname'];
    $old_Birthday = $data['old_birthday'];
    $old_Email = $data['old_email'];
    $old_Secret = $data['old_secret'];
    $old_Pass = $data['old_pass'];

    try {
        include("../database/connection.php");

        $query = "SELECT * FROM user WHERE id={$id}";
        $stmt = $conn->prepare($query);
        $stmt->execute();

        $row = $stmt->fetch();

        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
        $birthday = $row['birthday'];
        $email = $row['email'];
        $secret = $row['secret'];
        $pass = $row['password'];

        if ($first_name == $old_FirstName && $last_name == $old_LastName && $birthday == $old_Birthday && $email == $old_Email && $secret == $old_Secret && $pass == $old_Pass) {
            echo json_encode([
                'status' => true,
            ]);
        } else {
            echo json_encode([
                'status' => false,
            ]);
        };
    } catch (PDOException $e) { // Para lang ito sa database error
        echo json_encode([
            'status' => false,
        ]);
    }
?>