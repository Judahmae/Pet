<!DOCTYPE html>
<html>
    <head>
        <title>Admin Panel</title>
        <link rel = "stylesheet" href="css/style.css" />
        <link rel = "stylesheet" href="css/add_part.css" />
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
                <li class = 'selection' ><a href="manage_partner.php">Manage Partners</a></li>
                <li><a href="ledger.php">Ledger</a></li>
            </ul>
        <li><a href = "/Pet/admin/products.php"><img src="../uploads/sales4.svg" class="navicons">Product Inventory</a></li>
        <li><a href = "/Pet/admin/add_products.php"><img src="../uploads/box.svg" class="navicons">Add Product</a></li>
        <li><a href = "/Pet/admin/viewall_products.php"><img src="../uploads/deliver.svg" class="navicons">Deliveries(<?php echo count_deliveries();?>)</a></li>
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
<p class = 'hed'>Add Organization</p>
<div>

    <div class = "body">
     
        <form method = "POST" enctype = "multipart/form-data"> 
        <div class = 'inbods'>
            <div class = 'inbodsDiv'>
                <p class = 'labes' >Organization Name</p>
                <input class = 'inp' type = "text" name = "org_name" />
            </div>
            <div  class = 'inbodsDiv'>
                <p class = 'labes'>Organization Location</p>
                <input class = 'inp' type = "text" name = "org_location" />
            </div>
            <div class = 'inbodsDiv'>
                <p class = 'labes'>Contact Number</p>
                <input class = 'inp' type = "text" name = "org_contact_number" />
            </div>
            <div class = 'inbodsDiv'>
                <p class = 'labes'>Email Address</p>
               <input  class = 'inp' type = "text" name = "org_email_address" />
            </div>
            <div  class = 'inbodsDiv'>
                <p class = 'labes'>Bank Detail</p>
                <input  class = 'inp' type = "text" name = "bank_details" />
            </div>
            <div  class = 'inbodsDiv'>
                <p class = 'labes'>Website</p>
                <input  class = 'inp' type = "text" name = "website" />
            </div>
            <div  class = 'inbodsDiv'>
                <p class = 'labes'>Paymaya</p>
                <input  class = 'inp' type = "text" name = "paymaya" />
            </div>
            <div  class = 'inbodsDiv'>
                <p class = 'labes'>Organization Manager</p>
                <input  class = 'inp' type = "text" name = "org_manager" />
            </div>
            <div  class = 'inbodsDiv'>
                <p class = 'labes'>Facebook</p>
                <input  class = 'inp' type = "text" name = "facebook" />
            </div>
            <div  class = 'inbodsDiv'>
                <p class = 'labes'>Photo</p>
               
                <div class="drop-zone">
                    <span class="drop-zone__prompt">Drop file here or click to upload</span>
                    <input type="file" name = 'org_photo' class="drop-zone__input">
                    </div>
            </div>
            
</div>
            <div  class = 'inbodsDivs'>
                <p class = 'labes'>About</p>
                <input  class = 'inp' type = "text" name = "description" />
            </div>
            <div class = 'adds'>
                <button class = 'addSave' name = "add_org">Add Organization</button>
            </div>
            </div>
            </div>
        </form>

    </div>
</div>

<?php
    echo add_partners();
?>

                </div>
                </div>
                
            <?php
                include ("inc/footer.php"); 
            
        ?>
    </body>



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
   <style>
      .inbodsDivs {
  width: 95%;
  margin-left: 2%;
  padding: 2px;
  border: 1px solid blue;
  border-radius: 4px;
  margin-bottom: 20px;
}
.addSave{
  border: none;
  outline: none;
  padding: 10px;
  float: right;
  background: #ffb830;
  border-radius: 4px;
  margin-right: 2%;
}
.adds{
  height: 40px;
}
   </style>
</html>




















