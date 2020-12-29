<?php
$title=$_POST['title'];
$price=$_POST['price'];
$author=$_POST['author'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'harish');
$q="insert into mybook(title,price,author) values('$title',$price,'$author'); ";
$status=mysqli_query($con,$q);
mysqli_close($con);
?>
<!DOCTYPE HTML>
<html>
<head>
<style type="text/css" >
body
{
	background-color:lightblue;
}
a:hover
{
	color:red;
}
</style>
</head>
<body>
<?php
if($status==1)
echo "record insered sucessfully ";
else
echo "record insetion failed ";	
?>
</div>
<p> do you want to go homepage again <a href="homepage.php" > click me </a> </p>
<p> do you want to insert again  <a href="insertForm.php" > click me </a> </p>
<p> do you want to view bookrecord <a href="view.php" > click me </a> </p>
</body>
</html>