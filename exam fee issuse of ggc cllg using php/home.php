<?php /* 
1) its just a php page 
*/ ?>
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head> 
<style type="text/css">
body 
{
	background-color:skyblue;
}
h1,h2
{
	color:red;
	font-size:20px;
 }
img
{
	border: 80px solid transparent;
	vertical-align:top;
}
img,table
{
	display:inline-block;
}
table
{
	margin-left:80px;
	font-weight:bold;
}
#p1,#p2
{
	display:inline-block;
}
#p1
{
	margin-right:60px;
	vertical-align:top;
}
table tr th
{
	color:red;
}
a
{
	color:blue;
}
a:hover
{
	color:red;
}
 
 </style>
</head>
<body>
<header>

</header>
<section>
<h1> <?php echo $_SESSION['username'] ?> welcome to, Girraj Govt Degree college , Royal nizamabad </h1>
<img src="#" alt="mypic" border="2px" />
<table>
<tr> <th> <?php echo $_SESSION['username'] ?> About You </th> </tr>
 <tr>
<td> name :  </td> <td> <?php echo $_SESSION['username'] ?> </td> 
</tr>
<tr>
<td> year :</td> <td>  2020 </td>
</tr>
<tr>
<td> group :</td> <td>  B.SC MPCS  </td>
</tr>
<tr>
<td> college : </td> <td>  Girraj govt degree college </td>
</tr>
<tr>
<td>  semester : </td> <td> 4th semester </td>
</tr>
<tr>
<td> subject : </td> <td> DBMS </td>
</tr>
<tr>
<td> deperment :</td> <td> computer </td>
</tr>
</table>
<br/>
<div id ="p1">
<h2> new updates </h2>
<p> pay 4th semester exan fee :  <a href="fee.php"> click me </a> </p>
</div>
<div id ="p2">
<h2> &nbsp;  &nbsp;  &nbsp; Achiements </h2>
<ul>
<li> <p> international chess certificates  :  <a href="a1.php"> click me </a> </p> </li>
<li><p>  1st semester result :  <a href="a1.php"> click me </a> </p> </li>
<li><p>  2st semester result :  <a href="a2.php"> click me </a> </p> </li>
<li><p>  3st semester result :  <a href="a3.php"> click me </a> </p> </li>
</ul>
</div>

</section>
<footer>
<p> do you want to logout  <a href="ggchomepage.php" > click me </a> </p> 
</footer>
</body>
</html>