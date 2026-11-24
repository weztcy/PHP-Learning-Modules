<?php
// Router REST API memetakan kombinasi HTTP Method dan Endpoint ke handler fungsi.

class ApiRouter {
    private array $rute = [];

    public function tambah(string $method, string $path, callable $handler): void {
        $this->rute[strtoupper($method) . " " . $path] = $handler;
    }

    public function kirim(string $method, string $path): void {
        $kunci = strtoupper($method) . " " . $path;
        if (isset($this->rute[$kunci])) {
            echo call_user_func($this->rute[$kunci]) . "\n";
        } else {
            echo json_encode(["error" => "Endpoint tidak ditemukan"], JSON_PRETTY_PRINT) . "\n";
        }
    }
}

$router = new ApiRouter();
$router->tambah("GET", "/api/v1/produk", fn() => json_encode(["status" => "Daftar produk"]));
$router->tambah("POST", "/api/v1/produk", fn() => json_encode(["status" => "Produk dibuat"]));

$router->kirim("GET", "/api/v1/produk");
$router->kirim("POST", "/api/v1/produk");
