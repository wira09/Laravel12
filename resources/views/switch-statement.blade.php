<?php
    $nilaiUjian = 90;
    $nilaiTugas = 80;

    if ($nilaiUjian >= 85 && $nilaiTugas >= 75)
    echo "Nilai Anda: A<br>";
    elseif ($nilaiUjian >= 75 && $nilaiTugas >= 65)
{
    echo "Nilai Anda: B<br>";
}
elseif ($nilaiUjian >= 65 && $nilaiTugas >= 55)
{
    echo "Nilai Anda: C<br>";

}
elseif ($nilaiUjian >= 45 && $nilaiTugas >= 35)
{
    echo "Nilai Anda: D<br>";

}
else
{
    echo "Nilai Anda: E<br>";
}
?>
