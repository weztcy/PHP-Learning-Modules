<?php
// Role-Based Access Control (RBAC) membatasi akses fitur berdasarkan peran (role) pengguna.

$hakAksesPeran = [
    "admin" => ["buat_artikel", "edit_artikel", "hapus_artikel", "kelola_user"],
    "penulis" => ["buat_artikel", "edit_artikel"],
    "pembaca" => ["baca_artikel"]
];

function bolehAkses(string $peran, string $izin, array $tabelIzin): bool {
    return in_array($izin, $tabelIzin[$peran] ?? [], true);
}

echo "Admin boleh hapus_artikel?   : " . (bolehAkses("admin", "hapus_artikel", $hakAksesPeran) ? "Ya" : "Tidak") . "\n";
echo "Penulis boleh hapus_artikel? : " . (bolehAkses("penulis", "hapus_artikel", $hakAksesPeran) ? "Ya" : "Tidak") . "\n";
