<?php

include_once '../../include/connect.php';
session_start();
include 'session_set.php';

// ======MTN PAYMENT CONFIRMATION========

if (isset($_POST['mtn_submit']) ) {

$user_deposit_id=$_SESSION['user_deposit_id'];
$processor_account_name=mysqli_real_escape_string($conn,$_POST['account_name']);
$transaction_id=mysqli_real_escape_string($conn,$_POST['transaction_id']);




$dep_confirm_get_amount=mysqli_query($conn,"SELECT * FROM transaction WHERE u_id='$u_id' AND t_id='$user_deposit_id' AND status='unconfirmed'");
while ($user_deposit_set=mysqli_fetch_assoc($dep_confirm_get_amount)) {
	$user_deposit__id_new=$user_deposit_set['t_id'];
}
    

if (empty($processor_account_name)) {
 header('Location: ../deposit_confirm.php?msgr=empty account name');
 exit();
}

if (empty($transaction_id)) {
 header('Location: ../deposit_confirm.php?msgr=empty transaction id');
 exit();
}

if (!empty($user_deposit__id_new)) {
	

$confirm_payment = "UPDATE transaction SET status='pending', processor_account_name='$processor_account_name',processor_name='mtn', processor_transaction_id='$transaction_id' WHERE u_id='$u_id' AND t_id='$user_deposit__id_new' ";

mysqli_query($conn,$confirm_payment);

$_SESSION['user_deposit_id']=0;
header('Location: ../deposit.php?msg=Payment has been successful; Please wait for confirmation');


}


else{

header('Location: ../deposit_confirm.php?msgr=could not confirm payment');
}
  }






// ======TIGO PAYMENT CONFIRMATION========

if (isset($_POST['tigo_submit']) ) {

$user_deposit_id=$_SESSION['user_deposit_id'];
$processor_account_name=mysqli_real_escape_string($conn,$_POST['account_name']);
$transaction_id=mysqli_real_escape_string($conn,$_POST['transaction_id']);




$dep_confirm_get_amount=mysqli_query($conn,"SELECT * FROM transaction WHERE u_id='$u_id' AND t_id='$user_deposit_id' AND status='unconfirmed'");
while ($user_deposit_set=mysqli_fetch_assoc($dep_confirm_get_amount)) {
	$user_deposit__id_new=$user_deposit_set['t_id'];
}
    

if (empty($processor_account_name)) {
 header('Location: ../deposit_confirm.php?msgr=empty account name');
 exit();
}

if (empty($transaction_id)) {
 header('Location: ../deposit_confirm.php?msgr=empty transaction id');
 exit();
}

if (!empty($user_deposit__id_new)) {
	

$confirm_payment = "UPDATE transaction SET status='pending', processor_account_name='$processor_account_name',processor_name='tigo', processor_transaction_id='T-$transaction_id' WHERE u_id='$u_id' AND t_id='$user_deposit__id_new' ";

mysqli_query($conn,$confirm_payment);


$_SESSION['user_deposit_id']=0;
header('Location: ../deposit.php?msg=Payment has been successful; Please wait for confirmation');


}


else{

header('Location: ../deposit_confirm.php?msgr=could not confirm payment');
}
  }



  // ======VODAFONE PAYMENT CONFIRMATION========

if (isset($_POST['vodafone_submit']) ) {

$user_deposit_id=$_SESSION['user_deposit_id'];
$processor_account_name=mysqli_real_escape_string($conn,$_POST['account_name']);
$transaction_id=mysqli_real_escape_string($conn,$_POST['transaction_id']);




$dep_confirm_get_amount=mysqli_query($conn,"SELECT * FROM transaction WHERE u_id='$u_id' AND t_id='$user_deposit_id' AND status='unconfirmed'");
while ($user_deposit_set=mysqli_fetch_assoc($dep_confirm_get_amount)) {
	$user_deposit__id_new=$user_deposit_set['t_id'];
}
    

if (empty($processor_account_name)) {
 header('Location: ../deposit_confirm.php?msgr=empty account name');
 exit();
}

if (empty($transaction_id)) {
 header('Location: ../deposit_confirm.php?msgr=empty transaction id');
 exit();
}

if (!empty($user_deposit__id_new)) {
	

$confirm_payment = "UPDATE transaction SET status='pending', processor_account_name='$processor_account_name',processor_name='vodafone', processor_transaction_id='$transaction_id' WHERE u_id='$u_id' AND t_id='$user_deposit__id_new' ";

mysqli_query($conn,$confirm_payment);


$_SESSION['user_deposit_id']=0;
header('Location: ../deposit.php?msg=Payment has been successful; Please wait for confirmation');


}


else{

header('Location: ../deposit_confirm.php?msgr=could not confirm payment');
}
  }





    // ======VODAFONE PAYMENT CONFIRMATION========

// if (isset($_POST['paypal_submit']) ) {

// $user_deposit_id=$_SESSION['user_deposit_id'];
// $processor_account_name=mysqli_real_escape_string($conn,$_POST['account_name']);
// $transaction_id=mysqli_real_escape_string($conn,$_POST['transaction_id']);




// $dep_confirm_get_amount=mysqli_query($conn,"SELECT * FROM transaction WHERE u_id='$u_id' AND t_id='$user_deposit_id' AND status='unconfirmed'");
// while ($user_deposit_set=mysqli_fetch_assoc($dep_confirm_get_amount)) {
// 	$user_deposit__id_new=$user_deposit_set['t_id'];
// }
    

// if (empty($processor_account_name)) {
//  header('Location: ../deposit_confirm.php?msgr=empty account name');
//  exit();
// }

// if (empty($transaction_id)) {
//  header('Location: ../deposit_confirm.php?msgr=empty transaction id');
//  exit();
// }

// if (!empty($user_deposit__id_new)) {
	

// $confirm_payment = "UPDATE transaction SET status='pending', processor_account_name='$processor_account_name',processor_name='vodafone', processor_transaction_id='$transaction_id' WHERE u_id='$u_id' AND t_id='$user_deposit__id_new' ";

// mysqli_query($conn,$confirm_payment);


// $_SESSION['user_deposit_id']=0;
// header('Location: ../deposit.php?msg=Payment has been successful; Please wait for confirmation');


// }


// else{

// header('Location: ../deposit_confirm.php?msgr=could not confirm payment');
// }
//   }





 ?>
