<?php
// Validasi formulir memeriksa kelengkapan dan format data sebelum disimpan.

$errors = [];
$formData = ["nama" => "Budi", "umur" => "15"]; // Contoh umur di bawah batas

if (empty(trim($formData['nama']))) {
    $errors[] = "Nama lengkap wajib diisi.";
}

if (!is_numeric($formData['umur']) || (int)$formData['umur'] < 18) {
    $errors[] = "Pendaftar harus berusia minimal 18 tahun.";
}

echo "=== Hasil Validasi Formulir ===\n";
if (!empty($errors)) {
    echo "Formulir memiliki kesalahan:\n";
    foreach ($errors as $err) {
        echo "- {$err}\n";
    }
} else {
    echo "Formulir valid dan siap diproses.\n";
}
