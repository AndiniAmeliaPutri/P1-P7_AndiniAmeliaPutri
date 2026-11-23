
<?php

// =====================================
// LANGKAH 1: Membuat Array Multidimensi
// =====================================

$buku = [
    ["judul" => "Laskar Pelangi", "pengarang" => "Andrea Hirata", "tahun" => 2005],
    ["judul" => "Bumi Manusia", "pengarang" => "Pramoedya A. Toer", "tahun" => 1980],
    ["judul" => "Ronggeng Dukuh Paruk", "pengarang" => "Ahmad Tohari", "tahun" => 1982],
];

echo "<h2>Daftar Buku</h2>";
echo "<p>Jumlah buku: " . count($buku) . "</p>";


// =====================================
// LANGKAH 2: Menampilkan Array Mentah
// =====================================

echo "<h3>Isi Array Mentah</h3>";
echo "<pre>";
print_r($buku);
echo "</pre>";


// =====================================
// LANGKAH 5: Menambahkan Buku Baru
// =====================================

$buku[] = [
    "judul" => "Negeri 5 Menara",
    "pengarang" => "Ahmad Fuadi",
    "tahun" => 2009
];

echo "<p>Jumlah buku setelah ditambahkan: " . count($buku) . "</p>";


// =====================================
// LANGKAH 4: Mengurutkan Berdasarkan Tahun
// =====================================

usort($buku, fn($a, $b) => $a['tahun'] <=> $b['tahun']);


// =====================================
// LANGKAH 3: Menampilkan Tabel HTML
// =====================================

echo "<h3>Tabel Daftar Buku (Urut Tahun)</h3>";

echo "<table border='1' cellpadding='6' cellspacing='0'>";

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

?>
