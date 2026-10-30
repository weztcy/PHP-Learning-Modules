<?php
// assert() memverifikasi asumsi logika selama pengujian program.

ini_set('zend.assertions', '1');
assert_options(ASSERT_ACTIVE, 1);

$umurPengguna = 25;

// Verifikasi kondisi dengan assert
assert($umurPengguna > 0, "Umur pengguna harus lebih besar dari 0");

echo "Assertion berhasil dilewati: Umur {$umurPengguna} valid.\n";
