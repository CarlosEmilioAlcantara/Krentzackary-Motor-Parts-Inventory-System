<?php
    // Start the session
    session_start();
    
    // If session user is not set i.e. no user is logged in then
    // Go to Login page. This stops access to the rest of the
    // site if the user is not logged in
    if (!isset($_SESSION['user'])) header('Location: login.php');
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
 <title>User - Krentzackary Motor Parts</title>
</head>
<body class="navbody">
 <div class="overlay open"></div>
 <div class="popup-edit-product open user">
  <div class="popup__header normal">
   <div class="popup__container">
    <div class="popup__wrapper">
     <h4>Edit User</h4>

     <div class="popup__header-exit normal">
      <span></span>
      <span></span>
     </div>
    </div>
   </div>
  </div>
   
  <div class="popup__body user">
   <div class="popup__container edit-user-group">
    <div class="popup__body__group">
     <div class="popup__body__edit">
      <div class="popup__body__edit__title">
       <p>First Name</p>
      </div>
 
      <input type="text" class="input__popup">
     </div>
 
     <div class="popup__body__edit">
      <div class="popup__body__edit__title">
       <p>Last Name</p>
      </div>
 
      <input type="text" class="input__popup">
     </div>
    </div>

    <div class="popup__body__group user">
     <div class="popup__body__edit">
      <div class="popup__body__edit__title">
       <p>Email Address</p>
      </div>

      <input type="text" class="input__popup">
     </div>
     <div class="push-to-right">
      <div class="confirmation-buttons user">
       <a href="" class="cancel">Cancel</a>

       <a href="" class="confirm">Confirm</a>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>

 <nav class="topbar">
  <div class="topbar__burgermenu">
   <span></span>
   <span></span>
   <span></span>
   <span></span>
  </div>

  <h1>User</h1>

  <div class="topbar__logoutbutton">
   <a href="../html/login.html">
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
    <!-- <img src="../assets/images/user-image-navbar.png" alt="user-image-navbar" class="orayt"> -->
   </div>

   <div class="userinfo__right">
    <p>Jane Doe</p>
    <p>ID: 1</p>
   </div>
  </div>

  <ul class="sidebar__links">
   <li><a href="../php/dashboard.php" class="button"><i class="fa-solid fa-dashboard fa-xl"></i> Dashboard</a></li>
   <li><a href="../php/products.php" class="button"><i class="fa-solid fa-tags fa-xl"></i> Products</a></li>
   <li><a href="../php/user.php" class="button selected"><i class="fa-solid fa-user fa-xl"></i> User</a></li>
  </ul>

  <div class="sidebar__footer">
   <h4 class="companyname">Krentzackary Motor</h4>
   <h4 class="year">2023</h4>
  </div>
 </nav>

 <div class="user-info">
  <div class="circle"></div>

  <div class="user-info__name">
   <h3>Jane Doe</h3>
   <p>Name</p>
  </div>

  <div class="user-info__number">
   <h3>1</h3>
   <p>Entity Number</p>
  </div>

  <button>Edit User</button>
 </div>
</body>
<script src="../js/nav-script.js"></script>
</html>