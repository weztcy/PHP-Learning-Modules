<?php
// Blok finally selalu dieksekusi, baik exception terjadi maupun tidak (berguna untuk pembersihan resource).

function prosesFileSimulasi(bool $berhasil): void {
    echo "1. Membuka sumber daya file...\n";
    try {
        if (!$berhasil) {
            throw new RuntimeException("Gagal membaca berkas!");
        }
        echo "2. Operasi membaca berkas berhasil.\n";
    } catch (RuntimeException $e) {
        echo "2. Terjadi kesalahan: " . $e->getMessage() . "\n";
    } finally {
        // Blok ini dijamin selalu berjalan
        echo "3. [Finally]: Menutup sumber daya file dan membersihkan memori.\n";
    }
}

echo "=== Skenario 1 (Sukses) ===\n";
prosesFileSimulasi(true);

echo "\n=== Skenario 2 (Gagal) ===\n";
prosesFileSimulasi(false);
