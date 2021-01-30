<?php

// What is a variable

// Variable types
/*
    String
    Integer
    Float / Double
    Boolean
    Null
    Array
    Object
    Resource
*/
// Declare variables
$name = "Mark";
$age = 28;
$isMale = true;
$height = 1.83;
$salary = null;

// Print the variables. Explain what is concatenation
echo $name.'<br>';
echo $age.'<br>';
echo $isMale.'<br>';
echo $height.'<br>';
echo $salary.'<br>';

// Print types of the variables
echo gettype($name).'<br>';
echo gettype($age).'<br>';
echo gettype($isMale).'<br>';
echo gettype($height).'<br>';
echo gettype($salary).'<br>';

// Print the whole variable
var_dump($name, $age, $isMale, $height, $salary).'<br>'; // >>> good for debugging and big vars, gives all info about the variable 

// Change the value of the variable
$name = false;

// Print type of the variable
echo gettype($name).'<br>';

// Variable checking functions
is_string($name); // checks the var type
is_integer($age); // returns true or false
is_bool($isMale);
is_double($height);

// Check if variable is defined
isset($name).'<br>'; // >> checks wheather var is defined or not and then returns true or false

// Constants
define('PI', 3.14); // >> define('const name', const value);
echo PI.'<br>';

// Using PHP built-in constants
echo SORT_ASC.'<br>'; //>> Sort by ascending
echo PHP_INT_MAX.'<br>'; //>> max number than php can handle;

// PHP Constants

// Constants are Global

/* 
PHP OPERATORS

% 	Modulus 	$x % $y 	Remainder of $x divided by $y 	

** 	Exponentiation 	$x ** $y 	Result of raising $x to the $y'th power

!== 	Not identical 	$x !== $y 	Returns true if $x is not equal to $y, or they are not of the same typeo
*/

// PHP Global Variables -- Superglobals
/*The PHP superglobal variables are:

    $GLOBALS
    $_SERVER
    $_REQUEST
    $_POST
    $_GET
    $_FILES
    $_ENV
    $_COOKIE
    $_SESSION
*/
/*
$GLOBALS is a PHP super global variable which is used to access global variables from anywhere in the PHP script (also from within functions or methods). 
PHP stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable.
*/
$x = 75;
$y = 25;
 
function addition() {
  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
 
addition();
echo $z; 
/*
$_SERVER is a PHP super global variable which holds information about headers, paths, and script locations.
The example below shows how to use some of the elements in $_SERVER:
*/
echo $_SERVER['PHP_SELF']; //Returns the filename of the currently executing script
echo "<br>";
echo $_SERVER['SERVER_NAME']; // Returns the name of the host server (such as www.w3schools.com)
echo "<br>";
echo $_SERVER['HTTP_HOST']; // Returns the Host header from the current request 
echo "<br>";
echo $_SERVER['HTTP_REFERER']; // Returns the complete URL of the current page (not reliable because not all user-agents support it)
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo '<br>';
echo $_SERVER['GATEWAY_INTERFACE']; // 	Returns the version of the Common Gateway Interface (CGI) the server is using
echo '<br>';
echo $_SERVER['SERVER_ADDR']; //  	Returns the IP address of the host server;
echo "<br>";
echo $_SERVER['SERVER_SOFTWARE']; // Returns the server identification string (such as Apache/2.2.24)
echo "<br>";
echo $_SERVER['SERVER_PROTOCOL']; // Returns the name and revision of the information protocol (such as HTTP/1.1)
echo "<br>";
echo $_SERVER['REQUEST_METHOD']; // Returns the request method used to access the page (such as POST)
echo "<br>";
echo $_SERVER['REQUEST_TIME']; //  	Returns the timestamp of the start of the request (such as 1377687496)
echo "<br>";
echo $_SERVER['QUERY_STRING']; // Returns the query string if the page is accessed via a query string
echo "<br>";
echo $_SERVER['HTTP_ACCEPT']; // Returns the Accept header from the current request 
echo "<br>";
//echo $_SERVER['HTTP_ACCEPT_CHARSET']; // Returns the Accept_Charset header from the current request (such as utf-8,ISO-8859-1)
echo "<br>";
//echo $_SERVER['HTTPS']; //  	Is the script queried through a secure HTTP protocol
echo "<br>";
echo $_SERVER['REMOTE_ADDR']; // return the IP adress from where the user is viewing the page 
echo "<br>";
//echo $_SERVER['REMOTE_HOST']; // returns the HOST name from where the user is viewing the page 
echo "<br>";
echo $_SERVER['REMOTE_PORT']; // returns the PORT being used on the user's machine to communicate with the web server
echo "<br>";
echo $_SERVER['SCRIPT_FILENAME']; // returns the absolute pathname of the current executing script 
echo "<br>";
echo $_SERVER['SERVER_ADMIN']; // Returns the value given to the SERVER_ADMIN directive in the web server configuration file (if your script runs on a virtual host, it will be the value defined for that virtual host)
echo "<br>";
echo $_SERVER['SERVER_PORT']; //  	Returns the port on the server machine being used by the web server for communication (such as 80)
echo "<br>";
echo $_SERVER['SERVER_SIGNATURE']; // Returns the server version and virtual host name which are added to server-generated pages
echo "<br>";
//echo $_SERVER['PATH_TRANSLATED']; // Returns the file system based path to the current script
echo "<br>";
//echo $_SERVER['PATH_TRANSLATED']; //  	Returns the file system based path to the current script
echo "<br>";
echo $_SERVER['SCRIPT_NAME']; //  	Returns the path of the current script
echo "<br>";
//echo $_SERVER['SCRIPT_URI']; //  	Returns the URI of the current page
echo "<br>";


/*
PHP $_REQUEST is a PHP super global variable which is used to collect data after submitting an HTML form.
*/

/*
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

</html>
</body>

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect data from form after submitting 
    $name = $_REQUEST['fname'];
    if(empty($name)) {
        echo "Name is empty";
    } else {
        echo $name
    }
}
*/

/*
$_POST >>  PHP $_POST is a PHP super global variable which is used to collect form data after submitting an HTML form with method="post". $_POST is also widely used to pass variables.
*/

/*

<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

</html>
</body>
*/
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['fname'];
    if (empty($name)) {
      echo "Name is empty";
    } else {
      echo $name;
    }
  }

  // PHP $_GET is a PHP super global variable which is used to collect form data after submitting an HTML form with method="get".

// $_GET can also collect data sent in the URL.
  /*
  <html>
<body>

<a href="test_get.php?subject=PHP&web=W3schools.com">Test $GET</a>

</body>
</html> 

echo "Study " . $_GET['subject'] . " at " . $_GET['web'];
  */

