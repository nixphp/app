<?php

namespace App\Controllers;

use NixPHP\Form\Core\Validator;
use Psr\Http\Message\ResponseInterface;
use function NixPHP\app;
use function NixPHP\View\render;
use function NixPHP\request;

class WebsiteController
{

    public function index(): ResponseInterface
    {
        $quote = app()->container()->get('quote');
        return render('welcome', ['quote' => $quote->getRandomQuote()]);
    }

    public function contact(): ResponseInterface
    {
        $request = app()->container()->get('request');

        if (request()->getMethod() === 'POST') {

            $validator = new Validator($request->getParsedBody(), [
                'email' => 'required|email',
                'password' => 'required|min:8',
            ]);

            if ($validator->fails()) {
                return render('contact', ['validator' => $validator]);
            }

        }

        return render('contact');
    }

}