<?php
    // Start the session
    session_start();
    
    // If session user is not set i.e. no user is logged in then
    // Go to Login page. This stops access to the rest of the
    // site if the user is not logged in
    if (!isset($_SESSION['user'])) header('Location: login.php');

    $_SESSION['table'] = 'products';
    // $product = $_SESSION['product'];
    $products = include('../database/show-products.php');
    // var_dump($products);
    // Default error to empty so we can customize it
    $error_message = '';

    if ($_POST) {
        include("../database/connection.php");

        $product_name = $_POST["product_name"];
        $category = $_POST['category'];
        $description = $_POST['description'];
        $attribute = $_POST['attribute'];
        $amount_held = $_POST['amount_held'];
        $amount_sold = $_POST['amount_sold'];
        $location = $_POST['location'];

        if ($product_name == '' || $category == '' || $description == '' || $attribute == '' || $amount_held == '' || $amount_sold == '' || $location == '') {
            $error_message = 'Kamotecue';
        } else header('Location: ../database/add-products.php?product_name='.$product_name.'&category='.$category.'&description='.$description.'&attribute='.$attribute.'&amount_held='.$amount_held.'&amount_sold='.$amount_sold.'&location='.$location);
    } else ;

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
<!-- <script> -->
<!-- // function resetValues(){
//     document.getElementById('clearer').value = "";
// } -->
<!-- </script> -->
<body class="navbody">
 <div class="overlay"></div>
 <?php
    if(!empty($error_message)) { ?>
        <div class="overlay-spcl open"></div>
         <div class="popup open">
          <div class="popup__header error">
           <div class="popup__container">
            <div class="popup__wrapper">
             <h4><?= $error_message ?></h4>

             <div class="popup__header-exit-spcl">
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
         </div>
  <?php } ?>
  <div class="popup popup-edit-error">
   <div class="popup__header error">
    <div class="popup__container">
     <div class="popup__wrapper">
      <h4>Edit Error</h4>

      <div class="popup__header-exit">
       <span></span>
       <span></span>
      </div>
     </div>
    </div>
   </div>

   <div class="popup__body">
    <div class="popup__container">
     <p>Product not edited, have you filled all inputs?</p>
    </div>
   </div>
  </div>

 <?php 
     if(isset($_SESSION['response'])) { 
         $response_message = $_SESSION['response']['message'];
         $response_success = $_SESSION['response']['success'];
 ?>
 <div class="overlay-spcl <?= $response_success ? 'open' : ''?>"></div>
 <div class="popup <?= $response_success ? 'open' : ''?>">
  <div class="popup__header <?= $response_success ? 'success' : 'error'?>">
   <div class="popup__container">
    <div class="popup__wrapper">
     <h4>Product Added Successfully</h4>

     <div class="popup__header-exit-spcl">
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
 
      <input type="text" class="input__popup" id="prod-name-ed">
     </div>
 
     <div class="popup__body__edit">
      <div class="popup__body__edit__title">
       <p>Categories</p>
      </div>
 
      <input type="text" class="input__popup" id="prod-cat-ed">
     </div>
    </div>

    <div class="popup__body__edit">
     <div class="popup__body__edit__title">
      <p>Description</p>
     </div>

     <textarea class="textarea-popup" id="prod-desc-ed" cols="116.5" rows="7"></textarea>
    </div>

    <div class="popup__body__edit">
     <div class="popup__body__edit__title">
      <p>Attributes</p>
     </div>

     <textarea class="textarea-popup" id="prod-attr-ed" cols="116.5" rows="7"></textarea>
    </div>

    <div class="popup__body__group">
     <div class="popup__body__edit">
      <div class="popup__body__edit__title">
       <p>Amount Held</p>
      </div>
 
      <input type="text" class="input__popup" id="prod-amnt-held-ed">
     </div>

     <div class="popup__body__edit">
      <div class="popup__body__edit__title">
       <p>Amount Sold</p>
      </div>
 
      <input type="text" class="input__popup" id="prod-amnt-sold-ed">
     </div>
    </div>

    <div class="popup__body__group edit">
     <div class="popup__body__edit">
      <div class="popup__body__edit__title">
       <p>Location</p>
      </div>
 
      <input type="text" class="input__popup" id="prod-loc-ed">
     </div>

     <div class="confirmation-buttons">
      <button class="edit-no edit-clear">Clear</button>

      <button class="edit-yes">Edit</button>
     </div>
    </div>
   </div>
  </div>
 </div>

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
      <!-- <a href="" class="cancel">No</a>
      <a href="" class="confirm prod-dl">Yes</a> -->
      <button class="prod-dl-no edit-no">No</button>

      <button class="prod-dl edit-yes">Yes</button>
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

  <ul class="sidebar__links">
   <li><a href="../php/dashboard.php" class="button"><i class="fa-solid fa-dashboard fa-xl"></i> Dashboard</a></li>
   <li><a href="../php/products.php" class="button selected"><i class="fa-solid fa-tags fa-xl"></i> Products</a></li>
   <li><a href="../php/user.php" class="button"><i class="fa-solid fa-user fa-xl"></i> User</a></li>
  </ul>

  <div class="sidebar__footer">
   <h4 class="companyname">Krentzackary Motor©</h4>
   <h4 class="year">2023</h4>
  </div>
 </nav>

 <div class="sections table-section">
  <div class="tab-box">
   <button class="tab-btn prod-btn active"><i class="fa-solid fa-eye fa-xl"></i>View Products</button>
   <button class="tab-btn add-prod-btn inactive"><img src="../assets/icons/add-prod.svg" class="prod-btn-icon">Add Product</button>
  </div>

  <div class="content-box">
   <div class="content">
   <!-- <p class="product-count active"><?= count($products) ?> Product/s</p> -->
    <div class="table-wrapper active">
     <table class="products-table">
      <tr>
       <th class="top-left">ID #</th>
       <th>Product Name</th>
       <th>Description</th>
       <th>Categories</th>
       <th>Attributes</th>
       <th>Amount Held</th>
       <th>Amount Sold</th>
       <th>Location</th>
       <th>Created At</th>
       <th>Updated At</th>
       <th>Action</th> 
      </tr>
 
      <?php
        foreach($products as $index => $product) { ?>
            <tr>
             <!-- <td><?= $index + 1 ?></td> -->
             <td><?= $product['id'] ?></td>
             <td class="p-name"><?= $product['product_name'] ?></td>
             <td class="p-desc"><?= $product['description'] ?></td>
             <td class="p-cat"><?= $product['category'] ?></td>
             <td class="p-attr"><?= $product['attribute'] ?></td>
             <td class="p-amnt-held"><?= $product['amount_held'] ?></td>
             <td class="p-amnt-sold"><?= $product['amount_sold'] ?></td>
             <td class="p-loc"><?= $product['location'] ?></td>
             <td><?= date('F d @ h:i:s A', strtotime($product['created_at'])) ?></td>
             <td><?= date('F d @ h:i:s A', strtotime($product['updated_at'])) ?></td>
             <td class="action-btns"><span class="edit-btn" data-prodid="<?= $product['id'] ?>"><img src="../assets/icons/edit.svg" class="edit-icon"> Edit</span> or <span class="dl-btn" data-prodid="<?= $product['id'] ?>" data-pname="<?= $product['product_name']?>" data-cat="<?= $product['category']?>"><img src="../assets/icons/delete.svg" class="dl-icon"> Delete</span></td>
            </tr>
      <?php } ?>
     </table>
    </div>
   </div>

   <div class="content">
    <form action="products.php" method="POST" name="products-form-php" id="products-form-php">
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

       <textarea class="textarea-popup" cols="100" rows="7" name="description"></textarea>
      </div>

      <div class="form-body">
       <div class="form-title">
        <p>Attributes</p>
       </div>

       <textarea class="textarea-popup" cols="100" rows="7" name="attribute"></textarea>
      </div>

      <div class="form-group">
       <div class="form-body">
        <div class="form-title">
         <p>Amount Held</p>
        </div>

        <input type="text" class="form-input" name="amount_held">
       </div>

       <div class="form-body">
        <div class="form-title">
         <p>Amount Sold</p>
        </div>

        <input type="text" class="form-input" name="amount_sold">
       </div>
      </div>

      <div class="form-group bottom">
       <div class="form-body">
        <div class="form-title">
         <p>Location</p>
        </div>

        <input type="text" class="form-input" name="location" id="clearer">
       </div>
       
       <div class="form-body">
        <div class="confirmation-buttons">
         <button class="cancel-button" type="reset" value="Reset">Clear</button>
    
         <button class="confirm-button" name="add">Add</button>
        </div>
       </div>
      </div>

      <!-- <input type="hidden" name="table" value="product"> -->

      <!-- <div>

      </div> -->
     </div>
    </form>

   </div>
  </div>
 </div>
 <div class="popup__header-exit-spcl fix">
 <div class="confirmation-buttons fix">
  <a href="" class="cancel">No</a>
  <a href="" class="confirm prod-dl">Yes</a>
 </div>
</body>

<script src="../js/nav-script.js"></script>
<script src="../js/products-script.js?1917"></script>
<!-- <script src="../js/dl-product.js?2000"></script> -->
<script src="../js/jquery/jquery-3.7.1.min.js"></script>

<script>
    function script(){
        this.initialize = function(){
            this.registerEvents();
        },

        this.registerEvents = function(){
            document.addEventListener('click', function(e){
                targetElement = e.target;
                classList = targetElement.classList;

                if (classList.contains('dl-btn')){
                    const overlay = document.querySelector(".overlay");
                    const dlPopup = document.querySelector(".popup-delete-product"); 
                    prodId = targetElement.dataset.prodid;
                    
                    overlay.classList.toggle("open");
                    dlPopup.classList.toggle("open");

                    if (dlPopup.classList.contains("open")){
                        const confirm = document.querySelector(".prod-dl");
                        const negative = document.querySelector(".prod-dl-no")

                        confirm.addEventListener("click", ()=>{
                            $.ajax({
                                method: 'POST',
                                data: {
                                    prod_id: prodId
                                },
                                url: '../database/dl-product.php',
                                dataType: 'json',
                                success: function(data){
                                    if(data.success){
                                        location.reload();
                                        overlay.classList.toggle("open");
                                        dlPopup.classList.toggle("open");
                                    } else {
                                        overlay.classList.toggle("open");
                                        dlPopup.classList.toggle("open");
                                        window.alert(data.message);
                                    }
                                }
                            })
                        })

                        negative.addEventListener("click", ()=>{
                            overlay.classList.toggle("open");
                            dlPopup.classList.toggle("open");
                        })
                    }
                }

                if (classList.contains('edit-btn')){
                    const overlay = document.querySelector(".overlay");
                    const editPopup = document.querySelector(".popup-edit-product");
                    prodId = targetElement.dataset.prodid;

                    e.preventDefault();

                    overlay.classList.toggle("open");
                    editPopup.classList.toggle("open");

                    prodName = targetElement.closest('tr').querySelector('td.p-name').innerHTML;
                    prodDesc = targetElement.closest('tr').querySelector('td.p-desc').innerHTML;
                    prodCat = targetElement.closest('tr').querySelector('td.p-cat').innerHTML;
                    prodAttr = targetElement.closest('tr').querySelector('td.p-attr').innerHTML;
                    prodAmntHeld = targetElement.closest('tr').querySelector('td.p-amnt-held').innerHTML;
                    prodAmntSold = targetElement.closest('tr').querySelector('td.p-amnt-sold').innerHTML;
                    prodLoc = targetElement.closest('tr').querySelector('td.p-loc').innerHTML;

                    document.getElementById("prod-name-ed").value = prodName;
                    document.getElementById("prod-desc-ed").value = prodDesc;
                    document.getElementById("prod-cat-ed").value = prodCat;
                    document.getElementById("prod-attr-ed").value = prodAttr;
                    document.getElementById("prod-amnt-held-ed").value = prodAmntHeld;
                    document.getElementById("prod-amnt-sold-ed").value = prodAmntSold;
                    document.getElementById("prod-loc-ed").value = prodLoc;
                    
                    if (editPopup.classList.contains("open")){
                        const confirm = document.querySelector(".edit-yes");
                        const clear = document.querySelector(".edit-clear");

                        clear.addEventListener("click", ()=>{
                            document.getElementById("prod-name-ed").value = '';
                            document.getElementById("prod-desc-ed").value = '';
                            document.getElementById("prod-cat-ed").value = '';
                            document.getElementById("prod-attr-ed").value = '';
                            document.getElementById("prod-amnt-held-ed").value = '';
                            document.getElementById("prod-amnt-sold-ed").value = '';
                            document.getElementById("prod-loc-ed").value = '';
                        })

                        confirm.addEventListener("click", ()=>{
                            const popupEditError = document.querySelector(".popup-edit-error");
                            prodNameUp = document.getElementById("prod-name-ed").value;
                            prodDescUp = document.getElementById("prod-desc-ed").value;
                            prodCatUp = document.getElementById("prod-cat-ed").value;
                            prodAttrUp = document.getElementById("prod-attr-ed").value;
                            prodAmntHeldUp = document.getElementById("prod-amnt-held-ed").value;
                            prodAmntSoldUp = document.getElementById("prod-amnt-sold-ed").value;
                            prodLocUp = document.getElementById("prod-loc-ed").value;

                            if (prodNameUp == '' || prodDescUp == '' || prodCatUp == '' || prodAttrUp == '' || prodAmntHeldUp == '' || prodAmntSoldUp == '' || prodLocUp == '') {
                                if (overlay.classList.contains("open")) {
                                    overlay.style.zIndex = "4";
                                }

                                popupEditError.style.zIndex = "4";
                                popupEditError.classList.toggle("open");
                            } else {
                                $.ajax({
                                    method: 'POST',
                                    data: {
                                        prod_id: prodId,
                                        prod_name: prodNameUp,
                                        prod_desc: prodDescUp,
                                        prod_cat: prodCatUp,
                                        prod_attr: prodAttrUp,
                                        prod_amnt_held: prodAmntHeldUp,
                                        prod_amnt_sold: prodAmntSoldUp,
                                        prod_loc: prodLocUp
                                    },
                                    url: '../database/up-product.php',
                                    dataType: 'json',
                                    success: function(data){
                                        if(data.success){
                                            location.reload();
                                            overlay.classList.toggle("open");
                                            editPopup.classList.toggle("open");
                                        } else {
                                            overlay.classList.toggle("open");
                                            dlPopup.classList.toggle("open");
                                            window.alert(data.message);
                                        }
                                    }
                                })
                            }
                        })
                    }
                }
            });
        }
    }

    var script = new script;
    script.initialize();
</script>

<script src="../js/analytics.js"></script>
</html>