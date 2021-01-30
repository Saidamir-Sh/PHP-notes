<?php

// Create simple string
$name = 'Mark';
$string1 = 'Hello I am '.$name.'. I am 28'.'<br>';
$string2 = "Hello I am $name. I am 30".'<br>';     // double quotatioin
echo $string1;
echo $string2;

// String concatenation
echo 'Hello'.' World'.' and'.' PHP'.'<br>'; 

// String functions
$string = "     Hello World     ";
echo "1 - ".strlen($string).'<br>';
echo "2 - ".trim($string).'<br>';
echo "3 - ".ltrim($string).'<br>';
echo "4 - ".rtrim($string).'<br>';
echo "5 - ".str_word_count($string).'<br>';
echo "6 - ".strrev($string).'<br>';
echo "7 - ".strtoupper($string).'<br>';
echo "8 - ".strtolower($string).'<br>';
echo "9 - ".ucfirst("hello").'<br>';
echo "10 - ".lcfirst('HELLO').'<br>';
echo "11 - ".ucwords($string).'<br>';
echo "12 - ".strpos($string, 'World').'<br>'; // searches a world inside of string 
echo "13 - ".stripos($string, 'worlds').'<br>'; // search for a word inside of string wheather it is a lowercase or uppercase
echo "14 - ".substr($string, 8).'<br>'; // ($string, beginIndex, endindex);
echo "15 - ".str_replace('World', 'PHP', $string).'<br>';
echo "16 - ".str_ireplace('world', 'PHP', $string).'<br>';

// Multiline text and line breaks
$longText = "
    Hello, my name is Mark
    I am 27,
    I love my daughter
";

echo $longText.'<br>';
echo nl2br($longText).'<br>';

// Multiline text and reserve html tags
$longText = "
    Hello, my name is <b>Mark</b>
    I am <b>27</b>,
    I love my daughter
";

echo htmlentities($longText);
echo nl2br(htmlentities($longText));
//echo html_entity_decode('') gives in html format
// https://www.php.net/manual/en/ref.strings.php