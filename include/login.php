<?php 

include_once 'connect.php';
if (isset($_POST['login'])) {
	
	$email =mysqli_real_escape_string($conn, $_POST['email']);
	$password =md5(mysqli_real_escape_string($conn, $_POST['password']));


 

    $checkconn= "SELECT * FROM users WHERE email='$email' and password='$password' and user_type='user'";
		$checkconnresult = mysqli_query($conn, $checkconn);
		$row =mysqli_num_rows($checkconnresult);
               
         if ($row==1){

         	while ($info=mysqli_fetch_assoc($checkconnresult)) {
          session_start();
           $_SESSION['u_id']= $info['u_id'];
           $_SESSION['fullname'] = $info['fullname'];
         }

         header('Location: login_redirect.php'); 
         	}
 
	else{
		header('Location: ../membership.php?action=login&msgr=Login failed');

		exit();
	}



}



 ?>
