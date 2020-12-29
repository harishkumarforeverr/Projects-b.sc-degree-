<?php 
$res=$_GET['group'];
$a5=array('1','2','3','4','5');
$a10=array('6','7','8','9','10');
$a15=array('11','12','13','14','15');
$a20=array('16','17','18','19','20');
if($res=="mpcs")
{
	foreach($a5 as $c1)
	{
		echo "<option> $c1 </option>";
	}
}
else if($res=="mscs")
{
	foreach($a10 as $c1)
	{
		echo "<option> $c1 </option>";
		}
}
else if($res=="mecs")
{
	foreach($a15 as $c1)
	{
		echo "<option> $c1 </option>";
	}
}
else if($res=="mpc")
{
	foreach($a20 as $c1)
	{
		echo "<option> $c1 </option>";
	}
}
else
	echo "first select he group";
?>