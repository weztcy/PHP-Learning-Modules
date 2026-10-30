<?php
// Penanganan file upload melalui variabel $_FILES.

$simulasiFile = [
    "name" => "dokumen.pdf",
    "type" => "application/pdf",
    "tmp_name" => "/tmp/php_tmp123",
    "error" => UPLOAD_ERR_OK,
    "size" => 102400
];

echo "=== Informasi Berkas Unggahan (\$_FILES) ===\n";
echo "Nama Berkas : " . $simulasiFile['name'] . "\n";
echo "Tipe MIME   : " . $simulasiFile['type'] . "\n";
echo "Ukuran      : " . ($simulasiFile['size'] / 1024) . " KB\n";
echo "Status Error: " . ($simulasiFile['error'] === UPLOAD_ERR_OK ? "UPLOAD_ERR_OK (Sukses)" : "Error") . "\n";
