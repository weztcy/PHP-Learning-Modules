<?php
// Parameter $_POST menerima data formulir yang dikirim melalui metode HTTP POST.

// Simulasi data POST jika dijalankan via CLI
if (empty($_POST)) {
    $_POST = ["email" => "pelanggan@test.com", "pesan" => "Mohon info ketersediaan stok."];
}

$email = $_POST['email'] ?? '';
$pesan = $_POST['pesan'] ?? '';

echo "=== Membaca Data \$_POST ===\n";
echo "Email Pengirim: {$email}\n";
echo "Pesan Dikirim : {$pesan}\n";
