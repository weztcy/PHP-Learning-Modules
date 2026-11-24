<?php
// PHP Streams menyediakan abstraksi seragam untuk file, protokol jaringan, dan stream memori (php://memory).

$stream = fopen("php://memory", "r+");
fwrite($stream, "Data stream di dalam RAM tanpa menyentuh disk fisik.");

rewind($stream); // Kembali ke awal stream
$bacaStream = stream_get_contents($stream);
fclose($stream);

echo "Isi php://memory stream: '{$bacaStream}'\n";
