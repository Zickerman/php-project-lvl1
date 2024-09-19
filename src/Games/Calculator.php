<?php

namespace Php\Project\Lvl1\Games;

use function Php\Project\Lvl1\playGame;

function startCalculatorGame(): void
{
    $description = 'What is the result of the expression?';

    playGame($description, fn() => generateCalculationQuestion());
}

function generateCalculationQuestion(): array
{
    $randomFirstNumber = rand(0, 100);
    $randomSecondNumber = rand(0, 100);

    $operator = getRandomOperator();

    $question = "{$randomFirstNumber} {$operator} {$randomSecondNumber}";
    $result = calculateResult($randomFirstNumber, $randomSecondNumber, $operator);

    return [$question, (string) $result];
}

function getRandomOperator(): string
{
    $operators = ['+', '-', '*'];
    return $operators[array_rand($operators)];
}

function calculateResult(int $a, int $b, string $operator): int
{
    switch ($operator) {
        case '+':
            return $a + $b;
        case '-':
            return $a - $b;
        case '*':
            return $a * $b;
        default:
            trigger_error('Invalid operator provided: ' . $operator, E_USER_ERROR);
    }
}
