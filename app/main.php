<?php

include("mysqlconfig.php");

session_start();

if(isset($_SESSION['nama_akun'])){
}else{
    header("Location: ../index.php?redirect=silakan untuk login terlebih dahulu", true, 301);
}

include("../navbar-template.php");
?>


    <main>
        <div class="container">
            <img src="../img/wallet.png" width="100px" alt="">
            <p>
               Selamat datang di nabungyuk! Silakan pilih menu wallet untuk mengolah tabungan dan menu siswa untuk membuat tabungan baru
            </p>
        </div>
        <a href="user.php">
            <div class ="half-container" id="c1">
                <img src="../img/user.png" width="15%" alt="">
                <p>User</p>
            </div>
        </a>
        
        <a href="wallet.php">
            <div class="half-container" id="c2">
                <img src="../img/wallet2.png" width="15%" alt="">
                    <p>Wallet</p>
            </div>
        </a>
        
    </main>
    <footer>
        <p>copyright &copy; nabungyuk2021</p>
    </footer>
    
    
</body>
</html>