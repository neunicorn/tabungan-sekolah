<?php

include("../mysqlconfig.php");

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$enc_username = sha1($username);
$enc_password = sha1($password);

$querry = "SELECT * FROM admin_sekolah WHERE uname = '$enc_username' AND passw='$enc_password'";

$result = mysqli_query($conn, $querry);

if(mysqli_num_rows($result) === 1){
    $row = mysqli_fetch_assoc($result);
    if($row['uname'] === $enc_username && $row['passw'] === $enc_password){
        $_SESSION['nama_akun'] = $row['nama'];
        $_SESSION['admin'] = $row['id'];
        header("Location: ../app/main.php?message=berhasil");
        exit();
    }
}else{
    header("Location: ../index.php?error=incorrect username or password");
    exit();
}

?>