<?php 

include_once '../../include/connect.php';
session_start();

include_once 'session_set.php';

if (isset($_POST['update'])) {

  
 
  $dob=mysqli_real_escape_string($conn, $_POST['dob']);
  $national_id_type=mysqli_real_escape_string($conn, $_POST['national_id_type']);
  $national_id_number=mysqli_real_escape_string($conn, $_POST['national_id_number']);
  $oldpin=mysqli_real_escape_string($conn,$_POST['oldpin']);
 




  

   if (empty($oldpin)) {
  header('Location: ../edit_profile.php?msg=empty old pin');
    
    exit();
   }
 

  if ($pincheck != $oldpin) {
   header('Location: ../edit_profile.php?msg=wrong old pin');
 
    exit();
   }


  $dp = $_FILES['dp']['name'];
  $dptmp = $_FILES['dp']['tmp_name'];
  $dppath = "../img/".$dp;
  move_uploaded_file($dppath, $dptmp);

 $sql1 = "SELECT * FROM users WHERE username='$username' and u_id='$u_id'";
 $sql2 = mysqli_query($conn,$sql1);
 $sqlrow =mysqli_num_rows($sql2);


// check old pin code




 if ($sqlrow==1) {
   
  $sql3 = "UPDATE users SET dob = '$dob', national_id_number = '$national_id_number', national_id_type = '$national_id_type', dp ='$dppath'  WHERE u_id = '$u_id'";

  $profilequerry = mysqli_query($conn,$sql3);
  $_SESSION['dp'] = $dppath;
  


   header('Location: ../edit_profile.php?msg=successful profile update');

 }

 else{
   header('Location: ../edit_profile.php?msg=unsuccessful profile update');
  
 }
 

}











?>
