<?php
session_start();
if(!isset($_SESSION['username']))
{
	header('location:http://localhost/pc/1.php');
}
$name=$_SESSION['username'];
?>
<html>
<head>
<style type="text/css">
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
<h1> homepage <h1>
<h2> welcome <?php $name; ?> </h1>
<p> do you want to go to logout <a href="4.php" > logout </a>
</body>
</html>