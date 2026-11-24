<?php
// Pengalihan halaman (redirect) menggunakan header Location dengan status code 302/301.

function lakukanRedirect(string $tujuanUrl): void {
    if (php_sapi_name() !== 'cli') {
        header("Location: {$tujuanUrl}", true, 302);
        exit;
    }
    echo "HTTP Redirect 302 -> Menuju: {$tujuanUrl}\n";
}

lakukanRedirect("/dashboard.php");
