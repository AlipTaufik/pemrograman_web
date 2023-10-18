<?php

echo "<h4>Aplikasi Hitung luas permukaan dan volume Balok</h4>";
echo "<hr>";

$panjang = 4;
$lebar = 5;
$tinggi = 6;
$luas_permukaan = (2 * $panjang * $lebar ) + (2 * $panjang * $tinggi) + (2 * $lebar * $tinggi);
$volume = $panjang * $lebar * $tinggi;

echo "Panjang = ". $panjang;
echo "<br>";
echo "Lebar = ". $lebar;
echo "<br>";
echo "tinggi = ". $tinggi;
echo "<br>";
echo "luas permukaan = ". $luas_permukaan;
echo "<br>";
echo "volume = ". $volume;