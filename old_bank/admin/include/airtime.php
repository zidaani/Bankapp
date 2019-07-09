<?php

include_once '../../include/connect.php';
session_start();
include 'session_set.php';


if (isset($_POST['send'])) {
 

$status=mysqli_real_escape_string($conn,$_POST['status']);
$amount = mysqli_real_escape_string($conn,$_POST['amount']);
$t_id = mysqli_real_escape_string($conn,$_POST['t_id']);
$beneficiary = mysqli_real_escape_string($conn,$_POST['beneficiary']);




$depcheck = "SELECT * FROM account_table WHERE a_number='$beneficiary' ";
$depquerry = mysqli_query($conn,$depcheck);	
while ($airtimeset=mysqli_fetch_assoc($depquerry)) {
	$b_balance=$airtimeset['balance'];
}

$depositinsert = "UPDATE  account_table SET balance = '$b_balance' WHERE a_number='$beneficiary'";
mysqli_query($conn,$depositinsert);

 

$inserthistory = "UPDATE  transaction SET balance = '$b_balance',status='$status' WHERE t_id='$t_id' and a_number='$beneficiary' ";

mysqli_query($conn,$inserthistory);


header('Location: ../buy_airtime.php?msg=successfull transaction');


}

else{

header('Location: ../buy_airtime.php?msg=unsuccessful transaction');


}
 ?>
