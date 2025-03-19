<?php
$nilaiUjian = 90;
$nilaiTugas = 80;

if ($nilaiUjian >= 85 && $nilaiTugas >= 75)
   echo "Nilai Anda: A<br>";
else if ($nilaiUjian >= 75 && $nilaiTugas >= 65)
{
    echo "Nilai Anda: B<br>";
} else if ($nilaiUjian >= 65 && $nilaiTugas >= 55)
{
    echo "Nilai Anda: C<br>";
} else if ($nilaiUjian >= 55 && $nilaiTugas >= 45)
{
    echo "Nilai Anda: D<br>";
} else
{
    echo "Nilai Anda: E<br>";
}
?>
