<?php
// Struktur switch menguji suatu variabel terhadap berbagai kemungkinan nilai (case).
// Pernyataan break wajib disertakan agar eksekusi tidak meluncur ke case berikutnya (fall-through).

$kodeHari = 3;

switch ($kodeHari) {
    case 1:
        $namaHari = "Senin";
        break;
    case 2:
        $namaHari = "Selasa";
        break;
    case 3:
        $namaHari = "Rabu";
        break;
    case 4:
        $namaHari = "Kamis";
        break;
    case 5:
        $namaHari = "Jumat";
        break;
    default:
        $namaHari = "Akhir Pekan (Sabtu/Minggu)";
        break;
}

echo "Kode hari {$kodeHari} adalah hari {$namaHari}.\n";
