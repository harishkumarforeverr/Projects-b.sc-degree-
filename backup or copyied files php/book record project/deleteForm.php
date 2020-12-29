<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'harish');
$q="select * from bookrecord";
$query=mysqli_query($con,$q);
$num=mysqli_num_rows($query);
mysqli_close($con);
?>

<!DOCTYPE HTML>
<html>
<head>
 <title> view.php </title>
<style type="text/css" >
#view_table
{
border-style:dotted;
border-color:red;
width:900px;
background-color:pink;
}
body 
{
	background-color:lightblue;
}
#view_table th
{
background-color:orange;
}
 
#view_table td
{
background-color:red;
}
</style>
</head>
<body>
<form action="deletion.php" method="post" >
<table id="view_table">
<tr>
<th> bookid </th>
<th> title </th>
<th> price </th>
<th> author </th>
<th> select record </th>
</tr>
<?php
for($i=0;$i<$num;$i++)
{
	$row=mysqli_fetch_array($query);
?>
<tr>
<td> <?php echo $row['bookid']; ?> </td>
<td> <?php echo $row['title']; ?> </td>
<td> <?php echo $row['price']; ?> </td>
<td> <?php echo $row['author']; ?> </td>
<td> <input type="checkbox" name="b<?php echo $i; ?>" value="<?php echo $row['bookid'];?>" /> </td>
<?php
}
?>
</tr>
<tr>
<td colspan="6" > <input type="submit" value="delete" />  <input type="reset" value ="rest" /> </td>
 </tr>
</table>
</form>
<p> <br/> do you want to go homepage  <a href="homepage.php" >click me </a> </p>
</body>
</html>