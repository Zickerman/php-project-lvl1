<?php

namespace Php\Project\Lvl1\Games;

use function Php\Project\Lvl1\playGame;

function startEvenNumberGame(): void
{
    $description = 'Answer "yes" if the number is even, otherwise answer "no".';

    playGame($description, fn() => evenGame());
}

function evenGame(): array
{
    $randomNumber = rand(0, 500);
    $correctAnswer = $randomNumber % 2 === 0 ? 'yes' : 'no';

    return [$randomNumber, $correctAnswer];
}
