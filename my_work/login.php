<?php
include('db_connect.php');

$uname=$_POST['user'];
$upass=$_POST['pass'];

$query="SELECT  `Username`, `Password` FROM register WHERE Username='$uname' AND Password='$upass'";
$result=mysqli_query($conn,$query);


if($result)

{

 $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
header("location: user.html");
}


else
{
echo "error";
 die(mysqli_error($con));
}



?>


