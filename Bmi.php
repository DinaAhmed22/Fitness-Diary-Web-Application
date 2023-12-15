<!DOCTYPE html>
<html>

<head>
    <title>My Fitness Diary</title>
    <!--CSS-->
    <link rel="stylesheet" href="BMI.css">

</head>

<body>
    <h1>BMI (Body Mass Index) Calculator</h1>
    <div class="BMI">
       
        <h3 id="h31">Enter Your Measurments
        </h3>
        <label>Enter Your Height (Cm)</label>
        <input type="number" placeholder='Ex.:172 ' id="h-input">
        <br>
        <br>
         Enter Your Weight (Kg)
        <input type="number" placeholder="Ex.:61" id="w-input">
        <br>
        <br>
        <hr>
        <button type="submit" onclick="calculate()">Calculate BMI</button>
        <div class="bmi-value">
            <h4>BMI Value: </h4>
            <div id="bmi-output"></div>
        </div>
        <div class="status">
            <h4>Status: </h4>
            <div id="bmi-status"></div>
        </div>
    </div>




    <p id="x"></p>
    <script src="BMISCript (1).js">
    </script>
    <footer><button onclick="history.back()">Go Back</button></footer>
</body>



</html>