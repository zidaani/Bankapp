<?php 
include_once '../include/connect.php';
session_start();
if (!empty($_SESSION['admin_username'])) {
include 'include/session_set.php';
  ?>

<?php include 'header.php'; ?> 

 


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


<div class="col-md-9" style="background: #C4C4C5;margin-right: 0px;border-radius: 0px 35px 31px 0px;">
			<div class="row" style="margin-top: 5px;">




<!--=======SUpport message start here =========-->


<form method="post" action="include/support.php" enctype="multipart/form-data" style="width: 100%;margin-left: 10%;">
 <label > support category</label>
 <div class="">
 <select name="support_category" class="form-control">
 	<option value="finace">Finance</option>
 	<option value="password">Password Reset</option>
 	<option value="general">General Enquerry</option>
 </select>

 <label > Subject</label>
 <div class="form-group">
 	<input type="text" name="subject" class="form-control">
 </div>

<label > message</label>
<div class="form-group">
	<textarea name="message"  cols="30" rows="10" class="form-control"></textarea>
</div>
<label for=""> Enter Pin</label>
<div class="form-group">
	<input type="text" name="pin" class="form-control">
</div>
<div class="form-group">
	<input type="submit" name="submit" value="Send" class="btn btn-success">
</div>

 </div>
	
</form>







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