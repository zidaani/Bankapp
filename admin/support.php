<?php 
include_once '../include/connect.php';
session_start();
if (!empty($_SESSION['admin_username'])) {
include 'include/session_set.php';
  ?>

<?php include 'header.php'; ?> 


<div class="container" style="height: 120px;background-image: url(../img/img1.jpg); max-width: 100% !important; background-size: cover; background-repeat: no-repeat;">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<h1 style="color: #fff;text-align: center;margin-top: 68px;">Suport Messages</h1>
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




<!--=======SUpport message start here =========-->

<div class="table-responsive" style="background: #f9f9fa;border-radius: 0px 20px 16px 0px;">

<table class="table fonnt" >
	<tbody>
		<tr>
			<td>View</td>
			<td>Support ID</td>
			<td>Sender ID</td>
			<td>Status</td>
			<td>From</td>
			<td>date</td>
			<td></td>
			
		</tr>
		
		<?php 
		$svl="SELECT * FROM support WHERE message_type!='replied' ORDER BY admin_status DESC";
		$svlq=mysqli_query($conn, $svl);
		
			while ($ress=mysqli_fetch_assoc($svlq)) {
				$resss=$ress['s_id'];
				$sender_id=$ress['sender_id'];
				$support_category=$ress['support_category'];
				$s_u_name=$ress['s_u_name'];
	

		 ?>	
		<tr>
		<form action="views.php" method="post" class="form-group">
		<td>
			<input type="submit" name="view" value="view" class="form-control" style="cursor: pointer;">
		</td>

		<div style="display: none;"><input name="sid" value="<?php echo $resss;?>" readonly></div>
		<div style="display: none;"><input name="sender_id" value="<?php echo $sender_id;?>" readonly></div>
		<div style="display: none;"><input name="support_category" value="<?php echo $sender_id;?>" readonly></div>
		<div style="display: none;"><input name="s_u_name" value="<?php echo $s_u_name;?>" readonly></div>
		<td>
			<?php echo $resss; ?>
		</td>
		<td>
			<?php echo $sender_id; ?>
		</td>
		
		<td>
			<?php echo $ress['admin_status']; ?>
		</td>
		<td>
			<?php echo $ress['sender']; ?>
		</td>
		<td>
			<?php echo $ress['date']; ?>
		</td>
		<td>		  
<?php 
$sqlview = "SELECT * FROM support WHERE admin_status='unread' AND reply_s_id='$resss' ";
$sqlviewq=mysqli_query($conn,$sqlview);
$sview=mysqli_num_rows($sqlviewq);
if ($sview==0) { ?>
 <span style="color: #fff;margin-right: -7px;padding: 7px 10px 8px 15px;background: #f9f9fa;border-radius: 30px;"> </span>
<?php 
}else { ?>
 <span style="color: #fff;margin-right: -7px;padding: 7px 10px 8px 15px;background: #e41;border-radius: 30px;"> <?php echo $sview; ?></span>
  <?php } ?>


		</td>
		
		</form>	
		</tr>
			<?php } ?>
	</tbody>
</table>

</div>





<!--=======SUpport message end here =========-->

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