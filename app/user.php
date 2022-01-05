<?php

session_start();

if(isset($_SESSION['nama_akun'])){
}else{
    header("Location: ../index.php?redirect=silakan untuk login terlebih dahulu", true, 301);
}

include("navbar-template.php")

?>
    <main>
        <a href="add_user.php">
            <div>
                <p>buat user</p>
            </div>
        </a>
        <a href="show_user.php">
            <div>
                <p>list user</p>
            </div>
        </a>   
    </main>
    <footer>
        <p>copyright &copy; nabungyuk2021</p>
    </footer>
</body>
</html>