<?php
$data = array(3,6,8,34,54,67,35,56,40,8,9,25,28);
$ketemu = false;
$i = 0;
$x = count($data);
while (!$ketemu && $i<=$x)
{
    echo 'data ke '.($i+1). ' : ' . $data[$i] . '<br>';
    if ($data[$i]==35) // lihat pada angka 35
    $ketemu = true;
else
    $i++;
}
if ($i <= $x)
echo 'data 35 ditemukan pada data ke '.($i+1);
else
echo 'data 35 tidak ditemukan';
?>
