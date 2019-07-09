

<?php 
include_once '../include/connect.php';
session_start();
if (!empty($_SESSION['username'])) {
include 'include/session_set.php';
  ?>
<?php include 'header.php'; ?> 

 
<style>
	.form-control {
    display: block;
    width: 100%;
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
</style>

<div class="container" style="height: 120px;margin: 0px 0px 0px 0px;background-image: url(../img/img1.jpg); max-width: 100% !important; background-size: cover; background-repeat: no-repeat;">
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


<div class="col-md-9" style="background: #C4C4C5;margin-right: 0px;">
			<div class="row" style="margin-top: 5px;">




<!--=======SUpport message start here =========-->

<div class="table-responsive" style="background: #f9f9fa;border-radius: 0px 0px 16px 0px;">

<table class="table fonnt" >
	<tbody>
		<tr>
			<td>View</td>
			<td>Support ID</td>
			<td>Status</td>
			<td>From</td>
			<td>date</td>
			
		</tr>
		
		<?php 
		$svl="SELECT * FROM support WHERE u_id=$u_id";
		$svlq=mysqli_query($conn, $svl);
		
			while ($ress=mysqli_fetch_assoc($svlq)) {
				$resss=$ress['s_id'];
	
		 ?>	
		<tr>
		<form action="views.php" method="post" class="form-group">
		<td>
			<input type="submit" name="view" value="view" class="form-control" style="cursor: pointer;">
		</td>

		<div style="display: none;"><input name="ssid" value="<?php echo $resss;?>" readonly></div>
		<td>
			<?php echo $resss; ?>
		</td>
		
		<td>
			<?php echo $ress['status']; ?>
		</td>
		<td>
			<?php echo $ress['sender']; ?>
		</td>
		<td>
			<?php echo $ress['date']; ?>
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



