<?php

include("../mysqlconfig.php");

$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];

if( $password !== $repassword ){
    header("location:signup.php?eror=password didn't match");
    exit();
}

$enc_username = sha1($username);
$enc_password = sha1($password);

$querry = "SELECT * FROM admin_sekolah WHERE uname= '$enc_username'";

$result = mysqli_query($conn, $querry);
$check = mysqli_fetch_assoc($result);

if(empty($check)){
    $query_insert_data = "INSERT INTO admin_sekolah(nama, uname, passw) VALUES('$nama', '$enc_username', '$enc_password')";
    $insert_data = mysqli_query($conn, $query_insert_data);

    header("location:signup-succes.php");
    exit();
}else{
    header("location: signup.php?eror=username tidak dapat digunakan!");
    exit();
}

?>