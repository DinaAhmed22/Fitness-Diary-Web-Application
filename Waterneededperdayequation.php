<!DOCTYPE html>

<head>
    <title>My Fitness Diary</title>
    <style>
        body {
            background-color: aqua;
            color: rgb(255, 0, 0);
        }
        
        h1 {
            text-align: Center;
            font-weight: bold;
        }
        
        .Title {
            background-color: blue;
            text-align: Center;
            margin: 20px;
            display: block;
        }
        
        .W {
            background-color: rgb(0, 90, 255);
            text-align: Center;
            margin: 20px;
            padding: 15px;
            display: block;
        }
        
        input[type=number] {
            width: 100%;
            text-align: center;
        }
        
        button[type=submit] {
            width: 100%;
            text-align: center;
            background-color: rgb(0, 150, 0);
            border: 5px solid darkgreen;
            border-radius: 5px;
            margin: 20px 10px;
            cursor: pointer;
        }
        
        button[type=submit]:hover {
            opacity: 0.8;
        }
    </style>
    <script>
        function calculate() {
            var weight = document.getElementById("w-input").value;
            var resM = parseFloat(weight) * 30.0;
            document.getElementById("ML-output").innerHTML = resM + " " + "ML";
            var resL = parseFloat(resM / 1000.0);
            document.getElementById("L-output").innerHTML = resL + " " + "Liters";
        }
    </script>
</head>

<body>

    <div class="Title">
        <h1>Water Intake Calculator</h1>
        <img src="WATER.jpg" widht="150" height="150"></div>
    <div class="W">
        <label>Weight (KG):</label>
        <input type='number' placeholder="Enter Your Weight in Kilograms EX.1:61" id="w-input">
        <br>
        <button type='submit' onclick="calculate()">Calculate Water Intake </button>
        <div id=ML>
            <h4>Water Intake in ML:</h4>
            <div id="ML-output"></div>
        </div>
        <div id=L>
            <h4>Water Intake in Liters:</h4>
            <div id="L-output"></div>
        </div>
    </div>
    <footer><button onclick="history.back()">Go Back</button></footer>
</body>