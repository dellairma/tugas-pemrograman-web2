<?php
// Membuat associative array untuk negara-negara ASEAN dan ibukotanya
$aseanCountries = [
    "Indonesia" => "D.K.I. Jakarta",
    "Singapura" => "Singapura",
    "Malaysia" => "Kuala Lumpur",
    "Brunei" => "Bandar Seri Begawan",
    "Thailand" => "Bangkok",
    "Laos" => "Vientiane",
    "Filipina" => "Manila",
    "Myanmar" => "Naypyidaw"
];

// Menampilkan daftar negara ASEAN dan ibukotanya
echo "Daftar Negara ASEAN dan Ibukota:<br>";
foreach ($aseanCountries as $country => $capital) {
    echo "• $country: $capital<br>";
}
?>