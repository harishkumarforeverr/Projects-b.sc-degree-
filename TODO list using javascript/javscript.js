function buttonIsPressed(){ 
    var inputValue=document.querySelector("#inputid").value.trim(); 
    if(inputValue){ 
        var li=document.createElement("li");
        var ul=document.querySelector("#ulid"); 
        li.appendChild(document.createTextNode(inputValue)); 
        ul.appendChild(li);  
        li.onclick=function(li) { 
            ul.removeChild(li.target);
        }
    } 
} 