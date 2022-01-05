<?php
include("../mysqlconfig.php");
session_start();

include("navbar-template.php");
?>

    <main>
        <div class="container">
            <form action="show_tabungan_proses.php" method="post">
                <div>
                    <input type="text" name="nomor" placeholder="masukan nomor induk siswa" style="width:50%; height:20px;" required>
                </div>
                <div>
                    <button type="submit" style="width:20%; margin-top: 20px;">cari</button>
                </div>
            </form>   
        
        </div>
    </main>
    

    
</body>
</html>