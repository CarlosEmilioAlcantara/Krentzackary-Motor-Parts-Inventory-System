<?php
    // Start the session
    session_start();
    
    // If session user is not set i.e. no user is logged in then
    // Go to Login page. This stops access to the rest of the
    // site if the user is not logged in
    if (!isset($_SESSION['user'])) header('Location: login.php');
    $user = ($_SESSION['user']);

    include('../database/analytics.php');
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
 <link rel="icon" href="../assets/icons/logo-tab.ico">
 <title>Dashboard - Krentzackary Motor Parts</title>
</head>
<style>
.pie-grid {
  background-color: #32373a;
  padding: 3rem;
  border-radius: 3.3rem;
}

.pie-grid h4 {
    color: #e5e7e6;
    margin-bottom: 2rem;
}

.center {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  gap: 2rem; 
}

.center .pie-chart {
  width: 25rem;
  height: 25rem;
  border-radius: 50%;

  background: conic-gradient(
    #c21a24 0 <?= $top_percentage ?>%,
    #077b43 <?= $top_percentage ?>% <?= $second_percentage ?>%,
    #484D79 <?= $second_percentage ?>% <?= $third_percentage ?>%,
    #1a6ec6 <?= $third_percentage ?>% <?= $fourth_percentage ?>%,
    #237986 <?= $fourth_percentage ?>% <?= $fifth_percentage ?>%
  );
}

.pie-chart-least {
  background: conic-gradient(
    #c21a24 0 <?= $least_percentage ?>%,
    #077b43 <?= $least_percentage ?>% <?= $second_least_percentage ?>%,
    #484D79 <?= $second_least_percentage ?>% <?= $third_least_percentage ?>%,
    #1a6ec6 <?= $third_least_percentage ?>% <?= $fourth_least_percentage ?>%,
    #237986 <?= $fourth_least_percentage ?>% <?= $fifth_least_percentage ?>%
  ) !important;
}

.sellers {
  display: flex;
  justify-content: space-between;
  gap: 2rem;
  color: #e5e7e6;
}

.sellers li {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: .5rem;
}

.sellers span {
  width: 1.5rem;
  height: 1.5rem;
  border-radius: 50%;
  display: inline-block;
}

#top {
  background-color: #c21a24;
}

#second {
  background-color: #077b43;
}

#third {
  background-color: #484D79;
}

#fourth {
  background-color: #1a6ec6;
}

#fifth {
  background-color: #237986;
}
</style>
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

  <ul class="sidebar__links">
   <li><a href="../php/dashboard.php" class="button selected"><i class="fa-solid fa-dashboard fa-xl"></i> Dashboard</a></li>
   <li><a href="../php/products.php" class="button"><i class="fa-solid fa-tags fa-xl"></i> Products</a></li>
   <li><a href="../php/user.php" class="button"><i class="fa-solid fa-user fa-xl"></i> User</a></li>
  </ul>

  <footer class="sidebar__footer">
   <h4 class="companyname">Krentzackary Motor©</h4>
   <h4 class="year">2023</h4>
  </footer>
 </nav>

 <div class="analytics-wrapper">
  <div class="analytics-grid">
   <div class="pie-grid">
    <h4>Top 5 Best Selling Items</h4>

    <div class="center">
     <div class="pie-chart"></div>

     <ul class="sellers">
      <li><span id="top"></span><?= $top_sale_name ?> - <?= $top_percentage ?>%</li>
      <li><span id="second"></span><?= $second_sale_name ?> - <?= $second_percentage_list ?>%</li>
      <li><span id="third"></span><?= $third_sale_name ?> - <?= $third_percentage_list ?>%</li>
      <li><span id="fourth"></span><?= $fourth_sale_name ?> - <?= $fourth_percentage_list ?>%</li>
      <li><span id="fifth"></span><?= $fifth_sale_name ?> - <?= $fifth_percentage_list ?>%</li>
     </ul>
    </div>
   </div>

   <div class="pie-grid">
    <h4>Top 5 Least Selling Items</h4>

    <div class="center">
     <div class="pie-chart pie-chart-least"></div>

     <ul class="sellers">
      <li><span id="top"></span><?= $least_sale_name ?> - <?= $least_percentage ?>%</li>
      <li><span id="second"></span><?= $second_least_sale_name ?> - <?= $second_least_percentage_list ?>%</li>
      <li><span id="third"></span><?= $third_least_sale_name ?> - <?= $third_least_percentage_list ?>%</li>
      <li><span id="fourth"></span><?= $fourth_least_sale_name ?> - <?= $fourth_least_percentage_list ?>%</li>
      <li><span id="fifth"></span><?= $fifth_least_sale_name ?> - <?= $fifth_least_percentage_list ?>%</li>
     </ul>
    </div>
   </div>
  </div>

  <div class="analytics-grid">
   <div class="stocked-items col-2">
    <div class="content">
     <h4>Stocked Items Inventory Summary</h4>

     <div class="stats">
      <p>Total Number of Items: <span><?= $total_stocked ?></span></p>
      <p>Best Selling Item: <span><?= $top_sale_name ?></span></p>
      <p>Least Selling Item: <span><?= $least_sale_name ?></span></p>
      <p>Amount Held of Most Stocked Item: <span><?= $most_stocked_amount ?></span></p>
      <p>Most Stocked Item: <span><?= $most_stocked ?></span></p>
      <p>Amount Held of Least Stocked Item: <span><?= $least_stocked_amount ?></span></p>
      <p>Least Stocked Item: <span><?= $least_stocked ?></span></p>
     </div>
    </div>
   </div>
  </div>
 </div>
</body>
<script src="../js/nav-script.js"></script>
<script src="../js/analytics.js"></script>
</html>