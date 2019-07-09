
 <?php        

include_once '../include/connect.php';
if (!empty($u_id)) {
       # code...

 ?> 
<style>
       ul a {
              color: #fff;
              cursor: pointer;
       }
        ul a:hover {
              color: #fff;
              cursor: pointer;
              text-decoration: none;
       }
</style>

              <ul class="userul">
                     <a href="index.php"><li >Dashboard</li></a>
                     <a href="deposit.php"><li> Deposits</li></a>
                     <a href="deposits.php"> <li>Deposit History</li></a>
                     <a href="withdrawal.php"> <li>Withdrawals</li></a>
                     <a href="withdrawals.php"><li> Withdrawal History</li></a>
                     <a href="edit_profile.php"><li> Edit Profile</li></a>
                     <a href="fund_transfer.php"><li>Transfers</li></a>
                     <a href="buy_airtime.php"><li>Airtime</li></a>
                     <a href="get_loan.php"><li > Loans</li></a>
                     <a href="support.php"> <li>Support Messages</li></a>
              </ul> <?php } else{
                     header('Location: ../index.php');
              } ?>
       


