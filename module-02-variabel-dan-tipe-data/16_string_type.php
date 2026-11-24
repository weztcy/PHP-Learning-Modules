<?php
// Tipe data string dapat diapit dengan tanda petik tunggal ('') atau ganda ("").
// Petik ganda menginterpolasi variabel dan escape characters (\n, \t).
// Petik tunggal mencetak string secara literal.

$bahasa = "PHP";

// Petik tunggal: variabel tidak dievaluasi
$teksTunggal = 'Belajar $bahasa sangat menyenangkan.\n';

// Petik ganda: variabel diinterpolasi
$teksGanda = "Belajar {$bahasa} sangat menyenangkan.\n";

echo "Petik tunggal: " . $teksTunggal . "\n";
echo "Petik ganda  : " . $teksGanda;
