
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
                     <a href="deposit.php"><li> Deposit</li></a>
                     <a href="deposits.php"> <li>Deposit History</li></a>
                     <a href="withdrawal.php"> <li>Withdraw</li></a>
                     <a href="withdrawals.php"><li> Withdraw History</li></a>
                     <a href="edit_profile.php"><li> Edit Profile</li></a>
                     <a href="fund_transfer.php"><li> Tranfer Funds</li></a>
                     <a href="buy_airtime.php"><li> Buy Airtime</li></a>
                     <a href="get_loan.php"><li > Get Loan</li></a>
                     <a href="support.php"> <li>Send Support</li></a>
              </ul> <?php } else{
                     header('Location: ../index.php');
              } ?>
       


