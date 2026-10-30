<?php
// Type casting adalah konversi eksplisit dari satu tipe data ke tipe data lain.
// Sintaks: (int), (float), (string), (bool), (array), (object).

$nilaiString = "125.75 meter";

// Konversi ke integer (membuang desimal dan karakter non-numerik setelah angka)
$keInt = (int)$nilaiString;

// Konversi ke float
$keFloat = (float)$nilaiString;

// Konversi angka ke boolean (0 = false, selain 0 = true)
$keBool = (bool)0;

echo "String asal : '{$nilaiString}'\n";
echo "Cast to int : {$keInt} (" . gettype($keInt) . ")\n";
echo "Cast to float: {$keFloat} (" . gettype($keFloat) . ")\n";
echo "Cast to bool : " . var_export($keBool, true) . " (" . gettype($keBool) . ")\n";
