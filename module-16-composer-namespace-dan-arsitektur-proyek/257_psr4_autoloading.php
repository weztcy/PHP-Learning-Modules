<?php
// Standar PSR-4 memetakan namespace prefix ke basis direktori fisik.
// Contoh: App\Models\User -> src/Models/User.php

function psr4Map(string $prefix, string $baseDir, string $fullClass): string {
    if (str_starts_with($fullClass, $prefix)) {
        $relativeClass = substr($fullClass, strlen($prefix));
        return $baseDir . str_replace('\\', '/', $relativeClass) . '.php';
    }
    return "";
}

$path = psr4Map("App\\", "src/", "App\\Controllers\\HomeController");
echo "Namespace : App\Controllers\HomeController\n";
echo "Jalur File: {$path}\n";
