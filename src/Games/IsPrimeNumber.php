<?php

namespace Php\Project\Lvl1\Games;

function primeNumberGame(): array
{
    $question = rand(2, 3000);

    $squareRoot = floor(sqrt($question));
    $isPrime = true;

    for ($i = 2; $i <= $squareRoot; $i++) {
        if ($question % $i === 0) {
            $isPrime = false;
            break;
        }
    }
    $result = $isPrime ? 'yes' : 'no';

    return [$question, $result];
}
