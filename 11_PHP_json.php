<?php

//json_encode()
//json_decode()

//json_encode() function is used to encode a value to JSON format

//associative array into JSIN format
$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);
echo json_encode($age).'<br>';

//indexed array to JSON format
$cars = array("Volvo", "BMW", "Toyota");
echo json_encode($cars).'<br>';


//The json_decode() function is used to decode a JSON object into a PHP object or an associative array.

//JSON data into PHP object
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
var_dump(json_decode($jsonobj)).'<br>'; // returns php object by default but if we set second argument into true it will return array

$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
var_dump(json_decode($jsonobj, true)).'<br>';

//ACCESSING DECODED Values
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
$obj = json_decode($jsonobj);

echo $obj->Peter;
echo $obj->Ben;
echo $obj->Joe;

// ACCESSING FROM ARRAY
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
$arr = json_decode($jsonobj, true);

echo $arr["Peter"];
echo $arr["Ben"];
echo $arr["Joe"];

//PHP - Looping Through the Values
//OBJ Ex
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
$obj = json_decode($jsonobj);

foreach($obj as $key => $value) {
    echo $key . " => " . $value . "<br>";
}


//Array Ex.
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
$arr = json_decode($jsonobj, true);

foreach($arr as $key => $value) {
  echo $key . " => " . $value . "<br>";
}