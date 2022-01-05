<?php
session_start();
include("../mysqlconfig.php");
include("navbar-template.php");

?>

    <body>
    <main>
        <div class="container">
            <h2>tabungan</h2>
        <?php
            
            if(isset($_GET['berhasil'])){
                ?>
                    <p><?php echo $_GET['berhasil']; ?></p>
                <?php
            }elseif(isset($_GET['erorms'])){
                ?>
                    <p><?php echo $_GET['erorms']; ?></p>
                <?php
            }
            
            ?>
            <form action="olah_tabungan_proses.php" method="post">
                <div>
                    <input type="text" name="nomor_siswa" placeholder="nomor siswa" required>
                </div>
                <div>
                    <input type="text" name="nabung" placeholder="nabung" required>
                </div>
                <div>
                    <input type="text" name="ngambil" placeholder="ngambil" required>
                </div>
                <div>
                    <button type="submit">submit</button>
                </div>
            </form>
        </div>
    </main>
    </body>
    
</body>
</html>