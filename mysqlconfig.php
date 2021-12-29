<?php

$conn= mysqli_connect('localhost:3308', 'root', '', 'tabungan_sekolah');
if(!$conn){
    die('gagal connect' .$conn->connect_error());
}

?>