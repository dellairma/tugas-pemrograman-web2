<?php
function hitungluaspersegipanjang($panjang, $lebar) {

    $luas = $panjang * $lebar;
    return $luas;
}


$panjang = 20;
$lebar = 10;
echo "luas persegi panjang; " . hitungluaspersegipanjang($panjang, $lebar);
?>