<?php
    // Start the session
    session_start();
    
    // If session user is not set i.e. no user is logged in then
    // Go to Login page. This stops access to the rest of the
    // site if the user is not logged in
    if (!isset($_SESSION['user'])) header('Location: login.php');
    $user = ($_SESSION['user']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/fontawesome/css/fontawesome.css">
    <link rel="stylesheet" href="../assets/fontawesome/css/all.css">
    <link rel="stylesheet" href="../assets/fonts/Nunito/fonts.css">
    <link rel="stylesheet" href="../css/main.css">
    <title>Dashboard - Krentzackary Motor Parts</title>
</head>
<body class="navbody">
    <nav class="topbar">
        <div class="topbar__burgermenu">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
        </div>

        <h1>Dashboard</h1>

        <div class="topbar__logoutbutton">
            <a href="../database/logout.php">
                <i class="fa-solid fa-power-off fa-xl"></i>
                <h4>Logout</h4>
            </a>
        </div>
    </nav>

    <nav class="sidebar">
        <img src="../assets/images/logo-navbar.png" alt="logo-navbar">

        <div class="userinfo">
            <div class="userinfo__left">
                <div class="circle"></div>
            </div>

            <div class="userinfo__right">
                <p><?= $user['first_name'] ?> <?= $user['last_name'] ?></p>
                <p>ID: <?= $user['id'] ?></p>
            </div>
        </div>

        <ul class="sidebar__links">
            <li><a href="../php/dashboard.php" class="button selected"><i class="fa-solid fa-dashboard fa-xl"></i> Dashboard</a></li>
            <li><a href="../php/products.php" class="button"><i class="fa-solid fa-tags fa-xl"></i> Products</a></li>
            <li><a href="../html/user.html" class="button"><i class="fa-solid fa-user fa-xl"></i> User</a></li>
        </ul>

        <footer class="sidebar__footer">
            <h4 class="companyname">Krentzackary Motor©</h4>
            <h4 class="year">2023</h4>
        </footer>
    </nav>
</body>
<script src="../js/nav-script.js"></script>