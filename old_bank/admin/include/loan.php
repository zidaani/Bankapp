<?php

include_once '../../include/connect.php';
session_start();
include 'session_set.php';


if (isset($_POST['get_loan'])) {



$amount = mysqli_real_escape_string($conn,$_POST['amount']);
$beneficiary = mysqli_real_escape_string($conn,$_POST['beneficiary']);
$status = mysqli_real_escape_string($conn,$_POST['status']);
$trid = mysqli_real_escape_string($conn,$_POST['trid']);
$user_id = mysqli_real_escape_string($conn,$_POST['u_id']);

 if ($status !='approved') {
 header('Location: ../get_loan.php?msg=wrong choice');
 exit();
}

    
if ($status=='approved') {


$depchecka = "SELECT * FROM account_table WHERE a_number='$beneficiary' ";
$depquerrya = mysqli_query($conn,$depchecka);	
while ($airtimeseta=mysqli_fetch_assoc($depquerrya)) {
	$b_balance=$airtimeseta['balance'];
}

$depositinsert = "UPDATE  account_table SET balance = ('$b_balance' + '$amount') WHERE u_id ='$user_id' and a_number='$beneficiary'";

$result1 =mysqli_query($conn,$depositinsert);

$depchset = "SELECT * FROM account_table WHERE a_number='$beneficiary' ";
$depchset1= mysqli_query($conn,$depchset);	
while ($depchset2=mysqli_fetch_assoc($depchset1)) {
	$t_balance=$depchset2['balance'];
}

$deposithistoryinsert = "UPDATE  transaction SET balance ='$t_balance' , status='$status',t_name='loan_credit'  WHERE t_id='$trid' and a_number='$beneficiary'";
$result2 =mysqli_query($conn,$deposithistoryinsert);

header('Location: ../get_loan.php?msg=successfull transaction');


}


else{

header('Location: ../get_loan.php?msg=wrong choice');



}


  



}
 ?>
