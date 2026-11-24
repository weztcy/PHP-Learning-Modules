<?php
// Named arguments (PHP 8.0+) memungkinkan pengiriman argumen berdasarkan nama parameter,
// bukan semata-mata berdasarkan urutan posisinya.

function formatDataPengguna(string $nama, int $umur, string $kota = "Jakarta", bool $aktif = true): void {
    $status = $aktif ? "Aktif" : "Non-Aktif";
    echo "User: {$nama} | Umur: {$umur} th | Kota: {$kota} | Status: {$status}\n";
}

// Memanggil menggunakan named arguments dengan urutan acak
formatDataPengguna(
    umur: 27,
    nama: "Hendra",
    aktif: false,
    kota: "Surabaya"
);
