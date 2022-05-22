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
                    <a class = 'lengk' href = 'confirmRequests.php'>Requests(<?php echo count_requests();?>)</a>
                </div>
                    <div id = 'bodyleft'>
                      <br><br>
                    <div class = "scroll" >
    <p class = '' >Services History</p>
    <div class = "body">
    <input type = "button" id = "btnExport" value = "PRINT" />
        <button id = "pdf">Export to PDF</button>
        <button id = "csv">Export to EXCEL</button>
    <form method = "POST" enctype = "multipart/form-data">
    <table id = "table" cellspacing ="0" cellpadding ="0">
        <thead>
            <th>User Name</th>
            <th>Coupon Code</th>
            <th>Transaction Code</th>
            <th>Amount</th>
            <th>Date Confirmed</th>
        </thead>
        <tbody>
            <tr>
                <?php 
                    echo viewHistory();
                ?>
            </tr>
        </tbody>
    </form>
       
    </div>
    <br>

    <script src="src/jquery.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="src/jquery-3.3.1.slim.min.js"></script>
    <script type="text/javascript" src="src/jspdf.min.js"></script>
    <script type="text/javascript" src="src/jspdf.plugin.autotable.min.js"></script>
    <script type="text/javascript" src="src/tableHTMLExport.js"></script>
  
    <script>
        $("body").on("click", "#btnExport", function(){
            var printme = document.getElementById('table');
            var wme = window.open("","","width=900,height=700");
            wme.document.write(printme.outerHTML);
            wme.document.close();
            wwe.focus();
            wwe.print();
            wme.close();
        })
    </script>

    <script>
        $("#pdf").on("click", function(){
            $("#table").tableHTMLExport({
                type: 'pdf',
                filename: 'report.pdf'
            });
        });

        $("#csv").on("click", function(){
            $("#table").tableHTMLExport({
                type: 'csv',
                filename: 'report.csv'
            });
        });
    </script>
</div>


               
                    </div>   

    </body>
    <style>
        #table{
            width: 100%;
            border: 1px solid black;
            
        }
        .body{
            width: 100%;
            margin-bottom: 10px;
            padding-bottom: 10vh;
        }
        th{
            padding: 10px;
        }
        td{
            text-align: center;
            padding: 5px;
            border: .5px solid black;
            margin-bottom: 5px;
        }
        thead{
            background: #2bd4a2;
        }
        tbody{
            background: #e3f9f2;
        }
    </style>
</html>

