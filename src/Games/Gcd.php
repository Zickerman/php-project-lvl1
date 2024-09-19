<?php

namespace Php\Project\Lvl1\Games;

use function Php\Project\Lvl1\playGame;

function startGcdGame(): void
{
    $description = 'Find the greatest common divisor of given numbers.';

    playGame($description, fn() => gcdGame());
}

function gcdGame(): array
{
    $randomFirstNumber = rand(0, 100);
    $randomSecondNumber = rand(0, 100);

    $question = "{$randomFirstNumber} {$randomSecondNumber}";
    $result = calculateGcd($randomFirstNumber, $randomSecondNumber);

    return [$question, (string) $result];
}

function calculateGcd(int $a, int $b): int
{
    if ($a === 0 || $b === 0) {
        return $a === 0 ? $b : $a;
    }

    $minNumber = min($a, $b);

    for ($i = $minNumber; $i > 0; $i--) {
        if ($a % $i === 0 && $b % $i === 0) {
            return $i;
        }
    }

    return 1;
}
