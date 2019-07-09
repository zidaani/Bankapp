<?php

include_once '../../include/connect.php';
session_start();
include 'session_set.php';


if (isset($_POST['transfer'])) {
 
   $amount = mysqli_real_escape_string($conn,$_POST['amount']);
   $receiver = mysqli_real_escape_string($conn,$_POST['receiver']);
   $pin = mysqli_real_escape_string($conn,$_POST['pin']);


      if ($pin != $pincheck) {
 header('Location: ../fund_transfer.php?msgr=wrong pin code');
 exit();
}

     if ($a_number == $receiver) {
 header('Location: ../fund_transfer.php?msgr=can not send to yourself');
 exit();
}

 //check if balance is enough for withdrawal
 $balcheck = mysqli_query($conn, "SELECT * FROM account_table WHERE u_id='$u_id' AND a_number='$a_number' ");
 while ($getbalcheck = mysqli_fetch_assoc($balcheck)) {
  $balancecheck=$getbalcheck['balance'];
 }
if($amount>$balancecheck){
   header('Location: ../fund_transfer.php?msgr=insufficient balance! Please deposit');
 exit();    
}



$tran1 = "SELECT a_number FROM account_table WHERE a_number='$receiver'";
$tran2 = mysqli_query($conn,$tran1);
$tran3=mysqli_num_rows($tran2);
if ($tran3 != 1) {
   header('Location: ../fund_transfer.php?msgr=account number not found');
 exit();
  }


if (empty($pin)) {
 header('Location: ../fund_transfer.php?msgr=pin code empty');
 exit();
}

    

$depcheck = "SELECT * FROM account_table WHERE u_id = '$u_id' and a_number='$a_number' ";
$depquerry = mysqli_query($conn,$depcheck);
$row = mysqli_num_rows($depquerry);
 
if ($row=1) {
 // subtract from senders account
$depositinsert = "UPDATE  account_table SET balance = ('$balance' - '$amount') WHERE u_id ='$u_id' and a_number='$a_number'";

mysqli_query($conn,$depositinsert);
// Insert into receivers account


$tan1 = "SELECT * FROM account_table WHERE a_number='$receiver' ";
$tan2 = mysqli_query($conn,$tan1);
while ($tanset = mysqli_fetch_assoc($tan2)) {
$r_balance=$tanset['balance'];
}

$transfertouser = "UPDATE  account_table SET balance = ('$r_balance' + '$amount') WHERE a_number ='$receiver'";

mysqli_query($conn,$transfertouser);



$newbalance = mysqli_query($conn, "SELECT * FROM account_table WHERE u_id = '$u_id' and a_number='$a_number'");
 while ($getbalance = mysqli_fetch_assoc($newbalance)) {
  $balance=$getbalance['balance'];
 }

 $depcheckr = "SELECT * FROM account_table WHERE a_number='$receiver' ";
$depquerryr = mysqli_query($conn,$depcheckr);
while ($receiverset = mysqli_fetch_assoc($depquerryr)) {
$ru_id = $receiverset['u_id']; 
$rbalance=$receiverset['balance'];
}



$inserthistory = "INSERT INTO transaction (a_number,u_id,amount_debit,t_name,balance,r_balance,amount,beneficiary,fund_sender,fund_transfer_status,status) VALUES('$a_number','$u_id','$amount','transfer','$balance','$rbalance','$amount','$receiver','$a_number','sent','approved')";

mysqli_query($conn,$inserthistory);




header('Location: ../fund_transfer.php?msg=successfull transaction');


}

else{

header('Location: ../fund_transfer.php?msgr=unsuccessful transaction');

}

	



}
 ?>
