<?php
  session_start();
  include('connect.php');
  $votes=$_POST['groupvotes'];
  $totalvotes=$votes+1;
  $gid=$_POST['groupid'];
  $uid=$_SESSION['id'];
$sql= "update `userdata` set votes='$totalvotes' where id='$gid';";
  $updatevote=mysqli_query($con,$sql);

  $sql1= "update `userdata` set status=1 where id='$uid';";
 $updatestatus=mysqli_query($con,$sql1);

 if($updatestatus and $updatevote){
    $sql="SELECT username,photo,votes,id from `userdata` WHERE standard='group';";
    $resultgroup=mysqli_query($con,$sql);               
    $group=mysqli_fetch_all($resultgroup,MYSQLI_ASSOC);  
    $_SESSION['group']=$group;  
    $_SESSION['status']=1;
    echo '<script>
    alert("voting successfully");
    window.location="../partial/dashboard.php"
    
    </script>';

 }
 else{
    echo '<script>
    alert("technical error");
    window.location="../partial/dashboard.php"
    
    </script>';
 }

?>