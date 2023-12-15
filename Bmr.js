var weight, height;
var g;//gender
var a;//activity work options

function calculate_BMR()//for Bmr
{
    weight = parseFloat(document.getElementById("w-input").value);
	height = parseFloat(document.getElementById("h-input").value);
    age=parseInt(document.getElementById("a-input").value);
    g=document.getElementById("g").value;
    if(g=="m")
    {
        var bmr=(88.362+(13.397*weight)+(4.799*height)-(5.677*age));
        bmr=parseInt(bmr);
        document.getElementById("bmr-output").innerHTML=bmr;
    }
    else if(g=='f')
    {
        var bmr=(447.593+(9.247*weight)+(3.098*height)-(4.330*age));
        bmr=parseInt(bmr);
        document.getElementById("bmr-output").innerHTML=bmr;
    }
    else{
        document.getElementById("bmr-output").innerHTML="Error";

    }
}
function calcamr()
{
    var select=document.getElementById("AL").value;
    weight = parseFloat(document.getElementById("w-input").value);
	height = parseFloat(document.getElementById("h-input").value);
    age=parseInt(document.getElementById("a-input").value);
    g=document.getElementById("g").value;
    if(g=="m")
    {
        var bmr=(88.362+(13.397*weight)+(4.799*height)-(5.677*age));
        bmr=parseInt(bmr);
        if(select=='1'){
            var clas=bmr*1.2;
            clas=parseInt(clas);
            document.getElementById("amr-output").innerHTML=clas;  
            
         
          }
          else if(select=='2')
          {
             var clas=bmr*1.375;
             clas=parseInt(clas);
             document.getElementById("amr-output").innerHTML=clas;  
          }
          else if(select=='3')
          {
             var clas=bmr*1.55;
             clas=parseInt(clas);
             document.getElementById("amr-output").innerHTML=clas;  
          }
          else if(select=='4')
          {
             var clas=bmr*1.725;
             clas=parseInt(clas);
             document.getElementById("amr-output").innerHTML=clas;  
          }
    }
    else if(g=='f')
    {
        var bmr=(447.593+(9.247*weight)+(3.098*height)-(4.330*age));
        bmr=parseInt(bmr);
        if(select=='1'){
            var clas=bmr*1.2;
            clas=parseInt(clas);
            document.getElementById("amr-output").innerHTML=clas;  
            
         
          }
          else if(select=='2')
          {
             var clas=bmr*1.375;
             clas=parseInt(clas);
             document.getElementById("amr-output").innerHTML=clas;  
          }
          else if(select=='3')
          {
             var clas=bmr*1.55;
             clas=parseInt(clas);
             document.getElementById("amr-output").innerHTML=clas;  
          }
          else if(select=='4')
          {
             var clas=bmr*1.725;
             clas=parseInt(clas);
             document.getElementById("amr-output").innerHTML=clas;  
          }
       
    }
    



}
     
