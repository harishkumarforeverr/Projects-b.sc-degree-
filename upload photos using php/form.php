<html>
<head>
<title> my form </title>
<style type="text/css" >
body
{
	background-color:lightblue;
}
form label
{
	color:blue;
}
</style>
</head>
<body>
<form action="upload.php" method="post" enctype="multipart/form-data" >
<label> enter name : </label>
<input type="text" name="username" placeholder="enter name" /> <br/><br/> 
<label> upload your image : </label>
<input type="file" name="myfile" /> <br/> <br/>
<input type="submit" value="upload" />
</form>
</body>
</html>