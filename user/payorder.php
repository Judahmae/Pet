<?php
session_start();
include("inc/db.php");
$users_id = $_SESSION['user_id'];

$sql = $con->prepare("SELECT * FROM users_table WHERE user_id = '$users_id'");
$sql->setFetchMode(PDO:: FETCH_ASSOC);
$sql->execute();

$row_user = $sql->fetch();

$userID = $row_user['user_id'];

$display_cart = $con->prepare("SELECT * FROM product_tbl WHERE pro_id IN (".implode(',',$_SESSION['cart']).")");
$display_cart->setFetchMode(PDO:: FETCH_ASSOC);
$display_cart->execute();

$row = $display_cart->fetch();
$qty = array_count_values($_SESSION['cart'])[$row['pro_id']];

$sql = $con->query("SELECT MAX(order_id) FROM orders_tbl");
$sql->setFetchMode(PDO:: FETCH_ASSOC);

$row = $sql->fetch();
$order_id = rand(10000000, 99999999);
// if($row)
// {
//     $order_id = intval($row['MAX(order_id)']+1); 
// }

date_default_timezone_set('Singapore');
$date = date('m/d/Y h:i:s a', time());

if($row_user['municipality'] == "Mandaue City" || $row_user['municipality'] == "Cebu City" || $row_user['municipality'] == "Consolacion City" || $row_user['municipality'] == "Talisay City")
{
    foreach($_SESSION['cart'] as $prodID)
    { 
        $query = $con->prepare("INSERT INTO orders_tbl(order_id, user_id, pro_id, qty, order_date, delivery_status) VALUES($order_id, $userID, $prodID, $qty, '$date', 'PENDING')");
        try{
            if($query->execute())
            {
                header("Location: index.php");
                unset($_SESSION['cart']);
            
            }  
        }
        catch(PDOException $e)
        {
            die($e->getMessage());
        }
    }
}
else
{
    echo "<script>alert('Can't deliver outside cebu!');</script>";
    header("Location: cart.php");
}

?>