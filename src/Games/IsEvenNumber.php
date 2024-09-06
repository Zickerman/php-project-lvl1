<?php

namespace Php\Project\Lvl1\Games;

function evenGame(): array
{
    $randomNumber = rand(0, 500);
    $correctAnswer = $randomNumber % 2 === 0 ? 'yes' : 'no';

    return [$randomNumber, $correctAnswer];
}
