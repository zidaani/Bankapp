<?php 
include_once '../include/connect.php';

session_start();

include 'include/session_set.php';

if (!empty($_SESSION['admin_username'])){
   
 ?>

<?php include 'header.php'; 


?> 


<style>
  .card-title{
  font-weight: lighter;padding: 5px;background: #116dee33;text-align: center;border-radius: 16px;
}
</style>



<div class="container" style="height:auto;background:#cfcdcd; max-width: 100% !important;">
	<div class="row" style="padding: 30px 8px;margin: 0px !important;">


		<div class="col-md-3 vanmobile" style="background:#283f6e;border-radius: 27px 0px 0px 32px;"> 
      
<?php include 'sidebar.php'; ?>
      
		</div>


		<div class="col-md-9" style="background: #C4C4C5;margin-right: 0px;border-radius: 0px 35px 31px 0px;">
			<div class="row" style="margin-top: 5px;">


				<div class="col-md-4">
					
            <div class="card card-stats" style="background: #27293d;color: #eceaea;font-weight: lighter;">
              <div class="card-body">
                <div class="row">
                  <div class="col-5">
                    <div class="info-icon text-center icon-warning">
                      <i class="tim-icons icon-single-02" aria-hidden="true" ></i>
                    </div>
                  </div>
                  <div class="col-7">
                    <div class="numbers">
                      <p class="card-category">Total User Accounts</p>
                      
                    </div>
                  </div>

                  <div class="col-md-12">
                    <h3 class="card-title" style="font-weight: lighter;">
                        <?php 
                  if (!empty($u_id)) { 

                        $spl = "SELECT u_id FROM users ";
              $splq = mysqli_query($conn,$spl);
          echo mysqli_num_rows($splq);
            } ?>
                        </h3>
                  </div>
                </div>
              </div>
              <div class="card-footer" style="box-shadow: 0px 0px 7px -3px #9e9a9a inset;font-size: 13px;border-top: 2px solid #f1ececb8;">
              
                <div class="stats">
                  <i class="tim-icons icon-refresh-01"></i> Total System Users
                </div>
              </div>
            </div>


          
				</div>


				<div class="col-md-4">
					
               
               <div class="card card-stats" style="background: #27293d;color: #eceaea;font-weight: lighter;">
              <div class="card-body">
                <div class="row">
                  <div class="col-5">
                    <div class="info-icon text-center icon-warning">
                       <i class="tim-icons icon-bank" > </i>
                    </div>
                  </div>
                  <div class="col-7">
                    <div class="numbers">
                      <p class="card-category">Total Users Deposits</p>
                      
                    </div>
                  </div>


                   <div class="col-md-12">
                     <h3 class="card-title" style="font-weight: lighter;"> &#8373;
 
                        <?php 
                 if (!empty($u_id)) { 

                        $spl = "SELECT amount_credit FROM transaction ";
              $splq = mysqli_query($conn,$spl);
              $sum=0;
              while ($splqr=mysqli_fetch_assoc($splq)){$sum = $sum + $splqr['amount_credit'];}
                       echo $sum; } ?>
                         
                       </h3>
                   </div>
                </div>
              </div>
              <div class="card-footer" style="box-shadow: 0px 0px 7px -3px #9e9a9a inset;font-size: 13px;border-top: 2px solid #f1ececb8;">
              
                <div class="stats">
                  <i class="tim-icons icon-single-02"></i> Total funds Deposited
                </div>
              </div>
            </div>


				</div>
				


		  <div class="col-md-4">
					<div class="card card-stats" style="background: #27293d;color: #eceaea;font-weight: lighter;">
              <div class="card-body">
                <div class="row">
                  <div class="col-5">
                    <div class="info-icon text-center icon-warning">
                       <i class="tim-icons icon-money-coins" ></i>
                    </div>
                  </div>
                  <div class="col-7">
                    <div class="numbers">
                      <p class="card-category">Total Users Withdrawals</p>
                      
                    </div>
                  </div>
                   <div class="col-md-12">
                     <h3 class="card-title" style="font-weight: lighter;">&#8373;

                    <?php 
                 if (!empty($u_id)){ 

              $spl = "SELECT amount_debit FROM transaction ";
              $splq = mysqli_query($conn,$spl);
              $sum=0;
              while ($splqr=mysqli_fetch_assoc($splq)){$sum = $sum + $splqr['amount_debit'];}
                       echo $sum; } ?>

                      </h3>
                   </div>
                </div>
              </div>
              <div class="card-footer" style="box-shadow: 0px 0px 7px -3px #9e9a9a inset;font-size: 13px;border-top: 2px solid #f1ececb8;">
              
                <div class="stats">
                  <i class="tim-icons icon-notes"></i> Total Funds Withdrawn
                </div>
              </div>
            </div>

        </div>



        <div class="col-md-4" style="margin-top: 20px;">
					<div class="card card-stats" style="background: #27293d;color: #eceaea;font-weight: lighter;">
              <div class="card-body">
                <div class="row">
                  <div class="col-5">
                    <div class="info-icon text-center icon-warning">
                       <i class="tim-icons icon-mobile"></i>
                    </div>
                  </div>
                  <div class="col-7">
                    <div class="numbers">
                      <p class="card-category">Total Airtime</p>
                      
                    </div>
                  </div>
                   <div class="col-md-12">
                     <h3 class="card-title" style="font-weight: lighter;">&#8373;
 
                        <?php

                  if (!empty($u_id)) { 
                         $spl = "SELECT amount FROM transaction WHERE  t_name = 'airtime'";
              $splq = mysqli_query($conn,$spl);
              $sum=0;
              while ($splqr=mysqli_fetch_assoc($splq)){$sum = $sum + $splqr['amount'];}
                       echo $sum; } ?></h3>
                   </div>
                </div>
              </div>
              <div class="card-footer" style="box-shadow: 0px 0px 7px -3px #9e9a9a inset;font-size: 13px;border-top: 2px solid #f1ececb8;">
              
                <div class="stats">
                  <i class="tim-icons icon-molecule-40"></i> Total Airtime Purchased
                </div>
              </div>
            </div>

        </div>





        <div class="col-md-4" style="margin-top: 20px;">
			<div class="card card-stats" style="background: #27293d;color: #eceaea;font-weight: lighter;">
              <div class="card-body">
                <div class="row">
                  <div class="col-5">
                    <div class="info-icon text-center icon-warning">
                       <i class="tim-icons icon-pin" ></i>
                    </div>
                  </div>
                  <div class="col-7">
                    <div class="numbers">
                      <p class="card-category">Last Deposit</p>
                      
                    </div>
                  </div>
                   <div class="col-md-12">
                     <h3 class="card-title" style="font-weight: lighter;">
                        &#8373; 
 
                        <?php 

                            if (!empty($u_id)){ 
                         $spl = "SELECT amount_credit FROM transaction WHERE t_name='deposit' AND amount_credit>0 ORDER BY t_date DESC LIMIT 1";
              $splq = mysqli_query($conn,$spl);
              while ($splqr=mysqli_fetch_assoc($splq)){
                        echo $splqr['amount_credit'];}
                       }?>

                      </h3>
                   </div>
                </div>
              </div>
              <div class="card-footer" style="box-shadow: 0px 0px 7px -3px #9e9a9a inset;font-size: 13px;border-top: 2px solid #f1ececb8;">
              
                <div class="stats">
                  <i class="tim-icons icon-molecule-40"></i>Last System Deposit
                </div>
              </div>
            </div>

        </div>


        <div class="col-md-4 " style="margin-top: 20px;">
			<div class="card card-stats" style="background: #27293d;color: #eceaea;font-weight: lighter;">
              <div class="card-body">
                <div class="row">
                  <div class="col-5">
                    <div class="info-icon text-center icon-warning">
                       <i class="tim-icons icon-spaceship" ></i>
                    </div>
                  </div>
                  <div class="col-7">
                    <div class="numbers">
                      <p class="card-category">Last Withdrawn</p><h3> 
 
              
                    </div>
                  </div>
                   <div class="col-md-12">  <h3 class="card-title" style="font-weight: lighter;">  &#8373;   <?php 

                            if (!empty($u_id)){ 
                         $spl = "SELECT amount_debit FROM transaction ORDER BY t_date DESC LIMIT 1";
              $splq = mysqli_query($conn,$spl);
              while ($splqr=mysqli_fetch_assoc($splq)){
                        echo $splqr['amount_debit'];}
                       }?>
                         
                       </h3></div>
                </div>
              </div>
              <div class="card-footer" style="box-shadow: 0px 0px 7px -3px #9e9a9a inset;font-size: 13px;border-top: 2px solid #f1ececb8;">
              
                <div class="stats">
                  <i class="tim-icons icon-tap-02"></i> Last System Withdrawal
                </div>
              </div>
            </div>


</div></div>



<!-- begining of table -->

  <div class="row">
  	<div class="col-md-12">
  		<div class="card-header" style="text-align: center;margin-top: 42px;color: #fff;background: #27293c;border-radius: 14px 18px 0px 0px;">
                <h4 class="card-title">Your Latest Transaction</h4>
                
              </div>

     
                    <div class="table-responsive" style="padding: px;background: #e6e6ebc2;border-radius: 0px 0px 16px 0px;">
                      <table class="table table-striped">
                        <tbody>
             <tr style="background: #283f6e;color: #fff;"> 
                       <th>Transaction ID</th>
                       <th>Account Number</th>
                        <th >Status</th>
                       <th>Transaction Type</th>
                       <th style="text-align: right;">Amount</th>
                       <th style="text-align: right;">Balance</th>
                       <th style="text-align: right;">Date</th>
            </tr>

                        	<?php 

                     $querry1= "SELECT * FROM  transaction ORDER BY t_id DESC LIMIT 5";
                     $querry1result = mysqli_query($conn, $querry1);
                       while ($bell=mysqli_fetch_assoc($querry1result)) { ?>
                       	
                     
                           
                          <tr>

                            <td>
                              <?php echo $bell['t_id']; ?>
                            </td>

                            <td>
                              <?php echo $bell['a_number']; ?>
                            </td>

                              <td>
                              <?php echo $bell['status']; ?>
                            </td>


                            <td>
                          <?php echo $bell['t_name']; ?>
                            </td>


                            <td class="text-right">
                             <?php echo $bell['amount']; ?>
                            </td>
                            
                             <td class="text-right">
                             <?php echo $bell['balance']; ?>
                            </td>


                            <td class="text-right">
                             <?php echo $bell['t_date']; ?>
                            </td>


                          </tr>

                           <?php }

                        	 ?>
                          
                        </tbody>
                      </table>
                    </div>
  	</div>
  </div>

<!-- End of table -->


	</div>

</div>







<div style="margin-top: 100px;"></div>

<?php include 'footer.php'; ?>

<?php  } 
 else{

  header('Location: ../index.php');
}
?>