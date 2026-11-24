<?php
// Simulasi definisi Schema & Blueprint migrasi tabel pada framework Laravel.

class Blueprint {
    private array $columns = [];

    public function id(): void { $this->columns[] = "id INTEGER PRIMARY KEY"; }
    public function string(string $name): void { $this->columns[] = "{$name} TEXT"; }
    public function timestamps(): void { $this->columns[] = "created_at DATETIME, updated_at DATETIME"; }

    public function getSql(string $table): string {
        return "CREATE TABLE {$table} (" . implode(", ", $this->columns) . ");";
    }
}

$table = new Blueprint();
$table->id();
$table->string("nama_produk");
$table->timestamps();

echo "SQL Schema Dihasilkan (Gaya Laravel Migration):\n";
echo $table->getSql("produk") . "\n";
