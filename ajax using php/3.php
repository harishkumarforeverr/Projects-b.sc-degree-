<?php 
$x=$_GET['group'];
if($x=="mpc")
{
	echo "<option> mpcs </option>
	      <option> mecs </option>
	      <option> mpes </option>
	      <option> mpg </option> ";
}
else if ($x=="bipc")
{
	      echo "<option> bzc </option>
	            <option> micro biology </option>
	            <option>zoology  </option> ";
}

else if($x=="cec")
{
	echo "<option> b.a </option>
	      <option> b.com </option>
	      <option> arts </option>
	      <option> hec </option> ";
}
else
{
	echo "<option> first select the intermediate group </option>";

}

?>