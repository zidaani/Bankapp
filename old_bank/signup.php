
<?php 
include_once 'include/connect.php';

if (isset($_POST['submit'])) {
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
	
	

	// ========= PHP code checks =========== 

if (empty($fullname)) {
	echo "Enter Full Name";
	exit();
  }

if (empty($username)) {
	echo "ENTER USERNAME";
	exit();
  }

if (empty($email)) {
	echo "ENTER EMAIL";
	exit();
  }

if (empty($phone)) {
	echo "ENTER PHONE";
	exit();
  }

if (empty($password)) {
	echo "ENTER PASSWORD";
	exit();
  }
if (empty($password1)) {
	echo "ENTER CONFIRM PASSWORD";
	exit();
  }
  if ($password != $password1) {
	echo "PASSWORD LOOKS DIFFERENT";
	exit();
  }
   if ($pin != $pin1) {
	echo "YOUR PIN CODE LOOKS DIFFERENT";
	exit();
  }



	$checkemail= "SELECT * FROM users WHERE email='$email' ";
	$checkemailresult = mysqli_query($conn, $checkemail);
    
  


     if(mysqli_num_rows($checkemailresult)>0){
         echo "<script> alert('Email already exist');</script>";
	}
    else {
    	 $checkuname= "SELECT * FROM users WHERE username='$username'";
		$checkunameresult = mysqli_query($conn, $checkuname);

		if (mysqli_num_rows($checkunameresult)>0) {
         echo "<script> alert('username already exist');</script>";
    	  }
    	       else {

					 $password = md5($password);
					

					   $sql = "INSERT INTO users (fullname,username,title,branch,email,phone,password,pin,status,dp,user_type) VALUES('$fullname','$username','$title','$branch','$email','$phone','$password','$pin','pending','../img/aboutus.jpg','user')";


					   $result=mysqli_query($conn,$sql);
					   

					if (empty($result)) {
						echo "<script> alert('Registration failed');</script>";
					}
					
					else {
						
						header('Location: include/signup_redirect.php');
                        
					}

    	}

 }


}
?>

 <?php

if (empty($_SESSION['username'])){
  


 ?> 


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Focus Planets</title>
  <link rel="stylesheet" href="bootstrap-4/css/bootstrap.css">
  <link rel="stylesheet" href="bootstrap-4/css/style.css">
	<title>Document</title>
</head>
<body>

	<div class="container">
		<div class="row justify-content-center">
			<div class="panel-default">
				<h2><a href="signup.php">REGISTER </a> </h2>

	<form method="post" action="signup.php" class="form-control" name="signupform">

	    <select name="title" >
    	<option value="MR.">Mr.</option>
    	<option value="Mrs">Mrs.</option>
        </select> 	

	<input type="text" name="fullname" placeholder="Enter your fullname"> <br><br>


        <select name="branch" >
		<?php include 'include/branch.php'; ?>
        </select> <br>
    <input type="text" name="username" placeholder="Enter username"> <br> <br>
    <input type="text" name="email" placeholder="Enter your Email"> <br><br>
	<input type="phone" name="phone" placeholder="e.g. +233248924166"> <br> <br>
	<input type="password" name="pin" placeholder="Enter your pin"> <br><br>
	<input type="password" name="pin1" placeholder="Repeat your Pin"> <br><br>
	<input type="password" name="password" placeholder="Enter your password"> <br><br>
	<input type="password" name="password1" placeholder="Repeat your password"> <br><br>
    <input type="submit" name="submit" value="Register"> <br><br>
				</form>

			</div>
		</div>
	</div>
	

<script src="bootstrap-4/js/slim.js" ></script>
<script src="bootstrap-4/js/bootstrap.js" ></script>
<script src="bootstrap-4/js/jquerry.js" ></script>	
<?php } ?>
</body>
</html>

 


