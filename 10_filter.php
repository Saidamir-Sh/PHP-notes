<!--
Validating data = Determine if the data is in proper form.
Sanitizing data = Remove any illegal character from the data.
-->

<!--The PHP Filter Extension -->
<?php

//filter_var();>> validates and sanitizes data
/*
function filters a single variable with a specified filter. It takes two pieces of data:
    The variable you want to check
    The type of check to use
*/
//Sanitize a String
$str = "<h1>Hello World!</h1>";
$newstr = filter_var($str, FILTER_SANITIZE_STRING); //>> removes all HTML tags
echo $newstr.'<br>';

//Validate an Integer

$int = 1000;

if(!filter_var($int, FILTER_VALIDATE_INT) === false || filter_var($int, FILTER_VALIDATE_INT) === 0) {
    echo 'Integer is valid'.'<br>';
} else {
    echo 'Integer is not invalid'.'<br>';  
}

//Validate IP adress
$ip = "127.0.0.1";
if(!filter_var($ip, FILTER_VALIDATE_IP) === false) {
    echo "$ip is valid IP adress".'<br>';
} else {
    echo "$ip is not valid IP adress".'<br>';
}

//Sanitize and Validate an Email Address
$email = "john.doe@example.com";

//remove all illegal characters from email
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

//Validate e-mail
if(!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo "$email is valid email address".'<br>';
} else {
    echo "$email is not valid email address".'<br>';
}

//Sanitize and Validate a URL
$url = "https://www.w3schools.com";

//remove all illegal characters from url
$url = filter_var($url, FILTER_SANITIZE_URL);

//validate url
if(!filter_var($url, FILTER_VALIDATE_URL) === false) {
    echo("$url is a valid URL").'<br>';
  } else {
    echo("$url is not a valid URL").'<br>';
  }

// -/-/-/-/-/-/-/-/-/-/-/-/-/-/   FILTERS ADVANCED   -/-/-/-/-/-/-/-/-/-/-/-/-/-/

//Validate an Integer Within a Range

$intR = 31;
$min = 1;
$max = 200;

if (filter_var($intR, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false) {
    echo("Variable value is not within the legal range");
} else {
    echo("Variable value is within the legal range");
}

// syntax :  filter_var ( mixed $value , int $filter = FILTER_DEFAULT , array|int $options = 0 ) : mixed

//Validating  IPv6 adress 
$ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";

if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {
  echo("$ip is a valid IPv6 address");
} else {
  echo("$ip is not a valid IPv6 address");
}

//Validate URL - Must Contain QueryString
$url = "https://www.w3schools.com";

if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
  echo("$url is a valid URL with a query string");
} else {
  echo("$url is not a valid URL with a query string");
}


//Remove Characters With ASCII Value > 127
$str = "<h1>Hello WorldÆØÅ!</h1>";

$newstr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
echo $newstr;