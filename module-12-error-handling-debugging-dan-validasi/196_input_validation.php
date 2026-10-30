<?php
// Validasi data input manual sebelum diproses oleh sistem bisnis.

function validasiFormPendaftaran(array $input): array {
    $errors = [];

    if (empty(trim($input['nama'] ?? ''))) {
        $errors[] = "Nama wajib diisi.";
    }

    if (!isset($input['usia']) || !is_numeric($input['usia']) || $input['usia'] < 17) {
        $errors[] = "Usia harus berupa angka minimal 17 tahun.";
    }

    return $errors;
}

$inputValid = ["nama" => "Cahyo", "usia" => 22];
$inputSalah = ["nama" => "", "usia" => 15];

echo "Hasil Input Valid: " . (empty(validasiFormPendaftaran($inputValid)) ? "Lolos Validasi" : "Gagal") . "\n";
echo "Hasil Input Salah: " . implode(", ", validasiFormPendaftaran($inputSalah)) . "\n";
