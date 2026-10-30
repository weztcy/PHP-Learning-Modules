<?php
// Service Layer merangkum logika bisnis (business logic) terpisah dari Controller dan Data Access.

class OrderService {
    public function checkout(string $item, int $jumlah, float $hargaSatuan): array {
        $subtotal = $jumlah * $hargaSatuan;
        $diskon = ($subtotal > 200000) ? $subtotal * 0.1 : 0;
        $totalBayar = $subtotal - $diskon;

        return [
            "item" => $item,
            "subtotal" => $subtotal,
            "diskon" => $diskon,
            "total" => $totalBayar
        ];
    }
}

$service = new OrderService();
$rincian = $service->checkout("Keyboard Mekanikal", 2, 150000.0);

echo "=== Service Layer: Rincian Transaksi ===\n";
echo "Item    : {$rincian['item']}\n";
echo "Subtotal: Rp " . number_format($rincian['subtotal'], 0, ',', '.') . "\n";
echo "Diskon  : Rp " . number_format($rincian['diskon'], 0, ',', '.') . "\n";
echo "Total   : Rp " . number_format($rincian['total'], 0, ',', '.') . "\n";
