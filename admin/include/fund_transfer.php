<?php

include_once '../../include/connect.php';
session_start();
include 'session_set.php';


if (isset($_POST['manipulate'])) {
 
   $amount = mysqli_real_escape_string($conn,$_POST['amount']);
   $receiver = mysqli_real_escape_string($conn,$_POST['beneficiary']);
   $sender = mysqli_real_escape_string($conn,$_POST['sender']);
   $t_id = mysqli_real_escape_string($conn,$_POST['t_id']);
   $status = mysqli_real_escape_string($conn,$_POST['status']);




 if ($status=='reverse') {
 

$depcheck = "SELECT * FROM transaction WHERE t_id = '$t_id' ";
$depquerry = mysqli_query($conn,$depcheck);
$row = mysqli_num_rows($depquerry);
if ($row==1) {


$tan1 = "SELECT * FROM account_table WHERE a_number='$sender' ";
$tan2 = mysqli_query($conn,$tan1);
while ($tanset = mysqli_fetch_assoc($tan2)) {
$s_balance=$tanset['balance'];
}
 // subtract from senders account
$depositinsert = "UPDATE  account_table SET balance = ('$s_balance' + '$amount') WHERE a_number='$sender'";

mysqli_query($conn,$depositinsert);
// Insert into receivers account


$tran1 = "SELECT * FROM account_table WHERE a_number='$receiver' ";
$tran2 = mysqli_query($conn,$tran1);
while ($transet = mysqli_fetch_assoc($tran2)) {
$r_balance=$transet['balance'];
}

$transfertouser = "UPDATE  account_table SET balance = ('$r_balance' - '$amount') WHERE a_number ='$receiver'";

$result1 = mysqli_query($conn,$transfertouser);


$newbalanc = "SELECT * FROM account_table WHERE a_number='$sender'";
$newbalance = mysqli_query($conn, $newbalanc);
 while ($getbalance = mysqli_fetch_assoc($newbalance)) {
  $sbalance=$getbalance['balance'];
 }

 $newbalanca = "SELECT * FROM account_table WHERE a_number='$receiver'";
$newbalancea = mysqli_query($conn, $newbalanca);
 while ($getbalancea = mysqli_fetch_assoc($newbalancea)) {
  $r_balance=$getbalancea['balance'];
 }


$inserthistory2 = "UPDATE transaction SET status='reverse',balance='$sbalance' , r_balance='$r_balance' WHERE t_id='$t_id' ";

mysqli_query($conn,$inserthistory2);




header('Location: ../fund_transfer.php?msg=successfull transaction');
}


else{

header('Location: ../fund_transfer.php?msg=unsuccessful transaction');

}


  } 
}
 ?>
