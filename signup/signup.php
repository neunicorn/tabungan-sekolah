<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel = "icon" href = "../img/wallet.png" >
    <title>nabungyuk!</title>
</head>
<body>
    <div class="container">
        <img src="../img/wallet.png" width="10%" alt="">
        <h2>SIGN UP</h2>
        <form action="signup-process.php" method="POST">
            <div class="login-space">
                <input type="text" name="nama" placeholder="type your name..." required>    
            </div>
            <div class="login-space">
                <input type="text" name="username" placeholder="type a username..." required>
            </div>
            <div class="login-space">
                <input type="password" name="password" placeholder="type a password..." required>
            </div>
            <div class="login-space">
                <input type="password" name="repassword" placeholder="repeat the password..." required>
            </div>
            <div class="login-space">
                <button type="submit">SIGN UP</button>
            </div>
            <small><a href="../index.php">login</a></small>
            
        </form>
    </div>
    <footer>
        <p>
            copyright &copy; nabungyuk2021
        </p>
    </footer>
</body>
</html>