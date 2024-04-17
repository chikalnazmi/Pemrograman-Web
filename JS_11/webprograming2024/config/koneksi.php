<?php
date_default_timezone_set("Asia/Jakarta");
$koneksi = mysqli_connect("127.0.0.1:3306", "root", "", "prakwebdb");

if(mysqli_connect_errno()){
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>