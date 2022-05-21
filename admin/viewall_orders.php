


<!DOCTYPE html>
<html>
    <head>
        <title>Admin Panel</title>
        <link rel = "stylesheet" href="css/style.css" />
        <link rel = "stylesheet" href="css/viewOrders.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fredoka&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300;400&family=Nunito:wght@200&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&family=Rubik:wght@500&family=Varela+Round&display=swap" rel="stylesheet">
    </head>
    <style>
        .noorders{
            width: 70%;
            margin-left: 15%;
            margin-top: 20vh;
            text-align: center;
            font-size: 20px;
            font-family: "Varela Round", sans-serif;
            color: white;
}
.imgw{
    height: 25px;
    width: 25px;
}
    </style>
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
        <li><a href = "/Pet/admin/products.php"><img src="../uploads/sales4.svg" class="navicons">Products</a></li>
        <li><a href = "/Pet/admin/add_products.php"><img src="../uploads/box.svg" class="navicons">Add Product</a></li>
        <li><a href = "/Pet/admin/deliveries.php"><img src="../uploads/deliver.svg" class="navicons">Deliveries(<?php echo count_deliveries();?>)</a></li>
        <li class = 'selection' ><a href = "/Pet/admin/viewall_orders.php"><img src="../uploads/deliver.svg" class="navicons">Orders(<?php echo count_orders();?>)</a></li>
       
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
<?php

include("inc/db.php");
$viewall_ords = $con->prepare("SELECT * FROM orders_tbl");
$viewall_ords->setFetchMode(PDO:: FETCH_ASSOC);
$viewall_ords->execute();

$row = $viewall_ords->fetch();

if($row == 0)
{
    echo "
    <div class = 'noorders'>
    <p><img class = 'imgw' src = '../uploads/warn2.png'> NO ORDERS</p>
    </div>";
}
else
{

?>
<p class ='hed'>All Orders</p>

<div class = "body">
    
   
    <div>
        <div class = 'hedGrid'>
    
            <p class = 'lebsH'>Order ID </p>
            <p class = 'lebsH'>User</p>
            <p class = 'lebsH'>Items</p>
            <p class = 'lebsH'>Order Placed</p>
            <p class = 'lebsH'>Total Amount</p>
            <p class = 'lebsH'>Delivery Date</p>
            <p class = 'lebsH'>Action</p>
        </div>

            <?php
                echo viewall_orders();
            ?>
       
 
    </form>
</div>
                </div>
                </div>
                
            <?php
                include ("inc/footer.php"); 
            
        ?>
    </body>
  



    <script>
        var month = ["January", "February", "March", "April", "May", "June","July", "August", "September", "October", "November", "December"];
        var today = new Date();
        var date = today.getFullYear()+'-'+month[(today.getMonth())]+'-'+today.getDate();
        var date2 = month[(today.getMonth())]+' '+today.getDate()+' '+today.getFullYear();
        document.getElementById("currentDate").innerHTML = date2;
    </script>
</html>
<?php } ?>










