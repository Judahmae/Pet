<html>
    <head>
    <title>Pet Society</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel = "stylesheet" href="css/style.css" />
        <link rel = "stylesheet" href="css/checkout.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=Fredoka+One&family=Open+Sans:wght@500&family=Palette+Mosaic&family=Rubik:wght@500&family=Varela+Round&display=swap" rel="stylesheet">
    </head>
    <body>
    <?php 
            include ("inc/function.php");
            include ("inc/header.php"); 
            include ("inc/navbar.php"); 
        ?>
        <div class="mainDiv">

        <?php
    if(!isset($_SESSION['user_id']))
    {
        header("Location: login.php");
    }
    else
    {
        include("inc/db.php");
        $users_id = $_SESSION['user_id'];
        $fetch_user_username = $con->prepare("SELECT * FROM users_table WHERE user_id = '$users_id'");
        $fetch_user_username->setFetchMode(PDO:: FETCH_ASSOC);
        $fetch_user_username->execute();

        $display_cart = $con->prepare("SELECT * FROM product_tbl WHERE pro_id IN (".implode(',',$_SESSION['cart']).")");
        $display_cart->setFetchMode(PDO:: FETCH_ASSOC);
        $display_cart->execute();
    
        $row_user = $fetch_user_username->fetch();
        $net_total = 0;
        $mandaue_fee = 10;
        $cebu_fee = 12;
        $consolacion_fee = 12;
        $lapu_lapu_fee = 12;
            

        echo "<div class = checkoutTab>
        ";
        echo"</tr>
        <div class = 'info'>
            <div class = 'innerInfo'>
            <p id='confLine'>Please Check Your Personal Information</p>
            <br>
            <p class = 'laeb' ><img src= '../uploads/informate.png' id = 'locatePng'>Contact Details</p>
            <div id ='editinfo' style = 'margin-left:90%;'>
            <p><img src= '../uploads/pencil.png' id = 'locatePng'><a href = 'myProfile.php' style = 'text-decoration:none;color:#000;font-family: Verdana, Geneva, Tahoma, sans-serif;'>Edit Info</a></p>
        </div>
        <div id = 'locationDiv'>
        <div id = 'groupContainer'>
        <div class = 'group'>
            <p class = 'tag'>Contact Number: </p>
            <input type = 'text' class = 'inputed' name = 'user_contactnumber' value = ".$row_user['user_contactnumber']." disabled/>
        </div>
        <div class = 'group'>
            <p class = 'tag'>Email Address: </p>
            <td><input type = 'text' class = 'inputed' name = 'user_email' value = ".$row_user['user_email']." disabled/></td>
           </div>
        </div>
        </div>
        <tr>
        <div id = 'locationDiv'>
            <p><img src = '../uploads/icon.png' id = 'locatePng'>Location </p>
            <div id = 'groupContainer'>
            <div class = 'group'>
            <p class = 'tag'>Street </p>
            <input type = 'text' class = 'inputed' name = 'user_address' value = '".$row_user['user_address']."' disabled/>
            </div>
            <div class = 'group'>
            <p class = 'tag'>Brgy </p>
            <input type = 'text' class = 'inputed' name = 'user_address' value = '".$row_user['barangay']."' disabled/>
            </div>
            <div class = 'group'>
            <p class = 'tag'>Municipality </p>
            <input type = 'text' class = 'inputed' name = 'user_address' value = ".$row_user['municipality']." disabled/>
            </div>
            </div>
            </div>
        </tr>
        </div>
        </div>";
        echo "<div id = 'headist'><img src='../uploads/orderCheckout.png' id = 'ordPic'>Order Details</div><br>";
        echo " <div id = 'productDet'>
        <div id = 'innerproductDet'>
        <p>Product Details</p>
        <div id = 'groupContainer'>
        ";

       
        while($row = $display_cart->fetch()):
            $qty = array_count_values($_SESSION['cart'])[$row['pro_id']];
            $pro_price = $row['pro_price'];
            $sub_total = $qty * $pro_price; 
            
        echo 
        "<form method = 'POST'  enctype = 'multipart/form-data'>
        ";
                
             
                echo"
                <div class = 'trials'>
                    <div class = 'lefts'>
                    <input class = 'useless' style = 'display:none;' type = 'hidden' name = 'pro_id' value = ".$row['pro_id']." />
                    <p class = 'tag'>Product Name: <p/>
                    <input class = 'inputeder' type = 'text' name = 'pro_id' value = '".$row['pro_name']."' disabled/>
                    </div>
                    <div class = 'groups'>
                    <p class = 'tag'>Qty: </p>
                    <input class = 'inputeds' type = 'text' name = 'qty' value = ".array_count_values($_SESSION['cart'])[$row['pro_id']]." disabled/></td>
                    </div>
                </div>
                ";
                if($row_user['municipality'] == "Mandaue City")
                {  
                    $net_total = $net_total + $sub_total + 10;
                }
                elseif($row_user['municipality'] == "Cebu City")
                {
                    $net_total = $net_total + $sub_total + 12;
                }
                elseif($row_user['municipality'] == "Consolacion")
                {
                    $net_total = $net_total + $sub_total + 12;
                }
                elseif($row_user['municipality'] == "Lapu-Lapu City")
                {
                    $net_total = $net_total + $sub_total + 15;
                }
               
        endwhile;
                if($row_user['municipality'] == "Mandaue City")
                {  
                    echo 
                    "<div class = 'group'>
                    <p class = 'tag'>Delivery Fee:</p>
                    <input class = 'inputed' type= 'text' value= 'P10.00' disabled>
                    </div>";
                }
                elseif($row_user['municipality'] == "Cebu City")
                {
                    echo
                    "<div class = 'group'>
                    <p class = 'tag'>Delivery Fee:</p>
                    <input class = 'inputed' type= 'text' value= 'P12.00' disabled>
                    </div>";
                }
                elseif($row_user['municipality'] == "Consolacion")
                {
                    echo
                    "<div class = 'group'>
                    <p class = 'tag'>Delivery Fee:</p>
                    <input class = 'inputed' type= 'text' value= 'P12.00' disabled>
                    </div>";
                }
                elseif($row_user['municipality'] == "Lapu-Lapu City")
                {
                    echo
                    "<div class = 'group'>
                    <p class = 'tag'>Delivery Fee:</p>
                    <input class = 'inputed' type= 'text' value= 'P13.00' disabled>
                    </div>";
                }
                else
                {
                    echo
                    "<div class = 'group'>
                    <p class = 'tag'>Delivery Fee:</p>
                    <input class = 'inputed' type= 'text' value= 'P0.00' disabled>
                    </div>";
                }
                echo "</tr>
                <div class = 'group'>
                <p class = 'tag'>Total Amount:</p>";
                if($row_user['municipality'] == "Mandaue City")
                {
                    $net_total = $net_total-10;
                    echo  "
                    <input class = 'inputed' type = 'text' value = ' P".$net_total."' disabled/>";
                }
                if($row_user['municipality'] == "Cebu City")
                {
                    $net_total = $net_total-12;
                    echo  "
                    <input class = 'inputed' type = 'text' value = ' P".$net_total."' disabled/>";
                }
                if($row_user['municipality'] == "Consolacion")
                {
                    $net_total = $net_total-12;
                    echo  "
                    <input class = 'inputed' type = 'text' value = ' P".$net_total."' disabled/>";
                }
                if($row_user['municipality'] == "Lapu-Lapu City")
                {
                    $net_total = $net_total-17;
                    echo  "
                    <input class = 'inputed' type = 'text' value = ' P".$net_total."' disabled/>";
                }
                echo "</div>";
                echo"
            </div>
            </div>
            </div>
            <div class='btnSection'>
                <button class = 'place' name = 'confirm'><a id = 'placelink'href = 'payorder.php'> Confirm Order</a></button>
                <button class = 'cancelBtn'><a href = 'cart.php'> Cancel </a></button>
            </div>
            <br>
        </form>";
    }
    
?>


</div>
   
</body>

</html>