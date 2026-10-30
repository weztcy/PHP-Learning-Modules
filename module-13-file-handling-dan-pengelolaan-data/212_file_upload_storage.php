<?php
// Simulasi validasi dan penyimpanan file unggahan (mime type, ekstensi, dan nama unik).

function simulasiUnggahBerkas(string $namaAsli, int $ukuranBita, string $ekstensi): void {
    $ekstensiDiizinkan = ["png", "jpg", "pdf"];
    $maxUkuran = 2 * 1024 * 1024; // 2 MB

    echo "Memproses file: {$namaAsli} ({$ukuranBita} bytes)...\n";

    if (!in_array(strtolower($ekstensi), $ekstensiDiizinkan, true)) {
        echo "Gagal: Ekstensi .{$ekstensi} tidak diizinkan!\n";
        return;
    }

    if ($ukuranBita > $maxUkuran) {
        echo "Gagal: Ukuran file melebihi batas 2MB!\n";
        return;
    }

    $namaTersimpan = uniqid("unggah_", true) . "." . $ekstensi;
    echo "Sukses: Berkas disimpan dengan nama aman: {$namaTersimpan}\n";
}

simulasiUnggahBerkas("foto_profil.jpg", 512000, "jpg");
simulasiUnggahBerkas("skrip_jahat.exe", 2048, "exe");
