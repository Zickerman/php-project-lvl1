<?php

namespace Php\Project\Lvl1\Games;

use function Php\Project\Lvl1\greet;
use function Php\Project\Lvl1\getPlayerName;
use function Php\Project\Lvl1\playGame;

function startArithmeticProgressionGame(): void
{
    greet();

    $description = 'What number is missing in the progression?';

    playGame($description, fn() => arithmeticProgressionGame(), getPlayerName());
}

function arithmeticProgressionGame(): array
{
    $start = rand(0, 20);
    $end = $start + 50;

    $numbers = generateProgressionNumbers($start, $end);

    // берем рандомный индекс из финального массива
    $missingIndex = array_rand($numbers);

    $result = $numbers[$missingIndex];
    $numbers[$missingIndex] = '..';
    $question = implode(' ', $numbers);

    return [$question, (string) $result];
}

function generateProgressionNumbers($start, $end): array
{
    $randomNumbers = range($start, $end, rand(2, 5));
    return array_slice($randomNumbers, 0, 10);
}
