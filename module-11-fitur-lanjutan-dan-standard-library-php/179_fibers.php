<?php
// Fiber (PHP 8.1+) menyediakan konkurensi kooperatif dengan kemampuan pause (suspend) dan resume eksekusi fungsi.

$fiber = new Fiber(function (): void {
    echo "[Fiber]: Tahap 1 dimulai...\n";
    Fiber::suspend("Pesan dari suspensi Fiber");
    echo "[Fiber]: Tahap 2 dilanjutkan setelah resume.\n";
});

echo "[Utama]: Memulai Fiber...\n";
$nilaiSuspensi = $fiber->start();
echo "[Utama]: Nilai diterima dari suspend: '{$nilaiSuspensi}'\n";

echo "[Utama]: Melanjutkan eksekusi Fiber...\n";
$fiber->resume();
echo "[Utama]: Selesai.\n";
