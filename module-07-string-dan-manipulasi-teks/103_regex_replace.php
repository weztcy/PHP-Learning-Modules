<?php
// preg_replace() mengganti teks berdasarkan pencocokan pola regular expression.

$teksSensor = "Silakan hubungi nomor rahasia ini: 081299887766 untuk informasi.";

// Menyensor digit nomor telepon dengan tanda bintang
$hasilSensor = preg_replace("/(\d{4})\d{4}(\d{4})/", "$1****$2", $teksSensor);

echo "Teks Asli  : {$teksSensor}\n";
echo "Teks Sensor: {$hasilSensor}\n";
