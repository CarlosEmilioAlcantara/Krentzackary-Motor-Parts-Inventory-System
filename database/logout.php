<?php
    session_start();

    // Unset all variables from the session: $user, $stmt, $username, etc.
    session_unset();

    // Go straight back to Login page once logged out
    if (!isset($_SESSION['user'])) header('Location: ../php/login.php');

    // // Just completely remove the session
    // session_destroy();
?>