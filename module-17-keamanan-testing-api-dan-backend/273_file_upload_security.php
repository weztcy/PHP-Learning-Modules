<?php
// Memeriksa keamanan berkas unggahan: validasi ekstensi ganda, MIME type sesungguhnya, dan batas ukuran.

function verifikasiBerkasAman(string $namaFile, string $mimeType, int $size): bool {
    $ekstensiDilarang = ["php", "phtml", "exe", "sh", "bat"];
    $ekstensi = strtolower(pathinfo($namaFile, PATHINFO_EXTENSION));

    if (in_array($ekstensi, $ekstensiDilarang, true)) {
        echo "Ditolak: Ekstensi .{$ekstensi} terlarang!\n";
        return false;
    }

    if ($mimeType !== "image/png" && $mimeType !== "image/jpeg") {
        echo "Ditolak: MIME Type '{$mimeType}' tidak valid!\n";
        return false;
    }

    echo "Diterima: File {$namaFile} aman untuk disimpan.\n";
    return true;
}

verifikasiBerkasAman("avatar.png", "image/png", 50000);
verifikasiBerkasAman("shell.php.png", "application/x-php", 1000);
