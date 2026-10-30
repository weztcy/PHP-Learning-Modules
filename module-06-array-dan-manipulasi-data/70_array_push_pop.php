<?php
// array_push() menambahkan satu atau lebih elemen ke akhir array.
// array_pop() menghapus dan mengembalikan elemen terakhir dari array (struktur stack LIFO).

$tumpukan = ["Buku 1", "Buku 2"];

// Menambahkan elemen ke tumpukan
array_push($tumpukan, "Buku 3", "Buku 4");
echo "Setelah array_push: " . implode(", ", $tumpukan) . "\n";

// Mengambil elemen teratas (terakhir)
$elemenDiambil = array_pop($tumpukan);
echo "Elemen yang di-pop : {$elemenDiambil}\n";
echo "Sisa tumpukan      : " . implode(", ", $tumpukan) . "\n";
