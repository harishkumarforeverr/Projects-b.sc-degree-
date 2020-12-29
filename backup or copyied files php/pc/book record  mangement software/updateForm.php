<?php 
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'harish');
$q="select * from mybook;";
$res=mysqli_query($con,$q);
$num=mysqli_num_rows($res);
mysqli_close($con);
?>
<!DOCTYPE HTML>
<html>
<head>
<title> view page </title>
<style type="text/css">
table th
{
 text-align:left;
}
table tr
{
 text-align:left;
}
body
{
	background-color:lightblue;
}
h1
{
	color:red;
}
a:hover
{
	color:red;
}
table
{
	background-color:pink;
	width:800px;
}
table th
{
 background-color:orange;
}
table 
{
 border:solid;
 border-width:5px;
 border-color:green;
 width:900px;
 cellspacing:10px;
}
</style>
</head>
<body>
<form action="update.php" method="post">
<table>
<h1> book records </h1>
<tr> 
<th> bookid </th>
<th> title </th>
<th> price </th>
<th> author </th>
</tr>
<?php 
$i=0;
foreach ($res as $row)
{
?>
<tr>
<td> <input type="number" value="<?php echo $row['bookid']; ?>" name="bookid<?php echo $i ?>" </td>

<td> <input type="text" value="<?php echo $row['title']; ?>" name="title<?php echo $i ?>" </td>

<td> <input type="number" value="<?php echo $row['price']; ?>" name="price<?php echo $i ?>" </td>

<td> <input type="text" value="<?php echo $row['author']; ?>" name="author<?php echo $i ?>" </td>


</tr>
<?php
$i++;
}
?>
<tr> <th colspan="5" > <input type="submit" value="update" /> </th> </tr>
</table>
</form>
<p> do you want to goto homepage <a href="homepage.php" > click me </a> </p>
</body>
</html>