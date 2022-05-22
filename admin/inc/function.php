<?php
    session_start();

    function LogInAdmin()
    {
        include("inc/db.php");
        if(isset($_POST['login_admin']))
        {
            $admin_name = $_POST['admin_name'];
            $admin_password = $_POST['admin_password'];

            $fetchuser = $con->prepare("SELECT * FROM admintbl WHERE admin_name = '$admin_name' AND admin_password = '$admin_password'");
            $fetchuser->setFetchMode(PDO:: FETCH_ASSOC);
            $fetchuser->execute();
            $countUser = $fetchuser->rowCount();

            $row = $fetchuser->fetch();
            if($countUser>0)
            {
                $_SESSION['id'] = $row['id'];
                echo "<script>window.open('/Pet/admin/coupons.php?login_user=".$_SESSION['id']."','_self');</script>";
            }
            else
            {
                echo "<script>alert('Username or Password is incorrect!');</script>";
            }
        }
    }

    function AdminProfile()
    {
        include("inc/db.php");
        if(isset($_SESSION['id']))
        {
            $user_id = $_SESSION['id'];
            $fetch_user_username = $con->prepare("SELECT * FROM admintbl WHERE id = '$user_id'");
            $fetch_user_username->setFetchMode(PDO:: FETCH_ASSOC);
            $fetch_user_username->execute();
    
            $row = $fetch_user_username->fetch();
            $id = $row['id'];
    
            echo 
            "<form method = 'POST' enctype='multipart/form-data'>
                <table>
                    <tr>
                        <td>Username: </td>
                        <td><input type = 'text' name =  'admin_name' value = '".$row['admin_name']."' /></td>
                    </tr>
                    <tr>
                        <td>Password: </td>
                        <td><input type = 'password' name = 'admin_password' value = '".$row['admin_password']."' /></td>
                    </tr>
                    <tr>
                        <td>Email: </td>
                        <td><input type = 'email' name = 'admin_email' value = '".$row['admin_email']."' /></td>
                    </tr>
                </table>
                <button name = 'update_user'>Update Profile</button>
            </form>";
    
            if(isset($_POST['update_user']))
            {
                $admin_name = $_POST['admin_name'];
                $admin_password =  $_POST['admin_password'];
                $admin_email = $_POST['admin_email'];

                if(strlen($admin_password) >= 9 &&
                preg_match('/[A-Z]/', $admin_password) > 0 &&
                preg_match('/[a-z]/', $admin_password) > 0)
                {
                    echo "Password must at least 8 characters in length with at least 1 special character, 1 number!";
                }
                else
                {
                    $update_user = $con->prepare("UPDATE admintbl 
                    SET 
                        admin_name='$admin_name',
                        admin_password = '$admin_password',
                        admin_email = '$admin_email'
                    WHERE 
                        id = '$id'");
        
                    if($update_user->execute())
                    {
                        echo "<script>alert('Your Information Successfully Updated!');</script>";
                        echo "<script>window.open('/Pet/admin/index.php?login_user=".$_SESSION['id']."', '_self');</script>";
                    }
                }
            }
        }
    }   

    function add_partners()
    {
        include("inc/db.php");
        if(isset($_POST['add_org']))
        {
            $org_name = $_POST['org_name'];
            $org_location = $_POST['org_location'];
            $org_contact_number = $_POST['org_contact_number'];
            $org_email_address = $_POST['org_email_address'];
            $bank_details = $_POST['bank_details'];
            $website = $_POST['website'];
            $paymaya = $_POST['paymaya'];
            $org_manager = $_POST['org_manager'];
            $facebook = $_POST['facebook'];
            $description = $_POST['description'];
            
            $org_photo = $_FILES['org_photo']['name'];
            $org_photo_tmp = $_FILES['org_photo']['tmp_name'];

            move_uploaded_file($org_photo_tmp, "../uploads/orgs/$org_photo");

            $add_org = $con->prepare("INSERT INTO organizations(
                org_name,
                org_location,
                org_contact_number,
                org_email_address,
                org_photo,
                bank_details,
                website,
                paymaya,
                org_manager,
                facebook,
                org_details
            ) 
            VALUES(
                '$org_name',
                '$org_location',
                '$org_contact_number',
                '$org_email_address',
                '$org_photo',
                '$bank_details',
                '$website',
                '$paymaya',
                '$org_manager',
                '$facebook',
                '$description'
            )");
            if($add_org->execute())
            {
                echo "<script>alert('Added Successfully!');</script>";
                echo "<script>window.open('index.php?manage_partner', '_self');</script>";
            }
        }
    }

    function viewall_partners()
    {
        include("inc/db.php");
        $viewall_partners = $con->prepare("SELECT * FROM organizations");
        $viewall_partners->setFetchMode(PDO:: FETCH_ASSOC);
        $viewall_partners->execute();

        while($row = $viewall_partners->fetch()):
            
            echo 
            "<form method = 'POST' action = 'update_organizations.php' enctype = 'multipart/form-data' id = 'forming'>
                <div class = 'mainH'>
            <div class = 'holdest'>
            <p>".$row['org_name']."</p>
            </div>
            <div class = 'holdest'>
            <p>".$row['org_location']."</p>
            </div>
            <div class = 'holdest'>
            <p>".$row['org_contact_number']."</p>
            </div>
            <div class = 'holdest'>
            <p>".$row['org_email_address']."</p>
            </div>
            <div class = 'btnss'>
            <div class = 'holdest'>
            <button id='views2' name = 'edit_org' value = ".$row['id'].">Edit</button>
            </div>
            <div class = 'holdest'>
            <button  id='views' name = 'delete_org' value = ".$row['id'].">Delete</button>
            </div>
            </div>     
            </div>
                   
                    
                    
                   
        
            </form>";
        endwhile;
    }

    function add_cat() 
    {
        include("inc/db.php");
        if(isset($_POST['add_cat']))
        {
            $cat_name = $_POST['cat_name'];
            $add_cat = $con->prepare("insert into pet_prod(cat_name) values('$cat_name')");
            
            if($add_cat->execute())
            {
            echo "<script>alert('Category Added Successfully!');</script>"; 
            echo "<script>window.open('index.php?viewall_cat','_self');</script>";
            }
            else
            {
                echo "<script>alert('Category Not Added Successfully!');</script>";
            }
        }
    }
    
    function add_sub_cat()
    {
        include("inc/db.php");
        if(isset($_POST['add_sub_cat']))
        {
            $cat_id = $_POST['main_cat'];
            $sub_cat_name = $_POST['sub_cat_name'];
            $add_sub_cat = $con->prepare("insert into sub_cat
            (
                sub_cat_name, 
                cat_id
            ) 
            values
            (
                '$sub_cat_name', 
                '$cat_id'
            )");
            
            if($add_sub_cat->execute())
            {
               echo "<script>alert('Sub Category Added Successfully!');</script>"; 
            }
            else
            {
                echo "<script>alert('Sub Category Not Added Successfully!');</script>";
            }
        }
    }

    function add_product() 
    {
        include("inc/db.php");
        if(isset($_POST['add_prod']))
        {
            $pro_name = $_POST['pro_name'];
            $cat_id = $_POST['cat_name'];
            $pro_brand = $_POST['pro_brand'];

            $pro_img = $_FILES['pro_img']['name'];
            $pro_img_tmp = $_FILES['pro_img']['tmp_name'];

            $pro_img2 = $_FILES['pro_img2']['name'];
            $pro_img2_tmp = $_FILES['pro_img2']['tmp_name'];

            $pro_img3 = $_FILES['pro_img3']['name'];
            $pro_img3_tmp = $_FILES['pro_img3']['tmp_name'];

            $pro_price = $_POST['pro_price'];
            $pro_quantity = $_POST['pro_quantity'];
            $pro_keyword = $_POST['pro_keyword'];

            // var_dump($pro_name);
            // var_dump($cat_id);
            // var_dump($pro_brand);
            // var_dump($pro_img);
            // var_dump($pro_img2);
            // var_dump($pro_img3);
            // var_dump($pro_price);
            // var_dump($pro_quantity);
            // var_dump($pro_keyword);

            $add_prod = $con->prepare("INSERT INTO product_tbl 
            SET
            pro_name = '$pro_name',
            cat_id = $cat_id,
            pro_brand = '$pro_brand',
            pro_img = '$pro_img',
            pro_img2 = '$pro_img2',
            pro_img3 = '$pro_img3',
            pro_price = '$pro_price',
            pro_quantity = $pro_quantity,
            pro_keyword = '$pro_keyword'
            ");

            if($add_prod->execute())
            {
                echo "<script>alert('ADDED!');</script>";
            }
            else
            {
                echo "<script>alert('UNSUCCSESSFUL');</script>";
            }
        }
    }

    function viewall_cat()
    {   
        include("inc/db.php");
        $fetch_cat=$con->prepare("SELECT * from pet_prod");
        $fetch_cat->setFetchMode(PDO:: FETCH_ASSOC);
        $fetch_cat->execute();
                            
        while($row=$fetch_cat->fetch()):
            echo "<option value = '".$row['prod_id']."'>".$row['cat_name']."</option>";
        endwhile;
    }

    function viewall_category()
    {
        include("inc/db.php");
        $fetch_cat=$con->prepare("SELECT * from pet_prod ORDER BY cat_name");
        $fetch_cat->setFetchMode(PDO:: FETCH_ASSOC);
        $fetch_cat->execute();
        $i=1;

        while($row=$fetch_cat->fetch()):
            echo "<tr>
                    <td>".$i++."</td>
                    <td>".$row['cat_name']."</td>
                    <td style = 'width:5%'><a href='index.php?edit_cat=".$row['prod_id']."'><img src = '../uploads/edit 1.svg' class = 'catIcons'></a></td>
                    <td style = 'width:5%'><a href='delete_cat.php?delete_cat=".$row['prod_id']."'><img src = '../uploads/delete 1.svg' class = 'catIcons'></a></td>
                 </tr>";
        endwhile;
    }

    function count_orders()
    {
        include("inc/db.php");
        $count_orders = $con->prepare("SELECT od.order_id, od.delivery_status, sum(od.qty * od.price), GROUP_CONCAT(concat(od.pro_name, '(x', od.qty, ')') SEPARATOR ', ') items FROM
        (select o.order_id, p.pro_name, count(p.pro_name) qty, p.pro_price price, o.delivery_status 
        from orders_tbl o join product_tbl p on o.pro_id = p.pro_id
        WHERE o.user_id = o.user_id
        group by o.order_id, p.pro_name, o.delivery_status) od
        group by od.order_id, od.delivery_status");
        $count_orders->setFetchMode(PDO:: FETCH_ASSOC);
        $count_orders->execute();

        $count = $count_orders->rowCount();
        echo $count;
    }

    function count_deliveries()
    {
        include("inc/db.php");
        $count_orders = $con->prepare("SELECT * FROM delivery_tbl");
        $count_orders->setFetchMode(PDO:: FETCH_ASSOC);
        $count_orders->execute();

        $count = $count_orders->rowCount();
        echo $count;
    }

    function viewall_orders()
    {
        include("inc/db.php");
        
        $net_total = 0;
        $q = $con->query("
            SELECT od.order_id, od.order_date, od.delivery_status, sum(od.qty * od.price), GROUP_CONCAT(concat(od.pro_name, '(x', od.qty, ')') SEPARATOR ', ') items FROM
            (select o.order_id, p.pro_name, count(p.pro_name) qty, p.pro_price price, o.delivery_status, o.order_date
            from orders_tbl o join product_tbl p on o.pro_id = p.pro_id
            WHERE o.user_id = o.user_id
            group by o.order_id, p.pro_name, o.delivery_status, o.order_date) od
            group by od.order_id, od.delivery_status, od.order_date    
            ");

            
            $orders = $q->fetchAll(PDO::FETCH_ASSOC);
            foreach ($orders as $order) 
            {
                // $net_total += $order['sum(od.qty * od.price)'];
                $order_id = $order['order_id'];
                $mandaue = $order['sum(od.qty * od.price)']+10;
                $cebu = $order['sum(od.qty * od.price)']+12;
                $concolacion = $order['sum(od.qty * od.price)']+12;
                $lapulapu = $order['sum(od.qty * od.price)']+12;
                echo
                "<form method = 'POST' enctype = 'multipart/form-data' id = 'forming'>
                        
                        <input type = 'hidden' name = 'order_id' value = '".$order['order_id']."' />

                        <p class = 'dataLebs'>".$order_id."</p>";
                        $view_details = $con->prepare("SELECT * FROM orders_tbl WHERE order_id = '$order_id'");
                        $view_details->setFetchMode(PDO:: FETCH_ASSOC);
                        $view_details->execute();
            
                        $row = $view_details->fetch();
                        $user_id = $row['user_id'];
            
                        $fetch_username=$con->prepare("SELECT * FROM users_table WHERE user_id = '$user_id'");
                        $fetch_username->setFetchMode(PDO:: FETCH_ASSOC);
                        $fetch_username->execute();
            
                        $row_username = $fetch_username->fetch();
                        echo "
                        <input type = 'hidden' name = 'user_username' value = '".$row_username['user_username']."' />

                        <a href = 'user.php?user=".$row_username['user_id']."'><p  class = 'dataLebs'>".$row_username['user_username']."</p></a>";
                    echo" 
                    <input type = 'hidden' name = 'items' value = '".$order['items']."' style = 'color:white' />
                    <p  class = 'dataLebss'>".$order['items']."</p>
                    <p  class = 'dataLebs'>".$order['order_date']."</p>";
                    if($row_username['municipality'] == "Mandaue City")
                    {
                        echo
                        "<input type = 'hidden' name = 'total_amount' value = '".$mandaue."' />
                        <p  class = 'dataLebs'>".$mandaue."</p>";
                    }
                    if($row_username['municipality'] == "Cebu City")
                    {
                        echo
                        "<input type = 'hidden' name = 'total_amount' value = '".$cebu."' />
                        <p  class = 'dataLebs'>".$cebu."</p>";
                    }
                    if($row_username['municipality'] == "Consolacion")
                    {
                        echo
                        "<input type = 'hidden' name = 'total_amount' value = '".$concolacion."' />
                        <p  class = 'dataLebs'>".$consolacion."</p>";
                    }
                    if($row_username['municipality'] == "Lapu-lapu")
                    {
                        echo
                        "<input type = 'hidden' name = 'total_amount' value = '".$lapulapu."' />
                        <p  class = 'dataLebs'>".$lapulapu."</p>";
                    }
                    
                   echo" <input class = 'dets' type = 'date' name = 'delivery_date' required/>
                    <div class ='bots'>
                    <button class = 'buto' name = 'confirm_order' value = ".$order['order_id'].">Confirm</button>
                     <a class = 'busog' href='cancel_order.php?order_id=".$order['order_id']."'>Cancel</a>
                     </div>
 
                </form>";
            }
        if(isset($_POST['confirm_order']))
        {
            $order_id = $_POST['confirm_order'];

            
            $items = $_POST['items'];
            $total_amount = $_POST['total_amount'];
            $user_username = $_POST['user_username'];
            $delivery_date = $_POST['delivery_date'];
            $delivery_status = 'FOR DELIVERY';

            $fetch_user=$con->prepare("SELECT * FROM users_table WHERE user_username = '$user_username'");
            $fetch_user->setFetchMode(PDO:: FETCH_ASSOC);
            $fetch_user->execute();
        
            $row_username = $fetch_user->fetch();

            $receiver = $row_username['user_email'];
            $subject = "Order Confirmation Mail";
            $body = "
            Greetings!

            Your order has been confirmed and will be delivered on $delivery_date with order #$order_id 

            Items include: 
            $items

            Please keep your lines open because your items will arrive at your destination according to the aforementioned delivery date. 
            
            Thank you for being part of Pet Society where we treat your pet as our family. Enjoy!

            Meow,
            Pet Society
            ";
            $sender = "ianjohn0101@gmail.com";

            $datenow = getdate();

            $today = $datenow['year'] . '-' . $datenow['mon'] . '-' . $datenow['mday'];

            $dateTimeStamp = strtotime($delivery_date);
            $dateTimeStamp2 = strtotime($today);

            // var_dump($dateTimeStamp);
            // var_dump($dateTimeStamp2);

            if($dateTimeStamp < $dateTimeStamp2)
            {
                echo "<script>alert('Date Chosen Invalid!');</script>";
            }
            else
            {
                $add_delivery = $con->prepare("INSERT INTO delivery_tbl
                (
                    order_id, 
                    items, 
                    total_amount,
                    user_username, 
                    delivery_date, 
                    delivery_status
                ) 
                VALUES
                (
                    $order_id,
                    '$items',
                    '$total_amount',
                    '$user_username',
                    '$delivery_date',
                    '$delivery_status'
                )");
    
                if(!$add_delivery->execute())
                {
                    return;
                }
                
                mail($receiver, $subject, $body, $sender);
    
                $view_details = $con->query("SELECT pro_id, qty FROM orders_tbl WHERE order_id = '$order_id'");
                $view_details->setFetchMode(PDO:: FETCH_ASSOC);
                $view_details->execute(); 
                
                while($row = $view_details->fetch()):
                    $pro_id = $row['pro_id'];
                    $qty = $row['qty'];
    
                    $update_qty = $con->prepare("UPDATE product_tbl SET pro_quantity = pro_quantity-$qty WHERE pro_id = $pro_id");
                    $update_qty->setFetchMode(PDO:: FETCH_ASSOC);
                    $update_qty->execute();
                endwhile;
    
                $delete_ord = $con->prepare("DELETE FROM orders_tbl WHERE order_id = '$order_id'");
                if(!$delete_ord->execute())
                {
                    return;  
                } 
                echo "<script>alert('Successfully Confirmed!');</script>";
                echo "<script>window.open('viewall_orders.php', '_self');</script>";
            }
        }
    }

    function view_prods()
    {
        include("inc/db.php");
        $sql = $con->prepare("SELECT * FROM product_tbl");
        $sql->setFetchMode(PDO:: FETCH_ASSOC);
        $sql->execute();

        while($row = $sql->fetch()):
            echo
            "<div class = 'innerGrid'>
                <p class = 'p1'>".$row['pro_name']."</p>
                <p class = 'p2'>".$row['pro_price']."</p>
                <p class = 'p2'>".$row['pro_quantity']."</p>
                <div>
                <a class = 'edith' href = 'edit_prod.php?edit_prod=".$row['pro_id']."'>Edit</a>
                <a class = 'byew' href = 'delete_cat.php?delete_prod=".$row['pro_id']."'>Delete</a>
                </div>
            </div>";
        endwhile;
    }

    function viewalldelivered_items()
    {
        include("inc/db.php");
        $sql = $con->prepare("SELECT * FROM delivered_items ORDER BY delivery_id");
        $sql->setFetchMode(PDO:: FETCH_ASSOC);
        $sql->execute();

        $sql2 = $con->prepare("SELECT SUM(total_amount) FROM delivered_items");
        $sql2->setFetchMode(PDO:: FETCH_ASSOC);
        $sql2->execute();

        $row2 = $sql2->fetch();
        while($row = $sql->fetch()):

            echo
            "<tr>
                <td>".$row['delivery_id']."</td>
                <td>".$row['items']."</td>
                <td>".$row['user_username']."</td>
                <td>".$row['date_delivered']."</td>
                <td>P".$row['total_amount']."</td>
            </tr>";
        endwhile;
        echo
        "<td>
            <p class = 'det' style = 'margin-left:1.5rem'>Amount Collected:</p><p class = 'figures'> P".$row2['SUM(total_amount)']."</p>
        </td>";
    }

    

    function viewall_deliveries()
    {
        include("inc/db.php");
        $sql = $con->prepare("SELECT * FROM delivery_tbl");
        $sql->setFetchMode(PDO:: FETCH_ASSOC);
        $sql->execute();

        while($row = $sql->fetch()):
            $user_username = $row['user_username'];
            $view_user = $con->prepare("SELECT * FROM users_table WHERE user_username = '$user_username'");
            $view_user->setFetchMode(PDO:: FETCH_ASSOC);
            $view_user->execute();

            $row_user = $view_user->fetch();
            $user_address = $row_user['user_address'];
            echo 
            "<div class = 'innerGrid'>
                <p>".$row['delivery_id']."</p>
                <p>".$row['items']."</p>
                <p>".$row['total_amount']."</p>
                <p>".$row['user_username']."</p>
                <p>".$user_address."</p>
                <p>".$row['delivery_date']."</p>
                <a class = 'btnssih' href = 'confirm_delivery.php?confirm_delivery=".$row['delivery_id']."'>Delivered</a>
            </div>";
            
        endwhile;
    }

    function confirm_delivery()
    {
        include("inc/db.php");
        if(isset($_GET['confirm_delivery']))
        {
            $delivery_id = $_GET['confirm_delivery'];

            $query = $con->prepare("SELECT * FROM delivery_tbl WHERE delivery_id = '$delivery_id'");
            $query->setFetchMode(PDO:: FETCH_ASSOC);
            $query->execute();

            $row = $query->fetch();
            $order_id = $row['order_id'];
            $items = $row['items'];
            $user_username = $row['user_username'];
            $total_amount = $row['total_amount'];

            $fetch_user=$con->prepare("SELECT * FROM users_table WHERE user_username = '$user_username'");
            $fetch_user->setFetchMode(PDO:: FETCH_ASSOC);
            $fetch_user->execute();
        
            $row_username = $fetch_user->fetch();

            $datenow = getdate();

            $today = $datenow['year'] . '-' . $datenow['mon'] . '-' . $datenow['mday'];


            $reciever = $row_username['user_email'];
            $subject = "Order Delivered!";
            $body = "
            Greetings!

            Your order has been delivered on $today.

            Thank you for being part of Pet Society where we treat your pet as our family. Enjoy!

            Arf arf,
            Pet Society
            ";
            $sender = "ianjohn0101@gmail.com";

            if(mail($reciever, $subject, $body, $sender))
            {
                // $sql = $con->prepare("UPDATE delivery_tbl SET delivery_status = 'CONFIRMED', date_delivered = '$today' WHERE delivery_id = '$delivery_id'");
                // $sql->setFetchMode(PDO:: FETCH_ASSOC);
                $sql = $con->prepare("INSERT INTO delivered_items(delivery_id, items, total_amount, user_username, date_delivered) VALUES('$delivery_id', '$items', '$total_amount', '$user_username', '$today')");
                if($sql->execute())
                {
                  
                        $update_status = $con->prepare("DELETE FROM delivery_tbl WHERE delivery_id = '$delivery_id'");
                        $update_status->setFetchMode(PDO:: FETCH_ASSOC);
                        $update_status->execute();

                        if($update_status->execute())
                        {
                            echo "<script>alert('Item Delivered');</script>";
                            echo "<script>window.open('index.php?viewall_products.php','_self');</script>";
                        }
                   
                }
            }
        }
    }

    function viewall_sub_category()
    {
        include("inc/db.php");
        $fetch_cat=$con->prepare("SELECT * from sub_cat ORDER BY sub_cat_name");
        $fetch_cat->setFetchMode(PDO:: FETCH_ASSOC);
        $fetch_cat->execute();
        $i=1;

        while($row=$fetch_cat->fetch()):
            echo "<tr>
                    <td>".$i++."</td>
                    <td>".$row['sub_cat_name']."</td>
                    <td style = 'width:10%'><a href='index.php?edit_sub_cat=".$row['sub_cat_id']."'>Edit</a></td>
                    <td style = 'width:10%'><a href='delete_cat.php?delete_sub_cat=".$row['sub_cat_id']."'>Delete</a></td>
                 </tr>";
        endwhile;
    }
    
    function viewall_sub_cat()
    {
        include("inc/db.php");
        $fetch_sub_cat=$con->prepare("SELECT * from sub_cat");
        $fetch_sub_cat->setFetchMode(PDO:: FETCH_ASSOC);
        $fetch_sub_cat->execute();
                            
        while($row=$fetch_sub_cat->fetch()):
            echo "<option value = '".$row['sub_cat_id']."'>".$row['sub_cat_name']."</option>";
        endwhile;
    }
    

    function view_all_products()
    {
        include("inc/db.php");
        $fetch_pro = $con->prepare("SELECT * from product_tbl");
        $fetch_pro->setFetchMode(PDO:: FETCH_ASSOC);
        $fetch_pro->execute();

        $i=1;

        while($row=$fetch_pro->fetch()):
            echo "<tr>
                <td>".$i++."</td>
                <td style = 'min-width:200px'>".$row['pro_name']."</td>
                <td>".$row['pro_brand']."</td>
                <td style = 'min-width:200px'>
                    <img src = '../uploads/products/".$row['pro_img']."'/>
                    <img src = '../uploads/products/".$row['pro_img2']."'/>
                    <img src = '../uploads/products/".$row['pro_img3']."'/>
                    <img src = '../uploads/products/".$row['pro_img4']."'/>
                </td>
                <td>".$row['pro_price']."</td>
                <td>".$row['pro_quantity']."</td>
                <td>".$row['pro_keyword']."</td>
                <td><a href='index.php?edit_prod=".$row['pro_id']."'>Edit</a></td>
                <td><a href='delete_cat.php?delete_prod=".$row['pro_id']."'>Delete</a></td>
         </tr>";
        endwhile;
    }

    function viewall_donations()
    {
        include("inc/db.php");

        $get_donations = $con->prepare("SELECT * FROM donations");
        $get_donations->setFetchMode(PDO:: FETCH_ASSOC);
        $get_donations->execute();

        while($row = $get_donations->fetch()):
            $org_id = $row['org_id'];
            $donator_email = $row['email'];

            $sql = $con->prepare("SELECT * FROM organizations WHERE id = '$org_id'");
            $sql->setFetchMode(PDO:: FETCH_ASSOC);
            $sql->execute();

            $row_org = $sql->fetch();
            $org_name = $row_org['org_name'];
            echo 
            "<form method = 'POST' enctype = 'multipart/form-data' id = 'forming'>
                    <input type = 'hidden' name = 'donator_email' value = '".$donator_email."'/>
                    
                    <div class = 'holdest'>
                    <input type = 'hidden' name = 'transaction_number' value = '".$row['transaction_number']."' />
                    <p  name = 'transaction_number'>".$row['transaction_number']."</p>
                    </div>
                    <div class = 'holdest'>
                    <input type = 'hidden' name = 'full_name' value = '".$row['full_name']."' />
                    <p>".$row['full_name']."</p>
                    </div>
                    <input type = 'hidden' name = 'org_name' value = '".$org_name."' />
                    <div class = 'holdest'>
                    <p>".$org_name."</p>
                    </div>
                    <div class = 'holdest'>
                    <input type = 'hidden' name = 'contact_number' value = '".$row['contact_number']."' />
                    <p>".$row['contact_number']."</p>
                    </div>
                    <div class = 'holdest'>
                    <p>".$row['amount']."</p>
                    </div>
                    
                    <div class = 'holdest'>
                    <div id = 'aksyon'>
                    <button id = 'views2'  name = 'confirm_donation' value = ".$row['id'].">Confirm</button>
                    <a  id = 'viewok' href = view_donation.php?view_donation=".$row['id'].">View</a>
                    </div>
                    </div>
                    
            </form>";
       
        endwhile;
        


        if(isset($_POST['confirm_donation']))
        {
            $id = $_POST['confirm_donation'];
            
            $transaction_number = $_POST['transaction_number'];
            $org_name = $_POST['org_name'];
            $contact_number = $_POST['contact_number'];
            $full_name = $_POST['full_name'];
            $donator_email = $_POST['donator_email'];
            $coupon_code = generateRandomString();
          
            $datenow = getdate();

            $today = $datenow['year'] . '-' . $datenow['mon'] . '-' . $datenow['mday'];

            $receiver = $donator_email;
            $subject = "Donation Confirmed";
            $body = "Your donation has been confirmed!";
            $sender = "ianjohn0101@gmail.com";
           
            // if(mail($receiver, $body, $sender, $sender))
            // {
               
            // }
            $add_ledger = $con->prepare("INSERT INTO ledger_tbl 
            SET 
            transaction_number = '$transaction_number',
            org_name = '$org_name',
            full_name = '$full_name',
            contact_number = '$contact_number',
            date_confirmed = '$today',
            coupon_code = '$coupon_code'
            ");
            if(!$add_ledger->execute())
            {
               return; 
            }    

            mail($receiver, $subject, $body, $sender);

            $del_donation = $con->prepare("DELETE FROM donations WHERE id = '$id'");
            $del_donation->execute();
            if($del_donation->execute())
            {
                echo "SUCCESS!";
            }
        }
    }

    // function date_today()
    // {
    //     $datenow = getdate();

    //     $today = $datenow['year'] . '-' . $datenow['mon'] . '-' . $datenow['mday'];
    // }

    function registered_petcenters()
    {
        include("inc/db.php");
        $view_petcenters = $con->prepare("SELECT * FROM pet_center_tbl");
        $view_petcenters->setFetchMode(PDO:: FETCH_ASSOC);
        $view_petcenters->execute();

        while($row = $view_petcenters->fetch()):
            echo
            "<form method = 'POST' enctype = 'multipart/form-data'>
                <div class = 'innerGrid'>
                <img class = 'bimg' src = '../uploads/business_permits/".$row['business_permit']."'/>
                    <p class = 'asd'>".$row['pet_center_name']."</p>
                    <p class = 'asd'>".$row['contact_number']."</p>
                    <p class = 'asd'>".$row['email']."</p>
                   
                    <input type = 'hidden' name = 'email' value = '".$row['email']."' />
                    <input type = 'hidden' name = 'pet_center_id' value = '".$row['pet_center_id']."' />
                    <a class = 'btnV' href = view_application.php?view=".$row['pet_center_id'].">View</a>
                </div>
               
            </form>";
        endwhile;

            if(isset($_POST['confirm']))
            {
                $pet_center_id = $_POST['pet_center_id'];

                $sql2 = $con->prepare("SELECT * FROM pet_center_tbl WHERE pet_center_id = '$pet_center_id'");
                $sql2->setFetchMode(PDO:: FETCH_ASSOC);
                $sql2->execute();
                
                $v_key = generateRandomString();

                $row = $sql2->fetch();
                
                if($row['verified'] == 1)
                {
                    echo "<script>alert('This account has been confirmed!');</script>";
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
                    
                }
            }
    }

    function view_detail()
    {
        include("inc/db.php");
        if(isset($_GET['view_donation']))
        {
            $id = $_GET['view_donation'];
            $sql = $con->prepare("SELECT * FROM donations WHERE id = $id");
            $sql->setFetchMode(PDO:: FETCH_ASSOC);
            $sql->execute();

            while($row = $sql->fetch()):
                $org_id = $row['org_id'];
                $donator_email = $row['email'];

                $sql2 = $con->prepare("SELECT * FROM organizations WHERE id = '$org_id'");
                $sql2->setFetchMode(PDO:: FETCH_ASSOC);
                $sql2->execute();

                $row_org = $sql2->fetch();
                $org_name = $row_org['org_name'];
                echo 
                "<form method = 'POST' enctype = 'multipart/form-data' id = 'forming'>

                        <input type = 'hidden' name = 'donator_email' value = '".$donator_email."'/>
                        <div class = 'imageDiv'>
                        <img class = 'imagesP' src = '../uploads/donations/".$row['proof_photo']."' '/><div></div>
                        </div>
                        <div>
                        <div class = 'holdest'>
                        <p class = 'lebss'>Transaction No.</p>
                        <input  type = 'hidden' name = 'transaction_number' value = '".$row['transaction_number']."' />
                        <p  class = 'dates' name = 'transaction_number'>".$row['transaction_number']."</p>
                        </div>
                        <div class = 'holdest'>
                        <p class = 'lebss'>Name</p>
                        <input type = 'hidden' name = 'full_name' value = '".$row['full_name']."' />
                        <p class = 'dates'>".$row['full_name']."</p>
                        </div>
                        <div class = 'holdest'>
                        <p class = 'lebss'>Organization Name</p>
                        <input type = 'hidden' name = 'org_name' value = '".$org_name."' />
                        
                        <p class = 'dates'>".$org_name."</p>
                        </div>
                        <div class = 'holdest'>
                        <p class = 'lebss'>Bank Acc. No.</p>
                        <input type = 'hidden' name = 'contact_number' value = '".$row['contact_number']."' />
                        <p class = 'dates'>".$row['contact_number']."</p>
                        </div>
                        <div class = 'holdest'>
                        <p class = 'lebss'>Amount</p>
                        <p class = 'dates'>".$row['amount']."</p>
                        </div>
                       
                       
                     
                        
                        <div id = 'aksyon'>
                        <button id = 'views2'  name = 'confirm_donation' value = ".$row['id'].">Confirm</button>
                        </div>
                        </div>
                </form>";
            endwhile;
            if(isset($_POST['confirm_donation']))
            {
                $id = $_POST['confirm_donation'];
                
                $transaction_number = $_POST['transaction_number'];
                $org_name = $_POST['org_name'];
                $contact_number = $_POST['contact_number'];
                $full_name = $_POST['full_name'];
                $donator_email = $_POST['donator_email'];
                $coupon_code = generateRandomString();
              
                $datenow = getdate();
    
                $today = $datenow['year'] . '-' . $datenow['mon'] . '-' . $datenow['mday'];
    
                $receiver = $donator_email;
                $subject = "Donation Confirmed";
                $body = "Your donation has been confirmed!";
                $sender = "ianjohn0101@gmail.com";
               
                $add_ledger = $con->prepare("INSERT INTO ledger_tbl 
                SET 
                transaction_number = '$transaction_number',
                org_name = '$org_name',
                full_name = '$full_name',
                contact_number = '$contact_number',
                date_confirmed = '$today',
                coupon_code = '$coupon_code'
                ");
                if(!$add_ledger->execute())
                {
                   return;
                }    
                
                mail($receiver, $subject, $body, $sender);

                $del_donation = $con->prepare("DELETE FROM donations WHERE id = '$id'");
                $del_donation->execute();
                if($del_donation->execute())
                {
                    echo "SUCCESS!";
                }
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

    function showledger()
    {
       

        include("inc/db.php");
        $show_ledger = $con->prepare("SELECT * FROM ledger_tbl");
        $show_ledger->setFetchMode(PDO:: FETCH_ASSOC);
        $show_ledger->execute();

        while($row = $show_ledger->fetch()):
          
            echo
            "<form method = 'POST' action = 'sort_org.php' enctype = 'multipart/form-data' id='forming'>
                <div class = 'inner'>
                <p class = 'lebs'>".$row['transaction_number']."</p>
                <p class = 'lebs'>".$row['full_name']."</p>
                <p class = 'lebs'>".$row['org_name']."</p>
                <p class = 'lebs'>".$row['contact_number']."</p>
                <p class = 'lebs'>".$row['date_confirmed']."</p>
                <p class = 'lebs'>".$row['coupon_code']."</p>
            </div>
           
        </form>";
        endwhile;
    }
    

    function search_transaction_number() 
    {
        include("inc/db.php");
        if(isset($_GET['search']) && isset($_GET['transaction_number']))
        {
            $transaction_number = $_GET['transaction_number'];
            $search_transaction_number = $con->prepare("SELECT * FROM ledger_tbl WHERE transaction_number LIKE '%$transaction_number%'");
            $search_transaction_number->setFetchMode(PDO:: FETCH_ASSOC);
            $search_transaction_number->execute();

            if($search_transaction_number->rowCount() > 0)
            {
               while($row = $search_transaction_number->fetch())
               {
                    echo 
                    "<form id='forming'>
                    <div class = 'inner' >
                    <p class = 'lebs'>".$row['transaction_number']."</p>
                    <p class = 'lebs'>".$row['full_name']."</p>
                    <p class = 'lebs'>".$row['org_name']."</p>
                    <p class = 'lebs'>".$row['contact_number']."</p>
                    <p class = 'lebs'>".$row['date_confirmed']."</p>
                    </div>
               
            </form>";
               }
            }
            else
            {
                echo
                "<h2>Transaction Number not Found!</h2>";
            }
        }
    }

    function viewall_coupons()
    {
        include("inc/db.php");
        $view_coupons = $con->prepare("SELECT * FROM ledger_tbl");
        $view_coupons->setFetchMode(PDO:: FETCH_ASSOC);
        $view_coupons->execute();

        while($row = $view_coupons->fetch()):
            echo 
            "<div class = 'inners'>
                <p>".$row['full_name']."</p>
                <p class = 'okss'>".$row['coupon_code']."</p>
            </div>"; 
        endwhile;
    }

    function edit_cat() 
    {
        include("inc/db.php");
        if(isset($_GET['edit_cat']))
        {
            $cat_id = $_GET['edit_cat'];
            $fetch_cat_name = $con->prepare("SELECT * from pet_prod WHERE prod_id='$cat_id'");
            $fetch_cat_name->setFetchMode(PDO:: FETCH_ASSOC);
            $fetch_cat_name->execute();
            $row = $fetch_cat_name->fetch();

            echo "<h3>Edit Category</h3>
            <form method = 'POST'>
                <table>
                    <tr>
                        <td style='width:15%'>Category Name: </td>
                        <td style='width:60%'><input type='text' name = 'cat_name' value = '".$row['cat_name']."'/></td>
                        <td style='width:25%'><button name = 'update_cat'>Update</button></td>
                    </tr>
                </table>
            </form>";

            if(isset($_POST['update_cat']))
            {
                $cat_name = $_POST['cat_name'];
                $update_cat = $con->prepare("UPDATE pet_prod SET cat_name='$cat_name' WHERE prod_id = '$cat_id'");
                
                if($update_cat->execute())
                {
                    echo "<script>alert('Category Updated Successfully!');</script>";
                    echo "<script>window.open('index.php?viewall_cat','_self');</script>";
                }
            }
        }
    }

    function viewall_users()
    {
        include("inc/db.php");
        $fetch_pro = $con->prepare("SELECT * from users_table");
        $fetch_pro->setFetchMode(PDO:: FETCH_ASSOC);
        $fetch_pro->execute();

        $i=1;

        while($row=$fetch_pro->fetch()):
            echo "<div class = 'innerGrid'>
                 <img class = 'imgg' src = '../uploads/user_profile/".$row['user_profilephoto']."'/>
                 <p class = 'okss'>".$row['user_username']."</p>
                 <p class = 'okss'>".$i++."</p>
                <p class = 'okss'>".$row['user_email']."</p>
                <p class = 'okss'>".$row['user_contactnumber']."</p>
                <p class = 'okss'>".$row['user_address']."</p>
                <a class = 'dbtn' href = 'delete_user.php?delete=".$row['user_id']."'>Delete User</a>
                
               
         </div>";
        endwhile;
    }

    function edit_prod()
    {
        include("inc/db.php");
        if(isset($_GET['edit_prod']))
        {
            $pro_id = $_GET['edit_prod'];
            $fetch_pro_name = $con->prepare("SELECT * from product_tbl WHERE pro_id='$pro_id'");
            $fetch_pro_name->setFetchMode(PDO:: FETCH_ASSOC);
            $fetch_pro_name->execute();
            $row = $fetch_pro_name->fetch();
            $cat_id = $row['cat_id'];

            $fetch_cat = $con->prepare("SELECT * from pet_prod WHERE prod_id='$cat_id'");
            $fetch_cat->setFetchMode(PDO:: FETCH_ASSOC);
            $fetch_cat->execute();
            $row_cat = $fetch_cat->fetch();

            echo "
            <div class = 'bodies'>
            <form method = 'POST' enctype = 'multipart/form-data'>
                
                       <div class = 'mains'>
                        <img class = 'imges' src = '../uploads/products/".$row['pro_img']."' />
                        <div class = 'buts'>
                        <div class='drop-zone'>
                    <span class='drop-zone__prompt'>Drop file here or click to upload</span>
                    <input type='file' name = 'sample_img1' class='drop-zone__input'>
                    </div>

                    
                        <button class = 'updateBtn' name = 'update_first_image'>Update Image</button>
                        </div>
                        </div>
            </form>
            <form method = 'POST' enctype = 'multipart/form-data'>
                <div class = 'body'>
                <div class = 'seconds'>
                    <div class = 'holders'>
                        <p class = 'lebs'>Update Category Name: </p>
                      
                            <select class = 'oks' name = 'cat_name'>
                                <option value = '".$row_cat['prod_id']."'>".$row_cat['cat_name']."</option>
                                ";echo viewall_cat(); echo"
                            </select>
                       
                    </div>
                    
                    <div class = 'holders'>
                        <p class = 'lebs'>Product Name: </p>
                        <input class = 'oks' type='text' name = 'pro_name' value = '".$row['pro_name']."'/>
                    </div>
                    <div class = 'holders'>
                        <p class = 'lebs'>Product Brand: </p>
                        <input class = 'oks' type='text' name = 'pro_brand' value = '".$row['pro_brand']."'/>
                    </div>
                    <div class = 'holders' >
                        <p class = 'lebs'>Product Price: </p>
                        <input class = 'oks' type='text' name = 'pro_price' value = '".$row['pro_price']."'/>
                    </div>
                    <div class ='holders'>
                        <p class = 'lebs'>Product Quantity: </p>
                        <input class = 'oks' type='text' name = 'pro_quantity' value = '".$row['pro_quantity']."'/>
                    </div>
                    <div class = 'holders'>
                        <p class = 'lebs' >Product Description: </p>
                        <input class = 'oks' type='text' name = 'pro_keyword' value = '".$row['pro_keyword']."'/>
                    </di>
                    
                </div>
                <div></div>
                <button class='btns' name = 'update_prod'>Update Product Details</button>
                </div>
                <br>
            </form>

            </div>
            
           ";
            if(isset($_POST['update_prod']))
            {
                $cat_name = $_POST['cat_name'];
                $pro_name = $_POST['pro_name'];
                $pro_brand = $_POST['pro_brand'];
                $pro_quantity = $_POST['pro_quantity'];
                $pro_price = $_POST['pro_price'];
                $pro_keyword = $_POST['pro_keyword'];
                $update_prod = $con->prepare("UPDATE product_tbl 
                SET 
                cat_id='$cat_name',
                pro_name='$pro_name',
                pro_brand = '$pro_brand',
                pro_quantity = '$pro_quantity',
                pro_price = '$pro_price',
                pro_keyword = '$pro_keyword'
                WHERE 
                pro_id = '$pro_id'");
                
                if($update_prod->execute())
                {
                    echo "<script>alert('Product Updated Successfully!');</script>";
                    echo "<script>window.open('products.php','_self');</script>";
                }
            }
            if(isset($_POST['update_first_image']))
            {
                $pro_img = $_FILES['sample_img1']['name'];
                $pro_img_tmp = $_FILES['sample_img1']['tmp_name'];

               
                move_uploaded_file($pro_img_tmp,"../uploads/products/$pro_img");

                $update_first_img = $con->prepare("UPDATE product_tbl SET 
                pro_img = '$pro_img'
                WHERE
                pro_id = '$pro_id'");
                if($update_first_img->execute())
                {
                    echo "<script>alert('Product Updated Successfully!');</script>";
                    echo "<script>window.open('sales_inventory.php','_self');</script>";
                }
            }
            if(isset($_POST['update_second_image']))
            {
                $pro_img2 = $_FILES['sample_img2']['name'];
                $pro_img2_tmp = $_FILES['sample_img2']['tmp_name'];

                move_uploaded_file($pro_img2_tmp,"../uploads/products/$pro_img2");

                $update_second_img = $con->prepare("UPDATE product_tbl SET 
                pro_img2 = '$pro_img2'
                WHERE
                pro_id = '$pro_id'");
                if($update_second_img->execute())
                {
                    echo "<script>alert('Product Updated Successfully!');</script>";
                    echo "<script>window.open('sales_inventory.php','_self');</script>";
                }
            }
            if(isset($_POST['update_third_image']))
            {
                $pro_img3 = $_FILES['sample_img3']['name'];
                $pro_img3_tmp = $_FILES['sample_img3']['tmp_name'];

                move_uploaded_file($pro_img3_tmp,"../uploads/products/$pro_img3");

                $update_third_img = $con->prepare("UPDATE product_tbl SET 
                pro_img3 = '$pro_img3'
                WHERE
                pro_id = '$pro_id'");
                if($update_third_img->execute())
                {
                    echo "<script>alert('Product Updated Successfully!');</script>";
                    echo "<script>window.open('sales_inventory.php','_self');</script>";
                }
            }
        }
    }

    function delete_cat()
    {
        include("inc/db.php");

        $delete_cat_id = $_GET['delete_cat'];
        $delete_cat  = $con->prepare("delete from pet_prod where prod_id = '$delete_cat_id'");
        if($delete_cat->execute())
        {
            echo "<script>alert('Category Deleted Successfully!');</script>";
            echo "<script>window.open('index.php?viewall_cat','_self');</script>";
        }
    }

    function delete_sub_cat()
    {
        include("inc/db.php");

        $delete_sub_cat_id = $_GET['delete_sub_cat'];
        $delete_sub_cat  = $con->prepare("delete from sub_cat where sub_cat_id = '$delete_sub_cat_id'");
        if($delete_sub_cat->execute())
        {
            echo "<script>alert('Sub Category Deleted Successfully!');</script>";
            echo "<script>window.open('index.php?viewall_sub_cat','_self');</script>";
        }
    }

    function delete_prod()
    {
        include("inc/db.php");

        $delete_product_id = $_GET['delete_prod'];
        $delete_prod  = $con->prepare("delete from product_tbl where pro_id = '$delete_product_id'");
        if($delete_prod->execute())
        {
            echo "<script>alert('Product Deleted Successfully!');</script>";
            echo "<script>window.open('products.php','_self');</script>";
        }
    }


?>
    

    
