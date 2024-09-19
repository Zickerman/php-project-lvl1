<?php

namespace Php\Project\Lvl1\Games;

use function Php\Project\Lvl1\playGame;

function startPrimeNumberGame(): void
{
    $description = 'Answer "yes" if given number is prime. Otherwise answer "no".';

    playGame($description, fn() => primeNumberGame());
}

function primeNumberGame(): array
{
    $question = rand(2, 3000);
    $isPrime = isPrimeNumber($question);
    $result = $isPrime ? 'yes' : 'no';

    return [$question, $result];
}

function isPrimeNumber(int $number): bool
{
    if ($number < 2) {
        return false;
    }

    $squareRoot = floor(sqrt($number));

    for ($i = 2; $i <= $squareRoot; $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}
