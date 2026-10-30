<?php
// trim() membuang spasi dan karakter whitespace di awal dan akhir string.
// ltrim() membuang spasi di sebelah kiri saja, rtrim() di sebelah kanan saja.

$inputForm = "   user_antigravity   ";

$dibersihkan = trim($inputForm);

echo "Sebelum trim: '" . $inputForm . "' (Panjang: " . strlen($inputForm) . ")\n";
echo "Sesudah trim: '" . $dibersihkan . "' (Panjang: " . strlen($dibersihkan) . ")\n";
