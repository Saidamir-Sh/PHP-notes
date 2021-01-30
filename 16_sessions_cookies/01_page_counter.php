<?php

session_start(); 
// echo session_id();

// $_SESSION['name'] = 'Zura';// even if we comment out this code session will remain until we unset this session

// echo '<pre>';
// var_dump($_SESSION);
// echo '</pre>';

// unset($_SESSION['name']);
// session_unset(); //>> removes all the values from session

$_SESSION['page_counter'] = $_SESSION['page_counter'] ?? 0;
$_SESSION['page_counter']++;

if ($_SESSION['page_counter'] === 5) {
    echo 'Thanks for visiting us 5 times'.'<br>';

    $pageCounter = $_SESSION['page_counter'] ?? 0;

    session_unset();//>> removes all values in session
    session_destroy();//>> destroyes whole session
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>My Awesome page, Visited : <?php echo $pageCounter; ?> times</h1>
</body>
</html>
