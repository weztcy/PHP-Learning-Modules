<?php
// Operator logika digunakan untuk mengombinasikan beberapa ekspresi boolean:
// && (AND), || (OR), ! (NOT), and, or, xor

$sudahLulus = true;
$punyaPengalaman = false;

// AND (&&): bernilai true hanya jika kedua kondisi true
$diterimaSenior = $sudahLulus && $punyaPengalaman;
echo "Lulus DAN Punya Pengalaman (&&): " . var_export($diterimaSenior, true) . "\n";

// OR (||): bernilai true jika salah satu kondisi true
$diterimaJunior = $sudahLulus || $punyaPengalaman;
echo "Lulus ATAU Punya Pengalaman (||): " . var_export($diterimaJunior, true) . "\n";

// NOT (!): membalik nilai boolean
echo "Bukan Lulus (!sudahLulus): " . var_export(!$sudahLulus, true) . "\n";

// XOR: bernilai true jika salah satu bernilai true, tetapi tidak keduanya
echo "XOR (true xor false): " . var_export($sudahLulus xor $punyaPengalaman, true) . "\n";
