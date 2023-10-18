<?php

echo "<center>
<h3>Aplikasi Hitung luas permukaan dan volume Limas Segitiga</h3>
</center>";
echo "<hr>";

// input
$luas_sisi1 = 4;
$luas_sisi2 = 6;
$luas_sisi3 = 7;
$luas_sisi4 = 8;
$luas_sisi5 = 10;
$luas_alas = 15;
$tinggi = 7;
$luas_permukaan = $luas_sisi1 + $luas_sisi2 + $luas_sisi3 + $luas_sisi4 + $luas_sisi5;
$volume = 1/3 * $luas_alas * $tinggi;

// output
echo "luas_sisi1 = ". $luas_sisi1;
echo "<br>";
echo "luas_sisi2 = ". $luas_sisi2;
echo "<br>";
echo "luas_sisi3 = ". $luas_sisi3;
echo "<br>";
echo "luas_sisi4 = ". $luas_sisi4;
echo "<br>";
echo "luas_sisi5 = ". $luas_sisi5;
echo "<br>";
echo "luas_alas = ". $luas_alas;
echo "<br>";
echo "tinggi = ". $tinggi;
echo "<br>";
echo "luas permukaan = ". $luas_permukaan;
echo "<br>";
echo "volume = ". $volume;