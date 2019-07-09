<?php if (!empty($_GET['msg'])) {
   $msg = $_GET['msg'];
  
    if ($msg == "successfull deposit") {
      echo " <script>swal('Congratulations','Your Deposit has been successfull','success'); </script>";
    }

    if ($msg == "wrong pin code") {
      echo " <script>swal('TOO BAD!','Wrong pin code','error'); </script>";
    }

    if ($msg == "empty first pin") {
      echo " <script>swal('TOO BAD!','Enter first PIN','error'); </script>";
    }

    if ($msg == "confirm pin") {
      echo " <script>swal('TOO BAD!','Confirm PIN','error'); </script>";
    }

    if ($msg == "pin code empty") {
      echo " <script>swal('TOO BAD!','Enter Pin Code','error'); </script>";
    }

     if ($msg == "accept terms") {
      echo " <script>swal('TOO BAD!','Accspt Terms','error'); </script>";
    }

      if ($msg == "successfull transaction") {
      echo " <script>swal('Congratulations','Your transaction is processed','success'); </script>";
    }
     if ($msg == "unsuccessful transaction") {
      echo " <script>swal('TOO BAD!','unsuccessful transaction','error'); </script>";
    }
     if ($msg == "wrong choice") {
      echo " <script>swal('TOO BAD!','wrong choice','error'); </script>";
    }


      if ($msg == "successfull bank update") {
      echo " <script>swal('Congratulations','Bank Account Updated','success'); </script>";
    }

  if ($msg == "already updated bank info") {
      echo " <script>swal('TOO BAD!','You Have Already Done That','error'); </script>";
    }

    if ($msg == "pin unmatch") {
      echo " <script>swal('TOO BAD!','Pin does not Match','error'); </script>";
    }

     if ($msg == "empty old pin") {
      echo " <script>swal('TOO BAD!','Empty Old Pin','error'); </script>";
    }

    if ($msg == "wrong old pin") {
      echo " <script>swal('TOO BAD!','Wrong Old Pin','error'); </script>";
    }
    
    if ($msg == "successful profile update") {
      echo " <script>swal('Congratulations','Successfull Profile Update','success'); </script>";
    }


    if ($msg == "unsuccessful profile update") {
      echo " <script>swal('TOO BAD!','Unsuccessful Profile Update','error'); </script>";
    }

   

 } ?>










