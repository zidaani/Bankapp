 <?php
session_start();
if (empty($_SESSION['u_id'])){
  
 ?> 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1.0">

	<title>Focus Planets</title>

  <link rel="stylesheet" href="bootstrap-4/css/bootstrap.css">
  <link rel="stylesheet" href="bootstrap-4/css/style.css">
  <link rel="stylesheet" href="bootstrap-4/sweetalert.css">
  <script src="bootstrap-4/sweetalert.js"></script>
  <link rel="stylesheet" href="bootstrap-4/css/fontawesome-all.min.css">
	<title>Document</title>
</head>
<body >
<style>
  body{
    height: 100%;
 background: linear-gradient( rgba(0, 0, 0, 0.78),rgb(0, 0, 0)),url(img/bgbootstrap.jpg);
 background-repeat: no-repeat;
 background-position: right;
 margin: 0px 0px 148px 0px;
 background-size: cover;
  }	


	.register{
    margin-top: 3%;
    padding: 3%;
}
.register-left{
    text-align: center;
    color: #fff;
    margin-top: 4%;
}
.register-left input{
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 30%;
    margin-bottom: 3%;
    cursor: pointer;
}
.register-right{
    background: #f8f9fa;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
}
.register-left img{
    margin-top: 15%;
    margin-bottom: 5%;
    width: 25%;
    -webkit-animation: mover 2s infinite  alternate;
    animation: mover 1s infinite  alternate;
}

  @media screen and (max-width: 760px){
.register{
    margin-top: 3%;
    padding: 3%;
}
  body{
    background-position: center;
  }
  }


@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
.register-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}
.register .register-form{
    padding: 10%;
    margin-top: 10%;
}
.btnRegister{
    float: right;
    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background: #0062cc;
    color: #fff;
    font-weight: 600;
    width: 50%;
    cursor: pointer;
}
.register .nav-tabs {
    margin-top: 3%;
    border: 1px solid #2222221a;
    background: #eaeaea;
    border-radius: 1.5rem;
    width: 87%;
    float: right;
}
.register .nav-tabs .nav-a{
    padding: 0%;
    height: 100%;
    font-weight: 600;
    color: #495057;
    border-radius:1.5rem;
       padding: 8px 40%;
}
.register .nav-tabs .nav-a:hover{
    border: none;
    
}

.register .nav-tabs .nav-a.active {
    color: #fff !important;
    height: 100%;
    margin-top: 35px;
    background: #2c52c1;
    border-left: 3px solid #fff;
    padding: 9px 68px 8px 51px;
    transition: 0.3s;
    border-right: 3px solid #fff;
    text-decoration: none;

}
.register .nav-tabs .nav-link.active:hover{
	background-color: # !important;
}
.register-heading{
    text-align: center;
    margin-top: 15%;
    margin-bottom: -15%;
    color: #495057;
}
</style>
<?php include 'include/messages.php'; ?>
<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <a href="index.php"><img src="img/fp.png" alt="" style="width: 200px;" /></a>
                        <h3>Focus Planets </h3>
                        <p>You've made the best decision to Bank with us. We are ready to serve you better than you expect !</p>
                        <p class="small text-muted">© Focus planets 2019</p>
                   
                    </div>
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">

 <!--    navs    -->    
 <?php if (isset($_GET['action']) AND $_GET['action']=='login' OR empty($_GET['action'])){ ?>             	
                            <li class="nav-item" style="height: 38px !important;padding: 7px 0px 0px 0px;">
                                <a class="nav-a active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><span style="margin-top:10px;">Login</span></a>
                            </li>

<?php } else{?>

         <li class="nav-item" style="height: 38px !important;padding: 7px 0px 0px 0px;">
                                <a class="nav-a" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><span style="margin-top:10px;">Login</span></a>
                            </li>

<?php } ?>

 <?php if (isset($_GET['action']) AND $_GET['action']=='signup'){ ?> 

                            <li class="nav-item" style="height: 38px !important;padding: 7px 0px 0px 0px;">
                                <a class="nav-a active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">SignUp</a>
                            </li>

<?php } else{?>
                             <li class="nav-item" style="height: 38px !important;padding: 7px 0px 0px 0px;">
                                <a class="nav-a" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">SignUp</a>
                            </li>
<?php } ?>
                        </ul>
                        <div class="tab-content" id="myTabContent">






<!-- Login -->

<?php if (isset($_GET['action']) AND $_GET['action']=='login' OR empty($_GET['action'])){ ?>
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

<?php } else{?>
     <div class="tab-pane fade show" id="home" role="tabpanel" aria-labelledby="home-tab">
<?php } ?>

                                <h3 class="register-heading">Enter Account</h3>
                                <div class="row register-form">
                                	 <div class="col-md-12">
                                	<form action="include/login.php" method="post">
                                   
                                        <div class="form-group">
                                        	<label for="">Email</label>
                                            <input type="email" name="email" class="form-control" placeholder=" Enter Email *" />
                                        </div>
                                        <div class="form-group">
                                        	<label for="">Password</label>
                                            <input type="password" name="password" class="form-control" placeholder=" Enter Password *" />
                                        </div>
                                       <input type="submit" class="btnRegister" name="login"  value="Login" style="width: 30%;" />
                                       </form>
                                    </div>
                                   
                                </div>
                            </div>



            <!--      SignUp  -->
<?php if (isset($_GET['action']) AND $_GET['action']=='signup'){ ?>
    <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">

<?php } else{?>
     <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
<?php } ?>      
                                <h3  class="register-heading">Get instant Account</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                    	<form action="include/signup.php" method="post">

                                        <div class="form-group">
                                        	<label for="">Select Titile</label>
									          <select name="title" class="form-control">
									    	<option value="MR." >Mr.</option>
									    	<option value="Mrs" >Mrs.</option>
                                              </select>
                                        </div>
                                        <div class="form-group">
                                        	<label for="">Enter Fullname</label>
                                            <input type="text" name="fullname" class="form-control" placeholder="Full Name *"/>
                                        </div>

                                        <div class="form-group">
                                        	<label for="">Enter Username</label>
                                            <input type="text" name="username" class="form-control" placeholder="Username *"  />
                                        </div>

                                        <div class="form-group">
                                        	<label for="">Enter Email</label>
                                            <input type="email" name="email" class="form-control" placeholder="Email *" />
                                        </div>
                                        <div class="form-group">
                                        	<label for="">Enter Phone Number</label>
                                            <input type="text" name="phone" maxlength="13" minlength="10" class="form-control" placeholder="Phone *"/>
                                        </div>




                                    </div>
                                    <div class="col-md-6">

       
                                          <div class="form-group">
                                            <label for="">Hall Of Resident</label>
                                            <select class="form-control" name="branch">
                                            <?php include 'include/branch.php'; ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                        <label for=""> Enter Password</label>
                                            <input type="password" name="password" class="form-control" placeholder="Password *" />
                                        </div>
                                        <div class="form-group">
                                        <label for=""> Re-enter Password</label>
                                            <input type="password" name="password1" class="form-control" placeholder="Password *" />
                                        </div>

                                        <div class="form-group">
                                        <label for=""> Enter Pin</label>
                                            <input type="password" name="pin" class="form-control" placeholder="Pin *" />
                                        </div>
                                        
                                        <div class="form-group">
                                        <label for=""> Re-enter Pin</label>
                                            <input type="password" name="pin1" class="form-control" placeholder="Pin *" />
                                        </div>

                                        <div class="form-group">
                                            <input type="checkbox" checked name="terms"/> &emsp;<a href="terms.php" style="color: #212529;"><span>
                                         By signing up, you agree to our terms of servive.</span></a>
                                            
                                        </div>


                                        <input type="submit" name="register" class="btnRegister"  value="Register"/>
                                    </div>
                                </div>
    
            </div>
	

 <script src="bootstrap-4/js/popper.min.js"></script>
<script src="bootstrap-4/js/slim.js" ></script>
<script src="bootstrap-4/js/bootstrap.js" ></script>
<script src="bootstrap-4/js/jquerry.js" ></script>

<?php } else{
    header('Location: index.php');
}?>
</body>
</html>

 


