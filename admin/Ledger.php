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
                <li class = 'selection' ><a href="ledger.php">Ledger</a></li>
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
         <div div class="leftFooter">
          <div class="iconContainer">
            <img src="../uploads/settings.svg" class="footicons">
            <img src="../uploads/notification.svg" class="footicons">
        </div>
        </div>
</div>
<div id="bodyright">

<p class = 'hed'>Donation Records</p>
<div class="ledger">
<form method = 'GET' action = 'search_transaction_number.php' enctype = 'multipart/form-data'>
    <div class = 'searchs'>
    <p class = 'searchl'>Transaction:</p> <input class = 'okss' type = 'text' name = 'transaction_number' placeholder = 'Search Transaction Number..' />
           <button id = 'search_btn' name = 'search'>Search</button>
    </div> 
          
        </form>
    <div class="body">
        
       <div>
       
       
        <div class = 'gridnasad'>
           <p class = 'heads'>Transaction Number</p>

            <p  class = 'heads'>Full Name</p>

            <p  class = 'heads'>Selected Organization</p>

            <p  class = 'heads'>Contact Number</p>

            <p  class = 'heads'>Date Confirmed</p>

            <p  class = 'heads'>Coupon Code</p>
            <div></div>
        </div>
        <tr>
            <?php
                echo showledger();
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
    .searchl{
        color: white;
        font-family: "Varela Round", sans-serif;
    }
    .okss{
        padding: 10px;
        font-family: "Varela Round", sans-serif;
        width: 15%;
        border: none;
        border-radius: 2px;
        outline: none;
        font-size: 12px;
    }
    #search_btn{
        border: none;
  outline: none;
  padding: 11px;
  border-radius: 2px;
  background: #ffb830;
  margin-left: -8px;
    }
    .searchs{
        display: flex;
        margin-top: 5vh;
        margin-left: 5%;
    }
    .body{
        margin-top: 2vh;
        margin-left: 20px;
        background: #fff;
        width: 95%;
        border-radius: 5px;
        padding: 10px;
        box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.06) 0px 2px 4px -1px;
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
    .heads{
        font-family: "Varela Round", sans-serif;
    font-weight: bold;
    font-size: 16px;
    color: #777;
    text-align: center;
    }
    .gridnasad{
        display: grid;
        grid-template-columns:  15% 20% 20% 20% 10% 10%;
        text-align: center;
        font-weight: bold;
        border-bottom: 1px solid black;
    }
    #forming{
       
        font-size: 14px;
        margin-top: 20px;
    }
    .inner{
        display: grid;
        grid-template-columns: 15% 20% 20% 20% 10% 10%;
        margin-top: 1%;
    padding: 10px;
    background: #f4f4f4;
    border-radius: 4px;
    }
    .lebs{
        font-family: "Varela Round", sans-serif;
    font-size: 16px;
    color: #777;
    text-align: center;
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





