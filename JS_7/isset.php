<?php
$umur;
if(isset($umur) && $umur >= 18){
    echo "Anda sudah dewasa.<br>";
}else{
    echo "Anda belum dewasa atau variabel 'umur' tidak ditemukan.<br>";
}

$data = array("nama" => "Chikal", "usia"=>20);
if(isset($data["nama"])){
    echo "Nama: " . $data["nama"] . "<br>";
}else{
    echo "Variabel 'nama' tidak ditemukan dalam array.<br>";
}
?>
