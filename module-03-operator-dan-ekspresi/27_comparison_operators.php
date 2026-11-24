<?php
// Operator perbandingan membandingkan dua nilai dan mengembalikan nilai boolean:
// ==, !=, <>, <, >, <=, >=, <=> (spaceship operator)

$x = 10;
$y = 20;

echo "x = {$x}, y = {$y}\n";
echo "x == y : " . var_export($x == $y, true) . "\n";
echo "x != y : " . var_export($x != $y, true) . "\n";
echo "x < y  : " . var_export($x < $y, true) . "\n";
echo "x > y  : " . var_export($x > $y, true) . "\n";

// Spaceship operator (<=>) mengembalikan -1 jika kiri < kanan, 0 jika sama, 1 jika kiri > kanan
echo "x <=> y (10 <=> 20) : " . ($x <=> $y) . "\n";
echo "y <=> x (20 <=> 10) : " . ($y <=> $x) . "\n";
echo "x <=> x (10 <=> 10) : " . ($x <=> $x) . "\n";
