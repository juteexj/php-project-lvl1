<?php

namespace BrainGames\Cli;

use function \cli\line;
use function \cli\prompt;

function run()
{
    line('Welcome to the Brain Game!');
    line("Answer \"yes\" if number even otherwise answer \"no\".\n
    Any other answer will be considered an error.\n");
    $name = \cli\prompt('May I have your name?');
    line("Hello, %s!", $name);
}


/*line("Question: {$exampleNum}");
$answer = \cli\prompt("Your answer \n");
if ($answer == $exampleNum) {
    line("Correct!");
} elseif ($answer != $exampleNum) {
    line("{$answer} is wrong answer ;( Correct answer was {$exampleNum}. Let's try again, {$name}!");
    break;
}
