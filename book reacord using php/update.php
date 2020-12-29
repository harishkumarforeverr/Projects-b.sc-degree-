<?php
$size=sizeof($_POST);
$no=($size)/4;
for($i=0;$i<$no;$i++)
{
	$bookid[$i]=$_POST['bookid'.$i];
	
	$title[$i]=$_POST['title'.$i];
	
	$price[$i]=$_POST['price'.$i];
	
	$author[$i]=$_POST['author'.$i];
}
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'harish');
for($i=0;$i<$no;$i++)
{
	$q="update mybook set bookid=$bookid[$i],title='$title[$i]',price=$price[$i],author='$author[$i]' where bookid=$bookid[$i];";
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
echo $no." record upadted sucessfully ";
?>
<p> do you want to go homepage again <a href="homepage.php" > click me </a> </p>
<p> do you want to view bookrecord <a href="view.php" > click me </a> </p>
</body>
</html>