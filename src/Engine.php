<?php

namespace Php\Project\Lvl1;

use function cli\line;
use function cli\prompt;

function greet(): string
{
    line('Welcome to the Brain Games!');

    $userName = prompt('May I have your name?');
    line("Hello, %s!", $userName);

    return $userName;
}

function playGame(string $description, callable $getGameData, string $userName)
{
    line($description);

    $counter = 0;

    while ($counter < 3) {
        [$question, $correctAnswer] = $getGameData();

        line('Question: %s', $question);
        $userAnswer = prompt('Your answer');

        if ($userAnswer === (string)$correctAnswer) {
            line('Correct!');
            $counter += 1;
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $userAnswer, $correctAnswer);
            line("Let's try again, %s!", $userName);
            return;
        }
    }

    line("Congratulations, %s!", $userName);
}
