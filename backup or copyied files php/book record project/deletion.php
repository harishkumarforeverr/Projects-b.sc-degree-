<?php 
$size=sizeof($_POST);
$j=0;
for($i=0;$i<$size;$i++,$j++)
{
	$index="b".$j;
	$result=isset($_POST[$index]);
	if($result)
	$b_id[$i]=$_POST[$index];
	else
		$i--;
}
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'harish');
for($i=0;$i<$size;$i++)
{
	$query="delete from bookrecord where bookid=$b_id[$i]";
	mysqli_query($con,$query);
}
mysqli_close($con);
?>
<html>
<head>
<style type="text/css" >
body
{
	background-color:pink;
}
a:hover
{
	color:red;
}
h2
{
	background-color:red;
}
</style>
</head>
<body>
<h1> welcome to deletion.php page </h1>
<h2> record deleted sucessfully </h2>
<p> do you want to go homepage again <a href="homepage.php" > click me </a> </p>
<p> do you want to insert again  <a href="insertForm.php" > click me </a> </p>
<p> do you want to view bookrecord <a href="view.php" > click me </a> </p>
</body>
</html>
