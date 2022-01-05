<?php

include("../mysqlconfig.php");

$nomor = $_POST['nomor'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];

$querry = "SELECT * FROM siswa WHERE nomor_siswa = $nomor";
$cursor = mysqli_query($conn, $querry);
$check_nomor = mysqli_fetch_assoc($cursor);

if(empty($check_nomor)){
    $insert_siswa = "INSERT INTO siswa(nomor_siswa, nama, id_kelas) VALUES('$nomor', '$nama', '$kelas')";
    $result_insert = mysqli_query($conn, $insert_siswa);
    
    $get_siswa = "SELECT MAX(id) as id from siswa";
    $result_get = mysqli_query($conn, $get_siswa);
    $get_id = mysqli_fetch_assoc($result_get);
    $id = $get_id['id'];
    
    
    $set_tabungan = "INSERT INTO `tabungan` (`id_siswa`, `balance`) VALUES ($id, 0)";
    $result_tabungan = mysqli_query($conn, $set_tabungan);
    
    $get_tabungan = "SELECT MAX(id_siswa) as id_siswa from tabungan";
    $result_get_tabungan = mysqli_query($conn, $get_tabungan);
    $fk_siswa = mysqli_fetch_assoc($result_get_tabungan);
    
    
    if($fk_siswa['id_siswa'] === $id){
        header("location: add_user.php?berhasil=siswa berhasil ditambahkan");
        exit();
    }else{
        header("location: add_user.php?gagal=gagal menambahkan data siswa");
        exit();
    }
}else{
    header("location: add_user.php?gagal=nomor siswa telah terdaftar!");
    exit();
}
?>