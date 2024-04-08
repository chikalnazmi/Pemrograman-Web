<?php
// // soal no 4
// function perkenalan(){
//     echo "Assalamualaikum, ";
//     echo "Perkenalkan, nama saya Chikal<br/>";
//     echo "Senang berkenalan dengan Anda<br/>";
// }

// perkenalan();

// soal no 5
// function perkenalan($nama, $salam){
//     echo $salam.", ";
//     echo "Perkenalkan, nama saya ".$nama."<br/>";
//     echo "Senang berkenalan dengan Anda<br/>";
// }

// perkenalan("Hamdana","Hallo");

// echo "<hr>";

// $saya = "Chikal";
// $ucapanSalam = "Selamat pagi";

// perkenalan($saya,$ucapanSalam);


// soal no 6
// function perkenalan($nama, $salam="Assalamualaikum"){
//     echo $salam.", ";
//     echo "Perkenalkan, nama saya ".$nama."<br/>";
//     echo "Senang berkenalan dengan Anda<br/>";
// }

// perkenalan("Hamdana","Hallo");

// echo "<hr>";

// $saya = "Elok";
// $ucapanSalam = "Selamat pagi";

// perkenalan($saya);


// soal no 7
// function hitungUmur($thn_lahir, $thn_sekarang){
    //     $umur = $thn_sekarang - $thn_lahir;
    //     return $umur;
    // }
    
    // echo "Umur saya adalah ". hitungUmur(2003, 2023). " tahun";
    
// soal no 8
    function hitungUmur($thn_lahir, $thn_sekarang){
        $umur = $thn_sekarang - $thn_lahir;
        return $umur;
    }
    function perkenalan($nama, $salam="Assalamualaikum"){
        echo $salam.", ";
        echo "Perkenalkan, nama saya ".$nama."<br/>";

        echo "Saya berusia " . hitungUmur(2003, 2023) . " tahun<br/>";
        echo "Senang berkenalan dengan Anda<br/>";
    }

    perkenalan("Chikal");
?>