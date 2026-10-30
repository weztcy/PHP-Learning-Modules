<?php
// Array di PHP adalah peta terurut yang menghubungkan nilai dengan kunci (key-value map).
// Dapat berupa Indexed Array (indeks numerik) atau Associative Array (indeks string).

// 1. Indexed Array
$buah = ["Apel", "Mangga", "Jeruk"];
echo "Buah pertama: " . $buah[0] . "\n";

// 2. Associative Array
$mahasiswa = [
    "nim" => "123456",
    "nama" => "Dewi Sartika",
    "jurusan" => "Teknik Informatika"
];

echo "NIM    : " . $mahasiswa["nim"] . "\n";
echo "Nama   : " . $mahasiswa["nama"] . "\n";
echo "Jurusan: " . $mahasiswa["jurusan"] . "\n";
