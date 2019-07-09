<?php 
include_once '../../include/connect.php';
session_start();
include 'session_set.php';


                   if (isset($_POST['edit'])) {
                    $status=mysqli_real_escape_string($conn, $_POST['status']);
                    $tid=mysqli_real_escape_string($conn, $_POST['tid']);
                    $currentstatus = mysqli_real_escape_string($conn, $_POST['currentstatus']);
                    $amount_debited = mysqli_real_escape_string($conn, $_POST['amount']);
                    $a_number =mysqli_real_escape_string($conn, $_POST['a_number']);
                    

                  if ($status == 'pending') {

    
                    $q1 = "UPDATE transaction SET status='$status' WHERE t_id='$tid' ";

                    if ($currentstatus=='cancelled') {
                      mysqli_query($conn, $q1);
                    }
                  

                    $q2="SELECT * FROM transaction";
                    $q3=mysqli_query($conn,$q2);
                    while ($statusset=mysqli_fetch_assoc($q3)) {
                      $_SESSION['status']=$statusset['status'];
                    }

                    $acc1="SELECT * FROM account_table WHERE a_number='$a_number' ";
                    $acc2=mysqli_query($conn, $acc1);
                    while ($accset=mysqli_fetch_assoc($acc2)) {
                    $balancea=$accset['balance'];
                    }
             

                    $accountq = "UPDATE  account_table SET balance = ('$balancea'-'$amount_debited') WHERE a_number = '$a_number' ";

                    if ($status == 'pending') {
                     mysqli_query($conn,$accountq);
                     } 

                     $acc1="SELECT * FROM account_table WHERE a_number='$a_number' ";
                    $acc2=mysqli_query($conn, $acc1);
                    while ($accset=mysqli_fetch_assoc($acc2)) {
                    $_SESSION['balance']=$accset['balance'];
                    }



                  header('Location: ../withdrawal.php?msg=successfull transaction');
                 
                    
                   }
                   else{

                  header('Location: ../withdrawals.php?msg=wrong choice');
                       }
                     }
                       



 ?>