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

            include ("inc/function.php");
            include ("inc/header.php"); 
            include ("inc/navbar.php"); 

            

            
        ?>

           
            <div class ='mainDiv'>
            <?php avail_service(); ?>
            </div>
            <div class="mainest">
            <?php include ("inc/footer.php"); ?>
            </div>
            
   
    </body>
    <style>
           .mainDiv{
        width: 60%;
        margin: 7vh 20% 0 20%;
        box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
        border-radius: 5px;
        padding: 20px;
       
    }
    .maines{
        display: grid;
        grid-template-columns: 40% 60%;
        width: 70%;
        padding: 10px;
        margin-left: 25%;
        row-gap: 20px;
        margin-top: 20px;
        
    }
    .mainest{
       
        margin-top: 25vh;
    }
    .hh{
        padding: 10px;
        font-size: 20px;
       
    }
    .inet{
        height: 42px;
        padding: 5px;
    }
    .lebs{
        color: #777;
        font-size: 14px;
        
    }
    .btnn{
        padding: 5px 10px 5px 10px;
  text-decoration: none;
  border-radius: 5px;
  font-size: 12px;
  border: 1px solid #0080fe;
  color: white;
  background: #0080fe;
    }
    .btnnllnk{
        padding: 5px 10px 5px 10px;
  text-decoration: none;
  border-radius: 5px;
  font-size: 12px;
  border: 1px solid #0080fe;
  color: #0080fe;
  background: white;
  cursor: default;

    }
    </style>
</html>

