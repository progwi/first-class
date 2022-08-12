<?php

/** This php code shows basic arrays examples. */

// Basic arrays
$names = array("John", "Jane", "Mary"); // Array with strings
$ages = array(30, 40, 50); // Array with integers
$salaries = array(1000.50, 2000.50, 3000.50); // Array with floats

// Basic operations with arrays
$names[0] = "John";
$names[1] = "Jane";
$names[2] = "Mary";

$ages[0] = 30;
$ages[1] = 40;
$ages[2] = 50;

$salaries[0] = 1000.50;
$salaries[1] = 2000.50;
$salaries[2] = 3000.50;

echo $names[0];
echo "<br>";

echo $ages[0];
echo "<br>";

echo $salaries[0];
echo "<br>";

// Iterate over arrays single dimension arrays
for ($i = 0; $i < count($names); $i++) {
    echo $names[$i] . "<br>";
}

// The same than before but with foreach
foreach ($names as $name) {
    echo $name . "<br>";
}

