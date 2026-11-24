<?php
// Mengelola dependensi paket Composer: require (produksi) dan require-dev (pengembangan).
// Simbol versi: ^8.2 (kompatibel semver), ~8.2.0 (hanya patch).

$dependensi = [
    "require" => [
        "vlucas/phpdotenv" => "^5.5",
        "guzzlehttp/guzzle" => "^7.8"
    ],
    "require-dev" => [
        "phpunit/phpunit" => "^10.0"
    ]
];

echo "=== Manajemen Dependensi Composer ===\n";
foreach ($dependensi as $kategori => $paket) {
    echo "Kategori [{$kategori}]:\n";
    foreach ($paket as $nama => $versi) {
        echo "  - {$nama}: {$versi}\n";
    }
}
