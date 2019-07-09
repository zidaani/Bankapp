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
			<h1 style="color: #fff;text-align: center;margin-top: 68px;">Buy Airtime</h1>
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
                <h4 class="card-title">Buy Airtime</h4>
              </div>
              <div class="card-body" style="background: #dedee2;">
                <form action="include/airtime.php" method="post">

                  <label> Choose Network Carrier</label>
                  <div class="form-group">
                  <select name="airtime_carrier" class="form-group" style="height: 60px;width: 70%;padding: 10px;">
                    <option value="mtn"> MTN</option>
                     <option value="vodafone">VODAFONE</option>
                      <option value="tigo">TIGO</option>
                       <option value="glo">GLO</option>
                  </select>
                  </div>

                  <label>Enter Phone Number</label>
                  <div class="form-group">
                    <input type="number" name="airtime_number" class="form-control">
                  </div>

                  <label> Enter Amount</label>
                  <div class="form-group">
                    <input type="number" name="amount" class="form-control">
                  </div>
                   <label> Enter Pin</label>
                  <div class="form-group">
                    <input type="password" name="pin" class="form-control">
                  </div>
                  <div >
                <button type="submit" class="btn btn-fill btn-primary" name="transfer">Submit</button>
              </div>
                </form>
              </div>
              
            </div>
          </div>





<!-- begining of table -->

  
    <div class="col-md-12">
      <div class="card-header" style="text-align: center;margin-top: 42px;color: #fff;background: #27293c;border-radius: 14px 18px 0px 0px;">
                <h4 class="card-title">Your Airtime History</h4>
                
              </div>

     
                    <div class="table-responsive" style="padding: px;background: #e6e6ebc2;border-radius: 0px 0px 16px 0px;">
                      <table class="table table-striped">
                        <tbody>
             <tr style="background: #283f6e;color: #fff;"> 
                       <th>Status</th>
                       <th>Transaction Name</th>
                       <th style="text-align: right;">Amount</th>
                       <th style="text-align: right;">Network Carrier</th>
                       <th style="text-align: right;">Date</th>
            </tr>

                          <?php 
                    
                    $querry1 = "SELECT * FROM  transaction WHERE u_id = '$u_id' and t_name ='airtime' and amount > 0 ORDER BY t_id DESC LIMIT 5";
                     $querry1result = mysqli_query($conn, $querry1);
                       while ($bell=mysqli_fetch_assoc($querry1result)) {
                    
                        ?>
                        
                     
                           
                          <tr>

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
                             <?php echo $bell['airtime_carrier']; ?>
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