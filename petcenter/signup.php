<html>
    <head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&family=Palette+Mosaic&family=Rubik:wght@500&family=Varela+Round&display=swap" rel="stylesheet">
        <title>Register</title>
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
    <div id ='mainCont'>
        <div class='inner'>
            <div class="innerist">
            <div id = 'innerer'>
                <br><br><br><br>
                <img src="../uploads/doggy.svg" id = 'imageMain'>
            </div>
            <div class="right">
                <div class="innerRight">
                <p class = 'heding'>REGISTER</p>
                <form method = 'POST' enctype = 'multipart/form-data'>
                    <div id = 'contInn'>
                        <div class="innerCon">
                        <div>
                            <input class = 'inputer' type='text' name = 'pet_center_name' placeholder = 'Pet Centers Name' size = '50' required/>
                        </div>
                        <div>
                            <input class = 'inputer' type='text' name = 'email' placeholder = 'Email Address' size = '50' required/>
                        </div>
                        <div>
                            <input class = 'inputer' type='text' name = 'contact_number' placeholder = 'Contact Number' size = '50' required />
                        </div>
                        <div>
                            <input class = 'inputer' type='text' name = 'pet_center_password' placeholder = 'Password' size = '50' required />
                        </div>
                        </div>
                        <p class = 'miniHead'>Location</p>
                        <div class="mainLocForm">
                        <div class = 'loc'>
                            <p class = "label">Municipality</p>
                        <select onchange = "myFuction();" type="text" name = "municipality" class = "inputs" id = 'municipal' placeholder = 'Municipality'>
                            <option value=""></option> 
                            <option value="Cebu City">Cebu City</option>
                            <option value="Consolacion">Consolacion</option>
                            <option value="Mandaue City">Mandaue City</option>
                            <option value="Lapu-Lapu City">Lapu-Lapu City</option>
                    </select> 
                        </div>

                        <div class = 'loc'>
                             <!-- Mandaue -->
                             <p class = "label">Brgy</p>
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
                        <div>
                            <input class = 'inputer' type='text' name = 'st' placeholder = 'Street' size = '50' required />
                        </div>
                        <div>
                            <input class = 'inputer' type='text' name = 'full_location' placeholder = 'Location' size = '50' required />
                        </div>
                        
                        </div>
                        <p class = 'miniHead'>Business Permit:</p> 
                        <div class="drop-zone">
                            <span class="drop-zone__prompt">Drop file here or click to upload</span>
                            <input type="file" name = 'proof_photo' class="drop-zone__input">
                            </div>
                        
                       <br>
                        <button name = 'add_user' id = 'regs'>Register</button>
                        <buttonon onclick="window.location.href = '/Pet/user/index.php';" id = 'backHome'>Back to Home</buttonon>
                    </div>
                    
                </form>
                </div>
           
            </div>
           
            </div> 
            </div>
        </div>
        <?php
          include("inc/db.php");

          if(isset($_POST['add_user']))
          {
              $pet_center_name = $_POST['pet_center_name'];
              $pet_center_password = $_POST['pet_center_password'];
              $email = $_POST['email'];
              $st = $_POST['st'];
              $contact_number = $_POST['contact_number'];
              $pet_center_photo = "userIcon.svg";
              $barangay = $_POST['barangays'];
              $municipality = $_POST['municipality'];
              $full_location = $_POST['full_location'];
            
              $verified = 0;

              $proof_photo = $_FILES['proof_photo']['name'];
              $proof_photo_tmp = $_FILES['proof_photo']['tmp_name'];
              
              move_uploaded_file($proof_photo_tmp,"../uploads/business_permits/$proof_photo");

              
              $view_email = $con->prepare("SELECT COUNT(*) AS pet_center_email FROM pet_center_tbl WHERE email = '$email'");
              $view_email->setFetchMode(PDO::FETCH_ASSOC);
              $view_email->execute();
  
              $row = $view_email->fetch();
  
              $view_name = $con->prepare("SELECT COUNT(*) AS pet_cent_name FROM pet_center_tbl WHERE pet_center_name = '$pet_center_name'");
              $view_name->setFetchMode(PDO::FETCH_ASSOC);
              $view_name->execute();
  
              $row2 = $view_name->fetch();
  
              if($row['pet_center_email']>0)
              {
                  echo "<script>alert('Email Exists');</script>";
              }
              elseif($row2['pet_cent_name']>0)
              {
                  echo "<script>alert('Name Exists');</script>";
              }
              elseif(!is_numeric($contact_number))
              {
                  echo "<script>alert('Only Digits Allowed!');</script>";
              }
              elseif(strlen($contact_number)>=12)
              {
                  echo "<script>alert('Number must at least 11 digits!');</script>";
              }
              elseif(strlen($pet_center_password) >= 9 &&
              preg_match('/[A-Z]/', $pet_center_password) > 0 &&
              preg_match('/[a-z]/', $pet_center_password) > 0)
              {
                  echo "<script>alert('Password must at least 8 characters in length!');</script>";
              }
              else
              {
                  
                  $add_service = $con->prepare("INSERT INTO pet_center_tbl 
                  SET
                  pet_center_name = '$pet_center_name',
                  pet_center_password = '$pet_center_password',
                  email = '$email',
                  st = '$st',
                  municipality = '$municipality',
                  barangay = '$barangay',
                  full_location = '$full_location',
                  contact_number = '$contact_number',
                  pet_center_photo = '$pet_center_photo',
                  verified = $verified,
                  business_permit = '$proof_photo'
                  ");
      
                  if($add_service->execute())
                  {
                      echo "
                      <script>
                      alert('Registered Successful, Please wait for the confirmation!');
                      if ( window.history.replaceState ) {
                      window.history.replaceState( null, null, window.location.href );
                  }            
                      </script>"; 
                      echo "<script>window.open('login.php', '_self');</script>";
                      
                  }
                  else
                  {
                      echo "<script>alert('Registered Unsuccessful!');</script>";
                  }
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
    </body>
    <style>
            *{
                padding: 0;
                margin: 0;
                font-family: Verdana, Geneva, Tahoma, sans-serif;
            }
            #mainCont{
                
                display: flex;
                justify-content: center;
                
            }

            .inner{
                background: white;
                box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
                width: 80%;
                margin-top: 7vh;
            }
            .innerist{
                padding: 30px;
                display: grid;
                grid-template-columns: 30% 70%;
            }
            #imageMain{
                height: 30vh;
            }
            #regs{
                background: #ffb830;
                  outline: none;
                  border: 1px solid #ffb830;
                  width: 150px;
                  padding: 10px;
                  border-radius: 10px;
                  margin-right: 10px;
                  color: white;
                  font-weight: bold;
                  margin-top: 30px;
            }
            .right{
                width: 100%;
            }
            .innerRight{
             
            }
            .inputer{
                padding: 10px;
                outline: none;
                margin-bottom: 20px;
                border:none;
                background: #fff;
                box-shadow: 0px 4px 8px 0px rgba(0, 0, 0, 0.1);
                height: 64px;
                font-weight: bold;
                width: 80%;
                font-family: "Varela Round", sans-serif;
                font-size: 16px;
                color: #777;
                margin-left: 10px;
            }
            h3{
                color: #999;
                margin-bottom: 10px;
            }
            ::placeholder {
            color: #aaa;
            font-weight: normal;
            font-size: 10px;
            }
            #innerer{
                padding: 30px;
                width: 30%;
            }
            #contInn{
                margin-left: 30px;
                margin-top: 2%;
                width: 90%;
            }
            .innerCon{  
              
                display: grid;
                grid-template-columns: 50% 50%;
            } 
            .ask{
                color: #888;
                font-size: 12px;
            }
            #backHome{
                border: 1px solid #ffb830;
                color: gray;
                width: 150px;
                padding: 10px;
                border-radius: 10px;
                margin-right: 10px;
                font-weight: bold;
                font-size: 14px;
                outline: none;
                cursor: pointer;
            }
            .heding{
                font-family: "Varela Round", sans-serif;
                font-size: 20px;
                font-weight: bold;
            }
            .mainLocForm{
                border: 1px solid #8ebbec;
                padding: 10px;
                border-radius: 8px;
                display: grid;
                grid-template-columns: 50% 50%;
            }
            .loc{
                box-shadow: rgba(17, 17, 26, 0.05) 0px 1px 0px,
                rgba(17, 17, 26, 0.1) 0px 0px 8px;
                width: 80%;
                margin-left: 10px;
                margin-bottom: 20px;
            }
            .inputs{
                height: 42px;
  width: 95%;
  margin-left: 5px;
  outline: none;
  border: none;
            }
            .miniHead{
            color: #aaa;
            font-size: 12px;
            margin-bottom: 10px;
            margin-top: 20px;
            }
            .label {
  font-size: 10px;
  font-family: "Varela Round", sans-serif;
  margin: 0;
  margin-top: 10px;
  margin-left: 5px;
  color: #888;
}
            #mandaue {
  display: none;
}
#Cebu {
  display: none;
}
#Consolacion {
  display: none;
}
#Lapulapu {
  display: none;
}
  



.drop-zone {
        width: 80%;
height: 50px;
padding: 6px;
display: flex;
align-items: center;
justify-content: center;
text-align: center;
font-family: "Quicksand", sans-serif;
font-weight: 500;
font-size: 14px;
cursor: pointer;
color: #777;
border: 2px dashed #009578;
border-radius: 10px;
margin-left: 5%;
        margin-bottom: 10px;
}

.drop-zone--over {
border-style: solid;
}

.drop-zone__input {
display: none;
}

.drop-zone__thumb {
width: 100%;
height: 100%;
border-radius: 10px;
overflow: hidden;
background-color: #cccccc;
background-size: cover;
position: relative;
}

.drop-zone__thumb::after {
content: attr(data-label);
position: absolute;
bottom: 0;
left: 0;
width: 100%;
padding: 5px 0;
color: #ffffff;
background: rgba(0, 0, 0, 0.75);
font-size: 14px;
text-align: center;
}
    </style>
</html>
