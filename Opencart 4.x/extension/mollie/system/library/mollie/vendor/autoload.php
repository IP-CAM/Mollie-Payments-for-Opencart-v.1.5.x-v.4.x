<?php

// scoper-composer-autoload.php @generated by PhpScoper

$loader = require_once __DIR__.'/composer-autoload.php';

// Aliases for the whitelisted classes. For more information see:
// https://github.com/humbug/php-scoper/blob/master/README.md#class-whitelisting
if (!class_exists('ComposerAutoloaderInitd483f2f6604c341a377ca0a2e9857922', false) && !interface_exists('ComposerAutoloaderInitd483f2f6604c341a377ca0a2e9857922', false) && !trait_exists('ComposerAutoloaderInitd483f2f6604c341a377ca0a2e9857922', false)) {
    spl_autoload_call('_PhpScoperbbe44365fb20\ComposerAutoloaderInitd483f2f6604c341a377ca0a2e9857922');
}

// Functions whitelisting. For more information see:
// https://github.com/humbug/php-scoper/blob/master/README.md#functions-whitelisting
if (!function_exists('database_write')) {
    function database_write() {
        return \_PhpScoperbbe44365fb20\database_write(...func_get_args());
    }
}
if (!function_exists('database_read')) {
    function database_read() {
        return \_PhpScoperbbe44365fb20\database_read(...func_get_args());
    }
}
if (!function_exists('printOrders')) {
    function printOrders() {
        return \_PhpScoperbbe44365fb20\printOrders(...func_get_args());
    }
}
if (!function_exists('printSessions')) {
    function printSessions() {
        return \_PhpScoperbbe44365fb20\printSessions(...func_get_args());
    }
}

return $loader;
