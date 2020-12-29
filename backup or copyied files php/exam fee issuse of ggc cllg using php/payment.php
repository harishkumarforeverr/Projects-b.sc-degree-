<?php /* 
 i used 
1) selected the user
2) i selected database;
3) insert command 
4) 


*/
?>

 <?php
session_start();
$username=$_SESSION['username'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'harish');
$query="insert into fee values ('860','$username')";
$status=mysqli_query($con,$query);
mysqli_close($con);
?>
<!DOCTYPE HTML>
<html>
<head>
<title> payment.php </title>
<style type="text/css" >
body
{
	background-color:lightblue;
}
div
{
	background-color:pink;
}
a:hover
{
	color:red;
}
</style>
</head>
<body>
<div>
<?php
if($status==1)
echo "exam fee payment done sucessfully ";
else
echo "exam fee payment done failed ";	
?>
</div>
<p> do you want to go homepage again <a href="home.php" > click me </a> </p>
<p> do you want to logout  <a href="ggchomepage.php" > click me </a> </p> 
</body>
</html>
<html>