var weight,min;
function burner()
{
    weight=parseFloat(document.getElementById("w-input").value);
    min=parseInt(document.getElementById("min").value);
    select=document.getElementById("select").value;
    if(select=="1")
    {
        var burnedcalories=1.3*3.5*(weight/200)*min;
        document.getElementById("burner-output").innerHTML=Math.round(burnedcalories,1);
    }
    else if(select=="2")
    {
        var burnedcalories=2.2*3.5*(weight/200)*min;
        document.getElementById("burner-output").innerHTML=Math.round(burnedcalories,1);
    }
    else if(select=="3")
    {
        var burnedcalories=2.5*3.5*(weight/200)*min;
        document.getElementById("burner-output").innerHTML=Math.round(burnedcalories,1);
    }
    else if(select=="4")
    {
        var burnedcalories=3.5*3.5*(weight/200)*min;
        document.getElementById("burner-output").innerHTML=Math.round(burnedcalories,1);
    }
    else if(select=="5")
    {
        var burnedcalories=3.5*3.5*(weight/200)*min;
        document.getElementById("burner-output").innerHTML=Math.round(burnedcalories,1);
    }
    else if(select=="6")
    {
        var burnedcalories=4.3*3.5*(weight/200)*min;
        document.getElementById("burner-output").innerHTML=Math.round(burnedcalories,1);
    }
    else if(select=="7")
    {
        var burnedcalories=5*3.5*(weight/200)*min;
        document.getElementById("burner-output").innerHTML=Math.round(burnedcalories,1); 
    }
    else if(select=="8")
    {
        var burnedcalories=6*3.5*(weight/200)*min;
        document.getElementById("burner-output").innerHTML=Math.round(burnedcalories,1); 
    }
    else if(select=="9")
    {
        var burnedcalories=8*3.5*(weight/200)*min;
        document.getElementById("burner-output").innerHTML=Math.round(burnedcalories,1); 
    }
    else if(select=="10")
    {
        var burnedcalories=11.5*3.5*(weight/200)*min;
        document.getElementById("burner-output").innerHTML=Math.round(burnedcalories,1); 
    }
}