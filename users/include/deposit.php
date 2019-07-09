<?php

include_once '../../include/connect.php';
session_start();
include 'session_set.php';


if (isset($_POST['deposit'])) {


$amount = mysqli_real_escape_string($conn,$_POST['amount']);
$pin = mysqli_real_escape_string($conn,$_POST['pin']);

// Generate Token

$rand=rand(1, 100);$rand1=rand(100, 200);$rand2=rand(200, 300);$rand3=rand(300, 400);
$str="KDWNQEI{$rand}N38E3N88N3{$rand1}78HJ4WMF{$rand2}K60H079U0JM004893H2DV27{$rand3}VS26CS72D";
$token=substr(str_shuffle($str),2,4); 
//End Token    

if ($pin != $pincheck) {
 header('Location: ../deposit.php?msgr=wrong pin code');
 exit();
}

if (empty($pin)) {
 header('Location: ../deposit.php?msgr=pin code empty');
 exit();
}
// check if there is a pending deposit
 $check_pending = mysqli_query($conn, "SELECT * FROM transaction WHERE u_id='$u_id' AND t_name='deposit' AND status='pending' OR status='unconfirmed' ");
 if(mysqli_num_rows($check_pending)>0){
header('Location: ../deposit.php?msgr=There is a pending deposit');
 exit();  
 }

if ($pin == $pincheck) {
$inserthistory = "INSERT INTO transaction (a_number,u_id,amount_credit,t_name,amount,balance,status,transaction_token) VALUES('$a_number','$u_id','$amount','deposit','$amount','$balance','unconfirmed','$token')";

mysqli_query($conn,$inserthistory);

 $newbalancet = mysqli_query($conn, "SELECT * FROM transaction WHERE u_id = '$u_id' AND status='unconfirmed' ORDER BY t_id DESC LIMIT 1");
 while ($getbalancet = mysqli_fetch_assoc($newbalancet)) {
  $_SESSION['user_deposit_id'] = $getbalancet['t_id'];
  $_SESSION['amount_credit']=$getbalancet['amount_credit'];
  $_SESSION['amount_debit']=$getbalancet['amount_debit'];
  $_SESSION['status'] = $getbalancet['status'];

 
 }
header('Location: ../deposit_confirm.php');
}


else{

header('Location: ../deposit_confirm.php?msgr=Deposit Unsuccessful');
}


	



}
 ?>
