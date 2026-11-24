<?php
// PHP menyediakan sintaks alternatif untuk struktur kontrol yang sangat berguna dalam template HTML.
// Mengganti kurung kurawal '{' dengan titik dua ':', dan '}' dengan 'endfor;', 'endforeach;', dll.

$menu = ["Beranda", "Tentang Kami", "Layanan", "Kontak"];

echo "=== Sintaks Alternatif Kontrol Alur ===\n";

// Menggunakan sintaks alternatif for
for ($i = 1; $i <= 3; $i++):
    echo "Baris ke-{$i} dengan endfor\n";
endfor;

// Menggunakan sintaks alternatif foreach
echo "\nMenu Navigasi:\n";
foreach ($menu as $item):
    echo "- Menu: {$item}\n";
endforeach;
