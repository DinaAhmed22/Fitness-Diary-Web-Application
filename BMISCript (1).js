var weight, height;

function calculate() {
	weight = document.getElementById("w-input").value;
	height = document.getElementById("h-input").value;
    var result = parseFloat(weight) / (parseFloat(height) / 100) ** 2;
    result= result.toFixed(1);
    if (!isNaN(result)) {
        document.getElementById("bmi-output").innerHTML = result;
        if (result < 18.5) {
            document.getElementById("bmi-status").innerHTML = "Underweight";
        }
         else if (result < 25) {
            document.getElementById("bmi-status").innerHTML = "Healthy";
        } 
        else if (result < 30) {
            document.getElementById("bmi-status").innerHTML = "Overweight";
        } 
        else if (result < 35.0) {
            document.getElementById("bmi-status").innerHTML = "Obese Class 1";
        }
         else if (result < 39.9) { 
            document.getElementById("bmi-status").innerHTML = "Obese Class 2"; 
            } 
         else { 
            document.getElementById("bmi-status").innerHTML = "Obese Class 3"; 
        }
    }
}
