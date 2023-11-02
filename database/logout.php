<?php
    session_start();

    // Unset all variables from the session: $user, $stmt, $username, etc.
    session_unset();

    // Just completely remove the session
    session_destroy();
?>

<html>
    <p>huzzah!</p>
</html>