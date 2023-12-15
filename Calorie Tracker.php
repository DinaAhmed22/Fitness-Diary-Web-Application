<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calories Tracker</title>
<style>
    div{
            background-color:pink;
            text-align: Center;
            margin: 20px;
            padding: 15px;
            display: block;
    }
    h1{
        font-weight: bold;
        font-size:20;


    }
</style>



</head>

<body style="background-color:#141414;color:black">
   
    <nav>
        <div class="nav-wrapper blue" style="text-align:center;">
            <h1>Calorie Tracker</h1>
            <div class="container">
               
                </ul>
            </div>
        </div>
    </nav>

    <br>

    <div class="container">
        <div class="card">
            <div class="card-content">
                <span class="card-title">Add Meal / Food item</span>
                <form class="col">
                    <div class="row">
                        <div class="input-field col s6">
                            <label for="item-name">Meal</label>
                            <input type="text" placeholder="Add Item" id="item-name">
                           

                        </div>
                        
                        <div class="input-field col s6">
                            <label for="item-calories">Calories</label>
                            <input type="number" placeholder="Add Calories" id="item-calories">
                            
                        </div>
                    </div>
                    <div class="row">
                        <button class="btn add-btn blue darken-3"><i class="fa fa-plus"></i> Add Meal</button>
                        <button class="btn update-btn orange"><i class="fa fa-pencil-square-o"></i> Update Meal</button>
                        <button class="btn delete-btn red"><i class="fa fa-remove"></i> Delete Meal</button>
                        <button style="border: solid 5px;"class="btn back-btn grey pull-right"><i class="fa fa-chevron-circle-left"></i>
                            Back</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Calories count -->
        <h3 class="center-align">Total calories: <span class="total-calories">0</span></h3>

        <!-- Item list -->
        <ul id="item-list" class="collection">
            <a href="#" class="clear-btn btn blue lighten-3">Clear All</a>
        </ul>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script src="app.js"></script>
</body>

</html>