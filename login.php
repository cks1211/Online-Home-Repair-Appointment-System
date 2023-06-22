<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="http://www.apu.edu.my/sites/all/themes/APU/favicon.ico" type="image/vnd.microsoft.icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="login.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Login Form</title>
</head>

<body>

    <div class="form-container">
        <form id="login" action="./requestHandler.php" method="post">
            <h3>Login</h3>
            <input type="email" name="email" required placeholder="Enter your Email Here" name="email">
            <input type="password" name="password" required placeholder="Enter your Password Here" name="password">
            <input type="submit" value="login" class="form-btn" name="LogIn">
            <p>Don't have an account? <a href="register.php"><br>Register now</a></p>
        </form>
    </div>
</body>
</html>