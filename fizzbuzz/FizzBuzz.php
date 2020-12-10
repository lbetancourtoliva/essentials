<?php

class FizzBuzz
{
    public function fizzbuzz()
    {
        $result = "";
        foreach (range(1, 100) as $numero) {
            $line = "";
            if ($numero % 3 == 0) {
                $line = $line . "Fizz";
            }
            if ($numero % 5 == 0) {
                $line = $line . "Buzz";
            }
            if (!empty($line)) {
                $result = $result . $line;
            } else {
                $result = $result . $numero;
            }
        }
        return $result;
    }

}

$fbobj = new FizzBuzz();
echo "Output: ";
echo "<br>";
echo $fbobj->fizzbuzz();