function f1(str)
{
	 var req=new XMLHttpRequest();
	 req.open("get","http://localhost/pc/3.php?group="+str,true);
	 req.send();
	 req.onreadystatechange=function()
	 {
		 if(req.readyState==4&&req.status==200)
		 {
			 document.getElementById("ss").innerHTML=req.responseText;
		 }
	 }
}