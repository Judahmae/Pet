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
                <li ><a href="ledger.php">Ledger</a></li>
            </ul>
        <li><a href = "/Pet/admin/products.php"><img src="../uploads/sales4.svg" class="navicons">Sales Inventory</a></li>
        <li><a href = "/Pet/admin/add_products.php"><img src="../uploads/box.svg" class="navicons">Add Product</a></li>
        <li><a href = "/Pet/admin/deliveries.php"><img src="../uploads/deliver.svg" class="navicons">Deliveries(<?php echo count_deliveries();?>)</a></li>
        <li><a href = "/Pet/admin/viewall_orders.php"><img src="../uploads/deliver.svg" class="navicons">Orders(<?php echo count_orders();?>)</a></li>
        <li><a href= "/Pet/admin/users.php"><img src="../uploads/user.svg" class="navicons">Users</a></li> 
        <li><a href= "/Pet/admin/sales.php"><img src="../uploads/deliver.svg" class="navicons">Generate Report</a></li>
        <li class = 'selection' ><a href= "/Pet/admin/petcenterApplication.php"><img src="../uploads/deliver.svg" class="navicons">Pet Center Application</a></li>
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

<p class = 'hed'>Pet Center Application</p>
<div class="ledger">
    <div class="body">
        
       <div>
       
        <div class = 'gridnasad'>
        <p class = 'headlebs'>Business Permit</p>
           <p class = 'headlebs'>Pet Center Name</p>
            <p class = 'headlebs'>Contact Number</p>
            <p class = 'headlebs'>Email</p>
           
            <div></div>
        </div>
        <tr>
            <?php
                echo registered_petcenters();
            ?>
        </tr>
       </div>
    </div>

</div>
              
                </div>
                </div>
                
            <?php
                include ("inc/footer.php"); 
            
        ?>
    </body>
    <style>
        .ledger{
        height: 100vh;
        width: 100%;
  
    }
    .btnV{
        height: 40px;
        font-size: 14px;
        background: #ffb830;
        border: none;
        outline: none;
        border-radius: 4px;
        width: 70%;
        padding-top: 10px;
        text-align: center;
        text-decoration: none;
        font-family:  "Varela Round", sans-serif;
    }
    .body{
        margin-top: 7vh;
        margin-left: 20px;
        background: #fff;
        width: 95%;
        border-radius: 5px;
        padding: 10px;
        box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.06) 0px 2px 4px -1px;
    }
    .asd{
        text-align: center;
        font-family: "Varela Round", sans-serif;
    }
    p{
        padding: 10px;
    }
    .bimg{
        width: 70%;
        margin-left: 15%;
    }
    .selection {
  background: #28287774;
}
.hed{
        font-size: 22px;
        font-weight: bold;
        color: white;
    }
    .gridnasad{
        display: grid;
        grid-template-columns:  10% 25% 15% 25% 10%;
        border-bottom: 1px solid #aaa;
    }
    .innerGrid{
        display: grid;
        grid-template-columns:  10% 25% 15% 25% 10%;
        margin-top: 1%;
    padding: 10px;
    background: #f4f4f4;
    border-radius: 4px;
    }
    .innerGrid:hover{
        background: #ebebeb;
        box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
    }
    .headlebs{
    font-family: "Varela Round", sans-serif;
    font-weight: bold;
    font-size: 16px;
    color: #777;
    text-align: center;
}
    #forming{
        display: grid;
        grid-template-columns:  12.5% 12.5% 12.5% 12.5% 12.5% 12.5% 12.5%;
        font-size: 14px;
        margin-top: 20px;
    }
    </style>
</html>