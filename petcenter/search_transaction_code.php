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
            ?>
             <div class = "ko">
        <div class="inners">
        <a class = 'lengk' href = 'index.php'>My services</a>
        <a class = 'lengk' href = 'addService.php'>Add services</a>
        <a class = 'lengkong' href = 'confirmRequests.php'>Requests(<?php echo count_requests();?>)</a>
        </div>
            <div id = 'bodyleft'>
            <form method = "get" action = "search_transaction_code.php" enctype="multipart/form-data">
            <div class = 'searchB'>
                <input class = 'txtS' type="text" name = 'user_query' placeholder = "Search here..">
                <button class = "serch" name = "search"><img src = "../uploads/search.svg" class = "searchIcon"></button>
            </div>
            </form>
                <div class="maine">
                <p class = 'ttl'>Requests</p>
            <form method = 'POST' enctype = 'multipart/form-data' id = 'porm'>
            <div>
            <div class = 'hed'>
            <p class = 'he' >TRANSACTION CODE</p>
            <p class = 'he' >NAME</p>
            <p class = 'he' >TIME</p>
            <p class = 'he' >COUPON CODE</p>
            <p class = 'he'> STATUS</p>
            <p class = 'he' >ACTION</p>
        </div>
        <div>
            <?php
        search_transaction_code();
        ?>
        </div>
        </div>
    </form>
            
              </div>
           

                </div>
           
    </body>
    <style>
        .maine{
            margin-top: 3%;
            
           
        }
        #porm{
            padding: 20px;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
            border-radius: 8px;
        }
        .hed{
            display: grid;
            grid-template-columns: 16% 16% 16% 16% 16% 16%;
            border-bottom: 1px solid black;
        }
        .hedBelow{
            display: grid;
            grid-template-columns: 16% 16% 16% 16% 16% 16%;
            margin-top: 1%;
            padding: 10px;
            background: #f4f4f4;
            border-radius: 4px;
        }
        P{
            padding: 10px;
        }
        .he{
            font-family: "Varela Round", sans-serif;
  font-weight: bold;
  font-size: 16px;
  color: #777;
  text-align: center;
        }
        .oks{
            text-align: center;
            width: 40%;
            margin-top: 5px;
            border: none;
            border-radius: 5px;
            background:#5a5bf3;
            color: white;
        }
        .ttl{
            font-size: 20px;
            margin-bottom: 5px;
            color: #5a5bf3;
        }
        .searchB{
            display: flex;
            margin-top: 5vh;
            height: 40px;
           

        }
        .serch{
            height: 100%;
            padding: 10px;
            margin-left: 5px;
            border: 1px solid #5a5bf3;
            outline: none;
            border-radius: 4px;
            
        }
        .txtS{
            padding-left: 10px;
            width: 30%;
        }
    </style>
</html>