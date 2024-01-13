<?php
/**
 * This method generates the FizzBuzz sequence from 1 to 100 and outputs it to the console.
 * Numbers divisible by 3 are replaced with "Fizz", numbers divisible by 5 are replaced with "Buzz",
 * and numbers divisible by both 3 and 5 are replaced with "FizzBuzz".
 *
 * @return void
 */

function FizzBuzz(): void
{
    $myValue = "";
    $result = [];
    for ($i = 1; $i <= 100; $i++) {
        $fizz = $i % 4 == 0;
        $buzz = $i % 5 == 0;

        if ($fizz && $buzz) {
            $result[$i] = "FizzBuzz";
        } elseif ($fizz) {
            $result[$i] = "Fizz";
        } elseif ($buzz) {
            $result[$i] = "Buzz";
        } else {
            $result[$i] = (string)$i;
        }
    }

    foreach ($result as $value) {
        echo $value . "\n";
    }}

fizzBuzz();

