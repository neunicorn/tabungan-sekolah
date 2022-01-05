<?php
session_start();

if(isset($_SESSION['nama_akun'])){
}else{
    header("Location: ../index.php?redirect=silakan untuk login terlebih dahulu", true, 301);
}

include("navbar-template.php");
?>
    <main>
        <a href="olah_tabungan.php" style="text-decoration: none;">
            <div class="container">
                <p>nabung/ngambil</p>
            </div>
        </a>
        <a href="show_tabungan.php" style="text-decoration: none;">
            <div class="container">
                <p>lihat tabungan</p>
            </div>
        </a>
    </main>
    <footer>
        <p>copyright &copy; nabungyuk2021</p>
    </footer>
</body>
</html>