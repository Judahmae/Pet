<html>
    <head>
        <title>Pet Society</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel = "stylesheet" href="css/style.css" />
        <link rel = "stylesheet" href="css/services.css" />
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
          <div id='main'>
          <div id = "insideDiv">
            <a class = 'servDiv' href = "service_grooming.php" style = "text-decoration: none;color:#000;"><img class = "image" src="../uploads/grooming.png" alt="">Grooming</a>
            <a class = 'servDiv' href = "service_pethotel.php" style = "text-decoration: none;color:#000;"><img class = "image2" src="../uploads/pethotel.png" alt="">Pet Hotel</a>
            <a class = 'servDiv' href = "service_training.php" style = "text-decoration: none;color:#000;"><img class = "image" src="../uploads/training.png" alt="">Training</a>
            <a class = 'servDiv' href = "service_clinic.php" style = "text-decoration: none;color:#000;"><img class = "image" src="../uploads/clinic.png" alt="">Vet Clinic</a>
            <a class = 'servDiv' href = "service_other.php" style = "text-decoration: none;color:#000;"><img class = "image" src="../uploads/otherService.png" alt="">others</a>
        </div>
        <br>
        <div class="slideHead">
        <img class = "image" src="../uploads/featureProd.gif" alt="">
        <p class = "hedss">Services Offered</p>
        </div>

        <div class="bottomDiv">
        <h3>Grooming Services</h3>
              <div class = 'fDogs'>
                   <?php featured_service_grooming(); ?>
        </div>
  
        <h3>Hotel Services</h3>
              <div class = 'fDogs'>
                   <?php featured_service_hotel(); ?>
                   </div>
            </div>
        <h3>Pet Training</h3>
              <div class = 'fDogs'>
                   <?php featured_service_training(); ?>
             </div>
   
        <h3>Vet Clinic</h3>
              <div class = 'fDogs'>
                   <?php featured_service_vet_clinic(); ?>
                   </div>
        </div>
        <h3>Others</h3>
              <div class = 'fDogs'>
                   <?php featured_service_others(); ?>
                   </div>
        </div>
        </div>
            <?php
            include ("inc/footer.php"); 
            ?>
  
    </body>
    <style>
        #main{
            width: 90%;
            margin-left: 5%;
        }
        .aLink{
            text-decoration: none;
            color:  #0080fe;
            padding: 10px;
            outline:none;
            border-radius: 4px;
            font-family: 'Varela Round', sans-serif;
            border: 1px solid #0080fe;
            
        }
        .aLink:hover{
            background: #0080fe;
            color: white;
        }
        .hedss{
        font-family: 'Varela Round', sans-serif;
        color: #444;
        font-size: 16px;
        font-weight: bold;
    }
    h3{
    line-height: 35px;
    text-align: left;
    border-radius: 3px;
    height: 35px;
    background: white;
    color: #444;
    padding-left: 5%;
    margin-top: 30px;
    font-family: 'Varela Round', sans-serif;
    }
    .icons{
        font-size: 10px;
        color: #777;
        margin-top: 7px;
       
    }
    .couponBand{
        width: 30px;
        height: 30px;
        float: right;
    }
    .band{
        display: flex;
        margin-bottom: 7px;
    }

    </style>
</html>