<?php
$x = 1;
$y = 2;

if ($x == 1) {
    echo "Baris program ini akan dijalankan.<br>";
}

if ($y == 2) {
    echo "Baris program ini akan dijalankan.<br>"; // Perbaikan teks
}

if ($y == 1) {
    echo "Baris program ini tidak akan dijalankan.<br>";
    echo "Karena kondisi tidak terpenuhi.<br>";
}

if ($x == 1) {
    echo "Baris program ini akan dijalankan.<br>";
    echo "Karena kondisi terpenuhi.<br>";
}
?>

