<?php
    // Start the session
    session_start();
    // If user is already logged in then just go to dashboard page
    if (isset($_SESSION['user'])) header('Location: dashboard.php');

    // Default error to empty so we can customize it
    $error_message = '';

    if($_POST){
        // var_dump($_POST);
        include("../database/connection.php"); // Connecting to database

        // Getting form content and assigning names
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Checking values from database and comparing with input
        $query = 'SELECT * FROM user WHERE user.email="'. $username . '" AND user.password="'. $password .'"';
        // Executing the query
        $stmt = $conn->prepare($query);
        $stmt->execute();

        // If inputs are correct then login else error
        if($stmt->rowCount() > 0){
            // Get only the actual values of entities
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            // Get only the first index
            // The index seems to be the first group of entites
            // I think
            $user = $stmt->fetchAll()[0];
            // Set session table to table user so we can get values from it
            $_SESSION['user'] = $user;

            // Redirect to dashboard
            header('Location: dashboard.php');
        } else $error_message = 'Login Failed';
    }
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
 <title>Krentzackary Motor Parts</title>
</head>
<body class="login-body">
    <?php
        if(!empty($error_message)) { ?>
            <div class="overlay"></div>
             <div class="popup">
              <div class="popup__header error">
               <div class="popup__container">
                <div class="popup__wrapper">
                 <h4><?= $error_message ?></h4>
 
                 <div class="popup__header-exit">
                  <span></span>
                  <span></span>
                 </div>
                </div>
               </div>
              </div>
     
              <div class="popup__body">
               <div class="popup__container">
                <p>Login failed, wrong username or password.</p>
               </div>
              </div>
             </div>
    <?php } ?>

 <div class="banner">
  <div class="container">
   <img src="../assets/images/logo-login.png" alt="Krentzackary Motor Parts & Accesories">

   <div class="banner__login">
    <!-- <form class="banner__login__form" action="login.php" method="GET"> -->
    <form class="banner__login__form" action="login.php" method="POST">
     <div class="banner__login__user">
      <div>
       <i class="fa-solid fa-user fa-2xl"></i>
       <h3>User Name</h3>
      </div>

      <input name="username" type="text">
     </div>

     <div class="banner__login__password">
      <div>
       <i class="fa-solid fa-key fa-2xl"></i>
       <h3>Password</h3>
      </div>

      <input name="password" type="password">
     </div>

     <button>Login</button>
     <!-- <a href="../php/dashboard.php" class="button login-button">Login</a> -->
    </form>
   </div>
  </div>
 </div>

 <footer class="login-footer">
  <div class="container">
   <h4>Krentzackary Motor Parts and Accesories©</h4>

   <h4>2023</h4>
  </div>
 </footer>
</body>
<script src="../js/popup-script.js?newversion"></script>
</html>