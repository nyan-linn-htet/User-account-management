<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        .wrap {
            width: 100%;
            margin: 40px auto;
            max-width: 400px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="wrap">
        <form action="_actions/create.php" method="post">
            <h1>Register</h1>

            <?php if( isset($_GET["error"]) ) : ?>
                <div class="alert alert-warning">
                    Cannot created account. Please try again.
                </div>
            <?php endif ?>

            <input type="text" name="name" placeholder="Name" class="form-control mb-2" required>
            <input type="email" name="email" placeholder="Email" class="form-control mb-2" required>
            <input type="text" name="phone" placeholder="Phone" class="form-control mb-2" required>
            <textarea name="address" placeholder="Address" class="form-control mb-2" required></textarea>
            <input type="password" name="password" placeholder="Password" class="form-control mb-2" required>
            <button type="submit" class="w-100 btn btn-lg btn-primary">Register</button>
        </form>
        <br>
        <a href="_actions/login.php">Login</a>
    </div>
</body>
</html>