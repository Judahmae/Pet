<!DOCTYPE html>
<html>
    <head>
        <title>Admin Panel</title>
        <link rel = "stylesheet" href="css/style.css" />
        <link rel = "stylesheet" href="css/sales.css" />
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
        <li><a href = "/Pet/admin/products.php"><img src="../uploads/sales4.svg" class="navicons">Products</a></li>
        <li><a href = "/Pet/admin/add_products.php"><img src="../uploads/box.svg" class="navicons">Add Product</a></li>
        <li><a href = "/Pet/admin/deliveries.php"><img src="../uploads/deliver.svg" class="navicons">Deliveries(<?php echo count_deliveries();?>)</a></li>
        <li><a href = "/Pet/admin/viewall_orders.php"><img src="../uploads/deliver.svg" class="navicons">Orders(<?php echo count_orders();?>)</a></li>
        <li><a href= "/Pet/admin/users.php"><img src="../uploads/user.svg" class="navicons">Users</a></li> 
        <li class = 'selection' ><a href= "/Pet/admin/sales.php"><img src="../uploads/deliver.svg" class="navicons">Sales Inventory</a></li>
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
<p class = 'hed'>Transaction History</p>
<br><br><br>
<div class = 'btnssss'>
<form method = 'GET' action = 'date_sales.php' enctpye = 'multipart/form-data'>
<div class = 'unity'>
    <input class = 'searchBar' type = 'date'  name = 'date' />
    <input class = 'searchBar' type = 'date' name = 'todate' />
    <button class = 'btnS' name = 'get_date'>Search date</button>
</div>
</form>
<div class="buttons">
<button id = "btnExport" value = "PRINT"><img class ='printPic' src = '../uploads/print.png'> PRINT</button>
<button id = "csv"><img class ='printPic' src = '../uploads/excel.png'>EXPORT TO EXCEL</button>
    <button id = "pdf"><img class ='printPic' src = '../uploads/pdf.png'>EXPORT TO PDF</button>
    
</div>
</div>
    <br>
<div class = "body">

    <form method = "POST" enctype = "multipart/form-data">
    
      <table id = "table" class = "table">
            <thead>
                <tr>
                    <th  style = "background-color:black;color:white;border-top-left-radius:5px;border-bottom-left-radius:5px;">Transaction ID</th>
                    <th  style = "background-color:black;color:white">Items</th>
                    <th  style = "background-color:black;color:white;">Customer</th>
                    <th  style = "background-color:black;color:white;">Date Delivered</th>
                    <th  style = "background-color:black;color:white;border-top-right-radius:5px;border-bottom-right-radius:5px;">Total Amount</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <?php
    $date = $_GET['date'];
    $todate = $_GET['todate'];
    $sql = $con->prepare("SELECT * FROM delivered_items WHERE date_delivered BETWEEN '$date' AND '$todate'");
    $sql->setFetchMode(PDO:: FETCH_ASSOC);
    $sql->execute();

    $row = $sql->rowCount();
    $total_amount = 0;
    if($row>0)
    {
        while($rows = $sql->fetch()):
            $total_amount+=$rows['total_amount'];
            echo
        "<tr>
            <td>".$rows['delivery_id']."</td>
            <td>".$rows['items']."</td>
            <td>".$rows['user_username']."</td>
            <td>".$rows['date_delivered']."</td>
            <td>".$rows['total_amount']."</td>
        </tr>";

       
        endwhile;
        echo 
        "<td>
            <p>Amount Collected: P".$total_amount."</p>
        </td>";
    
    }
    else
    {
        echo "NO RECORD FOUND!";
    }
    
?>
                </tr>
            </tbody>
      </table>

    </form>
</div>

    
</div>
           </div>
    </body>
  
    <script>
        var month = ["January", "February", "March", "April", "May", "June","July", "August", "September", "October", "November", "December"];
        var today = new Date();
        var date = today.getFullYear()+'-'+month[(today.getMonth())]+'-'+today.getDate();
        var date2 = month[(today.getMonth())]+' '+today.getDate()+' '+today.getFullYear();
        document.getElementById("currentDate").innerHTML = date2;
    </script>
    <script src="src/jquery.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="src/jquery-3.3.1.slim.min.js"></script>
    <script type="text/javascript" src="src/jspdf.min.js"></script>
    <script type="text/javascript" src="src/jspdf.plugin.autotable.min.js"></script>
    <script type="text/javascript" src="src/tableHTMLExport.js"></script>
  
    <script>
        $("body").on("click", "#btnExport", function(){
            var printme = document.getElementById('table');
            var wme = window.open("","","width=900,height=700");
            wme.document.write(printme.outerHTML);
            wme.document.close();
            wwe.focus();
            wwe.print();
            wme.close();
        })
    </script>

    <script>
        $("#pdf").on("click", function(){
            $("#table").tableHTMLExport({
                type: 'pdf',
                filename: 'report.pdf'
            });
        });

        $("#csv").on("click", function(){
            $("#table").tableHTMLExport({
                type: 'csv',
                filename: 'report.csv'
            });
        });
    </script>
    
</html>




