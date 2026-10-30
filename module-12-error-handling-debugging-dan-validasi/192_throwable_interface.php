<?php
// Interface Throwable adalah akar dari seluruh Exception dan Error di PHP.
// Menangkap Throwable memastikan TypeError atau Error internal fatal lainnya dapat ditangani dengan aman.

try {
    // Memanggil fungsi matematika yang tidak valid untuk memicu Error
    $hasil = 10 / 0;
} catch (DivisionByZeroError $err) {
    echo "Tertangkap DivisionByZeroError (anak dari Throwable): " . $err->getMessage() . "\n";
} catch (Throwable $t) {
    echo "Tertangkap Throwable umum: " . $t->getMessage() . "\n";
}
