<?php
include("inc/db.php");
  if(isset($_POST['update']))
  {
      $org_id = $_POST['update'];
      $org_name = $_POST['org_name'];
      $org_location = $_POST['org_location'];
      $org_contact_number = $_POST['org_contact_number'];
      $org_email_address = $_POST['org_email_address'];
      $bank_details = $_POST['bank_details'];
      $website = $_POST['website'];
      $paymaya = $_POST['paymaya'];
      $org_manager = $_POST['org_manager'];
      $facebook = $_POST['facebook'];
      $org_details = $_POST['org_details'];

    //   var_dump($org_id);
    //   var_dump($org_name);
    //   var_dump($org_location);
    //   var_dump($org_contact_number);
    //   var_dump($org_email_address);
    //   var_dump($bank_details);
    //   var_dump($website);
    //   var_dump($paymaya);
    //   var_dump($org_manager);
    //   var_dump($facebook);
      $update_org = $con->prepare("UPDATE organizations 
      SET 
      org_name='$org_name',
      org_location='$org_location',
      org_contact_number='$org_contact_number',
      org_email_address='$org_email_address',
      bank_details='$bank_details',
      website='$website',
      paymaya='$paymaya',
      org_manager='$org_manager',
      facebook='$facebook',
      org_details='$org_details'
      WHERE 
      id = '$org_id'");

      if($update_org->execute())
      {
          echo "<script>alert('Updated Successfully!');</script>";
          echo "<script>window.open('manage_partner.php', '_self');</script>";
      }
      else
      {
          echo "<script>alert('UNSUCCESSFUL');</script>";
      }
  }
?>