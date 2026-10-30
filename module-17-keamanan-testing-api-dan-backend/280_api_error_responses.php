<?php
// Format standar penanganan respons kesalahan API (RFC 7807 Problem Details).

function apiError(int $status, string $judul, string $detail): string {
    $problem = [
        "type" => "https://api.contoh.com/errors/" . $status,
        "title" => $judul,
        "status" => $status,
        "detail" => $detail
    ];
    return json_encode($problem, JSON_PRETTY_PRINT);
}

echo apiError(404, "Sumber Daya Tidak Ditemukan", "Pengguna dengan ID 99 tidak terdaftar.") . "\n";
