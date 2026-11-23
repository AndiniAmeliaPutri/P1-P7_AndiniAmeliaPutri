<?php
// DRILL 1: Deklarasi variabel
$harga = 2500;
$qty = 4;
$member = true;

$subtotal = $harga * $qty;

echo "<h3>Drill 1 - Subtotal</h3>";
var_dump($harga);
echo "<br>Subtotal: Rp " .
number_format($subtotal, 0, ',', '.');

// DRILL 2: Diskon member
echo "<h3>Drill 2 - Total Bayar</h3>";

$total = $subtotal;

if ($member) {
    $total = $subtotal * (1 - 0.10);
}

echo "Total bayar: Rp " .
number_format($total, 0, ',', '.');

// DRILL 3: Perbedaan tanda kutip
echo "<h3>Drill 3 - Perbedaan Kutip</h3>";

$nama = "Pulpen";

echo "Barang: $nama";
echo "<br>";
echo 'Barang: $nama';
?>