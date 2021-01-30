<?php

// while
/*
while(true) {
    "Do something"
}
*/

// Loop with $counter
// $counter = 0;
// while ($counter < 10) {
//     if ($counter === 5) {
//         break;
//     }
//     echo $counter++.'<br>';
// }

// do - while
$counter = 0;
do {
    echo $counter.'<br>';
    $counter++;
} while ($counter < 10); // if case is zero , do executes at least once 


// for
for ($i = 0; $i < 10; $i++) {
    echo $i.'<br>';
}

// foreach
$fruits = ['Banana', 'Apple', 'Orange'];
foreach ($fruits as $i => $fruit) {
    echo $i.' '.$fruit.'<br>'; //>> array items with indexes 
}

// Iterate Over associative array.
$person = [
    'name' => 'Brad',
    'surname' => 'Traversy',
    'age' => 30,
    'hobbies' => ['Tennis', 'Video Game']
];

foreach ($person as $key => $value) {
    if (is_array($value)) {
        echo $key.' '. implode(",", $value).'<br>';
    } else {
        echo $key.' '.$value.'<br>';
    }

}