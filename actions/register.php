<?php
include('connect.php');

$username=$_POST['username'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$cnfpassword=$_POST['cnfpassword'];
$image=$_FILES['photo']['name'];
$tmp_name=$_FILES['photo']['tmp_name'];
$std=$_POST['std'];

if($password!=$cnfpassword){
    echo '<script>
    alert("password didnt match");
    window.location="../partial/registration.php";
    </script>';
}
else{
    move_uploaded_file($tmp_name,"../upload/$image");
    $sql="INSERT INTO `userdata` (`username`, `mobile`, `password`, `photo`, `standard`, `status`, `votes`) 
                    VALUES ('$username', '$mobile', '$password', '$image', '$std', '0', '0');";
    $result=mysqli_query($con,$sql);
  if($result){
    echo '<script>
    alert("Registration successfull");
    window.location="../";
    </script>';

  }
    }
?>