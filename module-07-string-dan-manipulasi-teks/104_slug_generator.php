<?php
// Program praktis: Mengubah judul artikel menjadi slug URL yang ramah SEO.

function buatSlug(string $judul): string {
    // 1. Ubah ke huruf kecil
    $slug = strtolower($judul);
    
    // 2. Ganti karakter non-alfanumerik dengan strip (-)
    $slug = preg_replace("/[^a-z0-9]+/", "-", $slug);
    
    // 3. Bersihkan strip di awal dan akhir string
    return trim($slug, "-");
}

$judulArtikel = "Belajar PHP 8 & MySQL untuk Pemula Tahun 2026!";
$slugUrl = buatSlug($judulArtikel);

echo "Judul Artikel : {$judulArtikel}\n";
echo "URL Slug Resmi: https://situs.test/artikel/{$slugUrl}\n";
