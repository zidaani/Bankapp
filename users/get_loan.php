<?php 
include_once '../include/connect.php';
session_start();

include 'include/session_set.php';
if (!empty($_SESSION['username'])){
  //echo "<script>alert('Hello ".$_SESSION['username']."')</script>";

 
 ?>

<?php include 'header.php'; ?> 


<div class="container" style="height: 120px;margin: 0px 0px 0px 0px;background-image: url(../img/img1.jpg); max-width: 100% !important; background-size: cover; background-repeat: no-repeat;">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<h1 style="color: #fff;text-align: center;margin-top: 68px;">Request For Loan</h1>
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
                <h4 class="card-title">Request For Loan</h4>
              </div>
              <div class="card-body" style="background: #dedee2;">
                <form action="include/loan.php" method="post">

                  <label>Amount</label>
                  <input type="number" name="amount" class="form-control">

                  <label> Choose Duration</label>
                  <div class="form-group">
                  <select name="loan_duration" class="form-group" style="height: 60px;width: 70%;padding: 10px;">
                    <option value="1"> 1 Month</option>
                     <option value="3"> 3 Months</option>
                      <option value="6"> 6 Months</option>
                       <option value="12"> 12 Months</option>
                  </select>
                  </div>

                  <label > Loan Date </label>
                  <div class="form-group">
                    <input type="date" name="loan_date" class="form-control">
                  </div>

                  <label>Reason For The Loan</label>
                  <div class="form-group">
                    <textarea type="textarea"  name="loan_reason" class="form-control"></textarea>
                  </div>

                  <label>By requesting You Accept The terms And Conditions</label>
                  <div class="form-group">
                    <input type="hidden" name="loan_terms" >
                    <input type="checkbox" name="loan_terms" class="form-control" style="margin-left: -33%;position: absolute;height: 28px;">
                  </div> <br>

                   <label> Enter Pin</label>
                  <div class="form-group">
                    <input type="password" name="pin" class="form-control">
                  </div>
                  <div >
                <button type="submit" class="btn btn-fill btn-primary" name="get_loan">Submit</button>
              </div>
                </form>
              </div>
              
            </div>
          </div>





<!-- begining of table -->

  
    <div class="col-md-12">
      <div class="card-header" style="text-align: center;margin-top: 42px;color: #fff;background: #27293c;border-radius: 14px 18px 0px 0px;">
                <h4 class="card-title">Your Latest Transaction</h4>
                
              </div>

     
                    <div class="table-responsive" style="padding: px;background: #e6e6ebc2;border-radius: 0px 0px 16px 0px;">
                      <table class="table table-striped">
                        <tbody>
             <tr style="background: #283f6e;color: #fff;"> 
                       <th>Status</th>
                       <th>Loan Status</th>
                       <th>Transaction Name</th>
                       <th style="text-align: right;">Amount</th>
                       <th style="text-align: right;">Beneficiary</th>
                       <th style="text-align: right;">Date</th>
            </tr>

                          <?php 
                    
                    $querry1 = "SELECT * FROM  transaction WHERE u_id = '$u_id' and t_name ='loan' and amount > 0 ORDER BY t_id DESC LIMIT 5";
                     $querry1result = mysqli_query($conn, $querry1);
                       while ($bell=mysqli_fetch_assoc($querry1result)) {
                    
                        ?>
                        
                     
                           
                          <tr>

                            <td>
                              <?php echo $bell['status']; ?>
                            </td>

                            <td>
                              <?php echo $bell['loan_status']; ?>
                            </td>


                            <td>
                          <?php echo $bell['t_name']; ?>
                            </td>


                            <td class="text-right">
                             <?php echo $bell['amount']; ?>
                            </td>
                            
                             <td class="text-right">
                             <?php echo $bell['beneficiary']; ?>
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