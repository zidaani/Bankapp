<?php 
session_start();
if (!empty($_SESSION['u_id'])) {
	

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1.0">

	<title>Login Up Redirect</title>

  <link rel="stylesheet" href="bootstrap-4/css/bootstrap.css">
  <link rel="stylesheet" href="bootstrap-4/css/style.css">
  <link rel="stylesheet" href="bootstrap-4/sweetalert.css">
  <script src="bootstrap-4/sweetalert.js"></script>
  <link rel="stylesheet" href="bootstrap-4/css/fontawesome-all.min.css">
	
</head>
<body>
	<style>
		body{
			background: -webkit-linear-gradient(left, #212529, #2c52c1);
		
		}


.register-left{
    text-align: center;
    color: #fff;
    margin-top: 4%;
}

.register-left img{
    margin-top: 5%;
    margin-bottom: 5%;
    width: 5%;
    -webkit-animation: mover 2s infinite  alternate;
    animation: mover 1s infinite  alternate;
}

  @media screen and (max-width: 760px){
.register{
    margin-top: 3%;
    padding: 3%;
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

	</style>

	<div class="row">
		  <div class="col-md-12 register-left">
                        <a href="../index.php"><img src="../img/fp.png" alt="" style="width: 250px;" /></a>
                        <h3>Welcome <?php echo $_SESSION['fullname']; ?></h3>
                        <p>You will be redirected to Your Account shortly</p>
                        <p class="small text-muted">© Focus planets 2019</p>
                   
                    </div>
		
	</div>

 <script src="bootstrap-4/js/popper.min.js"></script>
<script src="bootstrap-4/js/slim.js" ></script>
<script src="bootstrap-4/js/bootstrap.js" ></script>
<script src="bootstrap-4/js/jquerry.js" ></script>

</body>
</html>

<?php 

header('refresh:3; ../users/index.php');
}
 ?>




