<?php
// Pengelolaan path file menggunakan pathinfo, dirname, basename, dan realpath.

$pathContoh = "D:/GitHub/PHP Learning Modules/module-13/data.json";

$info = pathinfo($pathContoh);

echo "Dirname  : " . $info['dirname'] . "\n";
echo "Basename : " . $info['basename'] . "\n";
echo "Filename : " . $info['filename'] . "\n";
echo "Extension: " . $info['extension'] . "\n";
