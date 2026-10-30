<?php
// Simulasi arsitektur Resource Controller pada framework MVC Laravel.

class ResourceController {
    public function index(): string { return "HTTP GET: Menampilkan daftar data"; }
    public function store(array $request): string { return "HTTP POST: Menyimpan data baru"; }
    public function show(int $id): string { return "HTTP GET: Menampilkan detail ID {$id}"; }
}

$controller = new ResourceController();
echo $controller->index() . "\n";
echo $controller->store(["nama" => "Barang Baru"]) . "\n";
echo $controller->show(10) . "\n";
