<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan PHP Pengulangan dan Warna Perkalian</title>
    <style>

        th, td {
            border: 1px solid black;
            width: 40px;
            height: 40px;
            text-align: center;
        }
        .bilangan {
            background-color: white;
            color: black;
        }
        .header {
            background-color: magenta;
            color: white;
        }
        .kuning {
            background-color: pink;
        }
        .biru {
            background-color: cyan;
        }
    </style>
</head>
<body>

<h2>1. Menampilkan Bilangan Genap 1 sampai 10</h2>
<?php
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo $i . " ";
    }
}
?>

<h2>2. Tabel Perkalian 1 sampai 10</h2>
<table border: 1px solid black>
    <tr>
        <th class="bilangan">Bilangan</th>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<th class='header'>$i</th>";
        }
        ?>
    </tr>
    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo "<tr>";
        echo "<th class='header'>$i</th>"; 

        for ($j = 1; $j <= 10; $j++) {
            $hasil = $i * $j;

            if ($i % 2 == 0) {
                echo "<td class='biru'>$hasil</td>";
            } else {
                if ($j % 2 == 1) {
                    echo "<td class='kuning'>$hasil</td>";
                } else {
                    echo "<td class='biru'>$hasil</td>";
                }
            }
        }

        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
