<?php
// Null coalescing operator (??) memeriksa apakah variabel ada dan tidak bernilai NULL.
// Jika bernilai null atau belum diset, maka nilai fallback sebelah kanan digunakan.

// Contoh data konfigurasi yang sebagian opsinya belum diatur
$pengaturan = [
    "tema" => "dark"
    // "bahasa" sengaja tidak didefinisikan
];

// Menggunakan ?? untuk memberikan nilai default yang aman tanpa memicu E_WARNING
$temaAktif = $pengaturan["tema"] ?? "light";
$bahasaAktif = $pengaturan["bahasa"] ?? "id_ID";

echo "Tema yang digunakan  : {$temaAktif}\n";
echo "Bahasa yang digunakan: {$bahasaAktif}\n";
