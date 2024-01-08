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
 <link rel="icon" href="../assets/icons/logo-tab.ico">
 <title>User - Krentzackary Motor Parts</title>
</head>
<body class="navbody">
 <div class="overlay"></div>
 <!-- <div class="overlay special"></div> -->
 <div class="popup">
  <div class="popup__header error">
   <div class="popup__container">
    <div class="popup__wrapper">
     <h4>Change User Info Input Error</h4>

     <div class="popup__header-exit">
      <span></span>
      <span></span>
     </div>
    </div>
   </div>
  </div>

  <div class="popup__body">
   <div class="popup__container">
    <p>Please check if your inputs are either incorrect or incomplete</p>
   </div>
  </div>
 </div>

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
   <div class="popup__wrapper__user">
    <div class="popup__container edit-user-group">
     <div class="popup__body__group">
      <div class="popup__body__edit">
       <div class="popup__body__edit__title">
        <p>New First Name</p>
       </div>
  
       <input type="text" class="input__popup" id="first-name">
      </div>
  
      <div class="popup__body__edit">
       <div class="popup__body__edit__title">
        <p>New Last Name</p>
       </div>
  
       <input type="text" class="input__popup" id="last-name">
      </div>
     </div>

     <div class="popup__body__group">
      <div class="popup__body__edit">
       <div class="popup__body__edit__title">
        <p>New Birthday</p>
       </div>

       <input type="date" id="birthday" class="input__popup">
      </div>

      <div class="popup__body__edit">
       <div class="popup__body__edit__title">
        <p>New Email</p>
       </div>
  
       <input type="email" class="input__popup" id="email">
      </div>
     </div>

     <div class="popup__body__group">
      <div class="popup__body__edit">
       <div class="popup__body__edit__title">
        <p>Tell us your secret</p>
       </div>

       <input type="input" class="input__popup" id="secret">
      </div>
     </div>

     <div class="popup__body__group">
      <div class="popup__body__edit">
       <div class="popup__body__edit__title">
        <p>Old Password</p>
       </div>

       <input type="password" class="input__popup" id="old-pass-popup">
      </div>

      <div class="popup__body__edit">
       <div class="popup__body__edit__title">
        <p>New Password</p>
       </div>
  
       <input type="password" class="input__popup" id="new-pass">
      </div>
     </div>
     <div class="push-to-right">
       <div class="confirmation-buttons user">
        <button class="cancel-button" id="cancel-change">Cancel</a>

        <button class="confirm-button" id="confirm-change">Confirm</a>
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
   <p class="light-color">In here the master account's login information can be altered.</p>

   <div class="change-info__grid">
    <div class="change-info__group">
     <div class="form-body">
      <div class="form-title">
       <p>First Name</p>
      </div>

      <input type="text" class="form-input" name="old-first-name" id="old-first-name">
     </div>

     <div class="form-body">
      <div class="form-title">
       <p>Birthday</p>
      </div>

      <input type="date" class="form-input" name="old-birthday" id="old-birthday">
     </div>

     <div class="form-body">
      <div class="form-title">
       <p>What is your secret?</p>
      </div>

      <input type="text" class="form-input" name="old-secret" id="old-secret">
     </div>
    </div>

    <div class="change-info__group">
     <div class="form-body">
      <div class="form-title">
       <p>Last Name</p>
      </div>

      <input type="text" class="form-input" name="old-last-name" id="old-last-name">
     </div>

     <div class="form-body">
      <div class="form-title">
       <p>Email</p>
      </div>

      <input type="email" class="form-input" name="old-email" id="old-email">
     </div>

     <div class="form-body">
      <div class="form-title">
       <p>Current Password</p>
      </div>

      <input type="password" class="form-input" name="old-pass" id="old-pass">
     </div>

     <div class="form-body">
      <div class="confirmation-buttons">
       <button class="cancel-button confirm-info-clear">Clear</button>

       <button class="confirm-button confirm-info-change">Confirm</button>
      </div>
     </div>
    </div>
   </div>
  </div>
 <!-- </form> -->

</body>
<script src="../js/nav-script.js"></script>
<script src="../js/user-script.js?1004"></script>
<script src="../js/jquery/jquery-3.7.1.min.js"></script>

<script>
    function script(){
        this.initialize = function(){
            this.registerEvents();
        }

        this.registerEvents = function(){
            const confirm = document.querySelector(".confirm-info-change");
            const clear = document.querySelector(".confirm-info-clear");

            clear.addEventListener('click', ()=>{
                document.getElementById("old-first-name").value = '';
                document.getElementById("old-last-name").value = '';
                document.getElementById("old-birthday").value = '';
                document.getElementById("old-email").value = '';
                document.getElementById("old-secret").value = '';
                document.getElementById("old-pass").value = '';
            })

            confirm.addEventListener('click', ()=>{
                oldFirstName = document.getElementById("old-first-name").value;
                oldLastName = document.getElementById("old-last-name").value;
                oldBirthday = document.getElementById("old-birthday").value;
                oldEmail = document.getElementById("old-email").value;
                oldSecret = document.getElementById("old-secret").value;
                oldPass = document.getElementById("old-pass").value;
                const inputError = document.querySelector(".popup");
                const overlay = document.querySelector(".overlay");

                // if (oldFirstName == '' || oldLastName == '' || oldBirthday == '' || oldEmail == '' || oldSecret == '' || oldSecret == '') {
                //     inputError.classList.toggle("open");
                //     overlay.classList.toggle("open");
                // }

                $.ajax({
                    method: 'POST',
                    data: { 
                        old_firstname: oldFirstName,
                        old_lastname: oldLastName,
                        old_birthday: oldBirthday,
                        old_email: oldEmail,
                        old_secret: oldSecret,
                        old_pass: oldPass
                    },
                    url: '../database/check-info.php',
                    dataType: 'json',
                    success: function(data){
                        if(data.status){
                            const overlay = document.querySelector(".overlay");
                            const popup = document.querySelector(".popup-edit-product");

                            if (overlay.classList.contains("open")) {
                                overlay.style.zIndex = "3";
                            }

                            document.getElementById("old-first-name").value = '';
                            document.getElementById("old-last-name").value = '';
                            document.getElementById("old-birthday").value = '';
                            document.getElementById("old-email").value = '';
                            document.getElementById("old-secret").value = '';
                            document.getElementById("old-pass").value = '';
                            overlay.classList.toggle("open");
                            popup.classList.toggle("open");

                            const confirmChange = document.getElementById("confirm-change");

                            confirmChange.addEventListener('click', ()=>{
                                firstNameUp = document.getElementById("first-name").value;
                                lastNameUp = document.getElementById("last-name").value;
                                birthdayUp = document.getElementById("birthday").value;
                                emailUp = document.getElementById("email").value;
                                secretUp = document.getElementById("secret").value;
                                oldPassPopup = document.getElementById("old-pass-popup").value;
                                newPass = document.getElementById("new-pass").value;
                                // console.log(firstNameUp, lastNameUp, birthdayUp, emailUp, secretUp, oldPassPopup, newPass);

                                if (firstNameUp == '' || lastNameUp == '' || birthdayUp == '' || emailUp == '' || secretUp == '' || oldPassPopup == '' || newPass == '') {
                                    if (overlay.classList.contains("open")) {
                                        overlay.style.zIndex = "4";
                                    }

                                    inputError.style.zIndex = "4";
                                    inputError.classList.add("open");
                                    // overlay.classList.toggle("open");
                                } else {
                                    $.ajax({
                                        method: 'POST',
                                        data: { 
                                            new_firstname: firstNameUp,
                                            new_lastname: lastNameUp,
                                            new_birthday: birthdayUp,
                                            new_email: emailUp,
                                            new_secret: secretUp,
                                            old_passpopup: oldPassPopup,
                                            new_pass: newPass
                                        },
                                        url: '../database/up-user.php',
                                        dataType: 'json',
                                        success: function(data){
                                            if (data.success){
                                                location.reload();
                                                overlay.classList.toggle("open");
                                                popup.classList.toggle("open");
                                            } else {
                                                overlay.classList.toggle("open");
                                                popup.classList.toggle("open");
                                                window.alert('Fatal Error');
                                            }
                                        }
                                    })
                                }
                            })
                        } else {
                            inputError.classList.toggle("open");
                            overlay.classList.toggle("open");
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