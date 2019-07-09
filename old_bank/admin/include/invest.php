<?php 


include_once '../../include/connect.php';
session_start();
include 'session_set.php';


if (isset($_POST['calc'])) {
  # code...
}

$s="SELECT balance,rate FROM account_table";
$s1=mysqli_query($conn, $s);
$s2=mysqli_num_rows($s1);
$mul =0;
if ($s2>0) {
while ($res=mysqli_fetch_assoc($s1)) {
 $_SESSION['balance']=$res['balance'];
 $_SESSION['rate']=$res['rate'];
}
$bal=$_SESSION['balance'];
$rate=$_SESSION['rate'];
                     

 $call=$bal*($rate/100); 


$run="UPDATE account_table SET balance=('$bal'+'$call')";
$run1=mysqli_query($conn, $run);

$s="SELECT balance FROM account_table";
$s1=mysqli_query($conn, $s);
while ($res=mysqli_fetch_assoc($s1)) {
 $_SESSION['balance']=$res['balance'];
}


if ($run1) {
  echo $_SESSION['balance'];
}

}


 ?>