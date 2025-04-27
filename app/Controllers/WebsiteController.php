<?php

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface;
use function PHPico\app;
use function PHPico\json;
use function PHPico\redirect;
use function PHPico\refresh;
use function PHPico\render;
use function PHPico\request;

class WebsiteController
{

    public function index(): ResponseInterface
    {
        $quote = app()->container()->get('quote');
        return render('welcome', ['quote' => $quote->getRandomQuote()]);
    }

    public function contact(): ResponseInterface
    {
        if (request()->getMethod() === 'POST') {
            // do something
        }

        return render('contact');
    }

}