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
  <title>Focus Planets</title>
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
    background: #27293d  !important;
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


</style>



  <nav class="navbar navbar-expand-lg navbar-dark fixed-top " >
  <a class="navbar-brand" href="../index.php" style="color: #fff;"><img src="../img/fp.png" alt="" style="width: 53px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="border-color: transparent !important;margin-right: 12px;height: 36px;">
    
    <span class="navicon" style="margin: -41px 0px 0px 0px;">.</span>
    <span class="navicon" style="margin: -30px 0px 0px 0px;">.</span>
    <span class="navicon" style="margin: -20px 0px 0px 0px;">.</span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav mr-auto-user">
   


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
            <a class="dropdown-item dropdown-a" href="support.php" >Support Message</a>

        </div>
      </li>
      <li class="nav-item nav-item-logout">
      <?php if (!empty($username)){ ?>
  <a class="nav-link disabled logout" href="logout.php" tabindex="-1" aria-disabled="true" " style="color: #fff !important;">Logout</a> <?php } ?></li>

  <li class="nav-item nav-item-account" style="color:#fff; font-weight: 200;  margin: 2px 0px 9px 14px;padding: 8px;background: linear-gradient(to bottom left,#058b84,#78a6a9,#469fa7b3,#bcaba6);font-weight: 300;border-radius: 10px;text-decoration: none;letter-spacing: 2px;">
  
     <?php if (!empty($a_number)) {
      echo $a_number;
      }  ?>

  </li>

      
    </ul>
   
  </div>
</nav>


<?php include 'include/messages.php'; ?>


<?php 
if (empty($_SESSION['a_number'])) {
 ?>
<div class="container" style="margin-top: 88px;margin-bottom: -80px;text-align: center;">
  <div class="row">
    <div class="col-md-12">
      <h6> <a href="edit_profile.php" style="color: #e41;font-size: 19px;letter-spacing: 1px;box-shadow: -4px 0px 12px -2px #000;padding: 3px;cursor: pointer;text-decoration: none;">URGENT !!!! CLICK HERE TO COMPLETE YOUR BANK INFO</a></h6>
    </div>
  </div>
</div>
<?php } ?>

<div class="container" style="height: 53px;margin: 74px 0px 0px 0px;background: #1f5fc9e6;max-width: 100% !important;">
   <div class="row justify-content-center">
    <div class="col-md-12" style="text-align: center;margin: 9px 0px 0px 0px;"> <span style="color: #fff;">  <?php if (!empty($username)) {
    echo $username;   
    }?> 
     &nbsp; </span>
       <img src="../img/user.svg" alt="" style=" width: 35px;margin-right: 12px;padding: 5px;background: #fff;border: 3px solid #3cc633;border-radius: 18px;">
      <span style="color: #fff;"> &#8373; <?php 
      
     if (!empty($balance)) {

  // SET BALANCE

$depa11 ="SELECT * FROM account_table WHERE u_id='$u_id'";
$depa12=mysqli_query($conn,$depa11 );
while ($statusset = mysqli_fetch_assoc($depa12)) {
 
 $_SESSION['balance'] =$statusset['balance'];
}


      echo $_SESSION['balance'];} ?> 
      </span>
   </div>
   </div>
</div>

<div ><img src="<?php echo $_SESSION['dp']; ?>" class="vanmobiledp"></div>
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
</style>


