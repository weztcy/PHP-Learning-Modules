<?php
// spl_autoload_register mendaftarkan fungsi callback yang otomatis memuat berkas class saat class tersebut dipanggil.

spl_autoload_register(function (string $className): void {
    echo "[Autoloader]: Mencoba memuat class: '{$className}'\n";
    // Pada aplikasi nyata: require_once __DIR__ . '/' . str_replace('\\', '/', $className) . '.php';
});

class ProdukDemo {}

$p = new ProdukDemo();
echo "Class ProdukDemo berhasil diakses.\n";
