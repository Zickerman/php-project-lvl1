<?php

namespace Php\Project\Lvl1\Games;

function calculatorGame(): array
{
    $randomFirstNumber = rand(0, 100);
    $randomSecondNumber = rand(0, 100);

    $operators = ['+', '-', '*'];
    // выбираем верхнюю границу рандомных чисел в зависимости от размерности массива с операторами
    $operator = $operators[rand(0, count($operators) - 1)];

    $question = "{$randomFirstNumber} {$operator} {$randomSecondNumber}";
    $result = 0;

    switch ($operator) {
        case '+':
            $result = $randomFirstNumber + $randomSecondNumber;
            break;
        case '-':
            $result = $randomFirstNumber - $randomSecondNumber;
            break;
        case '*':
            $result = $randomFirstNumber * $randomSecondNumber;
            break;
    }

    return [$question, $result];
}
