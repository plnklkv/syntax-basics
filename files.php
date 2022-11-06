<?php
//1
echo htmlentities(file_get_contents(__FILE__));

//2
$files = scandir(__DIR__ . '/');
foreach ($files as $file) {
    if (is_dir($file)) {
        echo $file . '<br>';
    }
}