<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>redirect</title>
</head>
<body>
<p>Redirecting</p>


<?php 
session_start();
header('refresh:3; ../users/index.php')
 ?>	
</body>
</html>