<?php
// Menghasilkan bilangan acak umum menggunakan rand() dan mt_rand() (Mersenne Twister).

$dadu = rand(1, 6);
$nomorUndian = mt_rand(1000, 9999);

echo "Lemparan Dadu (1-6)    : {$dadu}\n";
echo "Nomor Undian (mt_rand) : {$nomorUndian}\n";
