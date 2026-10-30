<?php
// Simulasi pola Active Record ORM (Eloquent) pada framework Laravel.

class Model {
    protected array $attributes = [];

    public function __construct(array $attrs = []) {
        $this->attributes = $attrs;
    }

    public function __get(string $name) {
        return $this->attributes[$name] ?? null;
    }

    public function save(): string {
        return "Data " . json_encode($this->attributes) . " berhasil disimpan ke basis data.";
    }
}

class User extends Model {}

$user = new User(["name" => "Riko", "email" => "riko@example.test"]);
echo "Nama User : {$user->name}\n";
echo "Aksi ORM  : " . $user->save() . "\n";
