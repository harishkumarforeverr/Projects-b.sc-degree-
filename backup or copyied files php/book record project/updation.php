<?php
$size=sizeof($_POST);
$num=$size/4;
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'harish');
for($i=0;$i<$num;$i++)
{
	$bookid[$i]=$_POST['bookid'.$i];
	$title[$i]=$_POST['title'.$i];
	$price[$i]=$_POST['price'.$i];
	$author[$i]=$_POST['author'.$i];
}
for($i=0;$i<$num;$i++)
{
 $query="update bookrecord set bookid=$bookid[$i],title='$title[$i]',price=$price[$i],author='$author[$i]' where bookid=$bookid[$i]";
 mysqli_query($con,$query); 
}
mysqli_close($con)
?>
<!DOCTYPE HTML>
<html>
<head>
<title> updation.php form </title>
<style type="text/css" >
body
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
<h1> <?php echo $num ?> records are updated </h1>
<p> do you want to go homepage again <a href="homepage.php" > click me </a> </p>
 <p> do you want to view bookrecord <a href="view.php" > click me </a> </p>
</body>
</html>