<?php  
if (!empty($_SESSION['u_id'])) {
  $u_id = $_SESSION['u_id'];


$sqluser = "SELECT * FROM users WHERE u_id=$u_id" ;
$sqluser1 = mysqli_query($conn,$sqluser);
$sqluser2 = mysqli_num_rows($sqluser1);
if ($sqluser2==1) {
 while ($usercheckresult = mysqli_fetch_assoc($sqluser1)) {
   
    $_SESSION['u_id'] =$usercheckresult['u_id'];
    $_SESSION['username'] =$usercheckresult['username'];
    $_SESSION['pin'] =$usercheckresult['pin'];
    $_SESSION['dob'] =$usercheckresult['dob'];
    $_SESSION['dp'] =$usercheckresult['dp'];
    $_SESSION['email'] =$usercheckresult['email'];
    $_SESSION['user_type'] =$usercheckresult['user_type']; 
 }

 $sqlaccount ="SELECT * FROM account_table WHERE u_id=$u_id";
 $sqlaccount1 = mysqli_query($conn, $sqlaccount);
 while ($accountcheck = mysqli_fetch_assoc($sqlaccount1)) {
  $_SESSION['a_number'] =$accountcheck['a_number'];
  $_SESSION['balance']=$accountcheck['balance'];
  $_SESSION['account_type']=$accountcheck['account_type'];
 }

 $sqltransaction ="SELECT * FROM transaction WHERE u_id=$u_id";
 $sqltransaction1 = mysqli_query($conn, $sqltransaction);
 while ($sqltransactioncheck = mysqli_fetch_assoc($sqltransaction1)) {
  $_SESSION['t_id'] =$sqltransactioncheck['t_id'];
  $_SESSION['t_name']=$sqltransactioncheck['t_name'];
  $_SESSION['amount_credit']=$sqltransactioncheck['amount_credit'];
  $_SESSION['amount_debit']=$sqltransactioncheck['amount_debit'];
  $_SESSION['status']= $sqltransactioncheck['status'];
 }


 $sql3s= "SELECT * FROM support WHERE u_id = $u_id";
$sql4s= mysqli_query($conn, $sql3s);

  while ($setsupport = mysqli_fetch_assoc($sql4s)) {
    $_SESSION['u_id'] = $setsupport['u_id'];
    $_SESSION['s_id'] = $setsupport['s_id'];
     $_SESSION['status'] = $setsupport['status'];
     $_SESSION['sender_id'] = $setsupport['sender_id'];

    $_SESSION['subject'] = $setsupport['subject'];
    $_SESSION['message'] = $setsupport['message'];
    $_SESSION['support_category'] = $setsupport['support_category'];
  }





}

if (!empty($_SESSION['username'])) {
   $u_id = $_SESSION['u_id'];
   $username = $_SESSION['username'];
   $pincheck = $_SESSION['pin'];
    $dob = $_SESSION['dob'];
    $dp = $_SESSION['dp'];
    $email = $_SESSION['email'];
    $user_type = $_SESSION['user_type']; 

}



 if (!empty($_SESSION['a_number'])) {
  $a_number = $_SESSION['a_number'];
  $balance = $_SESSION['balance'];
  $account_type = $_SESSION['account_type'];  

 }

if (!empty($_SESSION['t_id'])) {
    $t_id = $_SESSION['t_id'];
    $a_number = $_SESSION['a_number'];
    $amount_credit = $_SESSION['amount_credit'];
    $amount_debit = $_SESSION['amount_debit'];
    $status =  $_SESSION['status'];
    $t_balance = $_SESSION['balance'];
 
}

if (!empty($_SESSION['s_id'])) {
    $s_id = $_SESSION['s_id'];
    $real_sender_id = $_SESSION['sender_id'];
   $subject= $_SESSION['subject'];
   $message= $_SESSION['message'];
  $support_category=$_SESSION['support_category'];
 
}

}

?>