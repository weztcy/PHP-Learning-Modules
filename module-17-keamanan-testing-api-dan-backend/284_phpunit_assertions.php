<?php
// Memahami berbagai macam assertion pengujian (assertEquals, assertTrue, assertCount).

class MiniAssert {
    public static function assertEquals(mixed $expected, mixed $actual, string $label): void {
        $status = ($expected === $actual) ? "PASS" : "FAIL";
        echo "[{$status}] {$label} (Nilai: " . var_export($actual, true) . ")\n";
    }

    public static function assertTrue(bool $condition, string $label): void {
        self::assertEquals(true, $condition, $label);
    }
}

MiniAssert::assertEquals(15, 10 + 5, "Penjumlahan 10 + 5");
MiniAssert::assertTrue(is_array(["a", "b"]), "Memastikan array");
