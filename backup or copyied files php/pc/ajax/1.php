<!DOCTYPE HTML>
<html>
<head>
<script src="2.js">
</script>
<title> application form </title>
<style type="text/css">
#d1
{
	text-align:left;
}
body
{
	background-color:lightblue;
}
table th
{
	color:navy;
}
h1,h2
{
	color:red;
}
</style>
</head>
<body>
<div id="d1">
<h1> degree aplication form </h1>
<h2> please fill your deatiles </h1>
<form action="2.php" method="post" >
<table>
<tr>
<th> <label> enter your name : </labeL> </th>
<td> <input type="text" name="username" placeholder="mandatory" required />
</tr>
<tr>
<th> <label> select intermediate group  : </labeL> </th>
<td> <select onchange="f1(this.value)" > 
<option> select the option </option>
<option> mpc </option>
<option> bipc </option>
<option> cec </option> 
</select> </td>
</tr>
<tr>
<th> <label> select intermediate group  : </labeL> </th> 
<td> <select id="ss" > 
<option> first select the intermediate group </option>
</select> </td>
</tr>
<tr>
<th> <input type="submit" value="registor" /> </th>
</tr>
</table>
</form>
</div>
</body>
</html>