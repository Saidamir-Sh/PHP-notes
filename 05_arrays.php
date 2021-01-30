<?php

// Create array
$fruits = ["Banana", "Apple", "Orange"];
// $fruits = array()

// Print the whole array
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Get element by index
echo $fruits[1].'<br>';

// Set element by index
$fruits[0] = 'Peach';
echo $fruits[0].'<br>';

// Check if array has element at index 2
echo isset($fruits[1]); // returns true or false

// Append element
$fruits[] = 'Banana'; // adds an element 
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Print the length of the array
echo count($fruits).'<br>';

// Add element at the end of the array
array_push($fruits, 'Foo').'<br>';

// Remove element from the end of the array
echo array_pop($fruits); // removes the last element in the array and then printes
 
// Add element at the beginning of the array
array_unshift($fruits, 'Bar');
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Remove element from the beginning of the array
array_shift($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Split the string into an array
$string = "Banana, Apple, Peach";
echo '<pre>';
var_dump(explode(",", $string)); // explode("separator", String)
echo '</pre>';

// Combine array elements into string
echo implode(" & ", $fruits);   // implode("separator", Array)

// Check if element exist in the array
echo '<pre>';
var_dump(in_array("Apple", $fruits)); // in_array("searchingItem", Array); >> returns true or false
echo '</pre>';

// Search element index in the array
echo '<pre>';
var_dump(array_search("Banana", $fruits));//>>print the index of the array element, if not return false; 
echo '</pre>';

// Merge two arrays
$vegetables = ["Potato", "Cucumber", "Carrot"];
echo '<pre>';
var_dump(array_merge($fruits, $vegetables));    //>> joining two arrays, order matters
var_dump([...$vegetables, ...$fruits]);
echo '</pre>'; 

// Sorting of array (Reverse order also)
echo '<pre>';
var_dump($fruits);
echo '</pre>';

//sorting
sort($fruits);//>> rsort() > reverse order
echo '<pre>';
var_dump($fruits);
echo '</pre>';



// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array
$person = [
    'name' => 'Brad',
    'surname' => 'Traversy',
    'age' => 30,
    'hobbies' => ['Tennis', 'Video Game']
];
echo '<pre>';
var_dump($person);
print_r($person);
echo '</pre>';

// Get element by key
echo $person['name'].'<br>';

// Set element by key
$person['channel'] = 'TraversyMedia';
echo $person['channel'].'<br>';

// Null coalescing assignment operator. Since PHP 7.4
if (!isset($person['address'])) {
    echo $person['address'] = 'unknown';
}

$person['address'] ??= 'unknown'; //>> check the adress if it is set, take the value , if not set the value unknown

// Check if array has specific key
echo isset($person);

// Print the keys of the array
echo '<pre>';
var_dump(array_keys($person)); //>> gives the keys of the associative array ("name" : value)
echo '</pre>';

// Print the values of the array
echo '<pre>';
var_dump(array_values($person));
echo '</pre>'; 

// Sorting associative arrays by values, by keys
ksort($person); //>> sort the associative arr by the key
asort($person); //>> sort  the associative arr by the value

echo '<pre>';
var_dump($person);
echo '</pre>';

// Two dimensional arrays
$todos = [
    ['title' => 'Todo title 1', 'completed' => true],
    ['title' => 'Todo title 2', 'completed' => false],
    ['title' => 'Todo title 3', 'completed' => true]
];

echo '<pre>';
var_dump($todos);
echo '</pre>';
