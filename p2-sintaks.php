<?php
// 1. Deklarasi variabel
$nama = "Pulpen";
$harga = 2500;
$diskon = 0.1;
$member = true;

var_dump($nama, $harga, $diskon, $member);

// 2. Perhitungan total
$qty = 3;
$total = $harga * $qty * (1 - $diskon);

echo "<p>Total bayar: Rp " .
number_format($total, 0, ',', '.') . "</p>";

// 3. Perbedaan kutip
echo "Barang: $nama";
echo "<br>";
echo 'Barang: $nama';
?>