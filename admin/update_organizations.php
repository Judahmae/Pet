<!DOCTYPE html>
<html>
    <head>
        <title>Admin Panel</title>
        <link rel = "stylesheet" href="css/style.css" />
        <link rel = "stylesheet" href="css/updateOrd.css" />
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
<p class = 'hed'>Edit Organization</p>
<div class = 'body'>
<?php
    include("inc/db.php");

    if(isset($_POST['edit_org']))
    {
        $id = $_POST['edit_org'];
        $edit_details = $con->prepare("SELECT * FROM organizations WHERE id = '$id'");
        $edit_details->setFetchMode(PDO:: FETCH_ASSOC);
        $edit_details->execute();

        $row = $edit_details->fetch();

        echo
        "
     
        <form method = 'POST' action = 'edit_org.php' enctype = 'multipart/form-data'>
        
            <div class = 'inbodsDiv'>
                <p class = 'labes'>Organization Name</p>
                <input class = 'inp' type = 'text' name = 'org_name' value = '".$row['org_name']."' />
            </div>
            <div class = 'inbodsDiv'>
            <p class = 'labes'>Location</p>
                <input class = 'inp' type = 'text' name = 'org_location' value = '".$row['org_location']."' />
            </div>
            <div class = 'inbodsDiv'>
            <p class = 'labes'>Contact Number</p>
                <input class = 'inp' type = 'text' name = 'org_contact_number' value = '".$row['org_contact_number']."' />
            </div>
            <div class = 'inbodsDiv'>
            <p class = 'labes'>Gmail</p>
                <input  class = 'inp'  type = 'text' name = 'org_email_address' value = '".$row['org_email_address']."' /></td>
            </div>
            <div  class = 'inbodsDiv'>
                <p class = 'labes'>Bank Details (Optional)</p>
                <input class = 'inp' type = 'text' name = 'bank_details' value = '".$row['bank_details']."' />
            </div>
            <div  class = 'inbodsDiv'>
                 <p class = 'labes'>Website(Optional)</p>
                <input class = 'inp'  type = 'text' name = 'website' value = '".$row['website']."' />
            </div>
            <div  class = 'inbodsDiv'>
                 <p class = 'labes'>Paymaya(Optional)</p>
                <input class = 'inp' type = 'text' name = 'paymaya' value = '".$row['paymaya']."' />
            </div>
            <div  class = 'inbodsDiv'>
            <p class = 'labes'>Organizational Manager</p>
                <input class = 'inp' type = 'text' name = 'org_manager' value = '".$row['org_manager']."' />
            </div>
            <div  class = 'inbodsDiv'>
            <p class = 'labes'>Facebook(Optional)</p>
                <input class = 'inp' type = 'text' name = 'facebook' value = '".$row['facebook']."' />
            </div>
            
            <div class = 'inbodsDivs'>
                <p class = 'labes'>Organization Description</p>
                <input class = 'inp' type = 'text' name = 'org_details' value = '".$row['org_details']."' />
            </div>
            
        </form>
       ";
       echo
       "<form method = 'POST' enctype = 'multipart/form-data'>
       <div class = 'inbodsDiv' >
       <p class = 'labes'>Photo</p>

       <div class = 'unity'>
       <div class='drop-zone'>
       <span class='drop-zone__prompt'>Drop file here or click to upload</span>
       <input type='file' name = 'org_photo' class='drop-zone__input'>
       </div>
          
           <button class = 'imgbtn' name = 'update_img'>Update Image</button>
           </div>
           </div>
           <div class = 'btnS'>
            <button class = 'updateBtn' name = 'update' value = ".$row['id'].">Update</button>
            </div>
       </form>
       
     ";
    
        
      
    
    }
    if(isset($_POST['delete_org']))
    {
        $id = $_POST['delete_org'];
        $delete_org =$con->prepare("DELETE FROM organizations WHERE id = '$id'");
        $delete_org->setFetchMode(PDO:: FETCH_ASSOC);
        $delete_org->execute();

        if($delete_org->execute())
        {
            echo "<script>alert('Deleted Successfully!');</script>";
        }
    }

    if(isset($_POST['update_img']))
    {
        $org_photo = $_FILES['org_photo']['name'];
        $org_photo_tmp = $_FILES['org_photo']['tmp_name'];

        move_uploaded_file($org_photo_tmp,"../uploads/orgs/$org_photo");

        $upd_img = $con->prepare("UPDATE organizations SET org_photo = '$org_photo' WHERE id = '$id'");
        if($upd_img->execute())
        {
            echo "<script>alert('Updated Successfully!');</script>";
            echo "<script>window.open('manage_partner.php', '_self');</script>";
        }

    }
?>

</div>            
</div>
                </div>
                
            <?php
                include ("inc/footer.php"); 
            
        ?>
    </body>
<style>
    .btnS{
        height: 40px;
        margin-bottom: 3vh;
    }
    .unity{
        display: flex;
    }
    .imgbtn{
        margin-bottom: 5px;
        background: rgb(159, 207, 247);
        margin-left: -15px;
        padding: 10px;
        border-radius: 4px;
        border: none;
    }
    .updateBtn{
        float: right;
        margin-right: 5%;
        padding: 10px;
        border: none;
        border-radius: 4px;
        background: #ffb830;
        font-family: "Varela Round", sans-serif;
        font-size: 14px;
    }
    .inp{
    padding: 10px;
    margin-left: 10px;
    width: 80%;
    border: none;
    outline: none;
    font-weight: bold;
    font-size: 16px;
    font-family: "Varela Round", sans-serif;
}
.labes{
    font-size: 12px;
    font-family: "Varela Round", sans-serif;
    color: #888;
}
.formGrid{
    display: grid;
    grid-template-columns: 50% 50%;
    margin-top: 2vh;
}
.inbodsDiv{
    border: 1px solid blue;
    border-radius: 4px;
    margin-bottom: 10px;
    width: 95%;
    margin-left: 2%;
}
.inbodsDivs{
    border: 1px solid blue;
    border-radius: 4px;
    margin-bottom: 10px;
    width: 95%;
    margin-left: 2%;
}
.ledger{
    height: 100vh;
    width: 100%;

}
.body{
    margin-top: 7vh;
    margin-left: 10vw;
    background: #fff;
    width: 70%;
    border-radius: 5px;
    padding: 10px;
    box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.06) 0px 2px 4px -1px;
}
p{
    padding: 10px;
}
.selection {
background: #28287774;
}
.hed{
    font-size: 22px;
    font-weight: bold;
    color: white;
}
.gridnasad{
    display: grid;
    grid-template-columns:  20% 20% 20% 20% 20%;
    border-bottom: 1px solid #aaa;
}
#forming{
    display: grid;
    grid-template-columns: 20% 20% 20% 20% 20%;
    font-size: 14px;
    margin-top: 20px;
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
margin-bottom: 5px;
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






