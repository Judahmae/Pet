<html>
    <head>
        <title>Pet Society</title>
        <link rel = "stylesheet" href="css/style.css" />
        <link rel = "stylesheet" href="css/services.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=Fredoka+One&family=Open+Sans:wght@500&family=Palette+Mosaic&family=Rubik:wght@500&family=Varela+Round&display=swap" rel="stylesheet">
    </head>
    <style>
        #imgTop{
            height: 42px;
            padding: 10px;
            margin-left: 90%;
        }
        .hed{
            display: flex;
            border-bottom: 1px solid #ddd;
        }
        .ttlHead{
            margin-top: 20px;
            color: #777;
        }
        .couponBand{
        width: 30px;
        height:30px;
    }
    .band{
        display: flex;
        margin-bottom: 7px;
    }
    .icons{
        font-size: 10px;
        color: #777;
        margin-top: 7px;
        
       
    }
    </style>
    <body>
        <?php 
            include ("inc/db.php");
            include ("inc/function.php");
            include ("inc/header.php"); 
            include ("inc/navbar.php"); 
            ?>

          <div id='bodyleft'>
          <div id = "insideDiv">
            <a class = 'servDiv' href = "service_grooming.php" style = "text-decoration: none;color:#000;"><img class = "image" src="../uploads/grooming.png" alt="">Grooming</a>
            <a class = 'contDivSel' href = "service_pethotel.php" style = "text-decoration: none;color:#000;"><img class = "image2" src="../uploads/pethotel.png" alt="">Pet Hotel</a>
            <a class = 'servDiv' href = "service_training.php" style = "text-decoration: none;color:#000;"><img class = "image" src="../uploads/training.png" alt="">Training</a>
            <a class = 'servDiv' href = "service_clinic.php" style = "text-decoration: none;color:#000;"><img class = "image" src="../uploads/clinic.png" alt="">Vet Clinic</a>
            <a class = 'servDiv' href = "service_other.php" style = "text-decoration: none;color:#000;"><img class = "image" src="../uploads/otherService.png" alt="">others</a>
        </div>
        <div class = 'hed' ><img src = '../uploads/hotel.gif' id = 'imgTop'><p class = 'ttlHead' ></p>
        </div><br>
        <h3>Pet Hotels</h3>
              <div class = 'fdogs'>
                   <?php pet_hotels_facilities(); ?>
                   </div>
          </div>
         
            <?php
            include ("inc/bodyright.php"); 
            include ("inc/footer.php"); 
            ?>
  
    </body>
   
</html>