<?php 
include_once '../../include/connect.php';
session_start();
include 'session_set.php';

if (isset($_POST['submit'])) {
	$support_category = mysqli_real_escape_string($conn, $_POST['support_category']);
	$subject = mysqli_real_escape_string($conn, $_POST['subject']);
	$message = mysqli_real_escape_string($conn, $_POST['message']);
	$pin = mysqli_real_escape_string($conn, $_POST['pin']);

	if ($pin != $pincheck) {
		echo "Wrong PIN";
		exit();
	}


$sql1= "INSERT INTO support (support_category,subject,message,u_id,sender_id) VALUES('$support_category','$subject','$message', '$u_id', '$u_id')";
mysqli_query($conn, $sql1);



$sql3= "SELECT * FROM support WHERE u_id = $u_id";
$sql4= mysqli_query($conn, $sql3);
$row = mysqli_num_rows($sql4);
if ($row == 1) {
	while ($setsupport = mysqli_fetch_assoc($sql4)) {
		$_SESSION['u_id'] = $setsupport['u_id'];
		$_SESSION['s_id'] = $setsupport['s_id'];
		$_SESSION['subject'] = $setsupport['subject'];
		$_SESSION['message'] = $setsupport['message'];
		$_SESSION['support_category'] = $setsupport['support_category'];
	}
}

echo "SUCCESS";

	
}

else{
	echo "ERROR";
}

 ?>