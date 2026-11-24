<?php
// Parameter dengan nilai default bersifat opsional saat fungsi dipanggil.

function buatSambutan(string $nama, string $peran = "Tamu"): string {
    return "Halo {$nama}, Anda masuk sebagai [{$peran}].";
}

// Memanggil tanpa parameter kedua (menggunakan default)
echo buatSambutan("Fani") . "\n";

// Memanggil dengan memberikan nilai parameter kedua
echo buatSambutan("Ridwan", "Administrator") . "\n";
