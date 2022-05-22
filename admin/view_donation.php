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
                <li class = 'selection' ><a href="coupons.php">Coupon Application</a></li>
                <li><a href="manage_partner.php">Manage Partners</a></li>
                <li><a href="ledger.php">Ledger</a></li>
            </ul>
        <li><a href = "/Pet/admin/products.php"><img src="../uploads/sales4.svg" class="navicons">Product Inventory</a></li>
        <li><a href = "/Pet/admin/add_products.php"><img src="../uploads/box.svg" class="navicons">Add Product</a></li>
        <li><a href = "/Pet/admin/viewall_products.php"><img src="../uploads/deliver.svg" class="navicons">Deliveries(<?php echo count_deliveries();?>)</a></li>
        <li><a href = "/Pet/admin/viewall_orders.php"><img src="../uploads/deliver.svg" class="navicons">Orders(<?php echo count_orders();?>)</a></li>
        <li><a href= "/Pet/admin/users.php"><img src="../uploads/user.svg" class="navicons">Users</a></li> 
        <li><a href= "/Pet/admin/sales.php"><img src="../uploads/deliver.svg" class="navicons">Generate Report</a></li>
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
<p class = 'hed'>Application for Coupons</p>

<div class = 'body'>
<?php echo view_detail(); ?>
</div>
                </div>
                </div>
                
            <?php
                include ("inc/footer.php"); 
            
        ?>
   
    </body>
    <style>
        p{
    padding: 10px;
}
.selection {
background: #28287774;
}
.hed{
    font-size: 22px;
    font-weight: bold;
    color: white;
}
#forming{
        font-size: 14px;
        margin-top: 20px;
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
.holdest{
    border-radius: 4px;
    margin-bottom: 10px;
    width: 90%;
    margin-left: 5%;
}
.imagesP{
    width: 90%;
    margin-left: 5%;
}
.imageDiv{
    margin-bottom: 20px;
}
#views2{
    padding: 10px;
    float: right;
    margin-right: 5%;
    font-family: "Varela Round", sans-serif;
    color: white;
    height: 40px;
    border: none;
    outline: none;
    background: #ffb830;
    border-radius: 4px;
    width: 30%;
}
#aksyon{
    margin-top: 2%;
    margin-bottom: 2%;
    height: 40px;
}
.lebss{
        font-family: "Varela Round", sans-serif;
        color: #777;
    }
    .dates{
        border: 1px solid #aaa;
        padding: 10px;
        border-radius: 4px;
        min-height: 30px;
    }
    </style>
</html>
