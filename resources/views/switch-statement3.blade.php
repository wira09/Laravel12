<?php
$username = "Wira";
$password = "12345";

if ($username != "Wira" || $password != "12345") {
    echo 'Maaf, username atau password Anda salah.<br>';
    echo 'Silakan menghubungi bagian tata usaha.<br>';
} else {
    $pembayaran = true;
    $registrasi = true;

    if ($pembayaran && $registrasi) {
        $uts = 60;
        $uas = 75;
        $nilaiakhir = ($uts + $uas) / 2;

        if ($nilaiakhir >= 80) {
            $indeks = 'A';
        } elseif ($nilaiakhir >= 70) {
            $indeks = 'B';
        } elseif ($nilaiakhir >= 60) {
            $indeks = 'C';
        } elseif ($nilaiakhir >= 50) {
            $indeks = 'D';
        } else {
            $indeks = 'E';
        }

        switch ($indeks) {
            case 'A':
            case 'B':
            case 'C':
                echo 'Anda lulus.<br>';
                break;
            case 'D':
                echo 'Sebaiknya Anda mengulang.<br>';
                break;
            case 'E':
                echo 'Anda Tidak Lulus.<br>';
                break;
        }
    } elseif ($pembayaran) {
        echo 'Untuk mengikuti ujian, Anda harus melakukan registrasi terlebih dahulu.<br>';
    } else {
        echo 'Maaf, Anda harus menyelesaikan administrasi terlebih dahulu.<br>';
    }
}
?>
