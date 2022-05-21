<?php
    include("inc/db.php");

    if(isset($_GET['view']))
    {
        $pet_center_id = $_GET['view'];
        $view = $con->prepare("SELECT * FROM pet_center_tbl WHERE pet_center_id = '$pet_center_id'");
        $view->setFetchMode(PDO:: FETCH_ASSOC);
        $view->execute();

        $row = $view->fetch();

        echo
        "<form method = 'POST' enctype = 'multipart/form-data'>
            Pet Center Name: <p>".$row['pet_center_name']."</p>
            Contact Number: <p>".$row['contact_number']."</p>
            Email: <p>".$row['email']."</p>
            Business Permit: <img class = 'bimg' src = '../uploads/business_permits/".$row['business_permit']."' style = 'height:50px;width:50px;'/>
           <button name = 'confirm' value = ".$pet_center_id.">Confirm Application</button>
        </form>";

        if(isset($_POST['confirm']))
        {
            $pet_center_id = $_POST['confirm'];

            $sql2 = $con->prepare("SELECT * FROM pet_center_tbl WHERE pet_center_id = '$pet_center_id'");
            $sql2->setFetchMode(PDO:: FETCH_ASSOC);
            $sql2->execute();
            
            $v_key = generateRandomString();

            $row = $sql2->fetch();
            
            if($row['verified'] == 1)
            {
                echo "<script>alert('This account has been confirmed!');</script>";
                echo "<script>window.open('petcenterApplication.php' ,'_self');</script>";
            }
            else
            {
                $receiver = $row['email'];
                $subject = "Account Confirmation!";
                $body = "Your account has been confirmed, please use this OTP Code: $v_key to validate your account!";
                $sender = "ianjohn0101@gmail.com";

                $sql = $con->prepare("UPDATE pet_center_tbl SET v_key = '$v_key' WHERE pet_center_id = '$pet_center_id'");
                $sql->setFetchMode(PDO:: FETCH_ASSOC);
                $sql->execute();
                
                if(!$sql->execute())
                {
                    return;
                }

                mail($receiver, $subject, $body, $sender);
                echo "<script>alert('Confirmed!');</script>";
                echo "<script>window.open('petcenterApplication.php' ,'_self');</script>";
                
            }
        }
    }

    function generateRandomString($length = 8) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
?>