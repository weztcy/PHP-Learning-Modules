<?php
// Membuat file sementara menggunakan tmpfile() yang otomatis terhapus saat ditutup atau skrip selesai.

$temp = tmpfile();
if ($temp) {
    fwrite($temp, "Data sementara di memori/temp disk.\n");
    fseek($temp, 0); // Kembalikan pointer baca ke awal
    echo "Membaca dari file sementara: " . fgets($temp);
    fclose($temp); // Otomatis terhapus dari sistem operasi
    echo "File sementara ditutup dan dibersihkan dari storage.\n";
}
