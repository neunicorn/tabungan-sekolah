<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel = "icon" href = "img/wallet.png" >
    <title>nabungyuk!</title>
</head>
<body>
    <main>
    
            <div class="container">
                <h2>Log in</h2>
                <form action="loginprocess.php" method="POST">
                    <div class = "login-space">
                        <!-- <label for="username">username</label> -->
                        <img src="img/user2.png" alt="" width="5px">
                        <input type="text" name="username" placeholder="type your username" required>
                    </div>
                    <div class="login-space">
                        <!-- <label for="password">password</label> -->
                        <img src="img/unlock.png" alt="">
                        <input type="password" name="password" placeholder="type your password" required> 
                    </div>
                    <?php
                        if(isset($_GET['error'])){
                            ?>
                                <div class="error-message">
                                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                                    <?php echo $_GET['error']; ?>
                                </div>
                            <?php
                        }
                    ?>
                    <div class="login-space">
                        <button type="submit">LOG IN</button>
                    </div>

                </form>
                <table>
                    <tr>
                        <td><small><a href="#">forgot password</a></small></td>
                        <td><small><a href="#">sign up</a></small></td>
                    </tr>
                    
                </table>
            </div>
        
        
    </main>
    <footer>
        <p>&copy; nabungyuk2021</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>