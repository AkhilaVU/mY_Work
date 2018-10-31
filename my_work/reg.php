
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wedpack";

// Create connection
$co= mysqli_connect($servername, $username, $password,$dbname);
$a=$_POST['name'];
$b=$_POST['pname'];
$c=$_POST['uname'];
$d=$_POST['upass'];
$q="INSERT INTO  register(Name,Partner_name,Username,Password) VALUES('$a','$b','$c','$d')";
$r=mysqli_query($co,$q);
if($r)
{
header("location: login.html");
}
?>