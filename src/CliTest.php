<?php

namespace Project\Game;

use function \cli\line;
use function \cli\prompt;

function calc()
{
    line("Welcome to the Brain Game!\n");
    line("What is the result of the expression?\n");
    $name = \cli\prompt("May I have your name?\n");
    line("Hello, %s! \n", $name);

    $operator = array("+", "-", "*");
    $randOperator = $operator[rand(0, 2)];
    $numbers = range(1, 100);


}
