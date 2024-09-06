<?php

namespace Php\Project\Lvl1;

use function cli\line;
use function cli\prompt;

function evenGame(string $userName)
{
    line('Answer "yes" if the number is even, otherwise answer "no".');

    $counter = 0;

    while ($counter < 3) {
        $randomNumber = rand(0, 500);
        $correctAnswer = $randomNumber % 2 === 0 ? 'yes' : 'no';

        line('Question: %s', $randomNumber);
        $userAnswer = (string) prompt('Your answer');

        if ($userAnswer === $correctAnswer) {
            line('Correct!');
            $counter += 1;
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $userAnswer, $correctAnswer);
            line("Let's try again %s!", $userName);
            return;
        }
    }

    line("Congratulations, %s!", $userName);
}
