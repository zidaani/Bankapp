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
			<h1 style="color: #fff;text-align: center;margin-top: 68px;">invest</h1>
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

<style>
  .table th, .table td {
    padding: 0.75rem;
    vertical-align: top;
    border-top: 1px solid #dee2e6;
    border-right: 1px solid #0000001a;
    border-bottom: 1px solid #0000001a;
}
</style>




          <div class="col-md-12">
            <div class="card">
              <div class="card-header" style="text-align: center;background: #27293c;">
                <h4 class="card-title">invest</h4>
              </div>
              <div class="card-body" style="background: #dedee2;">
               
              



 <form action="include/invest.php" method="post">
   <input type="submit" name="calc" value="calculate">
   <input type="reset" name="reset">
   <a href="invest.php">refresh</a>
 </form>




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