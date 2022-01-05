<?php

include("../mysqlconfig.php");

session_start();

$get_user = "SELECT siswa.nomor_siswa as nomor_siswa, siswa.nama as nama, kelas.nama_kelas as kelas, tabungan.balance as saldo from siswa JOIN tabungan on siswa.id = tabungan.id_siswa JOIN kelas on siswa.id_kelas = kelas.id";
$querry = mysqli_query($conn, $get_user);

$user = mysqli_fetch_all($querry, MYSQLI_ASSOC);

include("navbar-template.php");
?>

    <main>
        <div class="container">
            <table border="1">
                <tr>
                    <th>nomor siswa</th>
                    <th>nama</th>
                    <th>kelas</th>
                    <th>saldo</th>
                </tr>
                <?php foreach($user as $u) : ?>
                    <tr>
                        <td><?= $u["nomor_siswa"]; ?></td>
                        <td><?= $u["nama"]; ?></td>
                        <td><?= $u["kelas"]; ?></td>
                        <td><?= $u["saldo"]; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>    
        </div>
    </main>    
</body>
</html>