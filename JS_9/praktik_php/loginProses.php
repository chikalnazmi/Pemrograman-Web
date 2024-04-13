<?php
include "koneksi.php";

// Ambil data dari formulir
$username = $_POST['username']; // Ambil data yang ingin Anda cari
$password = md5($_POST['password']);

// Query untuk mencari data yang cocok berdasarkan username
$query = "SELECT * FROM user WHERE username = '$username' and password = '$password'";
$result = mysqli_query($connect, $query);
$cek = mysqli_num_rows($result);

if ($cek) {
    echo "Anda berhasil login. Silahkan menuju"; ?>
    <a href="homeAdmin.html">Halaman HOME</a>
<?php
}else{
    echo "Anda gagal Login. Silahkan "; ?> 
    <a href="loginForm.html">Login Kembali</a>
<?php
echo mysqli_error($connect);
}
?>