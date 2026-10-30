<?php
// Router web sederhana yang memetakan URL path ke fungsi controller terkait.

$ruteTerdaftar = [
    "/" => fn() => "Halaman Beranda Utama",
    "/tentang" => fn() => "Halaman Tentang Kami",
    "/kontak" => fn() => "Halaman Hubungi Kami"
];

function jalankanRouter(string $path, array $routes): void {
    echo "Memproses request ke URL path: '{$path}'...\n";
    if (isset($routes[$path])) {
        echo "Hasil Controller: " . $routes[$path]() . "\n";
    } else {
        echo "404 Not Found: Rute tidak ditemukan!\n";
    }
}

jalankanRouter("/", $ruteTerdaftar);
jalankanRouter("/tentang", $ruteTerdaftar);
jalankanRouter("/produk", $ruteTerdaftar);
