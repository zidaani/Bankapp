<?php 
session_start();

if (!empty($_SESSION['username'])){
 # echo "<script>alert('Hello ".$_SESSION['username']."')</script>";
  # code...
}

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <!--Emmanuel Amissah Submission Date: 22nd February, 2019 11:59pm -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1.0">
  <title>Focus Planets</title>
  <link type="icon" href="img/fp.png">
  <link rel="stylesheet" href="bootstrap-4/css/bootstrap.css">
  <link rel="stylesheet" href="bootstrap-4/css/style.css">
  <link rel="stylesheet" href="bootstrap-4/sweetalert.css">
  <script src="bootstrap-4/sweetalert.js"></script>
 

   <!-- Goole fonts -->
   <!--  <link href="https://fonts.googleapis.com/css?family=Merriweather:400,700%7CMerriweather+Sans:300,400,700" rel="stylesheet"> -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="bootstrap-4/css/fontawesome-all.min.css">
    <!-- CSS -->
    <!-- <link rel="stylesheet" href="bootstrap-4/css/theme.min.css"> -->


 
</head>

<body>

<style>
  @media and screen(){
  .navbar-nav.mr-auto {
    margin: 0px 0px 27px 44%;
        margin-right: 0px;
}}
</style>
<!-- 
  <script>
      swal("WELCOME TO FOCUS PLANETS", "", "success");
    </script> -->

  <nav class="navbar navbar-expand-lg navbar-dark fixed-top " >
  <a class="navbar-brand" href="#" style="color: #fff;"><img src="img/fp.png" alt="" style="width: 53px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="border-color: transparent !important;margin-right: 12px;height: 36px;">
    
    <span class="navicon" style="margin: -41px 0px 0px 0px;">.</span>
    <span class="navicon" style="margin: -30px 0px 0px 0px;">.</span>
    <span class="navicon" style="margin: -20px 0px 0px 0px;">.</span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">&emsp; Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php" > &emsp;About</a>
      </li>
      <li class="nav-item dropdown" style="width: 102px;">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" > &emsp;Services</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" >
          <a class="dropdown-item dropdown-a" href="admin/login.php" >Admin</a>
          <a class="dropdown-item dropdown-a" href="#" >Withdrawals</a>
           <a class="dropdown-item dropdown-a" href="#" >Airtime</a>
            <a class="dropdown-item dropdown-a" href="#" >Loans</a>
          <div class="dropdow dropdown-an-divider" ></div>
          <a class="dropdown-item dropdown-a" href="#" ></a>
        </div>
      </li>
      <li class="nav-item">
       <!--  <a class="nav-link disabled" href="login.php" tabindex="-1" aria-disabled="true" style="margin-left: 11px;"> &emsp;login</a> -->
  <?php if (!empty($_SESSION['username'])){ ?>
  <a class="nav-link disabled" href="users/logout.php" tabindex="-1" aria-disabled="true" style="margin-left: 11px;"> &emsp;logout</a>
<?php } else{ ?>
  <a class="nav-link disabled" href="login.php" tabindex="-1" aria-disabled="true" style="margin-left: 11px;"> &emsp;login</a>
<?php } ?>

      </li>
      <li class="nav-item">
       <?php if (!empty($_SESSION['username'])) { ?>
      
       <a class="nav-link disabled" href="users/index.php" tabindex="-1" aria-disabled="true"> &emsp;Account</a> <?php }
       else { ?>  <a class="nav-link disabled" href="signup.php" tabindex="-1" aria-disabled="true"> &emsp;SignUp</a>

     <?php } ?>


      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"> &emsp;Faq</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="width: 46%;background: #0000005e;color: #fff;">&emsp;
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="border-color: #ffffffe3 !important;color: #fff !important;background: #1896ad;">Search</button>
    </form>
  </div>
</nav>

