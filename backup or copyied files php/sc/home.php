<?php
session_start();
if(isset($_SESSION['username']))
{
	header('location:http://localhost/sc/login.php');
}
$name=$_SESSION['username'];
?>
<!DOCTYPE HTML>
<html>
<head>
<h2> welcome <?php echo $name ; ?> </h2>
</head>
<body>
<a href="logout.php" > logout </a>
</body>
</html>