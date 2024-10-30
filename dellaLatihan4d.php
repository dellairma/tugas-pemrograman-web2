<?php
// Array multidimensi yang menyimpan negara, ibukota, kode telepon, makanan khas, dan harga
$dataNegara = [
    [
        "negara" => "Indonesia",
        "ibukota" => "D.K.I. Jakarta",
        "kode_telepon" => "+62",
        
    ],
    [
        "negara" => "Singapura",
        "ibukota" => "Singapura",
        "kode_telepon" => "+65",
        
    ],
    [
        "negara" => "Malaysia",
        "ibukota" => "Kuala Lumpur",
        "kode_telepon" => "+60",
        
    ],
    [
        "negara" => "Brunei",
        "ibukota" => "Bandar Seri Begawan",
        "kode_telepon" => "+673",
        
    ],
    [
        "negara" => "Thailand",
        "ibukota" => "Bangkok",
        "kode_telepon" => "+66",
       
    ],
    [
        "negara" => "Laos",
        "ibukota" => "Vientiane",
        "kode_telepon" => "+856",
       
    ],
    [
        "negara" => "Filipina",
        "ibukota" => "Manila",
        "kode_telepon" => "+63",
       
    ],
    [
        "negara" => "Myanmar",
        "ibukota" => "Naypyidaw",
        "kode_telepon" => "+95",
       
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Negara ASEAN</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Tabel Negara ASEAN</h2>

<table>
    <tr>
        <th>Negara</th>
        <th>Ibukota</th>
        <th>Kode Telepon</th>
       
    </tr>

    <?php foreach ($dataNegara as $negara) : ?>
    <tr>
        <td><?php echo $negara["negara"]; ?></td>
        <td><?php echo $negara["ibukota"]; ?></td>
        <td><?php echo $negara["kode_telepon"]; ?></td>
       
    </tr>
    <?php endforeach; ?>

</table>

</body>
</html>
