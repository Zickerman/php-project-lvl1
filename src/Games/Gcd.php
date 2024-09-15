<?php

namespace Php\Project\Lvl1\Games;

use function Php\Project\Lvl1\greet;
use function Php\Project\Lvl1\getPlayerName;
use function Php\Project\Lvl1\playGame;

function startGcdGame(): void
{
    greet();

    $description = 'Find the greatest common divisor of given numbers.';

    playGame($description, fn() => gcdGame(), getPlayerName());
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
    $minNumber = min($a, $b);

    for ($i = $minNumber; $i > 0; $i--) {
        if ($a % $i === 0 && $b % $i === 0) {
            return $i;
        }
    }

    return 1;
}
