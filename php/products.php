<?php
    // Start the session
    session_start();
    
    // If session user is not set i.e. no user is logged in then
    // Go to Login page. This stops access to the rest of the
    // site if the user is not logged in
    if (!isset($_SESSION['user'])) header('Location: login.php');

    $_SESSION['table'] = 'product';

    if ($_POST) {
        include("../database/connection.php");

        $product_name = $_POST["product_name"];
        $category = $_POST['category'];
        $description = $_POST['description'];
        $attribute = $_POST['attribute'];
        $amount = $_POST['amount'];
        $location = $_POST['location'];

        if (!isset($product_name) || trim($product_name) == '' || !isset($category) || !isset($description) || !isset($attribute) || !isset($amount) || !isset($location)) {
            echo "Banna eggs with cheese";
        } else header('Location: ../database/add-products.php?product_name='.$product_name.'&category='.$category.'&description='.$description.'&attribute='.$attribute.'&amount='.$amount.'&location='.$location);

    }

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
 <title>Products - Krentzackary Motor Parts</title>
</head>
<body class="navbody">
 <!-- <div class="overlay"></div> -->
 <!-- <div class="popup" id="add-error">
  <div class="popup__header error>">
   <div class="popup__container">
    <div class="popup__wrapper">
     <h4>Product Addition Error</h4>

     <div class="popup__header-exit">
      <span></span>
      <span></span>
     </div>
    </div>
   </div>
  </div>

  <div class="popup__body">
   <div class="popup__container">
    <p>Product not added, have you filled all inputs?</p>
   </div>
  </div>
 </div> -->

 <?php 
     if(isset($_SESSION['response'])) { 
         $response_message = $_SESSION['response']['message'];
         $response_success = $_SESSION['response']['success'];
 ?>
 <div class="overlay <?= $response_success ? 'open' : ''?>"></div>
 <div class="popup <?= $response_success ? 'open' : ''?>">
  <div class="popup__header <?= $response_success ? 'success' : 'error'?>">
   <div class="popup__container">
    <div class="popup__wrapper">
     <h4>Product Added Successfully</h4>

     <div class="popup__header-exit">
      <span></span>
      <span></span>
     </div>
    </div>
   </div>
  </div>

  <div class="popup__body">
   <div class="popup__container">
    <p><?= $response_message ?></p>
   </div>
  </div>
 </div>
 <?php unset($_SESSION['response']); } ?>
 <div class="popup-edit-product">
  <div class="popup__header normal">
   <div class="popup__container">
    <div class="popup__wrapper">
     <h4>Edit Product</h4>

     <div class="popup__header-exit normal">
      <span></span>
      <span></span>
     </div>
    </div>
   </div>
  </div>
   
  <div class="popup__body">
   <div class="popup__container edit-user-group">
    <div class="popup__body__group">
     <div class="popup__body__edit">
      <div class="popup__body__edit__title">
       <p>Product Name</p>
      </div>
 
      <input type="text" class="input__popup">
     </div>
 
     <div class="popup__body__edit">
      <div class="popup__body__edit__title">
       <p>Categories</p>
      </div>
 
      <input type="text" class="input__popup">
     </div>
    </div>

    <div class="popup__body__group">
     <div class="popup__body__edit">
      <div class="popup__body__edit__title">
       <p>Description</p>
      </div>
 
      <textarea class="textarea-popup" cols="116.5" rows="7"></textarea>
     </div>
    </div>

    <div class="popup__body__group">
     <div class="popup__body__edit">
      <div class="popup__body__edit__title">
       <p>Attributes</p>
      </div>
 
      <textarea class="textarea-popup" cols="116.5" rows="7"></textarea>
     </div>
    </div>

    <div class="popup__body__group">
     <div class="popup__body__edit">
      <div class="popup__body__edit__title">
       <p>Amount</p>
      </div>
 
      <input type="text" class="input__popup">
     </div>
 
     <div class="popup__body__edit">
      <div class="popup__body__edit__title">
       <p>Location</p>
      </div>
 
      <input type="text" class="input__popup">
     </div>
    </div>

    <div class="push-to-right">
     <div class="confirmation-buttons">
      <a href="" class="cancel">Cancel</a>
      <a href="" class="confirm">Confirm</a>
     </div>
    </div>
   </div>
  </div>
 </div>

 <!-- <div class="popup">
  <div class="popup__header success">
   <div class="popup__container">
    <div class="popup__wrapper">
     <h4>Product deleted</h4>

     <div class="popup__header-exit">
      <span></span>
      <span></span>
     </div>
    </div>
   </div>
  </div>

  <div class="popup__body">
   <div class="popup__container">
    <p>Product deleted successfully!</p>
   </div>
  </div>
 </div>-->

 <div class="popup-delete-product">
  <div class="popup__header normal">
   <div class="popup__container">
    <div class="popup__wrapper">
     <h4>Delete Product</h4>

     <div class="popup__header-exit normal">
      <span></span>
      <span></span>
     </div>
    </div>
   </div>
  </div>

  <div class="popup-delete-product__body">
   <div class="popup__container">
    <p>Are you sure you want to delete this product?</p>

    <div class="push-to-right">
     <div class="confirmation-buttons">
      <a href="" class="cancel">No</a>
      <a href="" class="confirm">Yes</a>
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

  <h1>Products</h1>

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
    <!-- <img src="../assets/images/user-image-navbar.png" alt="user-image-navbar" class="orayt"> -->
   </div>

   <div class="userinfo__right">
    <p>Jane Doe</p>
    <p>ID: 1</p>
   </div>
  </div>

  <ul class="sidebar__links">
   <li><a href="../html/dashboard.html" class="button"><i class="fa-solid fa-dashboard fa-xl"></i> Dashboard</a></li>
   <li><a href="../html/products.html" class="button"><i class="fa-solid fa-tags fa-xl"></i> Products</a></li>
   <li><a href="../html/user.html" class="button"><i class="fa-solid fa-user fa-xl"></i> User</a></li>
  </ul>

  <div class="sidebar__footer">
   <h4 class="companyname">Krentzackary Motor©</h4>
   <h4 class="year">2023</h4>
  </div>
 </nav>

 <div class="sections">
  <div class="tab-box">
   <button class="tab-btn prod-btn"><i class="fa-solid fa-eye fa-xl"></i>View Products</button>
   <button class="tab-btn add-prod-btn"><img src="../assets/icons/add-prod.svg" class="prod-btn-icon">Product</button>
  </div>

  <div class="content-box">
   <div class="content">
    <div class="table-wrapper active">
     <table class="products-table">
      <tr>
       <th class="top-left">ID #</th>
       <th>Product Name</th>
       <th>Description</th>
       <th>Categories</th>
       <th>Attributes</th>
       <th>Amount</th>
       <th>Location</th>
       <th>Action</th> 
      </tr>
 
      <tr>
       <td>1</td>
       <td>Seat Cover</td>
       <td>Retero Style Seat Cover</td>
       <td>Seat Cover</td>
       <td>Material: PU Leather</td>
       <td>23</td>
       <td>Lalig Branch</td>
       <td class="action-btns"><span class="edit-btn"><img src="../assets/icons/edit.svg" class="edit-icon"> Edit</span> or <span class="dl-btn"><img src="../assets/icons/delete.svg" class="dl-icon"> Delete</span></td>
      </tr>
      
      <tr>
       <td>1</td>
       <td>Seat Cover</td>
       <td>Retero Style Seat Cover</td>
       <td>Seat Cover</td>
       <td>Material: PU Leather</td>
       <td>23</td>
       <td><span class="test">Lalig Branch</span></td>
       <td class="action-btns"><span class="edit-btn"><img src="../assets/icons/edit.svg" class="edit-icon"> Edit</span> or <span class="dl-btn"><img src="../assets/icons/delete.svg" class="dl-icon"> Delete</span></td>
      </tr>

      <tr>
       <td>1</td>
       <td>Seat Cover</td>
       <td>Retero Style Seat Cover</td>
       <td>Seat Cover</td>
       <td>Material: PU Leather</td>
       <td>23</td>
       <td>Lalig Branch</td>
       <td class="action-btns"><span class="edit-btn"><img src="../assets/icons/edit.svg" class="edit-icon"> Edit</span> or <span class="dl-btn"><img src="../assets/icons/delete.svg" class="dl-icon"> Delete</span></td>
      </tr>

      <tr>
       <td>1</td>
       <td>Seat Cover</td>
       <td>Retero Style Seat Cover</td>
       <td>Seat Cover</td>
       <td>Material: PU Leather</td>
       <td>23</td>
       <td>Lalig Branch</td>
       <td class="action-btns"><span class="edit-btn"><img src="../assets/icons/edit.svg" class="edit-icon"> Edit</span> or <span class="dl-btn"><img src="../assets/icons/delete.svg" class="dl-icon"> Delete</span></td>
      </tr>

      <tr>
       <td>1</td>
       <td>Seat Cover</td>
       <td>Retero Style Seat Cover</td>
       <td>Seat Cover</td>
       <td>Material: PU Leather</td>
       <td>23</td>
       <td>Lalig Branch</td>
       <td class="action-btns"><span class="edit-btn"><img src="../assets/icons/edit.svg" class="edit-icon"> Edit</span> or <span class="dl-btn"><img src="../assets/icons/delete.svg" class="dl-icon"> Delete</span></td>
      </tr>

      <tr>
       <td>1</td>
       <td>Seat Cover</td>
       <td>Retero Style Seat Cover</td>
       <td>Seat Cover</td>
       <td>Material: PU Leather</td>
       <td>23</td>
       <td>Lalig Branch</td>
       <td class="action-btns"><span class="edit-btn"><img src="../assets/icons/edit.svg" class="edit-icon"> Edit</span> or <span class="dl-btn"><img src="../assets/icons/delete.svg" class="dl-icon"> Delete</span></td>
      </tr>

      <tr>
       <td>1</td>
       <td>Seat Cover</td>
       <td>Retero Style Seat Cover</td>
       <td>Seat Cover</td>
       <td>Material: PU Leather</td>
       <td>23</td>
       <td>Lalig Branch</td>
       <td class="action-btns"><span class="edit-btn"><img src="../assets/icons/edit.svg" class="edit-icon"> Edit</span> or <span class="dl-btn"><img src="../assets/icons/delete.svg" class="dl-icon"> Delete</span></td>
      </tr>
 
      <tr>
       <td>1</td>
       <td>Seat Cover</td>
       <td>Retero Style Seat Cover</td>
       <td>Seat Cover</td>
       <td>Material: PU Leather</td>
       <td>23</td>
       <td>Lalig Branch</td>
       <td class="action-btns"><span class="edit-btn"><img src="../assets/icons/edit.svg" class="edit-icon"> Edit</span> or <span class="dl-btn"><img src="../assets/icons/delete.svg" class="dl-icon"> Delete</span></td>
      </tr>

      <tr>
       <td>1</td>
       <td>Seat Cover</td>
       <td>Retero Style Seat Cover</td>
       <td>Seat Cover</td>
       <td>Material: PU Leather</td>
       <td>23</td>
       <td>Lalig Branch</td>
       <td class="action-btns"><span class="edit-btn"><img src="../assets/icons/edit.svg" class="edit-icon"> Edit</span> or <span class="dl-btn"><img src="../assets/icons/delete.svg" class="dl-icon"> Delete</span></td>
      </tr>

      <tr>
       <td>1</td>
       <td>Seat Cover</td>
       <td>Retero Style Seat Cover</td>
       <td>Seat Cover</td>
       <td>Material: PU Leather</td>
       <td>23</td>
       <td>Lalig Branch</td>
       <td class="action-btns"><span class="edit-btn"><img src="../assets/icons/edit.svg" class="edit-icon"> Edit</span> or <span class="dl-btn"><img src="../assets/icons/delete.svg" class="dl-icon"> Delete</span></td>
      </tr>
     </table>
    </div>
   </div>

   <div class="content">
    <form action="products.php" method="POST" name="products-form-php">
     <div class="products-form inactive">
      <div class="form-group">
       <div class="form-body">
        <div class="form-title">
         <p>Product Name</p>
        </div>

        <input type="text" class="form-input" name="product_name">
       </div>

       <div class="form-body">
        <div class="form-title">
         <p>Categories</p>
        </div>

        <input type="text" class="form-input" name="category">
       </div>
      </div>

      <div class="form-body">
       <div class="form-title">
        <p>Description</p>
       </div>

       <textarea class="textarea-popup" cols="116.5" rows="7" name="description"></textarea>
      </div>

      <div class="form-body">
       <div class="form-title">
        <p>Attributes</p>
       </div>

       <textarea class="textarea-popup" cols="116.5" rows="7" name="attribute"></textarea>
      </div>

      <div class="form-group">
       <div class="form-body">
        <div class="form-title">
         <p>Amount</p>
        </div>

        <input type="text" class="form-input" name="amount">
       </div>

       <div class="form-body">
        <div class="form-title">
         <p>Location</p>
        </div>

        <input type="text" class="form-input" name="location">
       </div>
      </div>

      <!-- <input type="hidden" name="table" value="product"> -->

      <div class="push-to-right">
       <div class="confirmation-buttons">
        <button>Cancel</button>
   
        <button>Confirm</button>
       </div>
      </div>
     </div>
    </form>

   </div>
  </div>
 </div>
</body>
<script src="../js/nav-script.js"></script>
<script src="../js/products-script.js?1900"></script>
</html>