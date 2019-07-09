<?php 
session_start();
include_once 'connect.php';
if (isset($_POST['submit'])) {
	
	$username =mysqli_real_escape_string($conn, $_POST['username']);
	$password =md5(mysqli_real_escape_string($conn, $_POST['password']));


 

    $checkconn= "SELECT * FROM users WHERE username='$username' and password='$password' and user_type='user'";
		$checkconnresult = mysqli_query($conn, $checkconn);
		$row =mysqli_num_rows($checkconnresult);
               
         if ($row==1){

         	while ($info=mysqli_fetch_assoc($checkconnresult)) {
          
           $_SESSION['u_id']= $info['u_id'];
           $u_id = $_SESSION['u_id'];
         }


         header('Location: login_redirect.php'); 
         	}

      
          
	else{
		echo "Login Failed";
		header('refresh:1; ../login.php');
		exit();
	}



}



 ?>
