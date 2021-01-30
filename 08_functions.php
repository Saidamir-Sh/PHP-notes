<?php

// Function which prints "Hello I am Zura"
function hello () {
    echo 'Hello PHP'.'<br>';
}
hello().'<br>';

// Function with argument
function name ($name) {
    return "I am $name".'<br>';
}
echo name("Mark").'<br>';

// Create sum of two functions


// Create function to sum all numbers using ...$nums
function sum (...$nums) {
    $sum = 0;
    foreach ($nums as $n) {
        $sum += $n;
    }
    return $sum;
}
echo sum(1, 2, 3, 5, 60);

// Arrow functions
// $fn1 = fn($x) => $x + $y;
// // equivalent to using $y by value:
// $fn2 = function ($x) use ($y) {
//     return $x + $y;
// };
function addNumbers(float $a, float $b) : float {
    return $a + $b;//To declare a type for the function return, add a colon ( : ) and the type right before the opening curly ( { )bracket when declaring the function
  }
  echo addNumbers(1.2, 5.2); 
