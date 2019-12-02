<?php
const MYEL = "<div>";
for ($i = 1; $i < 101; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "<div>FizzBuzz</div>";
    } else if ($i % 3 == 0) {
        echo "<div>Fizz</div>";
    } else if ($i % 5 == 0) {
        echo "<div>Buzz</div>";
    } else {
        echo "<div>$i</div>";
    }
}
