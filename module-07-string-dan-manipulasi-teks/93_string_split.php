<?php
// explode() memecah string menjadi array berdasarkan karakter pemisah (delimiter).
// str_split() memecah string menjadi array berisi potongan per jumlah karakter tertentu.

$csvHobi = "Membaca,Menulis,Berenang,Koding";

$daftarHobi = explode(",", $csvHobi);

echo "String asal: {$csvHobi}\n";
echo "Hasil explode():\n";
foreach ($daftarHobi as $i => $hobi) {
    echo "  [{$i}] => {$hobi}\n";
}
