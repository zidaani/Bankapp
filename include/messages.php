<?php 


    if (!empty($_GET['msg'])) {
     $msg = $_GET['msg'];
  
    if ($msg) {
      echo " <script>swal('Congratulations','{$msg}','success'); </script>";
  }
}



if (!empty($_GET['msgr'])) {
     $msgr = $_GET['msgr'];

 if ($msgr) {
      echo " <script>swal('Sorry','{$msgr}','error'); </script>";
  }
}







?>









