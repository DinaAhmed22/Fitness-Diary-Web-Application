<!DOCTYPE html>
<html>

<head>
    <title>My Fitness Diary</title>
    <link rel="stylesheet" href="FoodTracker.css">
</head>

<body>
    <h1>Food Calorie Calculator and Tracker</h1>
    <div id="z">
        Click on picture to buy Food Scale from Amazon <br>
        <a href='https://www.amazon.eg/-/en/MT-Digital-Kitchen-Scale-10/dp/B08WJMMJVN/ref=asc_df_B08WJMMJVN/?tag=egoshpadde-21&linkCode=df0&hvadid=544936876071&hvpos=&hvnetw=g&hvrand=4642227011818905597&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=9112350&hvtargid=pla-1415825375940&psc=1'>
            <img src='foodscale.jpg' width="150" height="150">
        </a>
        <div id="IZ">
            You need a Scale to count Food Grams

        </div>
        <div id="y">
            <label>Enter Grams of Protein/Gram</label> 

                <input type="number" placeholder="1" id="p">
                <br> 
                <label>Enter Grams of Carbs/Gram</label> 
                <input type="number" placeholder="1" id="C">
                <br>
                <label> Enter Grams of Fats/Gram</label> 
                <input type="number" placeholder="1" id="F">
             
                <br>
                <label>Enter Grams of Meal (Using Food Scale )</label> 
                <input type="number" placeholder="1" id="G">
                <br>
                <br>
                <hr>
                <Button type="submit" onclick='calculate()'>Calories in Meal</Button>
                <div class="value">
                    <h4> Calories in Meal: </h4>
                    <div id="ValueF"></div>
                </div>
           
        </div>

        <button onclick="history.back()">Go Back</button>
        <script src="f.js"></script>

</body>

</html>