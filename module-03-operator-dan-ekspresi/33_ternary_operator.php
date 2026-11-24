<?php
// Operator ternary (? :) adalah bentuk ringkas dari struktur if-else:
// $hasil = $kondisi ? $nilai_jika_true : $nilai_jika_false;

$nilaiUjian = 82;
$statusKelulusan = ($nilaiUjian >= 70) ? "LULUS" : "REMIDIAL";

echo "Nilai Ujian : {$nilaiUjian}\n";
echo "Status      : {$statusKelulusan}\n";

// Shorthand ternary (elvis operator ?:): mengambil nilai pertama jika truthy, jika tidak ambil fallback
$usernameInput = "";
$userAktif = $usernameInput ?: "Pengguna Tamu";
echo "Nama User   : {$userAktif}\n";
