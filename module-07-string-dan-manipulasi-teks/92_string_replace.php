<?php
// str_replace() mengganti kemunculan teks tertentu dengan teks pengganti (case-sensitive).
// str_ireplace() melakukan hal yang sama tanpa membedakan huruf besar/kecil.

$kalimatAsal = "Kucing belang itu sangat lucu. Kucing suka makan ikan.";

// Mengganti kata 'Kucing' menjadi 'Kelinci'
$hasilGanti = str_replace("Kucing", "Kelinci", $kalimatAsal);

echo "Sebelum: {$kalimatAsal}\n";
echo "Sesudah: {$hasilGanti}\n";
