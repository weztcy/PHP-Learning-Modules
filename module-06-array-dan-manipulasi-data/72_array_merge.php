<?php
// array_merge() menggabungkan elemen dari satu atau lebih array menjadi satu array baru.

$frontend = ["HTML", "CSS", "JavaScript"];
$backend = ["PHP", "SQL", "Node.js"];

// Menggabungkan kedua array
$fullstack = array_merge($frontend, $backend);

echo "=== Penggabungan Array dengan array_merge() ===\n";
echo "Keahlian Fullstack: " . implode(", ", $fullstack) . "\n";
