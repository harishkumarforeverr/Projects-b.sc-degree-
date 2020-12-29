<!DOCTYPE HTML>
<html>
<head>
<title> inserForm </title>
<style type="text/css" >
body
{
	background-color:lightblue;
}
table
{
}
</style>
</head>
<body>
<div>
<h1> welcome, to insertion page </h1>
<h2> please fill the form </h2>
<form action="insertion.php" method="post" >
<table>
<tr> 
<th> title </th> <td> <input type="text" name="title" required /> 
</tr>
<tr>
<th> price </th><td> <input type="number" name="price" required />
</tr>
<tr>
<th> author </th><td> <input type="text" name="author" />
</tr>
<tr>
<td> <input type="submit" value="insert" /> </td> 
<td> <input type="reset" value="reset" /> </td> 
</tr>
</table>
</form>
</div>
</body>
</html>