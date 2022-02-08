<?php

include_once __DIR__ . '/Paths.php';

spl_autoload_register(function ($class) {
    $relative_class = '';
    foreach (Paths::files() as $key => $file) {
        if ($key == $class) {
            $relative_class = $file;
            break;
        }
    }
    if (file_exists($relative_class)) {
        require_once $relative_class;
    }
});
