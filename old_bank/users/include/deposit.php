<?php

include_once '../../include/connect.php';
session_start();
include 'session_set.php';


if (isset($_POST['deposit'])) {


$amount = mysqli_real_escape_string($conn,$_POST['amount']);
$pin = mysqli_real_escape_string($conn,$_POST['pin']);
    

if ($pin != $pincheck) {
 header('Location: ../deposit.php?msg=wrong pin code');
 exit();
}

if (empty($pin)) {
 header('Location: ../deposit.php?msg=pin code empty');
 exit();
}

if ($pin == $pincheck) {
	

$inserthistory = "INSERT INTO transaction (a_number,u_id,amount_credit,t_name,amount,balance,status) VALUES('$a_number','$u_id','$amount','deposit','$amount','$balance','pending')";

mysqli_query($conn,$inserthistory);

 $newbalancet = mysqli_query($conn, "SELECT * FROM transaction WHERE u_id = '$u_id' and t_id='$t_id'");
 while ($getbalancet = mysqli_fetch_assoc($newbalancet)) {
 	$_SESSION['t_id'] = $getbalancet['t_id'];
  $_SESSION['amount_credit']=$getbalancet['amount_credit'];
  $_SESSION['amount_debit']=$getbalancet['amount_debit'];
  $_SESSION['status'] = $getbalancet['status'];

 
 }


header('Location: ../deposit.php?msg=successfull deposit');

}


else{

header('Location: ../deposit.php?msg=unsuccessful transaction');
}


	



}
 ?>
