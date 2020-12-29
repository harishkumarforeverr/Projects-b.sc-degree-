<?php 
$username=$_POST['username'];
$f=$_FILES['myfile'];
echo "welcome ,".$username."<br/>";
if(file_exists("my photos/".$f['name']))
{
	echo "photo is aleardy exist";
}
else if($f['type']=="image/jpeg")
{
	move_uploaded_file($f['tmp_name'],"my photos/".$f['name']);
	echo "uploaded sucess fully ";
	echo "file name = ".$f['name'];
	echo "file type = ".$f['size'];
	echo "file size = ".$f['type'];
}
else
{
	echo "file uploaded is filed";
}	
?>