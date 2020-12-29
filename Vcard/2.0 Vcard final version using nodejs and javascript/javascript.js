$('.btn').click(function(){
    $.get("http://127.0.0.1:9000", function(data,status){
        extraction(data.toString());
    })
})
function extraction(data){
    document.querySelector("#mypara").innerHTML="";
    data=data.split("\n"); // i convert the data into array Object and divived them on the base of new line  
    // console.log(data.length/100);  // here i divided by 100 becoz size of the contact may range above >3000 so interpreter cannot handle huge calcuation so jsut for learning im taking ajust apiece of cake 
 
    for(let i=0;i<data.length;i++){  // i loop for no of array 
        var appendthedata=null;
              appendthedata="";    
         for(let j=0;j<data[i].length;j++){ // j for each invidual array Object
            var temp3=data[i].charCodeAt(j); // method to convert the string to ASCII code
          //  console.log(data[i][j]+" ascii value : "+temp3);
            temp3=Number(temp3);
            if(temp3>=48 && temp3<=57)
            { 
                //  console.log("im if block : "+temp3);
                 var temp4=String.fromCharCode(temp3); // method to convert the ACSII to string code                                            
                 appendthedata+=temp4;
            }
        }        
      if(appendthedata.length==10 || appendthedata.length==12) // cosideriong only 10 digts no and 12 digits no (considering 12 digits no becoz indian phone no start with 91)
       document.querySelector("#mypara").innerHTML+=appendthedata+"<br/>";
    } 
}