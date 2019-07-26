<?php

namespace BrainGames\Cli;

use function \cli\line;
use function \cli\prompt;

function run()
{
    line('Welcome to the Brain Game!');
    line("Answer \"yes\" if number even otherwise answer \"no\".
    Any other answer will be considered an error.\n");
    $name = \cli\prompt('May I have your name?');
    line("Hello, %s!", $name);
}
