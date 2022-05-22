<div id = "header">
    <div id = "logo">
        <a href = "index.php"><img src = "../uploads/logo2.png" class="logo"/></a>
        <p class = 'dash'>Pet Society</p>
    </div><!-- <End of Logo> -->
   
   
   
       
            <div class = 'leftHead'>

            <?php
                if(isset($_SESSION['pet_center_id']))
                {
                    // echo "<img class='profileImg' src = '../uploads/userIcon.svg'>";
                    // echo "
                    // <ul class ='dropcontent'>
                    // <li><a href = 'myProfile.php'>My Profile</a></li>
                    // <li><a href = 'logout.php'>Log Out</a></li>
                    // </ul>
                    // ";
                    include("inc/db.php");
                    $pet_cent_id = $_SESSION['pet_center_id'];
                    $getuserprofile = $con->prepare("SELECT * FROM pet_center_tbl WHERE pet_center_id = '$pet_cent_id'");
                    $getuserprofile->setFetchMode(PDO:: FETCH_ASSOC);
                    $getuserprofile->execute();

                    $row = $getuserprofile->fetch();

                    echo "
                    <div class = 'rightSide'>
                    <p class = 'petCenterName'>".$row['pet_center_name']."</p>
                    <img class='profileImg' src = '../uploads/user_profile/".$row['pet_center_photo']."'>
                            <ul class = 'dropcontent'>
                                <li><a href = 'myProfile.php'>My Profile</a></li>
                                <li><a href = 'logout.php'>Log Out</a></li>
                                <li><a href = 'viewHistory.php?pet_center_id=".$row['pet_center_id']."'>Services History</li>
                            </ul>
                    </div>
                   ";
                    
                }
                else
                {
                    echo "<button id = 'login_btn'><a href = 'login.php'>LOGIN</a></button>";
                    echo "<script type='text/javascript'> 
                    document.getElementById('link').style.width = '11%';
                    </script>"; 
                }   
                ?>
            </div>
    

    

    
   <!-- <End of Link> -->
</div><!-- <End of Header> -->
