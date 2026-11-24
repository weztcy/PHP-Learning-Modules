<?php
// Parameter $_GET membaca query string dari URL (misal: ?kategori=buku&halaman=2).

// Simulasi parameter GET jika dijalankan via CLI
if (empty($_GET)) {
    $_GET = ["kategori" => "teknologi", "halaman" => "1"];
}

$kategori = $_GET['kategori'] ?? 'semua';
$halaman = (int)($_GET['halaman'] ?? 1);

echo "=== Membaca Parameter \$_GET ===\n";
echo "Kategori Produk : {$kategori}\n";
echo "Halaman Aktif   : {$halaman}\n";
