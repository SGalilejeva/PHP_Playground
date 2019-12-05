<?php

require_once 'util.php';

const MYEL = "<div>";
for ($i = 1; $i < 10; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        printFizzBuzz("FizzBuzz");
    } else if ($i % 3 == 0) {
        printFizzBuzz("Fizz");
    } else if ($i % 5 == 0) {
        printFizzBuzz("Buzz");
    } else {
        printFizzBuzz("$i");
    }
}
