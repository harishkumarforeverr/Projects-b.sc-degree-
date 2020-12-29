function f1(str)
{
	var object=new XMLHttpRequest();
	object.open("get","http://localhost/ajax/no.php?group="+str,true);
	object.send();
    object.onreadystatechange=function()
	{
     if(object.readyState==4&&object.status==200)
	 {
		 document.getElementById("id1").innerHTML=object.responseText;
	 }
	};		
}
 