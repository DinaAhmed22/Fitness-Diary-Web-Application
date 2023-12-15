<head>
    <title>My Fitness Diary</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="stylesheet" href="logandregstyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
 
</head>
<html>
<body>
    <h1>Welcome To My Fitness Diary </h1>
    <div class="container">
        <div class="row">
            <div class="col-md-6 login-left">
                <h2>Login Here</h2>
                <form action="validation.php" method="post">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email"  name="email"  class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password"  name="pswd"  class="form-control" required>

                    </div>
                    <button type="submit" class="btn btn-primary"> Login </button>
                </form>
            </div>
            <div class="col-md-6 login-right">
                <h2>Register Here</h2>
                <form action="reg.php" method="post">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email"  name="email"  class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password"  name="pswd"  class="form-control" required>
                         <br>
                         <br>
                         <label>Repeat Password</label>
                         <input type="password" name="rpswd" class="form-control" requied>
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
        </div>
    </div>
</body>
</html>