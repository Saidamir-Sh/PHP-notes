<?php

$url = 'https://jsonplaceholder.typicode.com/users';

// Sample example to get data.
$resource = curl_init($url); //>> initalization
curl_setopt($resource, CURLOPT_RETURNTRANSFER, true); // options
$result = curl_exec($resource); //>> executes the data
$info = curl_getinfo($resource, CURLINFO_HTTP_CODE); //>> response code / 200 > OK
echo '<pre>';
var_dump($info);
echo '</pre>';
echo $result;
curl_close($resource);

// Get response status code

// set_opt_array

// Post request
$resource = curl_init();
$user = [
    'name' => 'John',
    'username' => 'John232',
    'email' => 'John@example.com'
];

curl_setopt_array($resource, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POSTFIELDS => json_encode($user),
        CURLOPT_HTTPHEADER => ['content-type: application/json'] //>> content we are sending should be in JSON format 
]);

$result = curl_exec($resource);
curl_close($resource);

echo '<pre>';
echo $result;
echo '</pre>';