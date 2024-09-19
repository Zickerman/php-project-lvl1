<?php

namespace Php\Project\Lvl1;

use function cli\line;
use function cli\prompt;

const GAMING_PARTIES = 3;

function playGame(string $description, callable $getGameData)
{
    line('Welcome to the Brain Games!');

    $userName = prompt('May I have your name?');
    line("Hello, %s!", $userName);

    line($description);

    $counter = 0;

    while ($counter < GAMING_PARTIES) {
        [$question, $correctAnswer] = $getGameData();

        line('Question: %s', $question);
        $userAnswer = prompt('Your answer');

        if ($userAnswer === $correctAnswer) {
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
