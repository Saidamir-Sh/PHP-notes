<?php

// Print current date
echo date('Y-m-d H:i:s').'<br>';

// Print yesterday
echo date('Y-m-d H:i:s', time()-60*60*24).'<br>';

// Different format: https://www.php.net/manual/en/function.date.php
echo date('F j Y, H:i:s').'<br>';
    
// Print current timestamp
echo time();

// Parse date: https://www.php.net/manual/en/function.date-parse.php
$parseDate = date_parse('2020-10-12 09:00:00');

echo '<pre>';
var_dump($parseDate);
echo '</pre>';

// Parse date from format: https://www.php.net/manual/en/function.date-parse-from-format.php
$dateString = 'February 4 2020 12:45:32';
$parsedDate = date_parse_from_format('F j Y H:i:s', $dateString);

echo '<pre>';
var_dump($parsedDate);
echo '</pre';

// update copyright 
echo date("Y");

// mktime >> returns the Unix timestamp for a date. The Unix timestamp contains the number of seconds between the Unix Epoch (January 1 1970 00:00:00 GMT) and the time specified.
//>> syntax : mktime(hour, minute, second, month, day, year)
$d=mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is " . date("Y-m-d h:i:sa", $d);

//>> strtotime() function is used to convert a human readable date string into a Unix timestamp (the number of seconds since January 1 1970 00:00:00 GMT).
//>> syntax : strtotime(time, now)
$d=strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa", $d);