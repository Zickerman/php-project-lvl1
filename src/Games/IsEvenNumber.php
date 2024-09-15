<?php

namespace Php\Project\Lvl1\Games;

use function Php\Project\Lvl1\greet;
use function Php\Project\Lvl1\getPlayerName;
use function Php\Project\Lvl1\playGame;

function startEvenNumberGame(): void
{
    greet();

    $description = 'Answer "yes" if the number is even, otherwise answer "no".';

    playGame($description, fn() => evenGame(), getPlayerName());
}

function evenGame(): array
{
    $randomNumber = rand(0, 500);
    $correctAnswer = $randomNumber % 2 === 0 ? 'yes' : 'no';

    return [$randomNumber, $correctAnswer];
}
