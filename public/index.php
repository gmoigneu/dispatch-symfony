<?php

if (php_sapi_name() === 'cli-server' || isset($_SERVER['REQUEST_URI'])) {
    $path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
    if ($path === '/__bg') {
        header('Content-Type: text/html; charset=UTF-8');
        echo '<!DOCTYPE html><html><head><style>body{background-color:#000;}</style></head><body></body></html>';
        exit;
    }
}

use App\Kernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return static function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
