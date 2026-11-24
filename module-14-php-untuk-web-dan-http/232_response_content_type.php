<?php
// Menentukan format respons dokumen (MIME Type) menggunakan header Content-Type.

$dataRespon = ["status" => "ok", "waktu" => time(), "pesan" => "Respons API"];

if (php_sapi_name() !== 'cli') {
    header("Content-Type: application/json; charset=UTF-8");
}

echo "Header: Content-Type: application/json; charset=UTF-8\n";
echo json_encode($dataRespon, JSON_PRETTY_PRINT) . "\n";
