<?php

namespace App\Controllers;

use PHPico\Form\Core\Validator;
use Psr\Http\Message\ResponseInterface;
use function PHPico\app;
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
        $request = app()->request();

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