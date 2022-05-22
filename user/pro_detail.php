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
            include ("inc/function.php");
            include ("inc/header.php"); 
            include ("inc/navbar.php");
            echo pro_details();
            include ("inc/footer.php");
            
        ?>
    </body>
    <style>
        .dets{
            display: grid;
            grid-template-columns: 20% 60%;
            width: 70%;
            padding: 10px;
            border-radius: 5px;
            column-gap: 10px;
            row-gap: 10px;
        }
        .conts{
            padding: 10px;
            display: flex;
            border-top:1px solid #aaa;
            margin-top: 10px;
  
        }
        .lebes{
            font-size: 14px;
            color: #888;
            text-align: left;
        }
        .prodName{
            font-weight: bold;
            font-size: 24px;
            padding: 10px;
        }
        .prodBrand{
            font-size: 18px;
            margin-left: 10px;
            color: #888;
        }
        .prodName2{
            font-weight: bold;
            font-size: 18px;
            padding: 10px;
            margin-bottom: 20px;
        }
        .datea{
            color: #555;
            font-family: "Varela Round", sans-serif;
            font-size: 18px;
        }
        .cons{
            width: 100%;
            margin-top: 5%;
            border-top: 1px solid #bbb;
        }
        .mainest{
            width: 85vw;
            margin-left: 5vw;
        }
        .images{
            display: grid;
            grid-template-columns: 32% 32% 32%;
            width: 80%;
            margin-left: 10%;
            margin-top: 5%;
            column-gap: 5px;
            
        }
        .underImg{
            height: 100px;
        }
        .imgDiv{
            border: 1px solid #aaa;
            text-align: center;
            border-radius: 4px;
        }
        .btnLinkCart {
  padding: 5px 10px 5px 10px;
  text-decoration: none;
  border-radius: 5px;
  font-size: 12px;
  border: 1px solid #ffb830;
  color: blue;
  background: #ffb830;
}
    </style>
    <script>
        var pic1Address = pic1;
        function myFunc(){
            document.getElementById("mainPik").src = pic1;
            alert(pic1);

            
        }
   
       
    </script>
</html>