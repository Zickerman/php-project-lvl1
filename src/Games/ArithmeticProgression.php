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

    $numbers = generateProgressionNumbers($start, $end);

    // берем рандомный индекс из финального массива
    $missingIndex = array_rand($numbers);

    $result = $numbers[$missingIndex];
    $numbers[$missingIndex] = '..';
    $question = implode(' ', $numbers);

    return [$question, (string) $result];
}

function generateProgressionNumbers(int $start, int $end): array
{
    $randomNumbers = range($start, $end, rand(2, 5));
    return array_slice($randomNumbers, 0, 10);
}
