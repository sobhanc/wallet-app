<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Wallet App</title>
    <link href="login_style.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  </head>
  <body>

    <div class="container">
        <div class="login-box">
        <div class="row">
            <!-- LOGIN FORM START -->
            <div class="col-md-6 login-left">
                <h2>Login</h2>
                <form action="validation.php" method="post">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="user" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary">Login</button>

                </form>
            </div>
            <!-- LOGIN FORM END -->
            
            <!-- REGISTER FORM START -->
            <div class="col-md-6 login-right">
                <h2>Register</h2>
                <form action="registration.php" method="post">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="user" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary">Signup</button>

                </form>
            </div>
            <!-- REGISTER FORM START -->

        </div><!-- ENDS ROW -->
        </div><!-- ENDS login-box -->
    </div><!-- ENDS CONTAINER -->


    <script src="script.js"></script>
  </body>
</html>


