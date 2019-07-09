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
				<h2>LOGIN</h2>

	<form method="POST" action="include/login.php" class="form-control" name="loginform">
	<input type="text" name="username" placeholder="Enter your username"> <br><br>
		
	<input type="password" name="password" placeholder="Enter your password"> <br><br>

	

    <input type="submit" name="submit" value="LOGIN" onclick=""> <br><br>
				</form>

			</div>
		</div>
	</div>
	

<script src="bootstrap-4/js/slim.js" ></script>
<script src="bootstrap-4/js/bootstrap.js" ></script>
<script src="bootstrap-4/js/jquerry.js" ></script>	


</body>
</html>

<?php } ?>