<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Negara ASEAN</title>
</head>
<body>
    <?php
    // Array awal negara ASEAN
    $negara_asean = ["Indonesia", "Singapura", "Malaysia", "Brunei", "Thailand"];

    // Menampilkan daftar negara ASEAN awal
    echo "<h2>Daftar Negara ASEAN awal :</h2>";
    echo "<ul>";
    foreach ($negara_asean as $negara) {
        echo "<li>$negara</li>";
    }
    echo "</ul>";

    // Menambahkan 3 elemen baru
    array_push($negara_asean, "Laos", "Filipina", "Myanmar");

    // Menampilkan daftar negara ASEAN baru
    echo "<h2>Daftar Negara ASEAN baru :</h2>";
    echo "<ul>";
    foreach ($negara_asean as $negara) {
        echo "<li>$negara</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>