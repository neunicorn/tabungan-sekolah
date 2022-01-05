<?php
session_start();
include("../mysqlconfig.php");
$id = "";
if(isset($_GET['id_tabungan'])){
    $id = $_GET['id_tabungan'];
}

$get_transaksi = "select transaksi.nabung as nabung, transaksi.ngambil as ngambil, admin_sekolah.nama, transaksi.tanggal from transaksi join admin_sekolah on transaksi.id_admin = admin_sekolah.id JOIN tabungan on tabungan.id = transaksi.id_tabungan WHERE tabungan.id = $id";
$transaksi = mysqli_query($conn, $get_transaksi);
$fetch_transaksi = mysqli_fetch_all($transaksi, MYSQLI_ASSOC);

$get_data = "SELECT siswa.nama as nama, kelas.nama_kelas as kelas, tabungan.balance as saldo from siswa join tabungan on tabungan.id_siswa = siswa.id JOIN kelas on siswa.id_kelas = kelas.id where tabungan.id = $id";
$data = mysqli_query($conn, $get_data);
$fetch_data = mysqli_fetch_all($data, MYSQLI_ASSOC);

include("navbar-template.php");
?>

    <main>
        <div class="container">
            <?php foreach($fetch_data as $d) : ?>
                <p>nama: <?= $d['nama']; ?></p>
                <p>kelas: <?= $d['kelas']; ?></p>
                <p>saldo: <?= $d['saldo']; ?></p>
            <?php endforeach; ?>
        <table border="1">
                <tr>
                    <th>nabung</th>
                    <th>ngambil</th>
                    <th>nama admin</th>
                    <th>tanggal</th>
                </tr>
                <?php foreach($fetch_transaksi as $u) : ?>
                    <tr>
                        <td><?= $u["nabung"]; ?></td>
                        <td><?= $u["ngambil"]; ?></td>
                        <td><?= $u["nama"]; ?></td>
                        <td><?= $u["tanggal"]; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </main>
    
</body>
</html>