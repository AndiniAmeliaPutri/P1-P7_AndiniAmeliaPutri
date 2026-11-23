<?php

require_once __DIR__ . '/functions.php';

// Langkah 2: Memanggil fungsi
echo rupiah(hitung_total(25000, 3, 0.1));

// Langkah 3: Menggunakan diskon default
echo "<br>";
echo rupiah(hitung_total(25000, 3));

// Langkah 4: Menguji variable scope
$x = 10;

function tes_scope() {
    echo $x;
}

echo "<br>";
tes_scope();
