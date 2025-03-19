<?php

$x = 6;
$y = 3;

echo var_dump($x && $y) . "<br>"; // menghasilkan nilai true
echo var_dump($x || $y) . "<br>"; // menghasilkan nilai true
echo var_dump($x xor $y) . "<br>"; // menghasilkan nilai false
echo var_dump(!$x) . "<br>"; // menghasilkan nilai false

?>
