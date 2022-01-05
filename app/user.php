<?php

session_start();

if(isset($_SESSION['nama_akun'])){
}else{
    header("Location: ../index.php?redirect=silakan untuk login terlebih dahulu", true, 301);
}

include("../navbar-template.php")

?>
    <main>

    </main>
    <footer>
        <p>copyright &copy; nabungyuk2021</p>
    </footer>
</body>
</html>