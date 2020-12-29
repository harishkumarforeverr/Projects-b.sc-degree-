<?php
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'harish');
$q="select * from user where username='$username' and password='$password';";
$res=mysqli_query($con,$q);
$num=mysqli_num_rows($res);
mysqli_close($con);
if($num==1)
{
	$_SESSION['username']=$username;
header('location:http://localhost/pc/3.php');
}
else
{
	header('location:http://localhost/pc/1.php');
}

?>