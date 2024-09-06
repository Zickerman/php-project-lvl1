<?php

namespace Php\Project\Lvl1;

use function cli\line;
use function cli\prompt;

function greet(): string
{
    line('Welcome to the Brain Games!');

    $userName = (string) prompt('May I have your name?');
    line("Hello, %s!", $userName);

    return $userName;
}
