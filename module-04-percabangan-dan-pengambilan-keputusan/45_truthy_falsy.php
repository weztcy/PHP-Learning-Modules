<?php
// Di PHP, nilai tertentu secara otomatis dianggap falsy saat dievaluasi dalam konteks boolean:
// false, 0, 0.0, "", "0", [], null. Nilai selain itu dianggap truthy.

$daftarUji = [
    "Angka 0" => 0,
    "String kosong" => "",
    "String '0'" => "0",
    "Array kosong" => [],
    "Nilai NULL" => null,
    "String spasi ' '" => " ",
    "Angka 42" => 42
];

echo "=== Evaluasi Truthy dan Falsy ===\n";
foreach ($daftarUji as $label => $nilai) {
    $isTrue = (bool)$nilai;
    echo "{$label} => " . ($isTrue ? "TRUTHY" : "FALSY") . "\n";
}
