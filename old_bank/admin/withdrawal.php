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
			<h1 style="color: #fff;text-align: center;margin-top: 68px;">Withdraw Funds</h1>
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





      
          <div class="col-md-12">
            <div class="card">
              <div class="card-header" style="text-align: center;background: #27293c;">
                <h4 class="card-title">Pending Withdrawals</h4>
              </div>
              <div class="card-body" style="background: #dedee2;">
               
              


               <div class="table-responsive" style="background: #e6e6ebc2;border-radius: 0px 0px 16px 0px;">
                      <table class="table table-striped">
                        <tbody>
             <tr style="background: #283f6e;color: #fff;"> 
                       <th>Take Action</th>
                       <th>Transaction ID</th>
                       <th>Status</th>

                      <th>A-Number</th>
                       <th style="text-align: right;">Amount</th>
                    
                      <th style="text-align: right;">Balance</th>
                       <th style="text-align: right;">Date</th>
               </tr>

                          <?php 
                    
                        $querry1 = "SELECT * FROM  transaction WHERE  t_name ='withdrawal' and status = 'pending' ORDER BY t_id DESC LIMIT 50";
                        $querry1result = mysqli_query($conn, $querry1);
                         while ($bell=mysqli_fetch_assoc($querry1result)) { ?>
                        
                     
                       
                          <tr>
                          <form action="include/withdrawal.php" method="post" class="form-group">   

                            <td>
                              
                                <input type="submit" name="process" value="Process" class="process">
                             
                            </td>

                            <td style="width: 50px;">
                            <?php echo $bell['t_id']; ?>
                            </td>
                                   

                                   <td>
                          <select name="status" class="form-group" style="height: 39px;width: 108px;cursor: pointer;">
                            <option value="pending">pending</option>
                            <option value="approved">approve</option>
                            <option value="cancelled">cancel</option>
                          </select>
                            </td>
                      


                             <td style="display: none;">
                              <input  name="transaction_id" value="<?php echo $bell['t_id']; ?>" readonly >
                            </td>

                           <td style="display: none;">
                              <input  name="user_id" value="<?php echo $bell['u_id']; ?>" readonly >
                            </td>

                            <td style="display: none;">
                              <input name="amount_debited" value="<?php echo $bell['amount']; ?>" readonly >
                            </td>

                            <td style="display: none;">
                              <input name="account_number" value="<?php echo $bell['a_number']; ?>" readonly>
                            </td> 



                            <td class="text-right">
                             <?php echo $bell['a_number']; ?>
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

                        </form>
                          </tr>
              
                           <?php }

                           ?>
                          
                        </tbody>
                      </table>
                    </div>

              </div>
              
            </div>
          </div>








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