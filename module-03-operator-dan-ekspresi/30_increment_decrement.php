<?php
// Operator increment (++) dan decrement (--) menambah atau mengurangi nilai integer sebanyak 1.
// Pre-increment (++$x) mengubah nilai sebelum dievaluasi.
// Post-increment ($x++) mengevaluasi nilai lama baru kemudian mengubahnya.

$a = 5;
echo "Nilai awal a = {$a}\n";
echo "Post-increment (a++): " . $a++ . " (saat ini dievaluasi)\n";
echo "Nilai a sekarang    : {$a}\n";

$b = 5;
echo "Pre-increment (++b) : " . ++$b . " (langsung bertambah)\n";
echo "Nilai b sekarang    : {$b}\n";
