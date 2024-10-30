<?php

$warna_balonnya = [" Hijau ", " Kuling ", " Kelabu ", " Merah Muda "];
$p = "Biru";

echo "Balonku ada lima <br>";
echo "Rupa-rupa warnanya <br>";


$hasilnya = array_push($warna_balonnya, "dan", $p);
echo "<br>";

$hijau = array_shift($warna_balonnya);
echo "Meletus balon $hijau DORR!! <br>";

echo "Hatiku sangat kacau,,,,,,";
?>