<?php
session_start();

include("../mysqlconfig.php");

$nomor_siswa = $_POST['nomor_siswa'];
$nabung = $_POST['nabung'];
$ngambil = $_POST['ngambil'];
$admin = $_SESSION['admin'];

$get_id_tabungan = "SELECT tabungan.id as id FROM siswa JOIN tabungan ON siswa.id = tabungan.id_siswa WHERE siswa.nomor_siswa = $nomor_siswa";
$execute = mysqli_query($conn, $get_id_tabungan);
$fecth_id = mysqli_fetch_assoc($execute);
$id_tabungan = $fecth_id['id'];

if(empty($fecth_id)){
    header("location: olah_tabungan.php?erorms=data siswa tidak tersedia");
    quit();
}else{

    $insert_saldo = "INSERT INTO transaksi(id_tabungan, id_admin, nabung, ngambil) VALUES($id_tabungan, $admin, $nabung, $ngambil)";
    $query = mysqli_query($conn, $insert_saldo);

    $update_saldo = "UPDATE tabungan set balance = balance + $nabung - $ngambil where id = $id_tabungan ";
    $query_saldo = mysqli_query($conn, $update_saldo);

    header("location:olah_tabungan.php?berhasil=data berhasil di input");
}
?>