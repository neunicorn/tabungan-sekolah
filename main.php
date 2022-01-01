<?php

include("mysqlconfig.php");

session_start();

if(isset($_GET['message'])){
}else{
    header("Location: index.php?redirect=silakan untuk login terlebih dahulu", true, 301);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>nabungyuk!</title>
    <link rel = "icon" href = "img/wallet.png" >
</head>
<body>
    <header>
        <nav>
            <ul>
            <li class="center-img"><img src="img/wallet.png" alt="" ></li>
            <li><a href="#">Home</a></li>
            <li><a href="#">User</a></li>
            <li><a href="#">Wallet</a></li>    
            </ul>
        </nav>
        <div class="top-bar">
            <h1 class="midle-of-navbar">nabungyuk!</h1>
            <img src="img/user2.png" alt="zulfan" width="25px" class="midle-of-container"/>
            <ul>
                <!-- <li><img src="img/user2.png" alt="zulfan" width="25px" class="midle-of-container"/></li> -->
                <li><?php if(isset($_SESSION['nama_akun'])){
                    echo $_SESSION['nama_akun'];
                }?></li>   
            </ul>       
        </div>    
    </header>
    <main>
        <div class="container">
            <img src="img/wallet.png" width="100px" alt="">
            <p>
               Selamat datang di nabungyuk!, silakan pilih menu wallet untuk mengolah tabungan dan menu siswa untuk membuat tabungan baru
            </p>
        </div>
    </main>
    <footer>
        <p>copyright &copy; nabungyuk2021</p>
    </footer>
    
    
</body>
</html>