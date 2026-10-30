<?php
// error_log() mencatat pesan kesalahan ke file log atau log sistem operasi.

$pesanPeringatan = "[" . date("Y-m-d H:i:s") . "] WARNING: Percobaan login gagal untuk user 'hacker'\n";
$fileLog = __DIR__ . "/output/app_error.log";

// Menulis log ke file tujuan (mode 3 = append ke berkas)
error_log($pesanPeringatan, 3, $fileLog);

echo "Pesan log berhasil dicatat ke {$fileLog}\n";
if (file_exists($fileLog)) {
    echo "Isi file log:\n" . file_get_contents($fileLog);
}
