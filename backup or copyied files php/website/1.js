 "use strict"
 $(document).ready(
function() 
{
	$("#dog").hide();
	$("#errormsg").hide();
  $("#result").hide()    
  var resultList=$("#resultlist");
  resultList.text("message injected by the javascript ");
  var toggleButton=$("#toggleButton");
  toggleButton.on("click", function() 
         {
		console.log("button is pressed ");
		resultList.toggle(500) ;
		if(toggleButton.text()=="show")
		{
			toggleButton.text("hide") ;
		}
		else
		{
			toggleButton.text("show");
		}

        });
  

		var res=[
			{name:"harish",cllg:"ggc",salary:"7 lakhs"},
			{name:"forever",cllg:"iit",salary:"6 lakhs"},
			{name:"myself",cllg:"iiit",salary:"5 lakhs"},{name:"forever",cllg:"iit",salary:"6 lakhs"},
			{name:"myself",cllg:"iiit",salary:"5 lakhs"},{name:"forever",cllg:"iit",salary:"6 lakhs"},
			{name:"myself",cllg:"iiit",salary:"5 lakhs"},{name:"forever",cllg:"iit",salary:"6 lakhs"},
			{name:"myself",cllg:"iiit",salary:"5 lakhs"},{name:"forever",cllg:"iit",salary:"6 lakhs"},
			{name:"myself",cllg:"iiit",salary:"5 lakhs"},{name:"forever",cllg:"iit",salary:"6 lakhs"},
			{name:"myself",cllg:"iiit",salary:"5 lakhs"},
			{name:"kumar",cllg:"nit",salary:"4 lakhs"},
			{name:"nhk",cllg:"it",salary:"3 lakhs"}
		];

	 resultList.empty();
	 $.each(res,function (i,iteam)
	             {
					 var newResult=$("<div id='result108' >"
					 + "<div class='name'>"+"Name : "+iteam.name +"</div>" 
					 + "<div>"+"graduacted : "+iteam.cllg +"</div>" 
					 + "<div>"+"salary :"+iteam.salary +"</div>" 
					 + "<div/>");
					 resultList.append(newResult);
				  newResult.hover(function() {
					$(this).css("background-color","pink");
					$(this).css("color","darkblue");
					$(this).css("border","1px solid blue");
					  
				  }, function() {
					$(this).css("background-color","transparent");
					$(this).css("color","black");
					$(this).css("border","1px solid gray");
					  
				  })
                    

				 });
		
});

function f3()
{
	  return false;
}
function f1()
{

	 var n1=document.getElementById("username").value;
	 var p1=document.getElementById("password").value;
	 if(n1==0||p1==0)
	 {
		$("#result").hide()
 	 }
	 else{
	 $("#result").show()
 	 }
}
function f2()
{
$("#result").hide();
 }
$("#ball").on("submit", function() { 
	var name=$("#username").val();
	var password=$("#password").val();
	if(name && password)
	{
		$("#errormsg").empty();
		$("#dog").show();
		$("#ball").hide();
	}
	else
	{
		$("#errormsg").text("please enter username and paswrord  ");
		 $("#errormsg").show();
	}
});
$("#logout").on("click", function() 
                          {
							  $("#ball").show();
							  $("#dog").hide();
							  $("#result").hide();
						  }
);
 