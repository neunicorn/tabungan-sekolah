<?php

include("mysqlconfig.php");

$username = $_POST['username'];
$password = $_POST['password'];

$enc_username = sha1($username);
$enc_password = sha1($password);

$querry = "SELECT * FROM admin_sekolah WHERE uname = '$enc_username' AND passw='$enc_password'";

$result = mysqli_query($conn, $querry);

if(mysqli_num_rows($result) === 1){
    $row = mysqli_fetch_assoc($result);
    if($row['uname'] === $enc_username && $row['passw'] === $enc_password){
        echo "You have logged in";
    }
}else{
    header("Location: index.php");
    exit();
}

?>
