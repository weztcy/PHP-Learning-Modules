<?php
// Penggabungan beberapa kondisi menggunakan operator logika && (AND) dan || (OR).
// Memungkinkan pengambilan keputusan yang komprehensif.

$ipk = 3.75;
$skorToefl = 520;
$lolosWawancara = true;

// Syarat beasiswa: IPK >= 3.50 DAN TOEFL >= 500 DAN lulus wawancara
if ($ipk >= 3.50 && $skorToefl >= 500 && $lolosWawancara) {
    echo "Keputusan: Selamat, Anda dinyatakan DITERIMA Beasiswa Unggulan!\n";
} else {
    echo "Keputusan: Maaf, salah satu syarat belum terpenuhi.\n";
}
