
<?php

// =====================================
// DRILL 1: Membuat Array 6 Buku
// =====================================

$buku = [
    ["judul" => "Laskar Pelangi", "pengarang" => "Andrea Hirata", "tahun" => 2005],
    ["judul" => "Bumi Manusia", "pengarang" => "Pramoedya A. Toer", "tahun" => 1980],
    ["judul" => "Ronggeng Dukuh Paruk", "pengarang" => "Ahmad Tohari", "tahun" => 1982],
    ["judul" => "Negeri 5 Menara", "pengarang" => "Ahmad Fuadi", "tahun" => 2009],
    ["judul" => "Perahu Kertas", "pengarang" => "Dee Lestari", "tahun" => 2009],
    ["judul" => "Pulang", "pengarang" => "Tere Liye", "tahun" => 2015],
];

echo "<h2>Katalog Buku</h2>";

echo "<p>Daftar seluruh buku:</p>";

echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr>
        <th>No</th>
        <th>Judul</th>
        <th>Pengarang</th>
        <th>Tahun</th>
      </tr>";

foreach ($buku as $i => $b) {
    echo "<tr>
            <td>" . ($i + 1) . "</td>
            <td>{$b['judul']}</td>
            <td>{$b['pengarang']}</td>
            <td>{$b['tahun']}</td>
          </tr>";
}

echo "</table>";


// =====================================
// DRILL 2: Menggunakan array_filter
// Menampilkan buku tahun di atas 1981
// =====================================

$bukuFilter = array_filter($buku, function($b) {
    return $b['tahun'] > 1981;
});

echo "<h2>Buku dengan Tahun di Atas 1981</h2>";

echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr>
        <th>No</th>
        <th>Judul</th>
        <th>Pengarang</th>
        <th>Tahun</th>
      </tr>";

foreach ($bukuFilter as $i => $b) {
    echo "<tr>
            <td>{$i}</td>
            <td>{$b['judul']}</td>
            <td>{$b['pengarang']}</td>
            <td>{$b['tahun']}</td>
          </tr>";
}

echo "</table>";


// =====================================
// DRILL 3: Mengurutkan dengan usort
// =====================================

usort($buku, fn($a, $b) => $a['tahun'] <=> $b['tahun']);

echo "<h2>Katalog Buku (Tahun Terlama - Terbaru)</h2>";

echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr>
        <th>No</th>
        <th>Judul</th>
        <th>Pengarang</th>
        <th>Tahun</th>
      </tr>";

foreach ($buku as $i => $b) {
    echo "<tr>
            <td>" . ($i + 1) . "</td>
            <td>{$b['judul']}</td>
            <td>{$b['pengarang']}</td>
            <td>{$b['tahun']}</td>
          </tr>";
}

echo "</table>";

// Menghitung jumlah buku
echo "<h3>Jumlah seluruh buku: " . count($buku) . "</h3>";

?>
