<?php

define('BASE_PATH', __DIR__);

require_once 'vendor/autoload.php';

use App\Service\QuoteService;
use function PHPico\app;

app()->container()->set('quote', function() {
    return new QuoteService();
});

app()->run();