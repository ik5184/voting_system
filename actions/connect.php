<?php

  $con=mysqli_connect("localhost","root","","voting_system");
  if(!$con){ 
    // echo "successsful connected";
    die(mysqli_error($con));
  }
 


?>