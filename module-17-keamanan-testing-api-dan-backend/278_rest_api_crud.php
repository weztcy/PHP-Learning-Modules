<?php
// Simulasi operasi CRUD (Create, Read, Update, Delete) pada REST API.

class RestCrudSimulasi {
    private array $data = [
        1 => ["id" => 1, "nama" => "Kaos Polos", "stok" => 20]
    ];

    public function get(int $id): array { return $this->data[$id] ?? []; }
    public function post(array $item): array {
        $id = count($this->data) + 1;
        $item['id'] = $id;
        $this->data[$id] = $item;
        return $item;
    }
    public function delete(int $id): bool {
        unset($this->data[$id]);
        return true;
    }
}

$crud = new RestCrudSimulasi();
echo "POST: " . json_encode($crud->post(["nama" => "Jaket Hoodie", "stok" => 10])) . "\n";
echo "GET #1: " . json_encode($crud->get(1)) . "\n";
