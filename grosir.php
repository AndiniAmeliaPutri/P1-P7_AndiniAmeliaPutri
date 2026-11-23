<?php
echo "<table border='1' cellpadding='8'>";
echo "<tr><th>Pcs</th><th>Total</th></tr>";

for ($i = 1; $i <= 10; $i++) {
    $total = $i * 3000;

    echo "<tr>";
    echo "<td>$i</td>";
    echo "<td>Rp " . number_format($total, 0, ',', '.') . "</td>";
    echo "</tr>";
}

echo "</table>";
?>

<?php
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
?>

<?php
for ($i = 5; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
?>

<?php
for ($i = 1; $i <= 10; $i++) {

    // Lewati pcs ganjil
    if ($i % 2 != 0) {
        continue;
    }

    $total = $i * 3000;

    // Berhenti jika total melebihi Rp20.000
    if ($total > 20000) {
        break;
    }

    echo "Pcs: $i - Total: Rp " .
         number_format($total, 0, ',', '.') . "<br>";
}
?>