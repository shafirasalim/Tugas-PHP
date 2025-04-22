<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Kelipatan 3 dan 5</h2>
    <ul>
    <?php
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "<li>$i</li>";
        }
    }
    ?>
</ul>
<h2>Daftar Nilai Mahasiswa</h2>

<table>
    <tr>
        <th>NO</th>
        <th>NPM</th>
        <th>NAMA MAHASISWA</th>
        <th>NILAI</th>
        <th>KETERANGAN</th>
    </tr>

    <?php
    $mahasiswa = [
        ['npm' => '001', 'nama' => 'Chayra', 'nilai' => 80],
        ['npm' => '002', 'nama' => 'Archelia', 'nilai' => 75],
        ['npm' => '003', 'nama' => 'Lalan', 'nilai' => 50],
        ['npm' => '004', 'nama' => 'Fuji', 'nilai' => 90]
    ];

    $no = 1;
    foreach ($mahasiswa as $mhs) {
        echo "<tr>";
        echo "<td>" . $no++ . "</td>";
        echo "<td>" . $mhs['npm'] . "</td>";
        echo "<td>" . $mhs['nama'] . "</td>";
        echo "<td>" . $mhs['nilai'] . "</td>";
        echo "<td>" . ($mhs['nilai'] >= 60 ? "Lulus" : "Tidak Lulus") . "</td>";
        echo "</tr>";
    }
    ?>

</table>
</body>
</html>