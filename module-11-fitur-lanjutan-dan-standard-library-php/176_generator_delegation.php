<?php
// Delegasi generator menggunakan kata kunci yield from untuk menggabungkan sub-generator.

function deretGanjil(): Generator {
    yield 1;
    yield 3;
}

function deretGenap(): Generator {
    yield 2;
    yield 4;
}

function gabungDeret(): Generator {
    // Delegasi ke sub-generator ganjil
    yield from deretGanjil();
    // Delegasi ke sub-generator genap
    yield from deretGenap();
}

echo "=== Hasil Delegasi Generator (yield from) ===\n";
foreach (gabungDeret() as $bilangan) {
    echo "Bilangan: {$bilangan}\n";
}
