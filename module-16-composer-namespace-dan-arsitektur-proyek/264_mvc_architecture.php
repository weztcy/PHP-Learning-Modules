<?php
// Arsitektur Model-View-Controller (MVC):
// Model mengelola data, View menampilkan tampilan, Controller menghubungkan keduanya.

class MahasiswaModel {
    public function dapatkanData(): array {
        return ["nim" => "202601", "nama" => "Alifia", "jurusan" => "Teknik Informatika"];
    }
}

class MahasiswaView {
    public function render(array $data): void {
        echo "=== [VIEW] Kartu Mahasiswa ===\n";
        echo "NIM    : {$data['nim']}\n";
        echo "Nama   : {$data['nama']}\n";
        echo "Jurusan: {$data['jurusan']}\n";
    }
}

class MahasiswaController {
    public function tampilkanDetail(): void {
        $model = new MahasiswaModel();
        $data = $model->dapatkanData();
        $view = new MahasiswaView();
        $view->render($data);
    }
}

$controller = new MahasiswaController();
$controller->tampilkanDetail();
