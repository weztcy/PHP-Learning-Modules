<?php
// Nullable types (menggunakan awalan tanda tanya ?) menandakan nilai boleh berupa tipe tersebut ATAU null.

function cariNamaPenggunaById(?int $id): ?string {
    if ($id === null || $id <= 0) {
        return null;
    }
    return "Pengguna_{$id}";
}

$hasil1 = cariNamaPenggunaById(42);
$hasil2 = cariNamaPenggunaById(null);

echo "Hasil ID 42  : " . ($hasil1 ?? "Tidak ditemukan") . "\n";
echo "Hasil ID null: " . ($hasil2 ?? "Tidak ditemukan") . "\n";
