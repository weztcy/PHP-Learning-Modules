<?php
// Simulasi arsitektur routing bergaya Laravel (Route::get, Route::post).

class Route {
    private static array $routes = [];

    public static function get(string $uri, string $action): void {
        self::$routes['GET'][$uri] = $action;
    }

    public static function list(): array {
        return self::$routes;
    }
}

Route::get('/', 'HomeController@index');
Route::get('/users', 'UserController@index');

echo "=== Rute Terdaftar (Gaya Laravel) ===\n";
foreach (Route::list()['GET'] as $uri => $action) {
    echo "GET {$uri} -> {$action}\n";
}
