<!DOCTYPE html>
<html>
    <head>
        <title>Admin Panel</title>
        <link rel = "stylesheet" href="css/style.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fredoka&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300;400&family=Nunito:wght@200&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&family=Rubik:wght@500&family=Varela+Round&display=swap" rel="stylesheet">
    </head>

    <body>
    <?php 
           
                include ("inc/db.php");
                include ("inc/function.php"); 
                include ("inc/header.php"); 
                include ("inc/navbar.php"); 
                ?>
                <div class="mainContainer">
                <div id = "bodyleft">
<div class="leftBody">
      <ul class = 'mainUl'>
        <li class =  "donate"><a href = "index.php"><img src="../uploads/donation2.1.svg" class="navicons">Donations</a></li>
            <ul class="subList">
                <li><a href="coupons.php">Coupon Application</a></li>
                <li><a href="manage_partner.php">Manage Partners</a></li>
                <li><a href="ledger.php">Ledger</a></li>
            </ul>
        <li><a href = "/Pet/admin/products.php"><img src="../uploads/sales4.svg" class="navicons">Sales Inventory</a></li>
        <li class = 'selection' ><a href = "/Pet/admin/add_products.php"><img src="../uploads/box.svg" class="navicons">Add Product</a></li>
        <li><a href = "/Pet/admin/deliveries.php"><img src="../uploads/deliver.svg" class="navicons">Deliveries(<?php echo count_deliveries();?>)</a></li>
        <li><a href = "/Pet/admin/viewall_orders.php"><img src="../uploads/deliver.svg" class="navicons">Orders(<?php echo count_orders();?>)</a></li>
        <li><a href= "/Pet/admin/users.php"><img src="../uploads/user.svg" class="navicons">Users</a></li> 
        <li><a href= "/Pet/admin/sales.php"><img src="../uploads/deliver.svg" class="navicons">Generate Report</a></li>
        <li><a href= "/Pet/admin/petcenterApplication.php"><img src="../uploads/deliver.svg" class="navicons">Pet Center Application</a></li>
        </ul>
</div>
         <div div class="leftFooter">
          <div class="iconContainer">
            <img src="../uploads/settings.svg" class="footicons">
            <img src="../uploads/notification.svg" class="footicons">
        </div>
        </div>
</div>
<div id="bodyright">
<p class = 'hed'>Add Products</p>
    <div class="body">
    <div class = 'addProduct'>
        
        <form method = 'POST' enctype = 'multipart/form-data'>
            <div class='formleft'>
    
            </div>
            <div class='formright'>
    
            </div>
            <div class = 'mainIntus'>
                <div class = 'inputHolder'>
                    <p id = 'lebelss'>Enter Product Name: </p>
                    <input class = 'intus' type='text' name = 'pro_name' required/>
                </div>
                <div class = 'inputHolder'>
                    <p id = 'lebelss'>Select Category Name: </p>
                    
                        <select  class = 'intus' name = 'cat_name'>
             
                              <?php  echo viewall_cat(); ?>
                            
                      </select>
                    
                </div>
               
                <div class = 'inputHolder'>
                    <p  id = 'lebelss'>Enter Product Brand: </p>
                    <input class = 'intus' type='text' name = 'pro_brand' required />
                </div>
                <div class = 'inputHolder'>
                <div class="drop-zone">
                    <span class="drop-zone__prompt">Drop file here or click to upload</span>
                    <input type="file" name = 'pro_img' class="drop-zone__input">
                    </div>
                </div>
                
                <div class = 'inputHolder'>
                    <p  id = 'lebelss'>Price: </p>
                    <input class = 'intus'  type= 'text' name = 'pro_price' required/>
                </div>
                <div class = 'inputHolder'>
                    <p  id = 'lebelss'>Quantity: </p>
                    <input class = 'intus'  type='text' name = 'pro_quantity' required/></td>
                </div>
                <div class = 'inputHolder'>
                    <p  id = 'lebelss'>Description: </p>
                    <input class = 'intus' type= 'text' name = 'pro_keyword' required/></td>
                </div>
                <div></div><div></div>
               
         
                
            </div>
            <div class = 'btsn'>
            <button class= 'add' name = 'add_prod'>Add Product</button>
            </div>
          
        </form>
        <?php add_product(); ?>
        </div>
                </div>
                </div>
                
            <?php
                include ("inc/footer.php"); 
            
        ?>
    </div>
               
    </body>
    <style>
    .addProduct {

      width: 100%;
      }
      .selection {
  background: #28287774;
}
.mainIntus{
    display: grid;
    grid-template-columns: 33% 33% 33%;
    row-gap: 10px;
    margin: 2vh 0vh 5vh 0vh;
}
.body{
        margin-top: 7vh;
        background: #fff;
       
        width: 95%;
        border-radius: 5px;
        padding: 10px;
        margin-left: 20px;
        box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.06) 0px 2px 4px -1px;

    }
    .add{
        height: 52px;
        float: right;
        margin-right: 5%;
        padding: 10px;
        border: none;
        outline: none;
        color: white;
        background: #ffb830;
        border-radius: 5px;
        width: 10%;

    }
    
    .hed{
        font-size: 22px;
        font-weight: bold;
        color: white;
        padding: 10px;
    }
    
    .inputHolder{
        width: 90%;
        margin-left: 5%;
        padding: 5px;
        box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
    }
    #lebelss{
        font-size: 12px;
        color: #888;
    }
    .intus{
        height: 42px;
        width: 90%;
        border: none;
        outline: none;
        padding: 5px;

    }

    .btsn{
      height: 40px;
      margin-bottom: 3vh;
    }


    .drop-zone {
            width: 80%;;
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
    



    <script>
        var month = ["January", "February", "March", "April", "May", "June","July", "August", "September", "October", "November", "December"];
        var today = new Date();
        var date = today.getFullYear()+'-'+month[(today.getMonth())]+'-'+today.getDate();
        var date2 = month[(today.getMonth())]+' '+today.getDate()+' '+today.getFullYear();
        document.getElementById("currentDate").innerHTML = date2;





        document.querySelectorAll(".drop-zone__input").forEach((inputElement) => {
  const dropZoneElement = inputElement.closest(".drop-zone");

  dropZoneElement.addEventListener("click", (e) => {
    inputElement.click();
  });

  inputElement.addEventListener("change", (e) => {
    if (inputElement.files.length) {
      updateThumbnail(dropZoneElement, inputElement.files[0]);
    }
  });

  dropZoneElement.addEventListener("dragover", (e) => {
    e.preventDefault();
    dropZoneElement.classList.add("drop-zone--over");
  });

  ["dragleave", "dragend"].forEach((type) => {
    dropZoneElement.addEventListener(type, (e) => {
      dropZoneElement.classList.remove("drop-zone--over");
    });
  });

  dropZoneElement.addEventListener("drop", (e) => {
    e.preventDefault();

    if (e.dataTransfer.files.length) {
      inputElement.files = e.dataTransfer.files;
      updateThumbnail(dropZoneElement, e.dataTransfer.files[0]);
    }

    dropZoneElement.classList.remove("drop-zone--over");
  });
});

/**
 * Updates the thumbnail on a drop zone element.
 *
 * @param {HTMLElement} dropZoneElement
 * @param {File} file
 */
function updateThumbnail(dropZoneElement, file) {
  let thumbnailElement = dropZoneElement.querySelector(".drop-zone__thumb");

  // First time - remove the prompt
  if (dropZoneElement.querySelector(".drop-zone__prompt")) {
    dropZoneElement.querySelector(".drop-zone__prompt").remove();
  }

  // First time - there is no thumbnail element, so lets create it
  if (!thumbnailElement) {
    thumbnailElement = document.createElement("div");
    thumbnailElement.classList.add("drop-zone__thumb");
    dropZoneElement.appendChild(thumbnailElement);
  }

  thumbnailElement.dataset.label = file.name;

  // Show thumbnail for image files
  if (file.type.startsWith("image/")) {
    const reader = new FileReader();

    reader.readAsDataURL(file);
    reader.onload = () => {
      thumbnailElement.style.backgroundImage = `url('${reader.result}')`;
    };
  } else {
    thumbnailElement.style.backgroundImage = null;
  }
}
    </script>
</html>


