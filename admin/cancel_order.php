<?php
    include("inc/db.php");
    if(isset($_GET['order_id']))
    {
        $order_id = $_GET['order_id'];

        $view_order = $con->prepare("SELECT * FROM orders_tbl WHERE order_id = '$order_id'");
        $view_order->setFetchMode(PDO:: FETCH_ASSOC);
        $view_order->execute();

        $row = $view_order->fetch();

        $user_id = $row['user_id'];

        $view_user = $con->prepare("SELECT * FROM users_table WHERE user_id = '$user_id'");
        $view_user->setFetchMode(PDO:: FETCH_ASSOC);
        $view_user->execute();

        $row_user = $view_user->fetch();
        $receiver = $row_user['user_email'];
        $subject = "Order Cancelled";
        $body = "We are sorry for the inconvenience, but we can't process your order. ";
        $sender = "ianjohn0101@gmail.com";

        if(mail($receiver, $subject, $body, $sender))
        {
            $delete_order = $con->prepare("DELETE FROM orders_tbl WHERE order_id = '$order_id'");
            $delete_order->setFetchMode(PDO:: FETCH_ASSOC);
            $delete_order->execute();

            if($delete_order->execute())
            {
                echo "<script>alert('Item Cancelled Successfully');</script>";
                echo "<script>window.open('viewall_orders.php','_self');</script>";
            }
        }
        
    }
?>

