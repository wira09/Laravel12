<?php
$data = array(3, 6, 8, 34, 54, 67, 35, 56, 40, 8, 9, 25, 28);
$ketemu = false;
$i = 0;
$x = count($data); // Menghitung jumlah elemen array

do {
    echo 'Data ke-'. ($i+1) . ' : ' . $data[$i] . '<br>';
    if ($data[$i] === 11) {
        $ketemu = true;
    } else {
        $i++;
    }
} while (!$ketemu && $i < $x);

if ($ketemu) {
    echo 'Data 11 ditemukan pada data ke-'.($i+1);
} else {
    echo 'Data tidak ditemukan';
}
?>
