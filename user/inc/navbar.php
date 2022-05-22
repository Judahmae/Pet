<div id = "navbar">
            <ul>
                <li>
                    <a href="/Pet/user/index.php">Pet Store</a>
                </li>
                
                <li> 
                    <a href = "/Pet/user/services.php">Services</a>
                </li>
                <li> <a href = "/Pet/user/donation.php">Donate</a></li>
                <!-- <li>
                    <a href="/Pet/user/viewall_pets.php">Discover</a>
                </li> -->
                <?php
                    if(isset($_SESSION['user_id']))
                    {
                        $user_id = $_SESSION['user_id'];
                        $sql = $con->prepare("SELECT * FROM pets WHERE user_id = '$user_id'");
                        $sql->setFetchMode(PDO::FETCH_ASSOC);
                        $sql->execute();

                        $row = $sql->fetch();

                        if($row != 0)
                        {
                            echo "<li> <a href = '/Pet/user/myPet.php'>My Pet</a></li>";
                        }
                        else
                        {
                            
                            echo "<li> <a href = '/Pet/user/add_pet.php'>Pet Profile</a></li>";
                            
                        }
                    }
                ?>
            </ul>
        </div>
        <?php
        if(isset($_GET['myPet'])){
            include("myPet.php");
        }
        if(isset($_GET['donation'])){
            include("donation.php");
        }
        if(isset($_GET['orders'])){
            include("orders.php");
        }
    ?>