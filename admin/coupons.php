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
                <li class = 'selection'><a href="coupons.php">Coupon Application</a></li>
                <li><a href="manage_partner.php">Manage Partners</a></li>
                <li><a href="ledger.php">Ledger</a></li>
            </ul>
        <li><a href = "/Pet/admin/products.php"><img src="../uploads/sales4.svg" class="navicons">Sales Inventory</a></li>
        <li><a href = "/Pet/admin/add_products.php"><img src="../uploads/box.svg" class="navicons">Add Product</a></li>
        <li><a href = "/Pet/admin/deliveries.php"><img src="../uploads/deliver.svg" class="navicons">Deliveries(<?php echo count_deliveries();?>)</a></li>
        <li><a href = "/Pet/admin/viewall_orders.php"><img src="../uploads/deliver.svg" class="navicons">Orders(<?php echo count_orders();?>)</a></li>
        <li><a href= "/Pet/admin/users.php"><img src="../uploads/user.svg" class="navicons">Users</a></li> 
        <li><a href= "/Pet/admin/sales.php"><img src="../uploads/deliver.svg" class="navicons">Generate Report</a></li>
        <li><a href= "/Pet/admin/petcenterApplication.php"><img src="../uploads/deliver.svg" class="navicons">Pet Center Application</a></li>
        </ul>
</div>
         <div class="leftFooter">
          <div class="iconContainer">
            <img src="../uploads/settings.svg" class="footicons">
            <img src="../uploads/notification.svg" class="footicons">
        </div>
        </div>
</div>
<div id="bodyright">
<p class= 'hed'>Application for Coupons</p>
<div class="manage_donation">
    <div class="body">
       
       <div class = 'tebs'>
        <div class = 'yopak'>
            <p class = 'heaed'>Transaction Number</p>
               <p class = 'heaed'>Donors Name</p>
             <p class = 'heaed'>Selected Org</p>
               <p  class = 'heaed'>Back Acc. No.</p>
             <p class = 'heaed'>Amount</p>
              <p class = 'heaed'>Action</p>
        </div>
        <div>
            <?php
                echo viewall_donations();
            ?>
        </div>
       </div>
    </div>

</div>
</div>
           </div>
    </body>
    <style>
        .manage_donation{
        width: 100%;
        
  
    }
    .tebs{
        width: 100%;
    }
    .body{
        margin-top: 7vh;
        background: #fff;

        width: 95%;
        border-radius: 5px;
        padding: 10px;
        margin-left: 20px;
        box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.06) 0px 2px 4px -1px;

    }
    .imagePP{
        height: 100px;
    }
    .heaed{
        font-family: "Varela Round", sans-serif;
    font-weight: bold;
    font-size: 16px;
    color: #777;
    text-align: center;
    }
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
        display: grid;
        grid-template-columns:  25% 12% 15% 15% 12% 15%;
        font-size: 14px;
        margin-top: 20px;
    }
    .yopak{
        display: grid;
        grid-template-columns: 25% 12% 15% 15% 12% 15%;
        
        
    }
    #aksyon{
        display: flex;
        color: black;
    }
    .holdest{
        height: 42px;
    }
    #views{
        height: 30px;
  color: #777;
  font-weight: bold;
  border-radius: 3px;
  width: 100px;
  background: white;
  border: 1px solid #5a5bf3;
  margin-left: 5px;
    }
    #views2{
        height: 30px;
  color: #fff;
  border-radius: 3px;
  width: 100px;
  background: #5a5bf3;
  border: none;
    }
    #viewok{
        
  color: #fff;
  border-radius: 3px;
  width: 100px;
  
  border: 1px solid #5a5bf3;
  text-align: center;
  text-decoration: none;
  margin-left: 2px;
  padding-top: 5px;
  font-weight: bold;
  color: black;
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
