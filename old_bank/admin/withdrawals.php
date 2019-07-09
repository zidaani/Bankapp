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
			<h1 style="color: #fff;text-align: center;margin-top: 68px;">Withdrawal History</h1>
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





<!-- Approved transaction -->

<div class="col-md-12">
      <div class="card-header" style="text-align: center;margin-top: 42px;color: #fff;background: #27293c;border-radius: 14px 18px 0px 0px;">
                <h4 class="card-title">Approved Transaction</h4>
                
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

                     $querry1= "SELECT * FROM  transaction WHERE t_name ='Withdrawal'and status='approved' OR status='pending' OR status='cancelled' ORDER BY t_id DESC LIMIT 5 ";
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


<!-- End of table -->






<!-- begining of table -->

 
    <div class="col-md-12">
      <div class="card-header" style="text-align: center;margin-top: 42px;color: #fff;background: #27293c;border-radius: 14px 18px 0px 0px;">
                <h4 class="card-title">Unapproved Transaction</h4>
                
              </div>

     
                    <div class="table-responsive" style="padding: px;background: #e6e6ebc2;border-radius: 0px 0px 16px 0px;">
                      <table class="table table-striped">
                        <tbody>
             <tr style="background: #283f6e;color: #fff;"> 
                      <th>Take Action</th>
                       <th>Transaction ID</th>
                       <th>Account Number</th>
                        <th >Status</th>
                       <th>Transaction Type</th>
                       <th style="text-align: right;">Amount</th>
                       <th style="text-align: right;">Balance</th>
                       <th style="text-align: right;">Date</th>
            </tr>

                          <?php 

                     $querry1= "SELECT * FROM  transaction WHERE t_name ='Withdrawal' and status !='approved' and status !='pending' ORDER BY t_id DESC LIMIT 5 ";
                     $querry1result = mysqli_query($conn, $querry1);
                       while ($bell=mysqli_fetch_assoc($querry1result)) { ?>
                        
                     
                       <form action="include/rechange_withdrawal_status.php" method="post">   
                          <tr>

                             <td>
                              
                                <input type="submit" name="edit" value="Process" class="process">
                             
                            </td>

                            <td>
                              <?php echo $bell['t_id']; ?>
                            </td>

                            <td>
                              <?php echo $bell['a_number']; ?>
                            </td>
 
                         <td style="display: none;">
                            <input type="text" name="tid" value="<?php echo $bell['t_id']; ?>" readonly>
                         </td>

                         <td style="display: none;">
                            <input type="text" name="currentstatus" value="<?php echo $bell['status']; ?>" readonly>
                         </td>

                         <td style="display: none;">
                            <input type="text" name="amount" value="<?php echo $bell['amount']; ?>" readonly>
                         </td>

                         <td style="display: none;">
                            <input type="text" name="a_number" value="<?php echo $bell['a_number']; ?>" readonly>
                         </td>

                      
                         
                          

                            <td>
                          <select name="status" class="form-group" style="height: 39px;width: 108px;cursor: pointer;">
                            <option value="<?php echo $bell['status']; ?>"><?php echo $bell['status']; ?></option>
                            <option value="pending">pending</option>
                          </select>
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

                          </form> 

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