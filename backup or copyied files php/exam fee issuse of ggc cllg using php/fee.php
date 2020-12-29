<?php /* 
i used the used 
1) select comand;
2) select user_error
3)
*/
?>
<?php
session_start();
$username=$_SESSION['username'];
 $q="select * from fee where sname='$username'";
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'harish');
$query=mysqli_query($con,$q);
$num=mysqli_num_rows($query);
mysqli_close($con);
?>
 
<html>
<head>
</head>
<style type="text/css" >
body
{
	background-color:lightblue;
}
body
{
    font-weight:bold;
}
a:hover
{
	color:red;
}
#id1
{
    color:red;
}
</style>

<body> 
<div id="id1">
 <?php
	$row=mysqli_fetch_array($query);
   if($row)
   echo " exam fee payed already " ;
   else
   {
   echo " fee not paided ";
   echo "To pay <a href='payment.php'> click me </a> ";
   }
?>
</div>
<p> do you want to go homepage again <a href="home.php" > click me </a> </p>
<p> do you want to logout  <a href="ggchomepage.php" > click me </a> </p> 
 </body>
</html>