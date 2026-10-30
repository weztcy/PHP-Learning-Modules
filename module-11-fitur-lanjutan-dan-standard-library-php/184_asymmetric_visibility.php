<?php
// Asymmetric Property Visibility (PHP 8.4+) memungkinkan properti dapat dibaca secara publik (public)
// tetapi hanya dapat diubah secara privat (private(set)).

class SensorSuhu {
    // Pada PHP 8.4+: public private(set) float $suhu;
    // Pada PHP 8.3: diimplementasikan melalui getter publik dan modifikasi internal privat
    private float $suhu = 24.5;

    public function getSuhu(): float {
        return $this->suhu;
    }

    public function perbaruiSensor(float $suhuBaru): void {
        $this->suhu = $suhuBaru;
        echo "Sensor membaca nilai baru: {$this->suhu}°C\n";
    }
}

$sensor = new SensorSuhu();
echo "Pembacaan publik: " . $sensor->getSuhu() . "°C\n";
$sensor->perbaruiSensor(27.8);
echo "Asymmetric visibility memastikan data hanya dapat dimodifikasi oleh class pemiliknya.\n";
