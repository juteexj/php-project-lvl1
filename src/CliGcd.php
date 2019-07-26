<?php

namespace Project\Game;

use function \cli\line;
use function \cli\prompt;

function gcd()
{
    line("Welcome to the Brain Game!\n");
    line("Find the greatest common divisor of given numbers.\n");
    $name = \cli\prompt("May I have your name?\n");
    line("Hello, %s! \n", $name);

    
}
