<?php
// Simulasi mekanisme validasi request bergaya Validator Laravel.

class Validator {
    public static function make(array $data, array $rules): array {
        $errors = [];
        foreach ($rules as $field => $ruleList) {
            $ruleArray = explode('|', $ruleList);
            foreach ($ruleArray as $rule) {
                if ($rule === 'required' && empty($data[$field])) {
                    $errors[$field][] = "Kolom {$field} wajib diisi.";
                }
            }
        }
        return $errors;
    }
}

$dataInput = ["email" => "", "password" => "123456"];
$aturan = ["email" => "required", "password" => "required"];

$hasil = Validator::make($dataInput, $aturan);
echo "=== Hasil Validasi Validator::make ===\n";
echo json_encode($hasil, JSON_PRETTY_PRINT) . "\n";
