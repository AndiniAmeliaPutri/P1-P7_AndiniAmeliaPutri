<?php
// DRILL 1: Percabangan if/elseif
$nilai = 78;

if ($nilai >= 85) {
    $grade = "A";
} elseif ($nilai >= 70) {
    $grade = "B";
} elseif ($nilai >= 55) {
    $grade = "C";
} elseif ($nilai >= 40) {
    $grade = "D";
} else {
    $grade = "E";
}

echo "<h3>Drill 1 - Penentuan Grade</h3>";
echo "Nilai $nilai → Grade $grade";

// DRILL 2: Switch nama hari
$hari = "Minggu";

echo "<h3>Drill 2 - Nama Hari</h3>";

switch ($hari) {
    case "Sabtu":
    case "Minggu":
        echo "Libur";
        break;

    default:
        echo "Hari kuliah";
        break;
}

// DRILL 3: Perbandingan operator
echo "<h3>Drill 3 - Operator Perbandingan</h3>";

var_dump(0 == '0');
echo "<br>";
var_dump(0 === '0');
?>