<?php
// array_unique() menghapus nilai-nilai duplikat dari sebuah array.

$daftarHobi = ["Membaca", "Berenang", "Membaca", "Koding", "Berenang", "Musik"];

$hobiUnik = array_unique($daftarHobi);

echo "Daftar hobi asli: " . implode(", ", $daftarHobi) . "\n";
echo "Daftar hobi unik: " . implode(", ", $hobiUnik) . "\n";
