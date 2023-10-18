<?php

echo "<h4>Aplikasi Hitung luas permukaan dan volume Bola</h4>";
echo "<hr>";

$jari_jari = 4;
$luas_permukaan = 4 * pi() * ($jari_jari * $jari_jari);
$volume = 4/3 * pi() * ($jari_jari * $jari_jari * $jari_jari);

echo "Jari-jari = ". $jari_jari;
echo "<br>";
echo "PHI = " . pi();
echo "<br>";
echo "luas permukaan = ". $luas_permukaan;
echo "<br>";
echo "volume = ". $volume;