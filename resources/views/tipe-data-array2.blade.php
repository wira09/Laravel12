<?php

$nilai = array(
    1 => 60,
    2 => 70,
    3 => 80,
    4 => 90,
    5 => 100
);
$mahasiswa = [
    "1001" => "Wira",
    "1002" => "Lukman",
    "1003" => "Arif",
    "1004" => "Rezha",
    "1005" => "Sari"
];
$nilaimahasiswa = [
    "Wira" => 60,
    "Lukman" => 70,
    "Arif" => 80,
    "Rezha" => 90,
    "Sari" => 100
];

echo $mahasiswa["1001"] . "<br>";
echo $nilai[1] . "<br>";
echo $nilaimahasiswa["Wira"] . "<br>";
?>
