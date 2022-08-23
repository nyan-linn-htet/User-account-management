<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        .wrap {
            width: 100%;
            max-width: 400px;
            margin: 40px auto;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="wrap">
        <h1>Login</h1>
        <?php if( isset($_GET["plf"]) ) : ?>
            <div class="alert alert-warning">
                Please Login First!
            </div>
        <?php elseif( isset($_GET["incorrect"]) ) : ?>
            <div class="alert alert-danger">
                Incorrect Email or Password!
            </div>
        <?php elseif( isset($_GET["los"]) ) : ?>
            <div class="alert alert-success">
                Logout Success!
            </div>
        <?php elseif( isset($_GET["register"]) ) : ?>
            <div class="alert alert-success">
                Account created. Please login.
            </div>
        <?php elseif( isset($_GET["suspended"]) ) : ?>
            <div class="alert alert-danger">
                Your account is suspended.
            </div>
        <?php endif ?>

        <form action="_actions/login.php" method="post">
            <input type="email" name="email" placeholder="Enter Your Email" class="form-control mb-2" required>
            <input type="password" name="password" placeholder="Enter Your Password" class="form-control mb-2" required>
            <button type="submit" class="w-100 btn btn-lg btn-primary">Login</button>
        </form>
        <br>
        <a href="register.php">Register</a>
    </div>
</body>
</html>