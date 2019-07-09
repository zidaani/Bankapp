
<?php 
include_once '../include/connect.php';
session_start();
if (!empty($_SESSION['username'])) {
include 'include/session_set.php';
  ?>

<?php include 'header.php'; ?> 

 


<div class="container" style="height: 120px;margin: 0px;background-image: url(../img/img1.jpg); max-width: 100% !important; background-size: cover; background-repeat: no-repeat;">
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




<!--=======SUpport message start here =========-->
<div class="col-md-9" style="background: #C4C4C5;margin-right: 0px;">




	<?php 
if (isset($_POST['view'])) {



$sid = mysqli_real_escape_string($conn, $_POST['sid']);
$sender_id = mysqli_real_escape_string($conn, $_POST['sender_id']);
$support_category= mysqli_real_escape_string($conn, $_POST['support_category']);
$s_u_name = mysqli_real_escape_string($conn, $_POST['s_u_name']);



mysqli_query($conn, "UPDATE support SET status='read', reply_s_id='$sid' WHERE s_id='$sid' AND sender_id='$sender_id' status!='unread' ");



$sqlview = "SELECT * FROM support WHERE reply_s_id='$sid' AND message_type='new' ";
$sqlviewq=mysqli_query($conn,$sqlview);
while ($sview=mysqli_fetch_assoc($sqlviewq)) {
$_SESSION['s_u_name']=$sview['s_u_name'];

?>
<div class="row" style="margin-left: 40% !important;margin-top: 30px; width: 60%;background: #fff;border-radius: 0px 0px 0px 57px;box-shadow: 0px 0px 7px 2px #00000080;margin: 10px;">

		<div class="row" style="padding: 0px 6px 0px 18px; width: 100%;">

	<div class="col-md-6 ">
		<img src="../icons/icons8-online_support.png" alt="" style="width: 27px;padding: 3px;background: #fff;"> <span><?php echo $sid; ?></span> <br>
From <?php echo $_SESSION['s_u_name']; ?>
	</div>

	<div class="col-md-6" style="text-align: right;">
		<a href="javascript:history.go(-1)"> <img src="../icons/icons8-return.png" alt="" style="width: 29px;padding: 3px;background: #fff;height: 29px;"></a> &emsp;<div><?php echo $sview['date']; ?></div></div>

		</div>




<div class="row" style="border: 1px solid #fff;margin:0px 0px 0px 0px;padding: 10px; background: #e0e6e6; width: 100%;border-radius: 0px 0px 0px 57px;">
	<div class="col-md-12">
		<p><?php echo $sview['message']; ?>
		</p>
		</div>
</div>

</div>

<?php } ?>



<!-- first support end here -->

<!-- Additional first support start Here -->


	<?php 

$sqlview = "SELECT * FROM support WHERE s_id='$sid' ";
$sqlviewq=mysqli_query($conn,$sqlview);
while ($sview=mysqli_fetch_assoc($sqlviewq)) {
$_SESSION['reply_s_id']=$sview['reply_s_id'];
$_SESSION['sender_id']=$sview['sender_id'];
$sender_id=$_SESSION['sender_id'];
$s_iid=$_SESSION['reply_s_id'];
}

$sqlview = "SELECT * FROM support WHERE reply_s_id='$s_iid' AND message_type='replied' ";
$sqlviewq=mysqli_query($conn,$sqlview);
while ($sview=mysqli_fetch_assoc($sqlviewq)) {
	$_SESSION['s_u_name']=$sview['s_u_name'];
	$_SESSION['sender_id']=$sview['sender_id'];
     $senderid=$_SESSION['sender_id'];

?>


<?php 
if ($senderid!=$real_sender_id) { ?>


<div class="row" style="margin-top: 30px; width: 60%;margin-left: 0%;background: #fff;border-radius: 19px;box-shadow: 0px 0px 7px 2px #00000080;border-radius: 23px 0px 57px 0px;">


<?php	
} else { ?>


<div class="row" style="margin-top: 30px; width: 60%;margin-left: 40%;background: #fff;border-radius: 19px;box-shadow: 0px 0px 7px 2px #00000080;border-radius: 0px 23px 0px 57px;">


<?php }

 ?>






		<div class="row" style="padding: 0px 6px 0px 18px; width: 100%;">

	<div class="col-md-6 ">
		<img src="../icons/icons8-online_support.png" alt="" style="width: 27px;padding: 3px;background: #fff;"> <span><?php echo $sview['s_id']; ?></span> <br>
From <?php echo $_SESSION['s_u_name']; ?>
	</div>

	<div class="col-md-6" style="text-align: right;">
		<a href="javascript:history.go(-1)"> <img src="../icons/icons8-return.png" alt="" style="width: 29px;padding: 3px;background: #fff;height: 29px;"></a> &emsp;<div><?php echo $sview['date']; ?></div></div>
		</div>



<?php 
if ($senderid!=$real_sender_id) { ?>

<div class="row" style="border: 1px solid #fff;margin:0px 0px 0px 0px;padding: 10px; background: #e0e6e6; width: 100%;border-radius: 0px 0px 57px 0px;">

<?php	
} else { ?>

<div class="row" style="border: 1px solid #fff;margin:0px 0px 0px 0px;padding: 10px; background: #e0e6e6; width: 100%;border-radius: 0px 0px 0px 57px;">


<?php }

 ?>


	<div class="col-md-12">
		<p><?php echo $sview['message']; ?>
		</p>
		</div>
</div>
	</div>


<!-- Additional first support replys  end Here -->

<?php }  


}  ?>	




<!--======= Admin Reply Here======== -->
<?php
if (isset($_POST['reply'])) {
	
	$reply_message = mysqli_real_escape_string($conn, $_POST['reply_message']);
	$sender_id= mysqli_real_escape_string($conn, $_POST['sender_id']);
	$sid= mysqli_real_escape_string($conn, $_POST['sid']);


    
    $jey="INSERT INTO support (message,u_id,receiver_id,sender_id,sender,reply_s_id,admin_status,status,message_type,s_u_name) VALUES('$reply_message','$u_id','admin','$u_id','me','$sid','unread','read','replied','$username')";
	$admin_reply =mysqli_query($conn, $jey);

     $f= mysqli_query($conn,"SELECT * FROM support");

     $update_replies="UPDATE support SET status='read' WHERE message_type='replied' AND u_id='$u_id' ";
     mysqli_query($conn,$update_replies);

     while ($f1=mysqli_fetch_assoc($f)) {
     	$_SESSION['s_id']=$f1['s_id'];
     }
if (!empty($admin_reply)) {


 ?>

<!-- =======  Admin reply start here========== -->

<!-- =====Display after replied start here message_typ type = new ========= -->





	<?php 

$sqlview = "SELECT * FROM support WHERE reply_s_id='$sid' AND message_type='new'";


$sqlviewq=mysqli_query($conn,$sqlview);
while ($sview=mysqli_fetch_assoc($sqlviewq)) {
	$_SESSION['s_u_name']=$sview['s_u_name'];


?>
<div class="row" style="margin-top: 30px;margin-left: 40% !important; width: 60%;background: #fff;border-radius: 0px 23px 0px 57px;box-shadow: 0px 0px 7px 2px #00000080;margin: 10px;">


		<div class="row" style="padding: 0px 6px 0px 18px; width: 100%;">

	<div class="col-md-6 ">
		<img src="../icons/icons8-online_support.png" alt="" style="width: 27px;padding: 3px;background: #fff;"> <span><?php echo $sid ?></span> <br>
From <?php echo $_SESSION['s_u_name']; ?>
	</div>

	<div class="col-md-6" style="text-align: right;">
		<a href="javascript:history.go(-1)"> <img src="../icons/icons8-return.png" alt="" style="width: 29px;padding: 3px;background: #fff;height: 29px;"></a> &emsp;<div><?php echo $sview['date']; ?></div></div>
		</div>




<div class="row" style="border: 1px solid #fff;margin:0px 0px 0px 0px;padding: 10px; background: #e0e6e6; width: 100%; border-radius: 0px 0px 0px 57px;">
	<div class="col-md-12">
		<p><?php echo $sview['message']; ?>
		</p>
		</div>
</div>
</div>
<?php }  ?>	
	



<!--====== End display after replied suport type = new ============ -->




<!-- =====Display after replied start here message_type = replied ========= -->





	<?php 

$sqlview = "SELECT * FROM support WHERE s_id='$sid' ";
$sqlviewq=mysqli_query($conn,$sqlview);
while ($sview=mysqli_fetch_assoc($sqlviewq)) {
$_SESSION['reply_s_id']=$sview['reply_s_id'];
$_SESSION['sender_id']=$sview['sender_id'];
$sender_id=$_SESSION['sender_id'];
$s_iid=$_SESSION['reply_s_id'];
}	

$sqlview = "SELECT * FROM support WHERE reply_s_id='$s_iid' AND message_type='replied'";
$sqlviewq=mysqli_query($conn,$sqlview);
while ($sview=mysqli_fetch_assoc($sqlviewq)) {
	$_SESSION['s_u_name']=$sview['s_u_name'];
	$_SESSION['sender_id']=$sview['sender_id'];
	$senderid=$_SESSION['sender_id'];


?>

<?php 
if ($senderid!=$real_sender_id) { ?>


<div class="row" style="margin-top: 30px; width: 60%;margin-left: 0%;background: #fff;border-radius: 19px;box-shadow: 0px 0px 7px 2px #00000080;border-radius: 23px 0px 57px 0px;">


<?php	
} else { ?>


<div class="row" style="margin-top: 30px; width: 60%;margin-left: 40%;background: #fff;border-radius: 19px;box-shadow: 0px 0px 7px 2px #00000080;border-radius: 0px 23px 0px 57px;">


<?php }

 ?>



		<div class="row" style="padding: 0px 6px 0px 18px; width: 100%;">

	<div class="col-md-6 ">
		<img src="../icons/icons8-online_support.png" alt="" style="width: 27px;padding: 3px;background: #fff;"> <span><?php echo $sview['s_id'] ?></span> <br>
From <?php echo $_SESSION['s_u_name']; ?>
	</div>

	<div class="col-md-6" style="text-align: right;">
		<a href="javascript:history.go(-1)"> <img src="../icons/icons8-return.png" alt="" style="width: 29px;padding: 3px;background: #fff;height: 29px;"></a> &emsp;<div><?php echo $sview['date']; ?></div></div>
		</div>


<?php 
if ($senderid!=$real_sender_id) { ?>

<div class="row" style="border: 1px solid #fff;margin:0px 0px 0px 0px;padding: 10px; background: #e0e6e6; width: 100%;border-radius: 0px 0px 57px 0px;">

<?php	
} else { ?>

<div class="row" style="border: 1px solid #fff;margin:0px 0px 0px 0px;padding: 10px; background: #e0e6e6; width: 100%;border-radius: 0px 0px 0px 57px;">


<?php }

 ?>


	<div class="col-md-12">
		<p><?php echo $sview['message']; ?>
		</p>
		</div>
</div>
</div>
<?php }  ?>	
	



<!--====== End display after replied messsage type = replied ============ -->






<?php
		// header('Location: views.php?msg=Support Replied Successfully');
	}else {
		echo "error was encounted";
		// header('Location: views.php?msgr=Something Bad Happened');
	}

}

 ?>





<div class="row" style="margin-top: 10%;border-top: 2px solid #222;">
	<div class="col-md-12">
		<form action="views.php" method="post" class="form-group">
			
			<div style="display: none;">
			<input type="text" name="sender_id" value="<?php echo $sender_id;?>">
			<input type="text" name="sid" value="<?php echo $sid;?>">

            </div>

			<textarea name="reply_message" placeholder="send message" cols="100" rows="3" class="form-control" style="width: 100%;"></textarea>
			<input type="submit" name="reply" value="Reply" class="form-control" style="background: #78b455;color: #fff; cursor: pointer;width: 40%;float: right;">


		</form>
	</div>
</div>




<!--======= Admin Reply Here======== -->









</div>	 	



<!--=======SUpport message end here =========-->

</div>




</div>






<div style="margin-top: 100px;"></div>

<?php include 'footer.php'; ?>


<?php  }
 else{

  header('Location: ../index.php');
}
?>

