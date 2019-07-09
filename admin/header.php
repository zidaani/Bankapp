<?php 

include_once '../include/connect.php';
include 'include/session_set.php';

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!--Emmanuel Amissah Submission Date: 22nd February, 2019 11:59pm -->
  <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1.0">
  <title>Admin Panel</title>
  <link type="icon" href="../img/fp.png">
  <link rel="stylesheet" href="../bootstrap-4/css/bootstrap.css">
  <link rel="stylesheet" href="../bootstrap-4/css/style.css">
 <link rel="stylesheet" href="../bootstrap-4/sweetalert.css">
  <script src="../bootstrap-4/sweetalert.js"></script>
  <link href="../bootstrap-4/assets/css/nucleo-icons.css" rel="stylesheet">



   <!-- Goole fonts -->
   <!--  <link href="https://fonts.googleapis.com/css?family=Merriweather:400,700%7CMerriweather+Sans:300,400,700" rel="stylesheet"> -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../bootstrap-4/css/fontawesome-all.min.css">
    <!-- CSS -->
    <!-- <link rel="stylesheet" href="bootstrap-4/css/theme.min.css"> -->


 
</head>

<body style="background:#fff;">
<style>
  .navbar {
    background: #11837A  !important;
    height: 75px;
    box-shadow: 0px -1px 9px 0px #0000009c;
    transition: 0.5s;
}


.logout{
    margin-left: 20px;
    padding: 10px;
    background: #e41;
    border-radius: 9px;
    color: #fff !important;
}
.process{

    border-radius: 10px;
    padding: 6px;
    border: 1px solid #000;
    cursor: pointer;
    box-shadow: 2px 3px 1px 1px;
    background: #fff;

}
.process:hover{
  color: #fff;
  background: #0E4A17FF;
  text-decoration: underline;
}




.logout:hover{
    margin-left: 20px;
    padding: 10px;
    background: #4c0a0a;
    border-radius: 9px;
    color: #fff !important;
}
.nav-link:hover {
  color: #e41 !important ;
}
.navbar-nav.mr-auto {
    margin: 27px 0px 27px 34%;
       
}


.vanmobiles{
    width: 58px;
    border: 5px solid #99c3c8;
    border-radius: 123px;
    margin: 0px 0px 0px 57px;
    position: absolute;
    margin: 0px 0px 0px -36%;
}
@media screen and (max-width: 990px){
.vanmobiles {
    width: 70px;
    border: 5px solid #99c3c8;
    border-radius: 121px;
    margin: 0px 0px 0px 57px;
    position: absolute;
    margin: -69px 0px -2px -58%;
    z-index: 2000;
}
}

</style>



  <nav class="navbar navbar-expand-lg navbar-dark fixed-top " >
 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="border-color: transparent !important;margin-right: 12px;height: 36px;">
    
    <span class="navicon" style="margin: -41px 0px 0px 0px;">.</span>
    <span class="navicon" style="margin: -30px 0px 0px 0px;">.</span>
    <span class="navicon" style="margin: -20px 0px 0px 0px;">.</span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav mr-auto">
   


      <li class="nav-item active navitem">
        <a class="nav-link" href="index.php">&emsp; Dashboard</a>
      </li>

          <li class="nav-item active navitem">
        <a class="nav-link" href="deposit.php">&emsp; Deposit </a>
      </li>

      <li class="nav-item active navitem">
        <a class="nav-link" href="withdrawal.php">&emsp; Withdrawal </a>
      </li>
      <li class="nav-item dropdown" style="width: 102px;">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" > &emsp;Services</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" >
          <a class="dropdown-item dropdown-a" href="withdrawals.php" >Withdrawal History</a>
          <a class="dropdown-item dropdown-a" href="deposit_history.php" >Deposit History</a>
            <a class="dropdown-item dropdown-a" href="edit_profile.php" >Edit Account</a>
          <div class="dropdow dropdown-an-divider" ></div>
         
          <a class="dropdown-item dropdown-a" href="buy_airtime.php" >Airtime</a>
            <a class="dropdown-item dropdown-a" href="get_loan.php" >Loan</a>
            <a class="dropdown-item dropdown-a" href="fund_transfer.php" >Fund Transfer</a>
            <a class="dropdown-item dropdown-a" href="support.php" >Support Messages</a>

        </div>
      </li>
      <li class="nav-item nav-item-logout">
      <?php if (!empty($_SESSION['admin_username'])){ ?>
  <a class="nav-link disabled logout" href="logout.php" tabindex="-1" aria-disabled="true" " style="color: #fff !important;">Logout</a> <?php } ?></li>
   <li class="nav-item active navitem" style="margin-left: 21px;margin-top: 8px;"> <a href="support.php" style="text-decoration:none;color: #fff;">
    <span style="color: #fff;margin-right: -7px;padding: 7px 10px 8px 15px;background: #e41;border-radius: 30px;">
<?php 
$sqlview = "SELECT * FROM support WHERE admin_status='unread' ";
$sqlviewq=mysqli_query($conn,$sqlview);
$sview=mysqli_num_rows($sqlviewq);
if ($sview==0) {
  echo "0";
}else {
  echo $sview;
}

 ?>

     </span>
    <img src="../icons/icons8-appointment_reminders.png" alt="" style="width: 38px;height: 34px;">
    </a></li>

  
       
      
    </ul>
   
  </div>
</nav>


<?php include 'include/messages.php'; ?>


<div class="container" style="height: 53px;margin: 74px 0px 0px 0px;background: #1f5fc9e6;max-width: 100% !important;">

   <div class="row justify-content-center">
    <div class="col-md-12" style="text-align: center;margin: 9px 0px 0px 0px;"> <span style="color: #fff;font-size: 30px;text-transform: uppercase;"> 
      <?php if (!empty($_SESSION['admin_username'])){
     echo $username; 
    } ?> 
     &nbsp; DASHBOARD </span>
       
   </div>
   <div ><img src="<?php echo $_SESSION['dp']; ?>" class="vanmobiles"></div>
   </div>
</div>


<style>
 .form-control {
    display: block;
    width: 65%;
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
@media screen and (max-width: 700px){
  .form-control{
    width: 100%;
  }
}
</style>


