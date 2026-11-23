<?php
// DRILL 1: Menghitung ongkos kirim
$berat = 7.2;

if ($berat <= 5) {
    $ongkir = 10000;
} else {
    $ongkir = 10000 + ceil($berat - 5) * 4000;
}

echo "<h3>Drill 1 - Ongkos Kirim</h3>";
echo "Ongkir: Rp " .
number_format($ongkir, 0, ',', '.');


// DRILL 2: Memilih kurir
$kurir = "jne";

echo "<h3>Drill 2 - Tarif Kurir</h3>";

switch ($kurir) {
    case "jne":
        $tarif = 1.0;
        break;

    case "jnt":
        $tarif = 0.9;
        break;

    case "pos":
        $tarif = 1.2;
        break;

    default:
        $tarif = null;
        echo "Kurir tidak dikenal";
        break;
}

if ($tarif !== null) {
    echo "Tarif kurir $kurir: " .
    number_format($tarif, 1);
}


// DRILL 3: Memperbaiki grade
$nilai = 90;

echo "<h3>Drill 3 - Penentuan Grade</h3>";

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

echo "Nilai $nilai → Grade $grade";
?>