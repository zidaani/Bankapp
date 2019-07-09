
       <?php 

include_once '../include/connect.php';
session_start();
include 'include/session_set.php';
if (isset($_POST['updatebank'])) {

  $account_type=mysqli_real_escape_string($conn, $_POST['account_type']);
  $pin=mysqli_real_escape_string($conn, $_POST['pin']);

  $u_id = $_SESSION['u_id'];
  

 if ($pin != $pincheck) {
 header('Location: edit_profile.php?msg=wrong pin code');
 exit();
}

if (empty($pin)) {
 header('Location: ../deposit.php?msg=pin code empty');
 exit();
}

// CHECK PASSWORD

 if ($sqlrow1 == 0) {

$sql8 = "INSERT INTO account_table (account_type,u_id) VALUES('$account_type','$u_id')";

 mysqli_query($conn,$sql8);
 

 $sqlabove= "SELECT * FROM account_table WHERE u_id = $u_id";
 $sqlabove1 = mysqli_query($conn, $sqlabove);
 $sqlabove2 = mysqli_num_rows($sqlabove1);
 if ($sqlabove2==1) {
   while ( $accountnumber = mysqli_fetch_assoc($sqlabove1)) {
     $_SESSION['a_number']=$accountnumber['a_number'];
     $_SESSION['account_type']=$accountnumber['account_type'];
      $_SESSION['balance']=$accountnumber['balance'];

   }
 
header('Location: edit_profile.php?msg=successfull bank update');

 }

  
 }

 else{
header('Location: edit_profile.php?msg=already updated bank info');

 }
 

}


 ?> 
