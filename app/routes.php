<?php

use function PHPico\response;
use function PHPico\route;

route()->add('GET', '/', [\App\Controllers\WebsiteController::class, 'index']);