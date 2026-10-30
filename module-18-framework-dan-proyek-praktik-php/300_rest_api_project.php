<?php
// Proyek Praktik 6: REST API Lengkap (Routing, Auth Token, SQLite Storage, Respon JSON).

class ProyekRestApiLengkap {
    private PDO $db;

    public function __construct() {
        $this->db = new PDO("sqlite::memory:");
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->db->exec("CREATE TABLE produk (id INTEGER PRIMARY KEY AUTOINCREMENT, nama TEXT, harga REAL)");
        $this->db->exec("INSERT INTO produk (nama, harga) VALUES ('Laptop Pro', 12500000), ('Mouse Pad', 75000)");
    }

    public function jalankanRequest(string $token, string $endpoint): string {
        // 1. Verifikasi Keamanan Token API
        if ($token !== "SECRET_API_TOKEN_2026") {
            return json_encode(["status" => 401, "message" => "Unauthorized - Token Tidak Valid"], JSON_PRETTY_PRINT);
        }

        // 2. Routing Endpoint
        if ($endpoint === "/api/produk") {
            $data = $this->db->query("SELECT * FROM produk")->fetchAll(PDO::FETCH_ASSOC);
            return json_encode([
                "status" => 200,
                "message" => "Success",
                "count" => count($data),
                "data" => $data
            ], JSON_PRETTY_PRINT);
        }

        return json_encode(["status" => 404, "message" => "Endpoint Tidak Ditemukan"], JSON_PRETTY_PRINT);
    }
}

$api = new ProyekRestApiLengkap();
echo "=== Response Endpoint /api/produk (Valid Token) ===\n";
echo $api->jalankanRequest("SECRET_API_TOKEN_2026", "/api/produk") . "\n";
