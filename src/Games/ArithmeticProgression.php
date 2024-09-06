<?php

namespace Php\Project\Lvl1\Games;

function arithmeticProgressionGame(): array
{
    // задаем диапазон
    $start = rand(0, 20);
    $end = $start + 50;

    // генерируем и записываем в массив 10 чисел из нашего диапазона
    $randomNumbers = range($start, $end, rand(2, 5));
    $numbers = array_slice($randomNumbers, 0, 10);

    // берем рандомный индекс из финального массива
    $missingIndex = array_rand($numbers);

    $result = $numbers[$missingIndex];
    $numbers[$missingIndex] = '...';
    $question = implode(' ', $numbers);

    return [$question, $result];
}
