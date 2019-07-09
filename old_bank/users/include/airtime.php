<?php

include_once '../../include/connect.php';
session_start();
include 'session_set.php';


if (isset($_POST['transfer'])) {
 


$amount = mysqli_real_escape_string($conn,$_POST['amount']);
$airtime_number = mysqli_real_escape_string($conn,$_POST['airtime_number']);
$airtime_carrier = mysqli_real_escape_string($conn,$_POST['airtime_carrier']);
$pin = mysqli_real_escape_string($conn,$_POST['pin']);


      if ($pin != $pincheck) {
 header('Location: ../buy_airtime.php?msg=wrong pin code');
 exit();
}

if (empty($pin)) {
 header('Location: ../buy_airtime.php?msg=pin code empty');
 exit();
}

    

$depcheck = "SELECT * FROM account_table WHERE u_id = '$u_id' and a_number='$a_number' ";

 $depquerry = mysqli_query($conn,$depcheck);
$row = mysqli_num_rows($depquerry);
 
if ($row==1) {

$depositinsert = "UPDATE  account_table SET balance = ('$balance'-'$amount') WHERE a_number='$a_number' and u_id='$u_id'";
mysqli_query($conn,$depositinsert);

$depquerryt = mysqli_query($conn,"SELECT * FROM account_table WHERE u_id = '$u_id' and a_number='$a_number' ");
 while ($getbalancet = mysqli_fetch_assoc($depquerryt)) {
  $balance=$getbalancet['balance'];
 }

$inserthistory = "INSERT INTO transaction (a_number,beneficiary,u_id,airtime_number,airtime_carrier,t_name,amount,balance,status) VALUES('$a_number','$a_number','$u_id','$airtime_number','$airtime_carrier','airtime','$amount','$balance','pending')";


mysqli_query($conn,$inserthistory);




$depcheck = "SELECT * FROM account_table WHERE u_id = '$u_id' and a_number='$a_number' ";

 $depquerry = mysqli_query($conn,$depcheck);
 while ($getbalance = mysqli_fetch_assoc($depquerry)) {
  $_SESSION['balance']=$getbalance['balance'];
 }

header('Location: ../buy_airtime.php?msg=successfull transaction');


}



else{

header('Location: ../buy_airtime.php?msg=unsuccessful transaction');

}
  



}
 ?>
