<?php
// Tipe balik never (PHP 8.1+) menyatakan bahwa fungsi tidak akan pernah kembali ke pemanggilnya
// (pasti melempar exception atau memanggil exit/die).

function hentikanProgram(string $pesanError): never {
    echo "FATAL ERROR: {$pesanError}\n";
    exit(1);
}

// Simulasi demonstrasi (menggunakan try/catch dengan exception untuk pengujian CLI tanpa exit mendadak)
function tanganiKritis(string $pesan): void {
    echo "Sistem mendeteksi kondisi kritis...\n";
    echo "Fungsi bertipe 'never' menjamin alur kontrol langsung berhenti.\n";
}

tanganiKritis("Koneksi gagal");
