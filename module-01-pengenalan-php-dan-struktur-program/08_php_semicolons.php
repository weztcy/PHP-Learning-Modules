<?php
// Di PHP, titik koma (semicolon) berfungsi sebagai penanda akhir dari sebuah instruksi/statement.
// Ketiadaan titik koma akan menyebabkan Parse Error.

$a = 10;
$b = 20;

// Setiap pernyataan dipisahkan dengan tanda titik koma
$c = $a + $b;
echo "Hasil penjumlahan a + b = {$c}\n";

// Catatan: Baris terakhir sebelum tag penutup PHP boleh tanpa titik koma,
// namun demi konsistensi sangat dianjurkan untuk selalu menyertakannya.
echo "Pernyataan selalu diakhiri dengan titik koma.\n";
