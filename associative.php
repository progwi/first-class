<?php

/**
 * Associative arrays allow  to store data in key-value pairs.
 * 
 *    - The key is a string and the value can be any type of data.
 *    - The key is used to access the value.
 */

// Basic associative arrays
$names = array(
   "John" => 30,
   "Jane" => 40,
   "Mary" => 50
);

$salaries = array(
   "John" => 1000.50,
   "Jane" => 2000.50,
   "Mary" => 3000.50
);

// Basic operations with associative arrays
$names["John"] = 30;
$names["Jane"] = 40;
$names["Mary"] = 50;

$salaries["John"] = 1000.50;
$salaries["Jane"] = 2000.50;
$salaries["Mary"] = 3000.50;

// Iterate over associative arrays
foreach ($names as $key => $value) {
   echo $key . ": " . $value . "<br>";
}
