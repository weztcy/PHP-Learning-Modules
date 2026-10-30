<?php
// Validasi request body JSON pada API sebelum diteruskan ke model.

function validasiRequestProduk(array $body): array {
    $errors = [];
    if (empty($body['nama'])) $errors[] = "Field 'nama' wajib diisi.";
    if (!isset($body['harga']) || !is_numeric($body['harga']) || $body['harga'] <= 0) {
        $errors[] = "Field 'harga' harus angka positif.";
    }
    return $errors;
}

$requestSalah = ["nama" => "", "harga" => -5000];
$kesalahan = validasiRequestProduk($requestSalah);

echo "Hasil Validasi Request API:\n";
echo json_encode(["errors" => $kesalahan], JSON_PRETTY_PRINT) . "\n";
