<html>
    <head>
        <title>Pet Society</title>
        <link rel = "stylesheet" href="css/style.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=Fredoka+One&family=Open+Sans:wght@500&family=Palette+Mosaic&family=Rubik:wght@500&family=Varela+Round&display=swap" rel="stylesheet">
    </head>

    <body>
       
        <?php 
            include ("inc/db.php");
            include ("inc/function.php");
            include ("inc/header.php"); 
            include ("inc/navbar.php"); 
        ?>
        <div id='pinakaMain'>
        <?php
            //////////////
            
            include("inc/db.php");

            echo "
            <div class = 'container'>
            <div class = 'firstCont'>
            Your Pet</div>";

            $current_user = $_SESSION['user_id'];
        
            $viewall_pets = $con->prepare("SELECT * FROM pets WHERE user_id = '$current_user'");
            $viewall_pets->setFetchMode(PDO:: FETCH_ASSOC);
            $viewall_pets->execute();
    
    
            while($row = $viewall_pets->fetch()):
            $pet_id = $row['id'];
            $user_id = $row['user_id'];
            $likes = $row['likes'];
    
            $user = $con->prepare("SELECT * FROM users_table WHERE user_id = '$user_id'");
                    $user->setFetchMode(PDO:: FETCH_ASSOC);
                    $user->execute();
            
            $row_user = $user->fetch();
            $user_username = $row_user['user_username'];
            $profile = $row_user['user_profilephoto'];
            $comment = $con->prepare("SELECT * FROM comment_tbl WHERE pet_id = '$pet_id'");
            $comment->setFetchMode(PDO:: FETCH_ASSOC);
            $comment->execute();
    
            $count_comments = $comment->rowCount();
///////////
            
///////////////
                echo
                "
                
                    <div class = 'innerCont'>
                    <div class = 'forPadding'>
                    <form method = 'post' action = 'submit_entries.php' enctype='multipart/form-data'>
                    <div id = 'userHead'>
                    <img class='profileImg2' src = '../uploads/user_profile/".$row_user['user_profilephoto']."'>
                    <p class = 'postName'>".$user_username."</p>
                    <a href = 'edit_post.php?edit=".$pet_id."'>Edit Post</a>
                    <a href = 'delete_post.php?delete=".$pet_id."'>Delete Post</a>
                    </div>
                        <img src ='../uploads/pets/".$row['pet_photo']."' class = 'imagePost'/>
                       
                        
                            <button id = 'likeBtn' name = 'like' value = ".$row['id'].">
                            <img src ='../uploads/like.png' id = 'likeBtnImg'>
                            </button>
                            <button type = 'button' id = 'commentBtn'>
                            <img src ='../uploads/comment.png' id = 'commentBtnImg'>
                            </button>
                            <div id = 'infoPost'>
                            <p id = 'likeCount'>".$likes." likes</p>
                            <p id = 'commentIhap'>
                            ".$count_comments." Comments
                            </p>
                            </div>
                            <div class = 'captionArea'>
                            <p class = 'nameok'>".$user_username."</p><p id = 'caption'>  ".$row['pet_details']."</p>
                            </div>
                            ";
                            echo "
                       
                       
                        <div id = 'commites'>
                            <input type = 'text' name = 'comment' placeholder = 'Add a comment' class = 'coms'/>
                            <button name = 'submit' value = ".$row['id']." id = 'cmtbnt'>Post</button>
                        </div>";
////////////////                    
                    while($row_comment = $comment->fetch()):
                    $users_id = $row_comment['user_id'];
                    $likes = $row_comment['likes'];
    
                    $user = $con->prepare("SELECT * FROM users_table WHERE user_id = '$users_id'");
                    $user->setFetchMode(PDO:: FETCH_ASSOC);
                    $user->execute();

                    $row_users = $user->fetch();
//////////////
                        
                        echo "
                        <div id = 'commentors'>
                        <img class='profileImg' src = '../uploads/user_profile/".$row_users['user_profilephoto']."'>:".$row_comment['comment']."";
                        
                        if(isset($_SESSION['user_id']))
                        {
                            //check kinsay naka login
                            $current_user = $_SESSION['user_id'];
                            $check_user = $con->prepare("SELECT * FROM users_table WHERE user_id = '$current_user'");
                            $check_user->setFetchMode(PDO:: FETCH_ASSOC);
                            $check_user->execute();
    
                            $row_check_user = $check_user->fetch();
                            $current_user_id = $row_check_user['user_id'];
    
                            //compare ang id sa user og ang nag comment
                            //if ang current user naka login
                            //maka like edit og comment siya
                            if($current_user_id == $users_id)
                            {
                                echo "<button name = 'like_comment' value = ".$row_comment['id'].">Like(".$likes.")</button>";
                                echo "<button name = 'edit_comment' value = ".$row_comment['id'].">Edit</button>";
                                echo "<button name = 'delete_comment' value = ".$row_comment['id'].">Delete</button>
                                </div>";
                            }
                            //if dili gani siya
                            //maka like ra sia sa comment sa uban
                            else
                            {
                                echo "<button name = 'like_comment' value = ".$row_comment['id'].">Like(".$likes.")</button>
                                </div>";
                            }
                        }
                    endwhile;
                    echo"
                    
                    </form>
                    </div>
                    </div>
                ";
            endwhile;
                 echo"</div>
                  </div>";

                  ///////////////////////////////
        

        ?>
        </div>
        
    </body>
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        #pinakaMain{
            width:80vw;
            margin-left: 10vw;
         

        }
       
        .container{
            width: 60%;
            margin-left: 20%;
            
        }
        #userHead{
            display: flex;
            margin-bottom: 10px;
            text-decoration: none;
        }
        .innerCont{
            width: 100%;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            margin-bottom: 30px;
        }
        .imagePost{
            margin-left: -1.5%;
            width: 103%;
            height: 50vh;
        }
        .forPadding{
            padding: 10px;
        }
        .postName{
            margin-top: 15px;
            margin-left: 15px;
            
        }
        .profileImg2{
            border-radius: 30px;
            width: 30px;
            height: 30px;
            color: #333;
            float: center;
            margin-top: 10px;
        }
        #infoPost{
            display: flex;
            margin-bottom: 10px;
        }
        #likeBtn{
            margin-top: 10px;
            border: none;
            background: white;
        }
        #commentBtn{
            margin-top: 10px;
            margin-left: 10px;
            border: none;
            background: white;
        }
        #likeBtnImg{
            height: 30px;
        }
        #commentBtnImg{
            height: 30px;
        }
        .firstCont{
            height: 60px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            margin-bottom: 10px;
            margin-top: 10px;
        }
        #caption{
            color: gray;
        }
        .captionArea{
            display: flex;
            margin-top: 10px;
            margin-bottom: 20px;
        }
        .nameok{
            margin-right: 10px;
        }
        a{
            text-decoration: none;
        }
        #likeCount{
            margin-top: 10px;
            margin-right: 20px;
            color: gray;
            font-size: 12px;
            
        }
        #commentIhap{
            margin-top: 10px;
            color: gray;
            font-size: 12px;
        }
        #commentors{
            display: none;
        }
        .coms{
            height: 42px;
            padding: 10px;
            width: 90%;
            border: none;
        }
       #commites{
          border: 1px solid gray;
       }
       #cmtbnt{
           height: 42px;
           width: 9%;
           border: none;
           outline: none;
           background: white;
       }
    </style>
    <script>
      
    </script>
</html>