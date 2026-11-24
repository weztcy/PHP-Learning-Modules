<?php
// Backed Enums mengaitkan setiap case enum dengan nilai skalar (string atau int).

enum RolePengguna: string {
    case Admin = "ADMINISTRATOR";
    case Editor = "EDITOR";
    case User = "REGULAR_USER";
}

$peran = RolePengguna::Admin;

echo "Nama Enum: {$peran->name}\n";
echo "Nilai Backed: {$peran->value}\n";

// Mengambil enum dari nilai string mentah
$dariString = RolePengguna::from("EDITOR");
echo "Ditemukan enum dari nilai: {$dariString->name}\n";
