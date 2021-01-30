<?php
// REGEXP
// Syntax >> 
$exp = "/hellophp/i";// >> / is delimiter :: hellophp>>pattern searched for ::  i>>modifier that makes searcg case-insensitive
// delimiter can be defined with any char >> mostly ~ and #

// RegExp Functions 
//preg_match(); //> returns 1 if the pattern was found in the string if not 0
//preg_match_all(); //>> returns the number of times pattern was found in a string , it maybe zero 
//preg_replace(); //>> Returns the new string where matched patterns have been replaced  with another string 

// preg_match();
$str = "Hello, I am learing PHP";
$pattern = "/PHP/i";
echo "<pre>";
echo preg_match($pattern, $str);//>> returns 1 if the pattern found in string 
echo "</pre>";

// preg_match_all();

$longstr = "The rain in SPAIN falls mainly on the plains.";
$countPattern = "/ain/i";

echo "<pre>";
echo preg_match_all($countPattern, $longstr); //> returns how many times pattern found in string 
echo "</pre>";

// PREG_REPLACE();
$rstr = "Visit Microsoft";
$rpattern = "/microsoft/i";

echo "<pre>";
echo preg_replace($rpattern, "Apple", $rstr); //>> preg_replace(pattern, replaceWord, string)
echo "</pre>";

// MODIFIERS
/*
Modifiers can change how search is performed

i >> Performs case-insensitive search

m >> Performs a multiline search (patterns that search for the beginning or end of a string will match the beginning or end of each line)

u >> Enables correct matching of UTF encoded 

*/

// RegExp Patterns

/*
[abc] >> Find one char  from the  option between brackets 
[^abc] >> Find any char NOT in the brackets 
[0-9] >> find one char from range 0 to 9
*/

// METACHARACTERS
// metacharacters are characters with specials meanings 
/*
| 	Find a match for any one of the patterns separated by | as in: cat|dog|fish
. 	Find just one instance of any character
^ 	Finds a match as the beginning of a string as in: ^Hello
$ 	Finds a match at the end of the string as in: World$
\d 	Find a digit
\s 	Find a whitespace character
\b 	Find a match at the beginning of a word like this: \bWORD, or at the end of a word like this: WORD\b
\uxxxx 	Find the Unicode character specified by the hexadecimal number xxxx
*/

// QUANTIFIERS
/*
n+ 	Matches any string that contains at least one n
n* 	Matches any string that contains zero or more occurrences of n
n? 	Matches any string that contains zero or one occurrences of n
n{x} 	Matches any string that contains a sequence of X n's
n{x,y} 	Matches any string that contains a sequence of X to Y n's
n{x,} 	Matches any string that contains a sequence of at least X n's
*/

// Grouping

/*
You can use parentheses ( ) to apply quantifiers to entire patterns. They also can be used to select parts of the pattern to be used as a match.
*/
// https://www.w3schools.com/php/php_ref_regex.asp