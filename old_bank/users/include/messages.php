<?php 


    if (!empty($_GET['msg'])) {
     $msg = $_GET['msg'];
  
    if ($msg == "successfull deposit") {
      echo " <script>swal('Congratulations','Your Deposit has been successfull Wait For Approval','success'); </script>";
    }
    if ($msg == "message sent") {
      echo " <script>swal('Congratulations','Message has been sent to admin. Please wait For Replay In Less Than 24 hours','success'); </script>";
    }


   

 } 
 ?>










