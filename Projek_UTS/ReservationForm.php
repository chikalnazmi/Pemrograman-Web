<?php
// Konfigurasi koneksi database
$servername = "localhost"; // Ganti dengan nama server Anda jika berbeda
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$database = "cafe"; // Ganti dengan nama database Anda

// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " .$conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai yang dikirimkan dari form
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $telepon = $_POST["telepon"];
    $tanggal = $_POST["tanggal"];
    $jumlah_orang = $_POST["jumlah_orang"];

    // Simpan informasi pengguna ke dalam session
    $_SESSION['nama'] = $nama;
    $_SESSION['email'] = $email;

    // Simpan informasi pengguna ke dalam cookies
    setcookie("telepon", $telepon, time() + (86400 * 30), "/"); // Cookie berlaku selama 30 hari


    // Persiapan query SQL untuk menyimpan data ke dalam database
    $sql = "INSERT INTO anggota (nama, email, telepon, tanggal, jumlah_orang) 
            VALUES ('$nama', '$email', '$telepon', '$tanggal', '$jumlah_orang')";

    // Eksekusi query
    if ($conn->query($sql) === TRUE) {
        header("Location: Selesai.html");
        exit(); // Pastikan tidak ada output lain sebelum pengalihan header
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    
    // Tutup koneksi database
    $conn->close();
}
?>
