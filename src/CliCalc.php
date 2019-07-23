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
    $rand1 = $numbers[rand(0, 99)];
    $rand2 = $numbers[rand(0, 10)];
    $rand3 = $numbers[rand(0, 99)];
    $rand4 = $numbers[rand(0, 10)];
    $rand5 = $numbers[rand(0, 99)];
    $rand6 = $numbers[rand(0, 3)];
    $rand7 = $numbers[rand(0, 99)];
    $array = [$rand1, $rand2, $rand3, $rand4, $rand5, $rand6, $rand7];

    foreach ($operator as $key => $value) {
        if ($value == "+") {
            $result = ("$rand1 + $rand2");
            $res = $rand1 + $rand2;
        } elseif ($value == "-") {
            $result = ("$rand3 - $rand4");
            $res = $rand3 - $rand4;
        } elseif ($value == "*") {
            $result = ("$rand5 * $rand6");
            $res = $rand5 * $rand6;
        }
        line("Question: {$result}");
        $answer = \cli\prompt("Your answer \n");
        if ($answer == $res) {
            line("Correct! \n");
        } elseif ($answer != $res) {
            line("{$answer} is wrong answer ;( Correct answer was {$res}. Let's try again, {$name}!");
            break;
        }
    }
}
