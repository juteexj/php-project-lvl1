<?php

namespace Project\Game;

use function \cli\line;
use function \cli\prompt;
use function \cli\out;

function hello()
{
  line("Welcome to the Brain Game!\n");
  line("Answer \"yes\" if number even otherwise answer \"no\".\n");
  $name = \cli\prompt("May I have your name?\n");
  line("Hello, %s! \n", $name);

  $numbers = [rand(1, 15), rand(1, 15), rand(1, 15)];

  foreach ($numbers as $key => $value) {
    line("Question: {$value}");
    $answer = \cli\prompt("Your answer \n");
    if (($value % 2 === 0) && ($answer == 'yes')) {
      line("Correct! \n");
    } elseif ($value % 2 === 0 && $answer == 'no') {
      line("'no' is wrong answer ;( Correct answer was 'yes'. Let's try again, {$name}!");
      break;
    } elseif ($value % 2 === 1 && $answer == 'no') {
      line('Correct!');
      line("\n");
    } elseif ($value % 2 === 1 && $answer == 'yes') {
      line("'yes' is wrong answer ;( Correct answer was 'no'. Let's try again, {$name}!");
      break;
    }
  }
}
