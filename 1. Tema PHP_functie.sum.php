<?php

// Standard solution

$group = array(-20, 10, 5, 4, 3, -3, 2);

function sumOfNum($group) {
    $sum = 0;
    foreach ($group as $val) {
        if (is_int($val)) {
            $sum+=$val;
        } else {
            echo 'Not-a-number';
        }
    }
    echo $sum;
}

sumOfNum($group); // 1

echo "<br> \n";


// An array with different number formats
// More descriptive results :)

$numbers = array("two", 7, '"43"', 30, 100, 'five', 0b01010011, 29, 0x687, false, null, -13);

function sumOfNumbers($numbers) {
    $sum = 0;
    foreach ($numbers as $value) {
        if (is_int($value)) {
            $sum+=$value;
        } else {
            $type = gettype($value);
            $key = array_search($value,$numbers);
            echo "Not a number (key $key = $type): $value    <br> \n";
        }
    }
    echo $sum;
}

sumOfNumbers($numbers);
 
 
// Not a number (key 0 = string): two
// Not a number (key 2 = string): "43"
// Not a number (key 5 = string): five
// Not a number (key 9 = boolean):
// Not a number (key 9 = NULL):
// 1907


// I know, if an array have custom keys or null etc., 
// then we must use other ways to handle with that


