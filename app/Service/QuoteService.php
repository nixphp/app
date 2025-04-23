<?php

namespace App\Service;

class QuoteService
{

    protected array $quotes = [
        ['Will Rogers', 'Don’t let yesterday take up too much of today.'],
        ['Audrey Hepburn', 'Nothing is impossible. The word itself says "I\'m possible!"'],
        ['Wayne Dyer', 'If you change the way you look at things, the things you look at change.'],
        ['Malala Yousafzai', 'Let us make our future now, and let us make our dreams tomorrow’s reality.'],
        ['Leonard I. Sweet', 'The future is not something we enter. The future is something we create.'],
        ['Nikki Giovanni', 'Mistakes are a fact of life. It is the response to the error that counts.'],
        ['Gloria Steinem', 'Dreaming, after all, is a form of planning.'],
    ];

    public function getRandomQuote(): array
    {
        return $this->quotes[array_rand($this->quotes)];
    }

}