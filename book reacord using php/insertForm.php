<!DOCTYPE HTML>
<html>
<head>
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
div
{
position:absolute;
left:30%;
}
 
table
{
	border-style:solid;
    border-width:10px;
    border-color:pink ;
	width:400px;
	padding:40px;
    cellspacing:50px;
 }
input
{
	width:150px;
	height:20px;
}
input, table th
{
	 padding:10px;
}
</style>
</head>
<body>
<div>
<h1> welcome to insertion page </h1>
<form action="insertion.php" method="post" >
<table>

<tr> <th>title : </th> <td> <input type="text" name="title" placeholder="mandatory" required /> </tr>

<tr> <th>price : </th> <td> <input type="number" name="price" placeholder="mandatory" required /> </tr>

<tr> <th>author : </th> <td> <input type="text" name="author"/> </tr>

<tr> <th> <input type="submit" value="insert" /> </th>  </tr>

</table>
</form>
<p> do you want to goto homepage <a href="homepage.php" > click me </a> </p>
</div>
</body>
</html>