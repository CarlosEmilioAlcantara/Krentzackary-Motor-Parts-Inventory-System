<?php
    $data = $_POST;
    $id = '3';
    $new_FirstName = $data['new_firstname'];
    $new_LastName = $data['new_lastname'];
    $new_Birthday = $data['new_birthday'];
    $new_Email = $data['new_email'];
    $new_Secret = $data['new_secret'];
    $old_PassPopup = $data['old_passpopup'];
    $new_Pass = $data['new_pass'];

    try {
        $sql = "UPDATE user SET first_name=?, last_name=?, birthday=?, email=?, secret=?, password=? WHERE id=?";
        // var_dump($sql);

        include("./connection.php");

        $command = $conn->prepare($sql);

        $command->execute([$new_FirstName, $new_LastName, $new_Birthday, $new_Email, $new_Secret, $new_Pass, $id]); 
        
        echo json_encode([
            'success' => true
        ]);

        // echo "<br>";
        // var_dump($conn);
        // echo "<br>";

    } catch (PDOException $e) { // Para lang ito sa database error
        echo json_encode([
            'success' => false
        ]);
    }
?>