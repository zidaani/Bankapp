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
		header('Location: ../support.php?msgr=pin unmatch');
		exit();
	}


$sql1= "INSERT INTO support (support_category,subject,message,u_id,sender_id,status,receiver_id,sender,admin_status,message_type,s_u_name) VALUES('$support_category','$subject','$message', '$u_id', '$u_id','read','1','me','unread','new','$username')";
mysqli_query($conn, $sql1);



$sql3= "SELECT * FROM support WHERE u_id = $u_id";
$sql4= mysqli_query($conn, $sql3);
	while ($setsupport = mysqli_fetch_assoc($sql4)) {
		$_SESSION['s_id'] = $setsupport['s_id'];
		$_SESSION['subject'] = $setsupport['subject'];
		$_SESSION['message'] = $setsupport['message'];
		$_SESSION['support_category'] = $setsupport['support_category'];
	}


header('Location: ../support.php?msg=message sent');


}

else{

header('Location: ../support.php?msgr=error sending message');

}

 ?>