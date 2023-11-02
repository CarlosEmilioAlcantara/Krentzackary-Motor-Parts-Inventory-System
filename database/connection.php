<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';

    // Connecting to database
    try {
        $conn = new PDO("mysql:host=$servername;dbname=krentzackary", $username, $password);
        // Set error mode to exception to get error output
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connected Successfully";
    } catch (\Exception $e) {
        $error_message = $e->getMessage();
    }
?>