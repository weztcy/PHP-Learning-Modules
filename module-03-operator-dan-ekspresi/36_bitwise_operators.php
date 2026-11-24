<?php
// Operator bitwise memanipulasi data biner pada tingkat bit:
// & (AND), | (OR), ^ (XOR), ~ (NOT), << (Shift Left), >> (Shift Right)

$a = 6;  // Biner: 0110
$b = 3;  // Biner: 0011

echo "a = {$a} (0110), b = {$b} (0011)\n";
echo "a & b (AND)        : " . ($a & $b) . " (0010)\n";
echo "a | b (OR)         : " . ($a | $b) . " (0111)\n";
echo "a ^ b (XOR)        : " . ($a ^ $b) . " (0101)\n";
echo "a << 1 (Shift Left): " . ($a << 1) . " (1100 = 12)\n";
echo "a >> 1 (Shift Right: " . ($a >> 1) . " (0011 = 3)\n";
