<?php
    // Start the session
    session_start();
    
    // If session user is not set i.e. no user is logged in then
    // Go to Login page. This stops access to the rest of the
    // site if the user is not logged in
    if (!isset($_SESSION['user'])) header('Location: login.php');
    include('../database/connection.php');

    // if($_POST){
    //     $itlog = $_POST['old-pass'];
    //     echo $itlog;
    // }
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
 <div class="overlay"></div>
 <div class="popup-edit-product user">
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
 
      <input type="text" class="input__popup" id="first-name">
     </div>
 
     <div class="popup__body__edit">
      <div class="popup__body__edit__title">
       <p>Last Name</p>
      </div>
 
      <input type="text" class="input__popup" id="last-name">
     </div>
    </div>

    <div class="popup__body__group user">
     <div class="popup__body__edit">
      <div class="popup__body__edit__title">
       <p>Email Address</p>
      </div>

      <input type="text" class="input__popup" id="email">
     </div>

     <div class="popup__body__edit">
      <div class="popup__body__edit__title">
       <p>Last Name</p>
      </div>
 
      <input type="text" class="input__popup" id="last-name">
     </div>
    </div>
    <div class="push-to-right">
      <div class="confirmation-buttons user">
       <a href="" class="cancel" id="cancel-change">Cancel</a>

       <a href="" class="confirm" id="confirm-change">Confirm</a>
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

 <!-- <form name="change-info-form" action="user.php" method="POST"> -->
  <div class="change-info">
   <h1>Change User Login Info</h1>
   <p class="light-color">In here the master account's <br>login information can be altered.</p>

   <div class="form-body">
    <div class="form-title">
     <p>Current Password</p>
    </div>

    <input type="text" class="form-input" name="old-pass" id="old-pass">
   </div>

   <div class="form-body">
    <div class="confirmation-buttons">
     <button class="cancel-button">Cancel</button>

     <button class="confirm-button">Confirm</button>
    </div>
   </div>
  </div>
 <!-- </form> -->

</body>
<script src="../js/nav-script.js"></script>
<script src="../js/jquery/jquery-3.7.1.min.js"></script>

<script>
    function script(){
        this.initialize = function(){
            this.registerEvents();
        }

        this.registerEvents = function(){
            const confirm = document.querySelector(".confirm-button");

            confirm.addEventListener('click', ()=>{
                oldPass = document.getElementById("old-pass").value;
                // console.log(oldPass);

                $.ajax({
                    method: 'POST',
                    data: { 
                        old_pass: oldPass
                    },
                    url: '../database/check-pass.php',
                    dataType: 'json',
                    success: function(data){
                        if(data.status){
                            const overlay = document.querySelector(".overlay");
                            const popup = document.querySelector(".popup-edit-product");

                            overlay.classList.add("open");
                            popup.classList.add("open");

                            const confirmChange = document.getElementById("confirm-change");

                            confirmChange.addEventListener('click', ()=>{
                                console.log('It works');
                            })
                        } else {
                            console.log('Floop');
                        }
                    }
                })
            })
        }
    }

    var script = new script;
    script.initialize();
</script>
</html>