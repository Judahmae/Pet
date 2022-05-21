<!DOCTYPE html>
<html>
    <head>
        <title>Admin Panel</title>
        <link rel = "stylesheet" href="css/style.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fredoka&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300;400&family=Nunito:wght@200&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&family=Rubik:wght@500&family=Varela+Round&display=swap" rel="stylesheet">
    </head>
    <body>
    <?php 
           
           include ("inc/db.php");
           include ("inc/function.php"); 
           include ("inc/header.php"); 
           include ("inc/navbar.php"); 
           ?>
           <div class="mainContainer">
                <div id = "bodyleft">
                <div class="leftBody">
      <ul class = 'mainUl'>
        <li class =  "donate"><a href = "index.php"><img src="../uploads/donation2.1.svg" class="navicons">Donations</a></li>
            <ul class="subList">
                <li><a href="coupons.php">Coupon Application</a></li>
                <li><a href="manage_partner.php">Manage Partners</a></li>
                <li><a href="ledger.php">Ledger</a></li>
            </ul>
        <li class = 'selection' ><a href = "/Pet/admin/products.php"><img src="../uploads/sales4.svg" class="navicons">Products</a></li>
        <li><a href = "/Pet/admin/add_products.php"><img src="../uploads/box.svg" class="navicons">Add Product</a></li>
        <li><a href = "/Pet/admin/deliveries.php"><img src="../uploads/deliver.svg" class="navicons">Deliveries(<?php echo count_deliveries();?>)</a></li>
        <li><a href = "/Pet/admin/viewall_orders.php"><img src="../uploads/deliver.svg" class="navicons">Orders(<?php echo count_orders();?>)</a></li>
        <li><a href= "/Pet/admin/viewall_coupons.php"><img src="../uploads/coupon.svg" class="navicons">Coupons</a></li> 
        <li><a href= "/Pet/admin/users.php"><img src="../uploads/user.svg" class="navicons">Users</a></li> 
        <li><a href= "/Pet/admin/sales.php"><img src="../uploads/deliver.svg" class="navicons">Sales Inventory</a></li>
        <li><a href= "/Pet/admin/petcenterApplication.php"><img src="../uploads/deliver.svg" class="navicons">Pet Center Application</a></li>
        </ul>
</div>
         <div div class="leftFooter">
          <div class="iconContainer">
            <img src="../uploads/settings.svg" class="footicons">
            <img src="../uploads/notification.svg" class="footicons">
        </div>
        </div>
                </div>
                <div id="bodyright">
                <p class = 'hed'>View All Products</p>
                <div class = "body">
    
    <form method = "POST" enctype = "multipart/form-data">
    <div class = 'tebs'>
        <div class = 'hedGrid'>
            <p class = 'textH'>PRODUCT NAME </p>
            <p class = 'textH'>PRICE</p>
            <p class = 'textH'>QUANTITY</p>
            <p class = 'textH'>Action</p>
        </div>
        <div>
            <?php
                echo view_prods();
            ?>
        </div>
        </div>
    </form>
</div>
                </div>
                <br>
    </body>
    <style>
 
    .selection {
        background: #28287774;
    }
    .hedGrid{
        display: grid;
        grid-template-columns: 45% 15% 15% 25%;
        text-align: center;
        font-weight: bold;
        border-bottom: 1px solid black;
    }
    .innerGrid{
        display: grid;
        grid-template-columns: 45% 15% 15% 25%;
        margin-top: 1%;
    padding: 10px;
    background: #f4f4f4;
    border-radius: 4px;
    }
    .p1{
        text-align: left;
        font-family: "Varela Round", sans-serif;
    }
    .p2{
        font-family: "Varela Round", sans-serif;
  text-align: center;
    }
    .textH{
        font-family: "Varela Round", sans-serif;
  font-weight: bold;
  font-size: 16px;
  color: #777;
  text-align: center;
    }
    .hed{
        font-size: 22px;
        font-weight: bold;
        color: white;
        padding: 10px;
    }
    .tebs{
        width: 100%;
    }
    .body{
        margin-top: 7vh;
        margin-bottom: 3vh;
        background: #fff;
        width: 95%;
        border-radius: 5px;
        padding: 10px;
        margin-left: 20px;
        box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.06) 0px 2px 4px -1px;

    }
    .imges{
        height: 50px;
    }
    p{
        padding: 10px;
    }
    .edith{
        height: 30px;
    color: #fff;
    border-radius: 3px;
    width: 100px;
    background: #5a5bf3;
    border: 1px solid  #5a5bf3;
    text-decoration: none;
    padding: 5px 15px 5px 15px;
    }
    .byew{
    height: 30px;
    color: #5a5bf3;
    border-radius: 3px;
    width: 100px;
    background: white;
    border: 1px solid #5a5bf3;
    text-decoration: none;
    padding: 5px 5px 5px 5px;
    }
</style>
<script>
        var month = ["January", "February", "March", "April", "May", "June","July", "August", "September", "October", "November", "December"];
        var today = new Date();
        var date = today.getFullYear()+'-'+month[(today.getMonth())]+'-'+today.getDate();
        var date2 = month[(today.getMonth())]+' '+today.getDate()+' '+today.getFullYear();
        document.getElementById("currentDate").innerHTML = date2;
    </script>
</html>

