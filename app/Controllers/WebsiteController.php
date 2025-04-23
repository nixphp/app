<?php

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface;
use function PHPico\app;
use function PHPico\render;

class WebsiteController
{

    public function index(): ResponseInterface
    {
        $quote = app()->container()->get('quote');
        return render('welcome', ['quote' => $quote->getRandomQuote()]);
    }

}