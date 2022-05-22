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
        <li><a href = "/Pet/admin/products.php"><img src="../uploads/sales4.svg" class="navicons">Sales Inventory</a></li>
        <li><a href = "/Pet/admin/add_products.php"><img src="../uploads/box.svg" class="navicons">Add Product</a></li>
        <li><a href = "/Pet/admin/deliveries.php"><img src="../uploads/deliver.svg" class="navicons">Deliveries(<?php echo count_deliveries();?>)</a></li>
        <li  class = 'selection'><a href = "/Pet/admin/viewall_orders.php"><img src="../uploads/deliver.svg" class="navicons">Orders(<?php echo count_orders();?>)</a></li>
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
    <p class = 'hed'>Cutomer's Information</p>
<div class = 'body'>
<?php

include("inc/db.php");
if(isset($_GET['user']))
{
    $user_id = $_GET['user'];
    $sql = $con->prepare("SELECT * FROM users_table WHERE user_id = '$user_id'");
    $sql->setFetchMode(PDO:: FETCH_ASSOC);
    $sql->execute();

    $row = $sql->fetch();

    echo
    "
    <div class = 'mainConts'>
    <div class = 'contsImages'>
  <img src = '../uploads/user_profile/".$row['user_profilephoto']."'/>
    </div>
    <div class = 'right'>
    <div class = 'conts'>
    <p class = 'lebs'>Name</p><p class = 'data'>".$row['user_username']."</p>
    </div>
    <br>
    <div class = 'conts'>
    <p class = 'lebs'>Location</p><p class = 'data'> ".$row['user_address']."</p>
    </div>
    <br>
    <div class = 'conts'>
    <p class = 'lebs'>Email</p><p class = 'data'>".$row['user_email']."</p>
    </div>
    <br>
    <div class = 'conts'>
    <p class = 'lebs'>Contact Number</p><p class = 'data'> ".$row['user_contactnumber']."</p>
    </div>
    </div>
    </div>
    ";
}
?>
</body>
                </div>
                </div>
                
            <?php
                include ("inc/footer.php"); 
            
        ?>

</body>
<style>
    .mainConts{
        display: grid;
        grid-template-columns: 50% 50%;
    }
    .body{
        margin-top: 7vh;
  margin-bottom: 3vh;
  background: #fff;
  width: 80%;
  border-radius: 5px;
  padding: 10px;
  margin-left: 20px;
  box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 6px -1px,
    rgba(0, 0, 0, 0.06) 0px 2px 4px -1px;
    }
    .conts{
        border: .5px solid #999;
        width: 90%;
        padding: 10px;
        border-radius: 4px;
    }
    .contsImages{
        width: 90%;
        margin-left: 5%;
    }
    .data{
        font-family: "Varela Round", sans-serif;
        padding: 5px;
        font-size: 16px;
        font-weight: bold;
        color: #777;
    }
    .lebs{
        font-family: "Varela Round", sans-serif;
        font-size: 12px;
        color: #777;
        margin-bottom: 5px;
    }
    .hed{
        font-size: 22px;
        font-weight: bold;
        color: white;
        padding: 10px;
    }
     .right{
         margin-top: 2vh;
     }
</style>
</html>