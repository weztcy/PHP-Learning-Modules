<?php
// Kata kunci yield dapat menghasilkan pasangan kunci dan nilai (key => value).

function bacaKonfigurasi(): Generator {
    yield "app_name" => "Aplikasi Kasir";
    yield "app_version" => "1.0.0";
    yield "debug_mode" => false;
}

foreach (bacaKonfigurasi() as $kunci => $nilai) {
    echo "Config '{$kunci}': " . var_export($nilai, true) . "\n";
}
