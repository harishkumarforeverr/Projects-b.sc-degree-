<?php
$num=sizeof($_POST);
for($i=0,$j=0;$i<$num;$i++,$j++)
{
	if(isset($_POST['b'.$j]))
		$row[$i]=$_POST['b'.$j];
	else
		$i--;
}
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'harish');
for($i=0;$i<$num;$i++)
{
	$q="delete from mybook where bookid=".$row[$i];
	mysqli_query($con,$q);
}
mysqli_close($con);
?>
<html>
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
echo $num." record deleted sucessfully ";
?>
<p> do you want to go homepage again <a href="homepage.php" > click me </a> </p>
<p> do you want to view bookrecord <a href="view.php" > click me </a> </p>
</body>
</html>