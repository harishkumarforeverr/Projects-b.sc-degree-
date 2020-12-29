<!DOCTYPE HTML>
<html>
<head>
<style type="text/css">
body
{
	background-color:lightblue;
}
#p1
{
	width:300px;	
}
div
{
	text-align:left;
}
</style>
</head>
<body>
<h1> welcome to login page </h1>
<div>
<form action="2.php" method="post" >
<label> username  : </label>
<input id="p1" type="text" name="username" placeholder="mandatory" required /> <br/><br/> 
<label> password : </label> 
<input id="p1" type="password" name="password" placeholder="min 3 digits"  required />   <br/><br/>
<input type="submit" value="submit" />
</form>
</div>
</body>
</html>