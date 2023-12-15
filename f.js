var fat,carbs,protein,grams;


function calculate()
{
  fat=parseFloat(document.getElementById("F").value);
  carbs=parseFloat(document.getElementById("C").value);
  protein=parseFloat(document.getElementById("p").value);
  grams=parseFloat(document.getElementById("G").value);
  var total=fat+carbs+protein;
  total=parseFloat(total);
  var calories=total*grams;
  calories=parseFloat(calories);
  document.getElementById("ValueF").innerHTML=calories;
}