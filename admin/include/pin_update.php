<?php 

include_once '../../include/connect.php';
session_start();

include_once 'session_set.php';

if (isset($_POST['pinchange'])) {

 
  $pin=mysqli_real_escape_string($conn, $_POST['pin']);
  $pin1=mysqli_real_escape_string($conn, $_POST['pin1']);
   $oldpin=mysqli_real_escape_string($conn,$_POST['oldpin']);


  if ($pin != $pin1) {
    
     header('Location: ../edit_profile.php?msg=pin unmatch');
   
    exit();
  }

 if (empty($oldpin)) {
  header('Location: ../edit_profile.php?msg=empty old pin');
    
    exit();
   }

   if (empty($pin)) {
  header('Location: ../edit_profile.php?msg=empty first pin');
    
    exit();
   }

   if (empty($pin1)) {
  header('Location: ../edit_profile.php?msg=confirm pin');
    
    exit();
   }
 

  if ($pincheck != $oldpin) {
   header('Location: ../edit_profile.php?msg=wrong old pin');
 
    exit();
   }



 $sqll1 = "SELECT * FROM users WHERE username='$username' and u_id='$u_id'";
 $sqll2 = mysqli_query($conn,$sqll1);
 $sqllrow =mysqli_num_rows($sqll2);



 if ($sqllrow==1) {
   
  $sqll3 = "UPDATE users SET pin = '$pin'  WHERE u_id = '$u_id' ";

  $profillequerry = mysqli_query($conn,$sqll3);
 


   $profileq = mysqli_query($conn,"SELECT * FROM users WHERE username='$username' and u_id='$u_id'");
   while ($profileqq = mysqli_fetch_assoc($profileq)) {
    
     $_SESSION['pin'] =$profileqq ['pin'];
   }
 
 


   header('Location: ../edit_profile.php?msg=successful profile update');

 }

 else{
   header('Location: ../edit_profile.php?msg=unsuccessful profile update');
  
 }

}





if (isset($_POST['passwordchange'])) {

 
  $password1=md5(mysqli_real_escape_string($conn, $_POST['password']));
  $password2=mysqli_real_escape_string($conn, $_POST['password1']);
   $password=md5(mysqli_real_escape_string($conn,$_POST['oldpassword']));


  if ($password1 != $password1) {
    
     header('Location: ../edit_profile.php?msg=pin unmatch');
   
    exit();
  }

 if (empty($password)) {
  header('Location: ../edit_profile.php?msg=empty old pin');
    
    exit();
   }

   if (empty($password1)) {
  header('Location: ../edit_profile.php?msg=empty first pin');
    
    exit();
   }

   if (empty($password2)) {
  header('Location: ../edit_profile.php?msg=confirm pin');
    
    exit();
   }
 

  if ($passwordcheck != $password) {

header('Location: ../edit_profile.php?msg=wrong old pin');
    exit();
   }



 $sqll1 = "SELECT * FROM users WHERE username='$username' and u_id='$u_id'";
 $sqll2 = mysqli_query($conn,$sqll1);
 $sqllrow =mysqli_num_rows($sqll2);



 if ($sqllrow==1) {
   
  $sqll3 = "UPDATE users SET password = '$password1'  WHERE u_id = '$u_id' and username='$username' ";

  $profillequerry = mysqli_query($conn,$sqll3);
 


   $profileq = mysqli_query($conn,"SELECT * FROM users WHERE username='$username' and u_id='$u_id'");
   while ($profileqq = mysqli_fetch_assoc($profileq)) {
    
     $_SESSION['admin_password'] =$profileqq ['password'];
   }
 
 


   header('Location: ../edit_profile.php?msg=successful profile update');

 }

 else{
   header('Location: ../edit_profile.php?msg=unsuccessful profile update');
  
 }

}








?>
