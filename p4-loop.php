<?php

// DRILL 1: FOR angka 1-10
echo "<h3>Drill 1 - Angka 1 sampai 10</h3>";

for ($i = 1; $i <= 10; $i++) {
    echo $i . " ";
}


// DRILL 2: WHILE hitung mundur
echo "<h3>Drill 2 - Hitung Mundur</h3>";

$n = 5;

while ($n > 0) {
    echo "$n <br>";
    $n--;
}


// DRILL 3: Tabel perkalian 5x5
echo "<h3>Drill 3 - Tabel Perkalian 5x5</h3>";

echo "<table border='1' cellpadding='6'>";

for ($r = 1; $r <= 5; $r++) {
    echo "<tr>";

    for ($c = 1; $c <= 5; $c++) {
        echo "<td>" . ($r * $c) . "</td>";
    }

    echo "</tr>";
}

echo "</table>";


// DRILL 4: Tabel perkalian 9x9
echo "<h3>Drill 4 - Tabel Perkalian 9x9</h3>";

$ukuran = 9;

echo "<table border='1' cellpadding='6'>";

for ($r = 1; $r <= $ukuran; $r++) {
    echo "<tr>";

    for ($c = 1; $c <= $ukuran; $c++) {
        echo "<td>" . ($r * $c) . "</td>";
    }

    echo "</tr>";
}

echo "</table>";


// DRILL 5: FOREACH daftar hari
echo "<h3>Drill 5 - Daftar Hari</h3>";

$hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jumat"];

echo "<ul>";

foreach ($hari as $h) {
    echo "<li>$h</li>";
}

echo "</ul>";

?>