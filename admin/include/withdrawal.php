<?php

include_once '../../include/connect.php';
session_start();
include 'session_set.php';


if (isset($_POST['process'])) {


$status = mysqli_real_escape_string($conn,$_POST['status']);
$transaction_id = mysqli_real_escape_string($conn,$_POST['transaction_id']);
$user_id = mysqli_real_escape_string($conn,$_POST['user_id']);
$amount_debited = mysqli_real_escape_string($conn,$_POST['amount_debited']);
$account_number = mysqli_real_escape_string($conn,$_POST['account_number']);


if ($status == 'cancelled' or $status == 'approved') {


$depaccount1= "SELECT balance FROM account_table WHERE u_id='$user_id'";
$depaccount2=mysqli_query($conn, $depaccount1);
$depaccount3=mysqli_num_rows($depaccount2);

if ($depaccount3==1) {
  while ($depaccountrow=mysqli_fetch_assoc($depaccount2)) {
    $balancea=$depaccountrow['balance'];
  }

}

//Transaction 

$deptransaction1="SELECT * FROM transaction WHERE t_id='$transaction_id'" ; 
$deptransaction2=mysqli_query($conn,$deptransaction1);


// set account balance of user 




// UPDATE ACCOUNT

$account_update = "UPDATE  account_table SET balance = '$balancea'  WHERE u_id ='$user_id' and a_number = '$account_number' ";

if ($status == 'approved') {
mysqli_query($conn,$account_update);


}



$account_update = "UPDATE  account_table SET balance = ('$balancea'+'$amount_debited') WHERE u_id ='$user_id' and a_number = '$account_number' ";

if ($status == 'cancelled') {
mysqli_query($conn,$account_update);
}


$depa1 ="SELECT * FROM account_table WHERE u_id='$user_id'";
$depa=mysqli_query($conn,$depa1 );
while ($baclchecking = mysqli_fetch_assoc($depa)) {

  $balancetransaction = $baclchecking['balance'];
}

// $balancetransaction = $amount_credited + $balancea; 

// UPDATE TRASACTION HISTORY

$inserthistory = "UPDATE transaction SET status = '$status', balance = '$balancetransaction'  WHERE u_id ='$user_id' and t_id='$transaction_id' ";

mysqli_query($conn,$inserthistory);

// SET BALANCE

$depa11 ="SELECT * FROM account_table WHERE u_id='$user_id'";
$depa12=mysqli_query($conn,$depa11 );
while ($statusset = mysqli_fetch_assoc($depa12)) {

 $_SESSION['balance'] =$statusset['balance'];
}


// THROW MESSAGE



header('Location: ../withdrawal.php?msg=successfull transaction');


}
else{

header('Location: ../withdrawal.php?msg=wrong choice');
}

}



 ?>
