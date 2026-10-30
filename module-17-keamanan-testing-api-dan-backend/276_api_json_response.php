<?php
// Format standar respons JSON REST API dengan struktur terstandarisasi.

function responApi(bool $sukses, string $pesan, mixed $data = null, int $kode = 200): string {
    $payload = [
        "success" => $sukses,
        "code" => $kode,
        "message" => $pesan,
        "data" => $data,
        "timestamp" => date("Y-m-d H:i:s")
    ];
    return json_encode($payload, JSON_PRETTY_PRINT);
}

echo responApi(true, "Data profil berhasil diambil", ["id" => 1, "nama" => "Irfan"], 200) . "\n";
