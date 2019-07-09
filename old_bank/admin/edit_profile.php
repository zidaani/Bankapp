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
			<h1 style="color: #fff;text-align: center;margin-top: 68px;">Edit Profile </h1>
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






<!--========Account Details==========-->

          



 <?php if (empty($_SESSION['a_number'])){ ?>


  <div class="col-md-6">
            <div class="card">
              <div class="card-header" style="text-align: center;background: #27293c;">
                <h4 class="card-title">Open An Account</h4>
              </div>
              <div class="card-body" style="background: #dedee2;">

  <form action="bankupdate.php" method="post">  
  

    <label> BANK ACCOUNT</label>
    <div class="form-group">
    <select name="account_type" class="form-group" style="height: 60px;width: 70%;padding: 10px;">
    <option value="ultimate">Ultimate-Admin</option>

    </select>
    </div>

   <label> Enter Pin</label>
   <div class="form-group">
  <input type="password" name="pin" class="form-control">
  </div>

    <button type="submit" name="updatebank" class="btn btn-fill btn-primary" >Submit</button>
              
                </form>
              </div>
              
            </div>
          </div>

<?php } ?>

<!--========End Of Account==========-->




<!--=========Pin Change ======= -->
 <div class="col-md-6">
            <div class="card">
              <div class="card-header" style="text-align: center;background: #27293c;">
                <h4 class="card-title">PIN CHANGE FORM</h4>
              </div>
              <div class="card-body" style="background: #dedee2;">

<form action="include/pin_update.php" method="post">

      <div class="form-group">
    <input type="password" name="pin" placeholder="Enter PIN" class="form-control"> 
    </div>
    <div class="form-group">
    <input type="password" name="pin1" placeholder="Confirm Pin" class="form-control"> 
    </div>

      <div class="form-group">
      <input type="password" name="oldpin" class="form-control" placeholder="Enter old pin">
    </div>
    <div class="form-group">
    <button type="submit" name="pinchange" class="btn btn-fill btn-primary">Submit</button>
  </div>

</form>  
</div></div></div>



<!--=========== Profile edit-->



<!--=========Pin Change ======= -->
 <div class="col-md-6">
            <div class="card">
              <div class="card-header" style="text-align: center;background: #27293c;">
                <h4 class="card-title">PASSWORD CHANGE FORM</h4>
              </div>
              <div class="card-body" style="background: #dedee2;">

<form action="include/pin_update.php" method="post">

      <div class="form-group">
    <input type="password" name="password" placeholder="Enter password" class="form-control"> 
    </div>
    <div class="form-group">
    <input type="password" name="password1" placeholder="Confirm password" class="form-control"> 
    </div>

      <div class="form-group">
      <input type="password" name="oldpassword" class="form-control" placeholder="Enter old password">
    </div>
    <div class="form-group">
    <button type="submit" name="passwordchange" class="btn btn-fill btn-primary">Submit</button>
  </div>


</form>  
</div></div></div>



<!--=========== Profile edit-->



          <div class="col-md-6">
            <div class="card">
              <div class="card-header" style="text-align: center;background: #27293c;">
                <h4 class="card-title">Edit Profile</h4>
              </div>
              <div class="card-body" style="background: #dedee2;">






    <form action="include/edit_profile.php" method="post" enctype="multipart/form-data">  
                
    <input type="date" name="dob" value="" class="form-control"> <br>
    <div class="form-group">
    <select name="national_id_type" class="form-group" style="height: 60px;width: 70%;padding: 10px;">
    <option class="form-control" value="student ID">Student ID</option>
    <option class="form-control" value="Voters ID">Voters ID</option>
    <option class="form-control" value="National ID">National ID</option>
    <option class="form-control" value="Health Insurance ID">Health Insurance</option> 
    </select> </div> 
    <div class="form-group">
    <input type="text" name="national_id_number" placeholder="Enter Your ID Number" class="form-control"> 
    </div>

    <div class="form-group">
    <input type="file" name="dp" class="form-control">
  </div>
    
    <div class="form-group">
      <input type="text" name="oldpin" class="form-control" placeholder="Enter Old Pin">
    </div>
    

<div class="form-group">
    <button type="submit" name="update" class="btn btn-fill btn-primary">Submit</button>
  </div>

   
              
                </form>
              </div>
              
            </div>
          </div>

        









</div>
</div>
</div>
</div>

<div style="margin-top: 100px;"></div>


   

<?php 

include 'footer.php'; ?>

<?php } 
 else{

  header('Location: ../index.php');
} 
?>