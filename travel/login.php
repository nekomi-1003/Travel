<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div style="text-align: center;">
        <p>Login</p>
        <form action="home-two.php" method="POST">
            <input type="text" id="username" name="username" placeholder="Email" required /><br><br>
            <input type="password" id="pass" name="password" placeholder="Password" required /><br><br>
            <button type="submit" id="btn" name="login" style="background-color: #ff7d27;">Login</button>
        </form>
        <h5 style="font-size: 14px; color: rgb(61 44 19);">Not a member? <a href="sign.php" style="color: white;">Sign Up</a></h5>
    </div>

</body>
</html>
