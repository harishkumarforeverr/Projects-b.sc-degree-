
<?php /* 
1) these just a php page 
*/ ?>
<html>
<head>
<style type="text/css" >
	    body
		{
			background-color:skyblue;
		}
        h1,form
		{
			text-align:center;
			margin: 0 auto;
			position:relative;
			top:50px;
		}
        h1
        {
            color:green;
            margin-bottom:11px;
        }
        label,input
        {
            margin:5px;
            text-align:left;
        }
       body>form>input[type="text"]
        {
            width:200px;
            padding:4px;
        }
     label
     {
         font-weight:bold;
     }
     input[type="submit"],
     input[type="reset"]
     {
         border: 3px solid transparent;
         border-radius:8px;
     }
     input[type="submit"]
     {
         background-color:green;
     }
     input[type="reset"]
     {
         background-color:gray;
     }
</style>
</head>
<body>
<h1> welcome to login page </h1>
<form action="valid.php" method="post">
<label for="username">USERNAME : </label> <input type="text"  name="username" placeholder="username"  id="username" /> <br/>
<label for="password">PASSWORD : </label> <input type="text"  name="password" placeholder="password"  id="password" />  <br/>
<label> &nbsp; &nbsp; &nbsp;<input type="submit" value="login"> 
   <input type="reset" value="reset"> </label>
</form>
</body>
</html>