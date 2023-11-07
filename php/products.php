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
    <nav class="topbar">
        <div class="topbar__burgermenu">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
        </div>

        <h1>Products</h1>

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
            <li><a href="../html/dashboard.html" class="button"><i class="fa-solid fa-dashboard fa-xl"></i> Dashboard</a></li>
            <li><a href="../html/products.html" class="button"><i class="fa-solid fa-tags fa-xl"></i> Products</a></li>
            <li><a href="../html/user.html" class="button"><i class="fa-solid fa-user fa-xl"></i> User</a></li>
        </ul>

        <div class="sidebar__footer">
            <h4 class="companyname">Krentzackary Motor©</h4>
            <h4 class="year">2023</h4>
        </div>
    </nav>

    <section class="productSection">
            <div class="productsText">
                <div class="View">
                    <a href="#" class="ProductsButton"><i   class="fa-solid fa-eye fa-lg"></i>
                    <h3>View Product</h3></a>
                </div>
                <div class="Add">
                    <a href="#" class="ProductsButton"><i   class="fa-solid fa-tag fa-lg"></i>
                    <h3>Add Product</h3></a>
                </div>
            </div>
            <table class="ViewProductsTable">
                <tr class="Type">
                    <th class="IdBorder">ID #</th>
                    <th>Product Name</th>
                    <th>Description</th>
                    <th>Categories</th>
                    <th>Attributes</th>
                    <th>Amount</th>
                    <th>Location</th>
                    <th class="ActionBorder">Action</th> 
                </tr>
                <tr class="Entry">
                    <td>1</td>
                    <td>Seat Cover</td>
                    <td>Retero Style Seat Cover</td>
                    <td>Seat Cover</td>
                    <td>Material: PU Leather</td>
                    <td>23</td>
                    <td>Lalig Branch</td>
                    <td>Edit or Delete</td>
                </tr>
            </table>
            DITO SA BABA NG TABLE!
    </section>
</body>