<?php 
include_once '../include/connect.php';
session_start();

include 'include/session_set.php';
if (!empty($_SESSION['admin_username'])){
  //echo "<script>alert('Hello ".$_SESSION['username']."')</script>";

 
 ?>

<?php include 'header.php'; ?> 


<div class="container" style="height: 120px;margin: 0px 0px 0px 0px;background-image: url(../img/img1.jpg); max-width: 100% !important; background-size: cover; background-repeat: no-repeat;">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<h1 style="color: #fff;text-align: center;margin-top: 68px;">Loan Approval</h1>
		</div>
	</div>
</div>


<div class="container" style="height:auto;background: #26303b;max-width: 100% !important;">
	<div class="row" style="padding: 30px 8px;margin: 0px !important;">


		<div class="col-md-3 vanmobile" style="background:#283f6e;border-radius: 27px 0px 0px 32px;"> 
      
<?php include 'sidebar.php'; ?>
      
		</div>


<div class="col-md-9" style="background: #C4C4C5;margin-right: 0px;border-radius: 0px 35px 31px 0px;">
			<div class="row" style="margin-top: 5px;">



<!-- begining of table -->

<!-- buy airtime approval -->

  
    <div class="col-md-12">
      <div class="card-header" style="text-align: center;margin-top: 42px;color: #fff;background: #27293c;border-radius: 14px 18px 0px 0px;">
                <h4 class="card-title">Loan Approval</h4>
                
              </div>

     
                    <div class="table-responsive" style="padding: px;background: #e6e6ebc2;border-radius: 0px 0px 16px 0px;">
                      <table class="table table-striped">
                        <tbody>
             <tr style="background: #283f6e;color: #fff;"> 
                      <th>Take Action</th>
                       <th>Status</th>
                       <th>Loan Status</th>
                       <th>T-ID</th>
                       <th>Transaction Name</th>
                       <th style="text-align: right;">Amount</th>
                       <th style="text-align: right;">Balance</th>
                       <th style="text-align: right;">Beneficiary</th>
                       <th style="text-align: right;">Date</th>
            </tr>

                          <?php 
                    
                    $querry1 = "SELECT * FROM  transaction WHERE t_name ='loan_request'and status !='approved' and amount > 0 ORDER BY t_id DESC LIMIT 5";
                     $querry1result = mysqli_query($conn, $querry1);
                       while ($bell=mysqli_fetch_assoc($querry1result)) {
                    
                        ?>
                        
                     
                         <form action="include/loan.php" method="post">     
                          <tr>

                             <td>
                              
                                <input type="submit" name="get_loan" value="Submit" class="process">
                             
                            </td>

                           <td>
                          <select name="status" class="form-group" style="height: 39px;width: 108px;cursor: pointer;">
                            <option value="<?php echo $bell['status']; ?>"><?php echo $bell['status']; ?></option>
                            <option value="approved">Approve</option>
                          </select>
                            </td>
                            

                                <td>
                          <?php echo $bell['loan_status']; ?>
                            </td>

                            <td>
                          <?php echo $bell['t_id']; ?>
                            </td>

                            <td>
                          <?php echo $bell['t_name']; ?>
                            </td>



                         <td style="display: none;">
                            <input type="text" name="trid" value="<?php echo $bell['t_id']; ?>" readonly>
                         </td>

                         <td style="display: none;">
                            <input type="text" name="beneficiary" value="<?php echo $bell['beneficiary']; ?>" readonly>
                         </td>

                         <td style="display: none;">
                            <input type="text" name="amount" value="<?php echo $bell['amount']; ?>" readonly>
                         </td>
                         <td style="display: none;">
                            <input type="text" name="u_id" value="<?php echo $bell['u_id']; ?>" readonly>
                         </td>



                          

                              <td class="text-right">
                             <?php echo $bell['amount']; ?>
                            </td>

                             <td class="text-right">
                             <?php echo $bell['balance']; ?>
                            </td>


                             <td>
                          <?php echo $bell['beneficiary']; ?>
                            </td>

                                                      
                           


                            <td class="text-right">
                             <?php echo $bell['t_date']; ?>
                            </td>


                          </tr>
                        </form>

                           <?php }

                           ?>
                          
                        </tbody>
                      </table>
                    </div>


    </div>
  

<!-- End of table -->


<!-- start changing from unpaid to paid -->  



<!-- buy airtime approval -->

  
    <div class="col-md-12">
      <div class="card-header" style="text-align: center;margin-top: 42px;color: #fff;background: #27293c;border-radius: 14px 18px 0px 0px;">
                <h4 class="card-title">Loan Payment Approval</h4>
                
              </div>

     
                    <div class="table-responsive" style="padding: px;background: #e6e6ebc2;border-radius: 0px 0px 16px 0px;">
                      <table class="table table-striped">
                        <tbody>
             <tr style="background: #283f6e;color: #fff;"> 
                      <th>Take Action</th>
                       <th>Loan Status</th>
                       <th>T-ID</th>
                       <th>Transaction Name</th>
                       <th style="text-align: right;">Amount</th>
                       <th style="text-align: right;">Balance</th>
                       <th style="text-align: right;">Beneficiary</th>
                       <th style="text-align: right;">Date</th>
            </tr>

                          <?php 
                    
                    $querry1 = "SELECT * FROM  transaction WHERE t_name ='loan_credit'and loan_status ='unpaid' and amount > 0 ORDER BY t_id DESC LIMIT 5";
                     $querry1result = mysqli_query($conn, $querry1);
                       while ($bell=mysqli_fetch_assoc($querry1result)) {
                    
                        ?>
                        
                     
                         <form action="include/loan_paid.php" method="post">     
                          <tr>

                             <td>
                              
                                <input type="submit" name="loan_paid" value="Submit" class="process">
                             
                            </td>

                           <td>
                          <select name="loan_status" class="form-group" style="height: 39px;width: 108px;cursor: pointer;">
                            <option value="<?php echo $bell['loan_status']; ?>"><?php echo $bell['loan_status']; ?></option>
                            <option value="debited_to_user">paid-To-User</option>
                          </select>
                            </td>
                            

                       

                            <td>
                          <?php echo $bell['t_id']; ?>
                            </td>

                            <td>
                          <?php echo $bell['t_name']; ?>
                            </td>



                         <td style="display: none;">
                            <input type="text" name="trid" value="<?php echo $bell['t_id']; ?>" readonly>
                         </td>

                         <td style="display: none;">
                            <input type="text" name="beneficiary" value="<?php echo $bell['beneficiary']; ?>" readonly>
                         </td>

                         <td style="display: none;">
                            <input type="text" name="amount" value="<?php echo $bell['amount']; ?>" readonly>
                         </td>
                         <td style="display: none;">
                            <input type="text" name="u_id" value="<?php echo $bell['u_id']; ?>" readonly>
                         </td>



                          

                              <td class="text-right">
                             <?php echo $bell['amount']; ?>
                            </td>

                             <td class="text-right">
                             <?php echo $bell['balance']; ?>
                            </td>


                             <td>
                          <?php echo $bell['beneficiary']; ?>
                            </td>

                                                      
                           


                            <td class="text-right">
                             <?php echo $bell['t_date']; ?>
                            </td>


                          </tr>
                        </form>

                           <?php }

                           ?>
                          
                        </tbody>
                      </table>
                    </div>


    </div>
  

<!-- End of table -->



<!-- end changinf from paid to unpaid--> 


   <div class="col-md-12">
      <div class="card-header" style="text-align: center;margin-top: 42px;color: #fff;background: #27293c;border-radius: 14px 18px 0px 0px;">
                <h4 class="card-title">Your Latest Transaction</h4>
                
              </div>

     
                    <div class="table-responsive" style="padding: px;background: #e6e6ebc2;border-radius: 0px 0px 16px 0px;">
                      <table class="table table-striped">
                        <tbody>
             <tr style="background: #283f6e;color: #fff;"> 
                      
                       <th>Status</th>
                       <th style="text-align: right;">Loan Status</th>
                       <th>T-ID</th>
                       <th>Transaction Name</th>
                        <th style="text-align: right;">Beneficiary</th>
                       
                       <th style="text-align: right;">Amount</th>
                       <th style="text-align: right;">Balance</th>
                      
                       <th style="text-align: right;">Date</th>
            </tr>

                          <?php 
                    
                    $querry1 = "SELECT * FROM  transaction WHERE t_name ='loan_credit' and status='approved' and loan_status='debited_to_user' and amount > 0 ORDER BY t_id DESC LIMIT 5";
                     $querry1result = mysqli_query($conn, $querry1);
                       while ($bell=mysqli_fetch_assoc($querry1result)) {
                    
                        ?>
                        
                     
                           
                          <tr>

                            <td>
                              <?php echo $bell['status']; ?>
                            </td>

                         <td class="text-right">
                             <?php echo $bell['loan_status']; ?>
                            </td>

                              <td class="text-right">
                             <?php echo $bell['t_id']; ?>
                            </td>

                            <td>
                          <?php echo $bell['t_name']; ?>
                            </td>
                                
                                <td>
                          <?php echo $bell['beneficiary']; ?>
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
  

<!-- End of table -->






</div>
</div>
</div>
</div>




<div style="margin-top: 100px;"></div>

<?php include 'footer.php'; ?>

<?php  }
 else{

  header('Location: ../index.php');
}
?>