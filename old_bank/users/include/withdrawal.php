<?php

include_once '../../include/connect.php';
session_start();
include 'session_set.php';

if (isset($_POST['withdraw'])) {

   $amount = mysqli_real_escape_string($conn,$_POST['amount']);
   $pin = mysqli_real_escape_string($conn,$_POST['pin']);


   if ($pin != $pincheck) {
 header('Location: ../withdrawal.php?msg=wrong pin code');
 exit();
}

if (empty($pin)) {
 header('Location: ../withdrawal.php?msg=pin code empty');
 exit();
}
    

$depchecka = "SELECT * FROM account_table WHERE u_id = '$u_id' and a_number='$a_number' ";


$newbalance = mysqli_query($conn, $depchecka);
 while ($getbalancea = mysqli_fetch_assoc($newbalance)) {
  $_SESSION['balance']=$getbalancea['balance'];
 }
$balancea = $_SESSION['balance'];


$depcheckt = "SELECT * FROM transaction WHERE u_id = '$u_id' and a_number='$a_number' ";

$depquerry = mysqli_query($conn,$depcheck);
$row = mysqli_num_rows($depquerry);

if ($row=1) {

// $depositinsert = "UPDATE  account_table SET balance = ('$balance' - '$amount') WHERE u_id =$u_id";



$inserthistory = "INSERT INTO transaction (a_number,u_id,amount_debit,t_name,amount,balance,status) VALUES('$a_number','$u_id','$amount','withdrawal','$amount','$t_balance' - '$amount','pending')";

//UPDATE ACCOUNT TABLE AFTER WITHDRAWAL REQUEST

$account_update = "UPDATE  account_table SET balance = ('$balancea'-'$amount')  WHERE u_id ='$u_id' and a_number = '$a_number' ";


mysqli_query($conn,$account_update);


// mysqli_query($conn,$depositinsert);

mysqli_query($conn,$inserthistory);

 
$depcheckaset = "SELECT * FROM account_table WHERE u_id = '$u_id' and a_number='$a_number' ";


$newbalanceset = mysqli_query($conn, $depcheckaset);
 while ($getbalanceaset = mysqli_fetch_assoc($newbalanceset)) {
  $_SESSION['balance']=$getbalanceaset['balance'];
 } 


header('Location: ../withdrawal.php?msg=successfull transaction');


}

else{

	header('Location: ../withdrawal.php?msg=unsuccessful transaction');
}

	



}
 ?>
