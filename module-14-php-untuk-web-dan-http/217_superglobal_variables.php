<?php
// Variabel superglobal selalu dapat diakses di seluruh scope fungsi/skrip tanpa kata kunci global:
// $_GET, $_POST, $_SERVER, $_SESSION, $_COOKIE, $_FILES, $_ENV

echo "=== Superglobals PHP ===\n";
echo "Server Software : " . ($_SERVER['SERVER_SOFTWARE'] ?? 'PHP CLI Mode') . "\n";
echo "PHP Self Script : " . ($_SERVER['PHP_SELF'] ?? 'script.php') . "\n";
echo "Jumlah data _GET: " . count($_GET) . "\n";
echo "Jumlah data _POST: " . count($_POST) . "\n";
echo "Superglobal tersedia otomatis di semua fungsi dan class.\n";
