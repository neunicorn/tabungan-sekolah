<?php

session_start();

include("navbar-template.php");

?>

    <main>
        <div class="container">
            <h2>Membuat tabungan baru untuk siswa</h2>
            <?php
            
            if(isset($_GET['berhasil'])){
                ?>
                    <p><?php echo $_GET['berhasil']; ?></p>
                <?php
            }elseif(isset($_GET['gagal'])){
                ?>
                    <p><?php echo $_GET['gagal']; ?></p>
                <?php
            }
            
            ?>
            <form action="add_user_process.php" method="post">
                <div class="">
                    <input type="text" name="nomor" placeholder="nomor induk siswa" required>
                </div>
                <div>
                    <input type="text" name="nama" placeholder="nama siswa" required>
                </div>
                <div>
                    <select name="kelas" required>
                        <option selected disabled value="">Pilih kelas</option>
                        <option value="1">A-1</option>
                        <option value="2">A-2</option>
                        <option value="3">B-1</option>
                        <option value="4">B-2</option>
                    </select>
                </div>
                <div>
                    <button type="submit">buat user</button>
                </div>
            </form>
        </div>
    </main>
    <footer>
        
    </footer>

    
</body>
</html>
