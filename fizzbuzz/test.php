<?php

function fizzbuzz($start = 1, $end = 100) {
    foreach (range($start, $end) as $numero) {
        $line = "";
        if ($numero % 3 == 0) {
            $line = $line . "Fizz";
        }
        if ($numero % 5 == 0) {
            $line = $line . "Buzz";
        }
        if (!empty($line)) {
            echo $line;
        } else {
            echo $numero;
        }
    }
}

echo fizzbuzz();