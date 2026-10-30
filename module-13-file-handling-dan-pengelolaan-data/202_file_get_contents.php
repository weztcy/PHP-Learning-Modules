<?php
// file_get_contents() membaca seluruh isi file sekaligus ke dalam string.

$lokasi = __DIR__ . "/data_ringkas.txt";
file_put_contents($lokasi, "Teks satu baris dengan file_get_contents.");

$isi = file_get_contents($lokasi);
echo "Isi file terbaca: '{$isi}'\n";
