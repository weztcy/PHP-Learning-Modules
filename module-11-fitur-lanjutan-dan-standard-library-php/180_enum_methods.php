<?php
// Enumeration di PHP dapat memiliki method, static method, dan mengimplementasikan interface.

enum TingkatAkses: string {
    case Admin = "admin";
    case Pengawas = "supervisor";
    case Staf = "staff";

    public function labelBahasaIndonesia(): string {
        return match ($this) {
            self::Admin => "Administrator Sistem",
            self::Pengawas => "Pengawas Operasional",
            self::Staf => "Staf Lapangan"
        };
    }
}

$tingkat = TingkatAkses::Admin;
echo "Tingkat: {$tingkat->value} -> Label: " . $tingkat->labelBahasaIndonesia() . "\n";
