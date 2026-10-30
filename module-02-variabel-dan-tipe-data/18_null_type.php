<?php
// Tipe data null merepresentasikan variabel yang tidak memiliki nilai sama sekali.
// Variabel bernilai null jika diisi NULL, belum diinisialisasi, atau telah dihapus dengan unset().

$alamat = null;

echo "Nilai variabel alamat adalah: " . var_export($alamat, true) . "\n";
echo "Memeriksa dengan is_null(): " . (is_null($alamat) ? "Ya, bernilai NULL" : "Tidak") . "\n";

$saldo = 50000;
unset($saldo); // Menghapus variabel saldo sehingga nilainya menjadi tidak terdefinisi/null

echo "Setelah unset(), variabel saldo bernilai null: " . (isset($saldo) ? "Ada" : "Tidak Ada") . "\n";
