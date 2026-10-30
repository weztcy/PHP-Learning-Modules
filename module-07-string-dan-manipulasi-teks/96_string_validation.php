<?php
// Validasi string memastikan format dan jenis konten teks sesuai ketentuan:
// ctype_alpha() (hanya huruf), ctype_digit() (hanya angka), empty(), is_string().

$username = "UserBudi";
$pin = "123456";

echo "Username '{$username}' hanya alfabet? " . (ctype_alpha($username) ? "Ya" : "Tidak") . "\n";
echo "PIN '{$pin}' hanya angka numerik?    " . (ctype_digit($pin) ? "Ya" : "Tidak") . "\n";
