<?php

// Declaring numbers
$a = 5;
$b = 4;
$c = 1.2;

// Arithmetic operations
echo ($a + $b) * $c.'<br>'; 

// Assignment with math operators
$a += $b;
echo $a.'<br>';

// Increment operator
echo $a++.'<br>'; // first printed out and then incremented
echo ++$a.'<br>'; //>> increased by one \\ first incremented and then printed out

// Decrement operator
echo $a--.'<br>';
echo --$a.'<br>';

// Number checking functions
is_float(1.25);
is_double(1.25);
is_int(5);
is_numeric("3.45"); // true
is_numeric("3G.45"); // false

// Conversion
$strNumber = '12.34';
$number = (int)$strNumber;  //>> convert string into integer; 
$number = intval($strNumber); // same
var_dump($number);
echo '<br>';

// Number functions
echo "abs(-15) - ".abs(-15).'<br>';
echo "pow(2, 3) - ".pow(2, 3).'<br>';
echo "sqrt(16) - ".sqrt(16).'<br>';
echo "max(2, 3) - ".max(2, 3).'<br>';
echo "min(2, 3) - ".min(2, 3).'<br>';
echo "round(2.4) - ".round(2.4).'<br>';
echo "floor(2.6) - ".floor(2.6).'<br>';
echo "ceil(2.4) - ".ceil(2.4).'<br>';

// Formatting numbers
$number = 123456789.12345; // formatting
echo number_format($number, 2, ',', ' ');


// https://www.php.net/manual/en/ref.math.php
