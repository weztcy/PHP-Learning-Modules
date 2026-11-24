<?php
// Menginspeksi metadata request melalui superglobal $_SERVER.

echo "=== Variabel Superglobal \$_SERVER ===\n";
echo "SCRIPT_NAME : " . ($_SERVER['SCRIPT_NAME'] ?? 'cli_script.php') . "\n";
echo "REQUEST_URI : " . ($_SERVER['REQUEST_URI'] ?? '/modul/233') . "\n";
echo "PHP_SELF    : " . ($_SERVER['PHP_SELF'] ?? '233_server_variables.php') . "\n";
echo "SERVER_NAME : " . ($_SERVER['SERVER_NAME'] ?? 'localhost') . "\n";
