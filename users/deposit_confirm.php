<?php 
include_once '../include/connect.php';
session_start();
include 'include/session_set.php';
if (!empty($u_id)) {


  ?>
<?php include 'header.php'; ?> 
<style>
  .col-3{
    font-size: 12px;
    border-right: 1px solid #fff; 
  }
  
  .row{
    font-family: 'Roboto' san serif;
  }
  .form-control {
    display: block;
    width: 82%;
    padding: 7px 0.75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 3px solid #ced4da;
    border-radius: 8px;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.hidden{
  display:none;
}
.hidden.active{
display:block !important;
}

.mtn{
  background:#d2a602;
}
.tigo{
 background:#0022b7;
}
.vodafone{
  background:#c31717;
}
.paypal{
  background:rgb(0, 151, 215);
}

</style>
 


<div class="container" style="height: 120px;margin: 0px 0px 0px 0px;background-image: url(../img/img1.jpg); max-width: 100% !important; background-size: cover; background-repeat: no-repeat;">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<h1 style="color: #fff;text-align: center;margin-top: 68px;">Deposit Confirmation</h1>
		</div>
	</div>
</div>


<div class="container" style="height:auto;background: #26303b;max-width: 100% !important;">
	<div class="row" style="padding: 30px 8px;margin: 0px !important;">


		<div class="col-md-3 vanmobile" style="background:#283f6e;border-radius: 27px 0px 0px 32px;"> 
      
<?php include 'sidebar.php'; ?>
      
		</div>
<?php 
$deposit_id_confirm=$_SESSION['user_deposit_id'];
$dep_confirm_get_amount=mysqli_query($conn,"SELECT * FROM transaction WHERE u_id='$u_id' AND t_id='$deposit_id_confirm'");
while ($user_deposit_set=mysqli_fetch_assoc($dep_confirm_get_amount)) {
  $amount=$user_deposit_set['amount'];
  $status=$user_deposit_set['status'];
  $new_deposit_id=$user_deposit_set['t_id'];
  $token=$user_deposit_set['transaction_token'];



 ?>

<div class="col-md-9"style="background:#C4C4C5;margin-right:0px;border-radius: 0px 35px 31px 0px;">
			<div class="row" style="margin-top: 5px;">

          <div class="col-md-12">
            <div class="card">
              <div class="card-header" style="text-align: center;background: #27293c;">
                <h4 class="card-title">Deposit Confirm </h4>
              </div>

              <div class="card-body" style="background: #dedee2;">



<div class="row justify-content-center" style="text-align: center;background: #222;color: #fff;">

  <div class="col-4 mtn" id="mtn" style="cursor: pointer;padding: 14px;">
  MTN MOMO
  </div>
   <div class="col-4" id="tigo" style="cursor: pointer;padding: 14px;">
  Tigo Cash
  </div>
  <div class="col-4" id="vodafone" style="cursor: pointer;padding: 14px;">
  Vodafone Cash
  </div>

</div>


<!-- ========MTN MOMO========== -->
<div class="row justify-content-center hidden active" id="mtn_content">
  <div class="col-md-12">
<h2 align="center" style="color: #222222b3;">Confirm MTN Deposit</h2>

<div class="row" >
  <table class="table  table-striped">
      <tr>
          <td>Send amount to :</td>
          <td><?php
        $res=mysqli_query($conn,"SELECT mtn_number,tigo_number,vodafone_number FROM users WHERE user_type='admin' ");
        while($numbers=mysqli_fetch_assoc($res)){
            $mtn_number=$numbers['mtn_number'];
            $tigo_number=$numbers['tigo_number'];
            $vodafone_number=$numbers['vodafone_number'];
        }
          
         echo $mtn_number; 
          ?></td>
      </tr>
      <tr>
      <td>Deposit ID :</td>
      <td><?php echo  $new_deposit_id; ?></td>
    </tr>
    <tr>
      <td>Amount :</td>
      <td><?php echo $amount; ?></td>
    </tr>
    <tr>
      <td>Status :</td>
      <td><?php echo $status; ?></td>
    </tr>
    <tr>
      <td style="color: #e41;width: 54%;font-size: 18px;">Use the Reference below to make payment</td>
    </tr>
     <tr>
      <td>Reference :</td>
      <td><?php echo $token; ?></td>
    </tr> </table>
<form action="include/deposit_confirm.php" method="post" class="form-group" style="width: 100%;">
<div style="display: none;">
  <input type="hidden" value="" name="deposit_id">
  
</div>


  <label for="">MTN Account Name</label>
  <input type="text" name="account_name" placeholder="Enter Your Account Name" class="form-control" > 
   <label for="">MTN Transaction ID</label>
   <input type="text" name="transaction_id" placeholder="Enter Your Transaction ID" class="form-control">

   <input type="submit" name="mtn_submit" class="btn-info" value="Confirm" style="cursor:pointer;padding: 5px; border-radius: 5px;margin-top: 5px;">
</form>


</div>
  </div>
</div>

<!-- ========MTN END========== -->



<!-- ========MTN TIGO========== -->
<div class="row justify-content-center hidden" id="tigo_content">
  <div class="col-md-12">
<h2 align="center" style="color: #222222b3;">Confirm Tigo Deposit</h2>

<div class="row" >
  <table class="table  table-striped">
            <tr>
          <td>Send amount to :</td>
          <td><?php echo $tigo_number; ?></td>
           </tr>
      <tr>
      <td>Deposit ID :</td>
      <td><?php echo  $new_deposit_id; ?></td>
    </tr>
    <tr>
      <td>Amount :</td>
      <td><?php echo $amount; ?></td>
    </tr>
    <tr>
      <td>Status :</td>
      <td><?php echo $status; ?></td>
    </tr>
    <tr>
      <td style="color: #e41;width: 54%;font-size: 18px;">Use the Reference below to make payment</td>
    </tr>
     <tr>
      <td>Reference :</td>
      <td><?php echo $token; ?></td>
    </tr>
 </table>
<form action="include/deposit_confirm.php" method="post" class="form-group" style="width: 100%;">
  <label for="">Tigo Account Name</label>
  <input type="text" name="account_name" placeholder="Enter Your Account Name" class="form-control" > 
   <label for="">Tigo Transaction ID</label>
   <input type="text" name="transaction_id" placeholder="Enter Your Transaction ID" class="form-control">

   <input type="submit" name="tigo_submit" class="btn-info" value="Confirm" style="cursor:pointer;padding: 5px; border-radius: 5px;margin-top: 5px;">
</form>


</div>
  </div>
</div>

<!-- ========MTN END========== -->

<!-- ========VODAFONE MOMO========== -->
<div class="row justify-content-center hidden" id="vodafone_content">
  <div class="col-md-12">
<h2 align="center" style="color: #222222b3;">Confirm Vodafone Deposit</h2>

<div class="row" >
  <table class="table  table-striped">
      <tr>
          <td>Send amount to :</td>
          <td><?php echo $vodafone_number; ?></td>
           </tr>
      
       <tr>
      <td>Deposit ID :</td>
      <td><?php echo  $new_deposit_id; ?></td>
    </tr>
    <tr>
      <td>Amount :</td>
      <td><?php echo $amount; ?></td>
    </tr>
    <tr>
      <td>Status :</td>
      <td><?php echo $status; ?></td>
    </tr>
    <tr>
      <td style="color: #e41;width: 54%;font-size: 18px;">Use the Reference below to make payment</td>
    </tr>
     <tr>
      <td>Reference :</td>
      <td><?php echo $token; ?></td>
    </tr>
 </table>
<form action="include/deposit_confirm.php" method="post" class="form-group" style="width: 100%;">
  <label for="">Vodafone Account Name</label>
  <input type="text" name="account_name" placeholder="Enter Your Account Name" class="form-control" > 
   <label for="">Vodafone Transaction ID</label>
   <input type="text" name="transaction_id" placeholder="Enter Your Transaction ID" class="form-control">

   <input type="submit" name="vodafone_submit" class="btn-info" value="Confirm" style="cursor:pointer;padding: 5px; border-radius: 5px;margin-top: 5px;">
</form>


</div>
  </div>
</div>

<!-- ========MTN END========== -->

              </div>
              
            </div>
          </div>

</div>


</div>

<?php } ?>
</div>
</div>

<script type="text/javascript">
  $(document).ready(function(){
//   For Paypal 
// $('#paypal').click(function(){
// $('#mtn_content').removeClass('active');
// $('#tigo_content').removeClass('active');
// $('#vodafone_content').removeClass('active');
//  $('#paypal_content').addClass('active');

//  $('#vodafone').removeClass('vodafone');
//  $('#tigo').removeClass('tigo');
//  $('#mtn').removeClass('mtn');
//  $('#paypal').addClass('paypal');
// });

 //For MTN
 $('#mtn').click(function(){
$('#paypal_content').removeClass('active');
$('#tigo_content').removeClass('active');
$('#vodafone_content').removeClass('active');
$('#mtn_content').addClass('active');

 $('#vodafone').removeClass('vodafone');
 $('#tigo').removeClass('tigo');
 $('#paypal').removeClass('paypal');
$('#mtn').addClass('mtn');
});

  //For Tigo
 $('#tigo').click(function(){
$('#paypal_content').removeClass('active');
$('#vodafone_content').removeClass('active');
$('#mtn_content').removeClass('active');
$('#tigo_content').addClass('active');

 $('#vodafone').removeClass('vodafone');
 $('#mtn').removeClass('mtn');
 $('#paypal').removeClass('paypal');
$('#tigo').addClass('tigo');
});

  //For Vodafone
 $('#vodafone').click(function(){
$('#paypal_content').removeClass('active');
$('#tigo_content').removeClass('active');
$('#mtn_content').removeClass('active');
$('#vodafone_content').addClass('active');

 $('#tigo').removeClass('tigo');
 $('#mtn').removeClass('mtn');
 $('#paypal').removeClass('paypal');
$('#vodafone').addClass('vodafone');
});


});

</script>


<div style="margin-top: 100px;"></div>

<?php include 'footer.php'; ?>

<?php  }
 else{

  header('Location: ../index.php');
}
?>