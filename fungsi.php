
<?php

// =====================================
// DRILL 1: Fungsi formatRupiah()
// =====================================

function formatRupiah($angka) {
    return "Rp " . number_format($angka, 0, ',', '.');
}

echo "<h3>Drill 1 - Format Rupiah</h3>";
echo formatRupiah(12500);


// =====================================
// DRILL 2: Fungsi hitungDiskon()
// =====================================

function hitungDiskon($harga, $persen = 10) {
    return $harga * $persen / 100;
}

echo "<h3>Drill 2 - Hitung Diskon</h3>";

echo "Diskon 20%: " . formatRupiah(hitungDiskon(100000, 20));
echo "<br>";

echo "Diskon default 10%: " . formatRupiah(hitungDiskon(100000));


// =====================================
// DRILL 3: Fungsi predikat()
// =====================================

function predikat($nilai) {
    if ($nilai >= 85) {
        return "A";
    } elseif ($nilai >= 75) {
        return "B";
    } elseif ($nilai >= 65) {
        return "C";
    } elseif ($nilai >= 50) {
        return "D";
    } else {
        return "E";
    }
}

echo "<h3>Drill 3 - Predikat Nilai</h3>";
echo "Nilai 90 mendapatkan predikat: " . predikat(90);


// =====================================
// DRILL 3: Pengujian Variable Scope
// =====================================

function hitung() {
    $total = 100000;
}

hitung();

echo "<h3>Pengujian Variable Scope</h3>";
echo "Nilai total: " . ($total ?? "Undefined variable");

// Menggunakan return agar nilai bisa diakses
function hitungTotal() {
    $total = 100000;
    return $total;
}

$total = hitungTotal();

echo "<br>Total setelah menggunakan return: ";
echo formatRupiah($total);

?>
