<?php
// include 'core/App.php';
// include 'core/Controller.php';

spl_autoload_register(function ($class) {
    include __DIR__ . '/core/' . $class . '.php';
});

include 'config/config.php';
