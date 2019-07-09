<?php 
include_once 'connect.php';

if (isset($_POST['register'])) {
	$fullname =mysqli_real_escape_string($conn, $_POST['fullname']);
	$username =mysqli_real_escape_string($conn, $_POST['username']);

    $title=mysqli_real_escape_string($conn, $_POST['title']);
  
    $branch=mysqli_real_escape_string($conn, $_POST['branch']);

	$email =mysqli_real_escape_string($conn, $_POST['email']);
	$phone=mysqli_real_escape_string($conn, $_POST['phone']);
	
	$password =mysqli_real_escape_string($conn, $_POST['password']);
	$password1 =mysqli_real_escape_string($conn, $_POST['password1']);

	$pin =mysqli_real_escape_string($conn, $_POST['pin']);
	$pin1 =mysqli_real_escape_string($conn, $_POST['pin1']);
	$terms =mysqli_real_escape_string($conn, $_POST['terms']);
	

	// ========= PHP code checks =========== 

if (empty($fullname)) {
	header('Location: ../membership.php?action=signup&msgr=Enter Fullname');
	exit();
  }

if (empty($username)) {
	header('Location: ../membership.php?action=signup&msgr=Enter Username');
	exit();
  }

if (empty($email)) {
	header('Location: ../membership.php?action=signup&msgr=Enter Email');
	exit();
  }

if (empty($phone)) {
	header('Location: ../membership.php?action=signup&msgr=Enter Phone Number');
	exit();
  }

if (empty($password)) {
	header('Location: ../membership.php?action=signup&msgr=Enter Password');
	exit();
  }
if (empty($password1)) {
	header('Location: ../membership.php?action=signup&msgr=Re-enter Password');
	exit();
  }
  if ($password != $password1) {
	header('Location: ../membership.php?action=signup&msgr=Password Mismatch');
	exit();
  }
    if (empty($pin)) {
	header('Location: ../membership.php?action=signup&msgr=Enter Pin');
	exit();
  }
    if (empty($pin1)) {
	header('Location: ../membership.php?action=signup&msgr=Re-enter Pin');
	exit();
  }
   if ($pin != $pin1) {
	header('Location: ../membership.php?action=signup&msgr=Pin Mismatch');
	exit();
  }
     if (empty($terms)) {
	header('Location: ../membership.php?action=signup&msgr=Agree To Our Temrs Before Signup');
	exit();
  }



	$checkemail= "SELECT * FROM users WHERE email='$email' ";
	$checkemailresult = mysqli_query($conn, $checkemail);
    
  


     if(mysqli_num_rows($checkemailresult)>0){
         header('Location: ../membership.php?action=signup&msgr=Email Already Exist');
	}
    else {
    	 $checkuname= "SELECT * FROM users WHERE username='$username'";
		$checkunameresult = mysqli_query($conn, $checkuname);

		if (mysqli_num_rows($checkunameresult)>0) {
         header('Location: ../membership.php?action=signup&msgr=Email Already Exist Choose Another one');
    	  }
    	       else {

					 $password = md5($password);
					

					   $sql = "INSERT INTO users (fullname,username,title,branch,email,phone,password,pin,status,dp,user_type) VALUES('$fullname','$username','$title','$branch','$email','$phone','$password','$pin','pending','../img/aboutus.jpg','user')";


					   $result=mysqli_query($conn,$sql);
					   

					if (empty($result)) {
						header('Location: ../membership.php?action=signup&msgr=Signup failed');
					}
					
					else {
						
						header('Location: signup_redirect.php');
                        
					}

    	}

 }


}
?>


