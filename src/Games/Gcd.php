<?php

namespace Php\Project\Lvl1\Games;

function gcdGame(): array
{
    $randomFirstNumber = rand(0, 100);
    $randomSecondNumber = rand(0, 100);
    $question = "{$randomFirstNumber} {$randomSecondNumber}";
    $result = 0;

    $minNumber = $randomFirstNumber < $randomSecondNumber ? $randomFirstNumber : $randomSecondNumber;

    for ($i = $minNumber; $i > 0; $i--) {
        if ($randomFirstNumber % $i == 0 && $randomSecondNumber % $i == 0) {
            $result = $i;
            break;
        }
    }

    return [$question, $result];
}
