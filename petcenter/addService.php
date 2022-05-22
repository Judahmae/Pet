<html>
    <head>
        <title>Pet Society</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <a class = 'lengkong' href = 'addService.php'>Add services</a>
        <a class = 'lengk' href = 'confirmRequests.php'>Requests(<?php echo count_requests();?>)</a>
        </div>
         
        <div id='bodyleft'>
            <div class="maines">
            <?php
    call_user_func('add_service');
    ?>
            </div>
   
    </div>
    </body>
    <style>
        .maines{
            margin-top: 3%;
            background: #fff;
            padding: 10px;
            border-radius: 5px;
           
        }
        .cont{
            width: 89%;
            background: white;
            padding: 5px;
            border-radius: 8px;
            margin-top: 10px;
            margin-left: 5%;
            border: .5px solid black;
        }
        .conts{
            width: 40%;
            background: white;
            padding: 5px;
            border-radius: 8px;
            margin-top: 10px;
            margin-left: 5%;
            border: .5px solid black;
        }
        .contss{
            width: 89%;
            background: white;
            padding: 5px;
            border-radius: 8px;
            margin-top: 10px;
            margin-left: 5%;
            border: .5px solid black;
        }
        .ints{
            border: none;
            outline: none;
            width: 95%;
            padding: 10px;
            font-size: 18px;
            font-weight: bold;
            color: #777;
        }
        .lbes{
            font-size: 12px;
            color: #888;
        }
        .mainCont{
            display: grid;
            grid-template-columns: 50% 50%;
            padding-bottom: 3%;
        }
        .open{
            display: flex;
        }
        .opens{
            display: block;
        }
        .btnss{
            float: right;
            margin-top: 1%;
            border: none;
            padding: 10px;
            width: 20vw;
            height: 52px;
            border-radius: 7px;
            color: white;
            background: #5a5bf3;
        }
        #bodyleft{
            padding-bottom: 20vh;
        }
    </style>
</html>
