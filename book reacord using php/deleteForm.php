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
table td
{
	background-color:white;
}
</style>
</head>
<body>
<form action="delete.php" method="post" >
<table>
<h1> book records </h1>
<tr> 
<th> bookid </th>
<th> title </th>
<th> price </th>
<th> author </th>
<th> select the records </th>
</tr>
<?php 
$i=0;
foreach ($res as $row)
{
?>
<tr>
<td> <?php echo $row['bookid']; ?> </td>

<td> <?php echo $row['title']; ?> </td>

<td> <?php echo $row['price']; ?> </td>

<td> <?php echo $row['author']; ?> </td>

<td  > <input type="checkbox" name="b<?php echo $i; ?>" value=<?php echo $row['bookid']; ?> /> </td>  
</tr>
<?php
$i++;
}
?>
<tr> <td colspan="6" > <input type="submit" value="delete" /> </td>  </tr>
</table>

<p> do you want to goto homepage <a href="homepage.php" > click me </a> </p>
<p> do you want to update record <a href="updateForm.php" > click me </a> </p>
</body>
</html>