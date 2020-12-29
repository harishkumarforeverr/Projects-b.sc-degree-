<?php
$username=$_POST['username'];
$f=$_FILES['myfile'];
if(file_exists("photos/".$f['name']))
{
	echo "file is alerady exists";
}
else if($f['type']=="image/jpeg")
{
	move_uploaded_file($f['tmp_name'],"photos/".$f['name']);
	echo "<br/> file uploaded successfully ";
	echo "<br/> user name : ".$username;
	echo "<br/> photo name : ".$f['name'];
	echo "<br/> photo type : ".$f['type'];
	echo "<br/> photo size : ".$f['size'];
}
else
{
	echo "uploaded failed";
}
?>