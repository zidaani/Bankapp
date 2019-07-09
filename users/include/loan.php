<?php

include_once '../../include/connect.php';
session_start();
include 'session_set.php';


if (isset($_POST['get_loan'])) {



$amount = mysqli_real_escape_string($conn,$_POST['amount']);
$loan_duration = mysqli_real_escape_string($conn,$_POST['loan_duration']);
$loan_date = mysqli_real_escape_string($conn,$_POST['loan_date']);
$loan_reason = mysqli_real_escape_string($conn,$_POST['loan_reason']);
$loan_terms = mysqli_real_escape_string($conn,$_POST['loan_terms']);
 $pin = mysqli_real_escape_string($conn,$_POST['pin']);

if (empty($pin)) {
 header('Location: ../get_loan.php?msgr=pin code empty');
 exit();
}

      if ($pin != $pincheck) {
 header('Location: ../get_loan.php?msgr=wrong pin code');
 exit();
}


if (empty($loan_terms)) {
	header('Location: ../get_loan.php?msgr=accept terms');
	exit();
}

    

$depcheck = "SELECT * FROM account_table WHERE u_id = '$u_id' and a_number='$a_number' ";

 $depquerry = mysqli_query($conn,$depcheck);
$row = mysqli_num_rows($depquerry);


 
if ($row==1) {


$inserthistory = "INSERT INTO transaction (a_number,beneficiary,u_id,loan_duration,loan_reason,loan_interest,t_name,amount,balance,loan_date,loan_terms,loan_status,status) VALUES('$a_number','$a_number','$u_id','$loan_duration','$loan_reason','10','loan_request','$amount','$balance','$loan_date','accepted','unpaid','pending')";



// mysqli_query($conn,$depositinsert);
mysqli_query($conn,$inserthistory);

 //Throw message

header('Location: ../get_loan.php?msg=successfull transaction');


}

else{

header('Location: ../get_loan.php?msgr=unsuccessful transaction');

}
  



}
 ?>
