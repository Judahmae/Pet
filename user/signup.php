<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "css/signup.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&family=Palette+Mosaic&family=Rubik:wght@500&family=Varela+Round&display=swap" rel="stylesheet">
        <title>Sign Up</title>
    </head>
    <script>
        function myFuction(){
            varOne = document.getElementById('municipal').value;
                if(varOne == 'Mandaue City'){
                    document.getElementById('mandaue').setAttribute('name', 'barangays');
                    document.getElementById('Cebu').setAttribute('name', 'barangay');
                    document.getElementById('Lapulapu').setAttribute('name', 'barangay');
                    document.getElementById('Consolacion').setAttribute('name', 'barangay');
                    document.getElementById('mandaue').style.display = "block";
                    document.getElementById('Cebu').style.display = 'none';
                    document.getElementById('Lapulapu').style.display = "none";
                    document.getElementById('Consolacion').style.display = "none";
                    console.log(varOne);
                }
                if(varOne == ''){
                    
                    document.getElementById('mandaue').style.display = "none";
                    document.getElementById('Cebu').style.display = 'none';
                    document.getElementById('Lapulapu').style.display = "none";
                    document.getElementById('Consolacion').style.display = "none";
                    //console.log(varOne);
                }
                if(varOne == 'Cebu City'){
                    document.getElementById('mandaue').setAttribute('name', 'barangay');
                    document.getElementById('Cebu').setAttribute('name', 'barangays');
                    document.getElementById('Lapulapu').setAttribute('name', 'barangay');
                    document.getElementById('Consolacion').setAttribute('name', 'barangay');
                    document.getElementById('Cebu').style.display = 'block';
                    document.getElementById('mandaue').style.display = "none";
                    document.getElementById('Lapulapu').style.display = "none";
                    document.getElementById('Consolacion').style.display = "none";
                    console.log(varOne);
                }
                if(varOne == 'Consolacion'){
                    document.getElementById('mandaue').setAttribute('name', 'barangay');
                    document.getElementById('Cebu').setAttribute('name', 'barangay');
                    document.getElementById('Lapulapu').setAttribute('name', 'barangay');
                    document.getElementById('Consolacion').setAttribute('name', 'barangays');
                    document.getElementById('Cebu').style.display = 'none';
                    document.getElementById('mandaue').style.display = "none";
                    document.getElementById('Lapulapu').style.display = "none";
                    document.getElementById('Consolacion').style.display = "block";
                   console.log(varOne);
                }
                if(varOne == 'Lapu-Lapu City'){
                    document.getElementById('mandaue').setAttribute('name', 'barangay');
                    document.getElementById('Cebu').setAttribute('name', 'barangay');
                    document.getElementById('Lapulapu').setAttribute('name', 'barangays');
                    document.getElementById('Consolacion').setAttribute('name', 'barangay');
                    document.getElementById('Cebu').style.display = 'none';
                    document.getElementById('mandaue').style.display = "none";
                    document.getElementById('Lapulapu').style.display = "block";
                    document.getElementById('Consolacion').style.display = "none";
                    console.log(varOne);
                }
                
                
   
            

        }
    </script>

    <body>
    <div class = "mainContainer">
            <div class="insideDiv">
                <div class="rightSide">
                    <div class="topDiv">
                    <p id = "signUpHead">Sign Up</p> <img src="../uploads/home.svg" alt="" id="homies" onclick="window.location.href = 'index.php';">
                    </div>
                
                <form method = "POST" enctype = 'multipart/form-data'>
                    <div class="fieldMain">
                    <div class="fieldCont">
                        <p class = "label">Name:</p>
                        <input type="text" name = "user_username" class = "inputs" required>
                    </div>
                    <div class="fieldCont">
                        <p class = "label">Email:</p>
                        <input type="email" name = "user_email" class = "inputs" required>
                    </div>

                    <div class="fieldCont">
                        <p class = "label">Contact Number: </p>
                        <input type="text" name ="user_contactnumber" class = "inputs" autocomplete = "username" required>
                    </div>
                    <div class="fieldCont">
                        <p class = "label">Municipality:</p>
                        <select onchange = "myFuction();" type="text" name = "municipality" class = "inputs" id = 'municipal' >
                            <option value=""></option> 
                            <option value="Cebu City">Cebu City</option>
                            <option value="Consolacion">Consolacion</option>
                            <option value="Mandaue City">Mandaue City</option>
                            <option value="Lapu-Lapu City">Lapu-Lapu City</option>
                    </select> 
                    </div>
                    <div class="fieldCont">
                        <p class = "label">Barangay :</p>
                        <!-- Mandaue -->
                    <select name = "barangay"  id = "mandaue" class = "inputs" autocomplete = "new-password">
                         <option value=""> </option>
                         <option value="Alang-alang">Alang-alang</option>
                         <option value="Bakilid">Bakilid</option>
                         <option value="Banilad">Banilad</option>
                         <option value="Basak">Basak</option>
                         <option value="Cabancalan">Cabancalan</option>
                         <option value="Cambaro">Cambaro</option>
                         <option value="Canduman">Canduman</option>
                         <option value="Casili">Casili</option>
                         <option value="Casuntingan">Casuntingan</option>
                         <option value="Centro">Centro</option>
                         <option value="Cubacub">Cubacub</option>
                         <option value="Guizo">Guizo</option>
                         <option value="Ibabao-Estancia">Ibabao-Estancia</option>
                         <option value="Jagobiao">Jagobiao</option>
                         <option value="Labogon">Labogon</option>
                         <option value="Looc">Look</option>
                         <option value="Maguikay">Maguikay</option>
                         <option value="Mantuyong">Mantuyong</option>
                         <option value="Opao">Opao</option>
                         <option value="Paknaan">Paknaan</option>
                         <option value="Pagsabungan">Pagsabungan</option>
                         <option value="Subangdako">Subangdako</option>
                         <option value="Tabok">Tabok</option>
                         <option value="Tawason">Tawason</option>
                         <option value="Tingub">Tingub</option>
                         <option value="Tipolo">Tipolo</option>
                         <option value="Umapad">Umapad</option>
                    </select>
                    <!-- Cebu City -->
                    <select name = "barangay"  id = "Cebu" class = "inputs" autocomplete = "new-password">
                         <option value=""> </option>
                         <option value="Adlaon">Adlaon</option>
                         <option value="Agsungot">Agsungot</option>
                         <option value="Apas">Apas</option>
                         <option value="Babag">Babag</option>
                         <option value="Bacayan">Bacayan</option>
                         <option value="Banilad">Banilad</option>
                         <option value="Basak Pardo">Basak Pardo</option>
                         <option value="Basak San Nikolas">Basak San Nikolas</option>
                         <option value="Binaliw">Binaliw</option>
                         <option value="Bonbon">Bonbon</option>
                         <option value="Budlaan">Budlaan</option>
                         <option value="Buhisan">Buhisan</option>
                         <option value="Bulacao">Bulacao</option>
                         <option value="Buot">Buot</option>
                         <option value="Busay">Busay</option>
                         <option value="Calamba">Calamba</option>
                         <option value="Cambinocot">Cambinocot</option>
                         <option value="Capitol Site">Capitol Site</option>
                         <option value="Carreta">Carreta</option>
                         <option value="Cogon Pardo">Cogon Pardo</option>
                         <option value="Cogon Ramos">Cogon Ramos</option>
                         <option value="Day-as">Day-as</option>
                         <option value="Duljo Fatima">Duljo Fatima</option>
                         <option value="Ermita">Ermita</option>
                         <option value="Guadalupe">Guadalupe</option>
                         <option value="Guba">Guba</option>
                         <option value="Hipodromo">Hipodromo</option>
                         <option value="Inayawan">Inayawan</option>
                         <option value="Kalubihan">Kalubihan</option>
                         <option value="Kalunasan">Kalunasan</option>
                         <option value="Kamagayan">Kamagayan</option>
                         <option value="Kamputhaw">Kamputhaw</option>
                         <option value="Kasambagan">Kasambagan</option>
                         <option value="Kinasang‑an Pardo">Kinasang‑an Pardo</option>
                         <option value="Labangon">Labangon</option>
                         <option value="Lahug">Lahug</option>
                         <option value="Lorega‑San Miguel">Lorega‑San Miguel</option>
                         <option value="Lusaran">Lusaran</option>
                         <option value="Luz">Luz</option>
                         <option value="Mabini">Mabini</option>
                         <option value="Mabolo">Mabolo</option>
                         <option value="Malubong">Malubong</option>
                         <option value="Mambaling">Mambaling</option>
                         <option value="Pahina Central">Pahina Central</option>
                         <option value="Pahina San Nicolas">Pahina San Nicolase</option>
                         <option value="Pamutan">Pamutan</option>
                         <option value="Pari-an">Pari-an</option>
                         <option value="Paril">Paril</option>
                         <option value="Pasil">Pasil</option>
                         <option value="Pit-os">Pit-os</option>
                         <option value="Poblacion Pardo">Poblacion Pardo</option>
                         <option value="Pulangbato">Pulangbato</option>
                         <option value="Pung-ol Sibugay">Pung-ol Sibugay</option>
                         <option value="Punta Princesa">Punta Princesa</option>
                         <option value="Quiot">Quiot</option>
                         <option value="Sambag I">Sambag I</option>
                         <option value="Sambag II">Sambag II</option>
                         <option value="San Antonio">San Antonio</option>
                         <option value="San Jose">San Jose</option>
                         <option value="San Nicolas Prope">San Nicolas Prope</option>
                         <option value="San Roque">San Roque</option>
                         <option value="Santa Cruz">Santa Cruz</option>
                         <option value="Santo Niño">Santo Niño</option>
                         <option value="Sapangdaku">Sapangdaku</option>
                         <option value="Sawang Calero">Sawang Calero</option>
                         <option value="Sinsin">Sinsin</option>
                         <option value="Sirao">Sirao</option>
                         <option value="Suba">Suba</option>
                         <option value="Sudlon I">Sudlon I</option>
                         <option value="Sudlon II">Sudlon II</option>
                         <option value="T. Padilla">T. Padilla</option>
                         <option value="Tabunan">Tabunan</option>
                         <option value="Tagba-o">Tagba-o</option>
                         <option value="Talamban">Talamban</option>
                         <option value="Talamban">Taptap</option>
                         <option value="Talamban">Tejero</option>
                         <option value="Talamban">Tinago</option>
                         <option value="Talamban">Tisa</option>
                         <option value="Talamban">To-ong</option>
                         <option value="Talamban">Zapatera</option>
                    </select>
                    <!-- Consolacion -->
                    <select name = "barangay"  id = "Consolacion" class = "inputs" autocomplete = "new-password">
                         <option value=""> </option>
                         <option value="Cabangahan">Cabangahan</option>
                         <option value="Cansaga">Cansaga</option>
                         <option value="Casili">Casili</option>
                         <option value="Danglag">Danglag</option>
                         <option value="Garing">Garing</option>
                         <option value="Jugan">Jugan</option>
                         <option value="Lamac">Lamac</option>
                         <option value="Lanipga">Lanipga</option>
                         <option value="Nangka">Nangka</option>
                         <option value="Panas">Panas</option>
                         <option value="Panoypoy">Panoypoy</option>
                         <option value="Pitogo">Pitogo</option>
                         <option value="Poblacion Occidental">Poblacion Occidental</option>
                         <option value="Poblacion Oriental">Poblacion Oriental</option>
                         <option value="Polog">Polog</option>
                         <option value="Pulpogan">Pulpogan</option>
                         <option value="Sacsac">Sacsac</option>
                         <option value="Tayud">Tayud</option>
                         <option value="Tilhaong">Tilhaong</option>
                         <option value="Tolotolo">Tolotolo</option>
                         <option value="Tugbongan">Tugbongan</option>
                    </select>
                    <!-- Lapu-Lapu -->
                    <select name = "barangay"  id = "Lapulapu" class = "inputs" autocomplete = "new-password">
                         <option value=""> </option>
                         <option value="Agus">Agus</option>
                         <option value="Babag">Babag</option>
                         <option value="Bankal">Bankal</option>
                         <option value="Basak">Basak</option>
                         <option value="Buaya">Buaya</option>
                         <option value="Calawisan">Calawisan</option>
                         <option value="Canjulao">Canjulao</option>
                         <option value="Gun‑ob">Gun‑ob</option>
                         <option value="Ibo">Ibo</option>
                         <option value="Looc">Looc</option>
                         <option value="Mactan">Mactan</option>
                         <option value="Maribago">Maribago</option>
                         <option value="Marigondon">Marigondon</option>
                         <option value="Pajac">Pajac</option>
                         <option value="Pajo">Pajo</option>
                         <option value="Poblacion">Poblacion</option>
                         <option value="Punta Engaño">Punta Engaño</option>
                         <option value="Pusok">Pusok</option>
                         <option value="Subabasbas">Subabasbas</option>
                    </select>
                    </div>
                    <div class="fieldCont">
                        <p class = "label">Street :</p>
                        <input type="text" class = "inputs"  name = "st" autocomplete = "new-password" required>
                    </div>
                    <div class="fieldCont">
                        <p class = "label">Landmark :</p>
                        <input type="text" class = "inputs"  name = "user_address" autocomplete = "new-password" required>
                    </div>
                    <div class="fieldCont">
                        <p class = "label">Password :</p>
                        <input type="password" id = "confirmPass" class = "inputs"  name = "user_password" autocomplete = "new-password" required>
                    </div>
                    <div class="fieldCont">
                        <p class = "label">Confirm Password :</p>
                        <input type="password"  class = "inputs"  name = "conf_password" autocomplete = "new-password" required>
                    </div>
                    </div>
                    <button id = "sngup" name = "add_user">Sign Up</button><br>  
                </form>
                
                </div>
                <div class="leftSide">
                <p class = 'oneS'>Your FURever companion for your pet necessities</p>
               
                <p class = 'welss'>Welcome to Pet Society</p>
                    <div class="imgCont">
                       
                     <img src="../uploads/signGirl.svg" id="imgLeft">
                    </div>
                       
                </div>
            </div>
              
        </div>
    </body>
 
</html>


</div>

<?php

include("inc/db.php");
        
        
        if(isset($_POST['add_user']))
        {
            $user_username = $_POST['user_username'];
            $user_password = $_POST['user_password'];
            $user_email = $_POST['user_email'];
            $user_contactnumber = $_POST['user_contactnumber'];
            $municipality = $_POST['municipality'];
            $barangay = $_POST['barangays'];
            $st = $_POST['st'];
            $user_address = $_POST['user_address'];
            $conf_password = $_POST['conf_password'];
            $verification_key = generateRandomString();
            $verified = 0;
            $user_profilephoto = "userIcon.svg";

            $view_email = $con->prepare("SELECT COUNT(*) AS all_emails FROM users_table WHERE user_email = '$user_email'");
            $view_email->setFetchMode(PDO::FETCH_ASSOC);
            $view_email->execute();

            $row = $view_email->fetch();

            $view_name = $con->prepare("SELECT COUNT(*) AS all_usernames FROM users_table WHERE user_username = '$user_username'");
            $view_name->setFetchMode(PDO::FETCH_ASSOC);
            $view_name->execute();

            $row2 = $view_name->fetch();

            if($row['all_emails'] == 0)
            {
                if($row2['all_usernames'] == 0)
                {
                    if(is_numeric($user_contactnumber))
                    {
                        if(strlen($user_contactnumber)<12)
                        {
                            if(strlen($user_password)<=9 && strlen($user_password)>=3)
                            {
                                if($user_password == $conf_password)
                                {
                                    if(preg_match('/[A-Z]/', $user_password) != 0 &&
                                    preg_match('/[a-z]/', $user_password) != 0)
                                    {
                                        $add_user = $con->prepare("INSERT INTO users_table 
                                        SET
                                        user_username = '$user_username',
                                        user_password = '$user_password',
                                        user_contactnumber = '$user_contactnumber',
                                        user_address =  '$user_address',
                                        st = '$st',
                                        municipality = '$municipality',
                                        barangay = '$barangay',
                                        user_email = '$user_email',
                                        v_key = '$verification_key',
                                        verified = $verified,
                                        user_profilephoto = '$user_profilephoto'
                                        ");
                            
                                        if($add_user->execute())
                                        {
                                            echo "<script>alert('Registration Successfull!');</script>"; 
                                            echo "<script>
                                            if ( window.history.replaceState ) {
                                            window.history.replaceState( null, null, window.location.href );
                                        }            
                                            </script>";
                                            echo "<script>window.open('login.php', '_self');</script>";
                                        }
                                        else
                                        {
                                            echo "<script>alert('Registration Unsuccessfull!');</script>";
                                        }
                                    }
                                    else
                                    {
                                        echo "<script>alert('Password must have at least 1 uppercase, 1 special character');</script>";
                                    }
                                }
                                else
                                {
                                    echo "<script>alert('Password must match');</script>";
                                }
                            }
                            else
                            {
                                echo "<script>alert('Password must at least 8 characters');</script>";
                            }
                        }
                        else
                        {
                            echo "<script>alert('Contact Number must at least 11 characters');</script>";
                        }
                    }
                    else
                    {
                        echo "<script>alert('Contact Number Invalid!');</script>";
                    }
                }
                else
                {
                    echo "<script>alert('Username Existed!');</script>";
                }
            }
            else
            {
                echo "<script>alert('Email Existed!');</script>";
            }
        }

        function generateRandomString($length = 8) {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }
?>