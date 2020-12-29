<?php /* 

i used 
1) select command 
2) selected database and user
3) 


*/
?>
<?php
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
$q="select * from user where username='$username' and password='$password'";
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'harish');
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1)
{
	header('location:http://localhost/project/home.php');
	$_SESSION['username']=$username;
}
else
{
 		header('location:http://localhost/project/ggchomepage.php');
}
?>                                                                                  
 







