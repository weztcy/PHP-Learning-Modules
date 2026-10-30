<?php
// Mengirimkan HTTP Header khusus menggunakan fungsi header().

if (php_sapi_name() !== 'cli') {
    header("X-Application-Name: ModulPHP");
    header("Cache-Control: no-cache, must-revalidate");
}

echo "=== Pengaturan HTTP Headers ===\n";
echo "Header 'X-Application-Name' dan 'Cache-Control' disiapkan.\n";
echo "Header harus dikirim sebelum output teks apa pun dikirim ke browser.\n";
