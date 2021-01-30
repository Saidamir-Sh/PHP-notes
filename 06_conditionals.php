<?php

$age = 20;
$salary = 300000;

// Sample if
if ($age === 20) {
    echo '1'.'<br>';
}

// Without circle braces
if ($age === 20) echo '1'.'<br>';

// Sample if-else
if($age > 20) {
    echo '2'.'<br>';
} else {
    echo '3'.'<br>';
}

// Difference between == and ===
//>> == double equal means the values are equal (type coercion)
//>> === var type and values (JS)

// if AND
if( $age === 20 && $salary === 300000) {
    echo 'Do something'.'<br>';
}

// if OR

if( $age === 30 || $salary === 300000) {
    echo 'Do something'.'<br>';
}

// Ternary if
echo $age < 22 ? "Young".'<br>' : "Old".'<br>';

// Short ternary
$myAge = $age ? : 18; //>> check the value of the $age, if it is falsy set the value 18 for myAge var
echo '<pre>';
var_dump($myAge);
echo '</pre>';

// Null coalescing operator
//$myName = isset($name) ? $name : 'Jhon';
$myName = $name ?? 'John';
echo $myName.'<br>';

// switch
$userRole = 'admin'; // admin, editor, user 
switch ($userRole) {
    case 'admin' :
        echo 'Admin'.'<br>';
        break;
    case 'editor' :
        echo 'Editor'.'<br>';
        break;
    case 'user' :
        echo 'User'.'<br>';
        break;
    default: 
    echo 'Invalid Role'.'<br>';
}

