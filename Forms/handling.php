<html>
<body>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

</body>
</html> 

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    if(empty($name) || empty($email)) {
        echo "Please fill the form fully.";
    } else {
        echo "Your name is $name".'<br>';
        echo "Your email is w$email".'<br>';
    }
}

// GET vs POST
/*
Both GET and POST create an array (e.g. array( key1 => value1, key2 => value2, key3 => value3, ...)). This array holds key/value pairs, where keys are the names of the form controls and values are the input data from the user.
*/
//$_GET is an array of variables passed to the current script via the URL parameters.
//$_POST is an array of variables passed to the current script via the HTTP POST method.

// When to use GET ? 
//Note: GET should NEVER be used for sending passwords or other sensitive information!
/*
nformation sent from a form with the GET method is visible to everyone (all variable names and values are displayed in the URL)
*/