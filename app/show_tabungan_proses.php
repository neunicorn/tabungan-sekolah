<?php

session_start();

include("../mysqlconfig.php");

$nomor_siswa = $_POST['nomor'];

$get_id_tabungan = "SELECT tabungan.id as id FROM siswa JOIN tabungan ON siswa.id = tabungan.id_siswa WHERE siswa.nomor_siswa = $nomor_siswa";
$execute = mysqli_query($conn, $get_id_tabungan);
$fecth_id = mysqli_fetch_assoc($execute);
$id_tabungan = $fecth_id['id'];


header("location:show-tabungan-real.php?id_tabungan='$id_tabungan'");

?>