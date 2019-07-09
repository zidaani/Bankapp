<?php

include_once '../../include/connect.php';
session_start();
include 'session_set.php';

if (isset($_POST['withdraw'])) {

   $amount = mysqli_real_escape_string($conn,$_POST['amount']);
   $payment_gateway=mysqli_real_escape_string($conn,$_POST['payment_gateway']);
   $gateway_number=mysqli_real_escape_string($conn,$_POST['gateway_number']);
   $pin = mysqli_real_escape_string($conn,$_POST['pin']);


   if ($pin != $pincheck) {
 header('Location: ../withdrawal.php?msgr=wrong pin code');
 exit();
}

if (empty($pin) OR empty($gateway_number) OR empty($payment_gateway) ) {
 header('Location: ../withdrawal.php?msgr=Please Complete Form');
 exit();
}
 // CHECK if there is a pending withdrawal
 $check_withdraw=mysqli_query($conn,"SELECT * FROM transaction WHERE u_id= '$u_id' AND t_name='withdrawal' AND status='pending' OR status='unconfirmed'");
 if($withcheck=mysqli_num_rows($check_withdraw)>0){
  header('Location: ../withdrawal.php?msgr=There is a pending withdrawal');
 exit();   
 }
 
 //check if balance is enough for withdrawal
 $balcheck = mysqli_query($conn, "SELECT * FROM account_table WHERE u_id='$u_id' AND a_number='$a_number' ");
 while ($getbalcheck = mysqli_fetch_assoc($balcheck)) {
  $balancecheck=$getbalcheck['balance'];
 }
if($amount>$balancecheck){
   header('Location: ../withdrawal.php?msgr=insufficient balance! Please deposit');
 exit();    
}


//Get new Balance
$depchecka = "SELECT * FROM account_table WHERE u_id = '$u_id' and a_number='$a_number' ";
$newbalance = mysqli_query($conn, $depchecka);
 while ($getbalancea = mysqli_fetch_assoc($newbalance)) {
  $_SESSION['balance']=$getbalancea['balance'];
 }
$balancea = $_SESSION['balance'];


$depcheckt = "SELECT * FROM account_table WHERE u_id = '$u_id' and a_number='$a_number' ";

$depquerry = mysqli_query($conn,$depcheck);
$row = mysqli_num_rows($depquerry);

if ($row=1) {


$inserthistory = "INSERT INTO transaction (a_number,u_id,amount_debit,t_name,amount,balance,status,payment_gateway,gateway_number) VALUES('$a_number','$u_id','$amount','withdrawal','$amount','$t_balance' - '$amount','pending','$payment_gateway','$gateway_number')";

//UPDATE ACCOUNT TABLE AFTER WITHDRAWAL REQUEST

$account_update = "UPDATE  account_table SET balance = ('$balancea'-'$amount')  WHERE u_id ='$u_id' and a_number = '$a_number' ";


mysqli_query($conn,$account_update);

// INSERT HISTORY
mysqli_query($conn,$inserthistory);

 
$depcheckaset = "SELECT * FROM account_table WHERE u_id = '$u_id' and a_number='$a_number' ";


$newbalanceset = mysqli_query($conn, $depcheckaset);
 while ($getbalanceaset = mysqli_fetch_assoc($newbalanceset)) {
  $_SESSION['balance']=$getbalanceaset['balance'];
 } 


header('Location: ../withdrawal.php?msg=successfull transaction');


}

else{

	header('Location: ../withdrawal.php?msgr=unsuccessful transaction');
}

	



}
 ?>
