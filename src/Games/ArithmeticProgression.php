<?php

namespace Php\Project\Lvl1\Games;

use function Php\Project\Lvl1\playGame;

function startArithmeticProgressionGame(): void
{
    $description = 'What number is missing in the progression?';

    playGame($description, fn() => arithmeticProgressionGame());
}

function arithmeticProgressionGame(): array
{
    $start = rand(0, 20);
    $end = $start + 50;
    $step = rand(2, 5);

    $numbers = generateProgressionNumbers($start, $end, $step);

    // берем рандомный индекс из финального массива
    $missingIndex = array_rand($numbers);

    $result = $numbers[$missingIndex];
    $numbers[$missingIndex] = '..';
    $question = implode(' ', $numbers);

    return [$question, (string) $result];
}

function generateProgressionNumbers(int $start, int $end, int $step): array
{
    $randomNumbers = range($start, $end, $step);
    return array_slice($randomNumbers, 0, 10);
}
