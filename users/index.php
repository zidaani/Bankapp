<?php 
include_once '../include/connect.php';

session_start();

include 'include/session_set.php';

if (!empty($username)){
   
 ?>

<!--  HEADER SECTION -->

<?php include 'header.php'; ?> 


<div class="container" style="height: 120px;margin: 0px 0px 0px 0px;background-image: url(../img/img1.jpg); max-width: 100% !important; background-size: cover; background-repeat: no-repeat;">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<h1 style="color: #fff;text-align: center;margin-top: 68px;">User Account</h1>
		</div>
	</div>
</div>

<style>
  
</style>


<div class="container" style="height:auto;background: #26303b;max-width: 100% !important;">
	<div class="row" style="padding: 30px 8px;margin: 0px !important;">


		<div class="col-md-3 vanmobile" id="vanmobile12" style="background:#283f6e;border-radius: 27px 0px 0px 32px;"> 
      
<?php include 'sidebar.php'; ?>
      
		</div>


		<div class="col-md-9" id="div-12" style="background: #C4C4C5;margin-right: 0px;border-radius: 0px 35px 31px 0px;">
			<div class="row" style="margin-top: 5px;">


				<div class="col-md-4" style="margin-top: 20px;">
					
            <div class="card card-stats" style="background: #27293d;color: #eceaea;font-weight: lighter;">
              <div class="card-body">
                <div class="row">
                  <div class="col-5">
                    <div class="info-icon text-center icon-warning">
                      <i class="tim-icons icon-single-02" aria-hidden="true" style="font-size: 26px;margin: -3px 0px 21px -3px;padding: 19px;border-radius: 36px; background:linear-gradient(to bottom left,#ff8d72,#ff6491,#ff8d72);font-weight: 900;"></i>
                    </div>
                  </div>
                  <div class="col-7">
                    <div class="numbers">
                      <p class="card-category">Account Balance</p>
                      <h3 class="card-title" style="font-weight: lighter;">&#8373; <?php if (!empty($balance)) {
                       echo $balance;}?> </h3>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer" style="box-shadow: 0px 0px 7px -3px #9e9a9a inset;font-size: 13px;border-top: 2px solid #f1ececb8;">
              
                <div class="stats">
                  <i class="tim-icons icon-refresh-01"></i> Total Available Balance
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
                       <i class="tim-icons icon-bank" style="font-size: 26px;margin: -3px 0px 21px -3px;padding: 19px;border-radius: 36px; background:linear-gradient(to bottom left,#000000b3,#a4d08c,#7fe390b3);font-weight: 900;"> </i>
                    </div>
                  </div>
                  <div class="col-7">
                    <div class="numbers">
                      <p class="card-category">Total Deposits</p>
                      <h3 class="card-title" style="font-weight: lighter;"> &#8373;
 
                        <?php 
                  if (!empty($a_number)) { 

                        $spl = "SELECT amount_credit FROM transaction WHERE u_id='$u_id' and a_number='$a_number' and status='approved'";
              $splq = mysqli_query($conn,$spl);
              $sum=0;
              while ($splqr=mysqli_fetch_assoc($splq)){$sum = $sum + $splqr['amount_credit'];}
                       echo $sum; } ?>
                         
                       </h3>
                    </div>
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
				


		  <div class="col-md-4" style="margin-top: 20px;">
					<div class="card card-stats" style="background: #27293d;color: #eceaea;font-weight: lighter;">
              <div class="card-body">
                <div class="row">
                  <div class="col-5">
                    <div class="info-icon text-center icon-warning">
                       <i class="tim-icons icon-money-coins" style="font-size: 26px;margin: -3px 0px 21px -3px;padding: 19px;border-radius: 36px; background:linear-gradient(to bottom left,#e4f000e6,#2d5417,#ebef04b3);font-weight: 900;"></i>
                    </div>
                  </div>
                  <div class="col-7">
                    <div class="numbers">
                      <p class="card-category">Total Withdrawals</p>
                      <h3 class="card-title" style="font-weight: lighter;">&#8373;

                    <?php 

                   if (!empty($a_number)) { 
                    $spl = "SELECT amount_debit FROM transaction WHERE u_id='$u_id' and a_number='$a_number' and status='approved'";
              $splq = mysqli_query($conn,$spl);
              $sum=0;
              while ($splqr=mysqli_fetch_assoc($splq)){$sum = $sum + $splqr['amount_debit'];}
                       echo $sum; }?>

                      </h3>
                    </div>
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
                       <i class="tim-icons icon-mobile" style="font-size: 26px;margin: -3px 0px 21px -3px;padding: 19px;border-radius: 36px; background:linear-gradient(to bottom left,#8772ff,#78a6a9,#1cced7b3);font-weight: 900;"></i>
                    </div>
                  </div>
                  <div class="col-7">
                    <div class="numbers">
                      <p class="card-category">Total Airtime</p>
                      <h3 class="card-title" style="font-weight: lighter;">&#8373;
 
                        <?php

                  if (!empty($a_number)) { 
                         $spl = "SELECT amount FROM transaction WHERE u_id='$u_id' and a_number='$a_number' and t_name = 'airtime' and status='approved'";
              $splq = mysqli_query($conn,$spl);
              $sum=0;
              while ($splqr=mysqli_fetch_assoc($splq)){$sum = $sum + $splqr['amount'];}
                       echo $sum; } ?></h3>
                    </div>
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
                       <i class="tim-icons icon-pin" style="font-size: 26px;margin: -3px 0px 21px -3px;padding: 19px;border-radius: 36px; background:linear-gradient(to bottom left,#72ffe4,#4c55e2,#72ffda);font-weight: 900;"></i>
                    </div>
                  </div>
                  <div class="col-7">
                    <div class="numbers">
                      <p class="card-category">Last Deposit</p>
                      <h3 class="card-title" style="font-weight: lighter;">
                        &#8373; 
 
                        <?php 

                            if (!empty($t_id)) { 
                         $spl = "SELECT amount_credit FROM transaction WHERE u_id='$u_id' and a_number='$a_number' and status='approved' and amount_credit >'0' ORDER BY amount_credit DESC LIMIT 1";
              $splq = mysqli_query($conn,$spl);
              while ($splqr=mysqli_fetch_assoc($splq)){
                echo $splqr['amount_credit'];}
                       }?>

                      </h3>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer" style="box-shadow: 0px 0px 7px -3px #9e9a9a inset;font-size: 13px;border-top: 2px solid #f1ececb8;">
              
                <div class="stats">
                  <i class="tim-icons icon-molecule-40"></i> Your Last Deposit
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
                       <i class="tim-icons icon-spaceship" style="font-size: 26px;margin: -3px 0px 21px -3px;padding: 19px;border-radius: 36px; background:linear-gradient(to bottom left,#b2c5c1,#c21bb1,#8e00f7);font-weight: 900;"></i>
                    </div>
                  </div>
                  <div class="col-7">
                    <div class="numbers">
                      <p class="card-category">Last Withdrawn</p> <h3> &#8373; 
 
                        <?php


                       if (!empty($a_number)) { 
                         $spl = "SELECT amount_debit FROM transaction WHERE u_id='$u_id' and a_number='$a_number' and status='approved' and amount_debit>0 ORDER BY amount_debit DESC LIMIT 1";
              $splq = mysqli_query($conn,$spl);
              while ($splqr=mysqli_fetch_assoc($splq)){
                echo $splqr['amount_debit'];} }
                       ?>
                         
                       </h3>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer" style="box-shadow: 0px 0px 7px -3px #9e9a9a inset;font-size: 13px;border-top: 2px solid #f1ececb8;">
              
                <div class="stats">
                  <i class="tim-icons icon-tap-02"></i> Your Last Withdrawal
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
                       <th>Transaction Type</th>
                       
                        <th>status</th>
                       <th style="text-align: right;">Amount</th>

                       <th style="text-align: right;">Balance</th>
                       <th style="text-align: center;">Date</th>
            </tr>

     
                        	<?php 
                          if (!empty($t_id)) {
                            # code...
                          

                     $querry1= "SELECT * FROM  transaction WHERE u_id = '$u_id' and a_number='$a_number' ORDER BY t_id DESC LIMIT 5";
                     $querry1result = mysqli_query($conn, $querry1);
                       while ($bell=mysqli_fetch_assoc($querry1result)) { ?>
                       	
                     
                           
                          <tr>

                            <td>
                              <?php echo $bell['t_id']; ?>
                            </td>


                            <td>
                          <?php echo $bell['t_name']; ?>
                            </td>
                          

                             <td>
                          <?php echo $bell['status']; ?>
                            </td>


                            <td class="text-right">
                             <?php echo $bell['amount']; ?>
                            </td>
                            
                             <td class="text-right">
                             <?php 
                            
                             echo $bell['balance'];

                              ?>
                            </td>


                            <td class="text-right">
                             <?php echo $bell['t_date']; ?>
                            </td>


                          </tr>

                           <?php }
                         }

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