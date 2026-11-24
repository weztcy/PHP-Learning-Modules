<?php
// Simulasi autoloader Composer yang memetakan file kelas secara otomatis ke vendor/autoload.php.

class ComposerAutoloaderMock {
    private static array $classMap = [];

    public static function addClass(string $class, callable $loader): void {
        self::$classMap[$class] = $loader;
    }

    public static function load(string $class): void {
        if (isset(self::$classMap[$class])) {
            self::$classMap[$class]();
        }
    }
}

ComposerAutoloaderMock::addClass("App\Helper\StringHelper", function () {
    echo "Class App\Helper\StringHelper dimuat dari vendor/autoload.php!\n";
});

ComposerAutoloaderMock::load("App\Helper\StringHelper");
echo "Composer autoloading menyederhanakan manajemen dependensi modular.\n";
