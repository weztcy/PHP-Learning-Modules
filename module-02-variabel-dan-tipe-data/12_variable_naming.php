<?php
// Aturan penamaan variabel di PHP:
// 1. Diawali dengan tanda $ diikuti huruf atau underscore (_)
// 2. Tidak boleh diawali dengan angka ($1nama -> SALAH)
// 3. Hanya boleh memuat huruf, angka, dan underscore
// 4. Case-sensitive ($kota berbeda dengan $Kota)

$_validAwal = "Boleh diawali underscore";
$nama_depan = "Budi";       // Gaya snake_case
$namaBelakang = "Pratama";   // Gaya camelCase
$KOTA = "Jakarta";          // Huruf kapital

echo "Nama Lengkap: {$nama_depan} {$namaBelakang}\n";
echo "Kota Domisili: {$KOTA}\n";
echo "Info variabel: {$_validAwal}\n";
