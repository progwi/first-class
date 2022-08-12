<?php

/**
 * This php code shows examples about basic variables and operations.
 */

// Basic variables
$name = "John";	// String
$age = 30; 		// Integer
$isMarried = false; // Boolean
$salary = 1000.50; // Float

// Basic operations
$sum = $age + $age; // Addition
$diff = $age - $age; // Subtraction
$product = $age * $age; // Multiplication
$quotient = $age / $age; // Division
$remainder = $age % $age; // Modulus
$increment = $age++; // Increment (postfix)
$decrement = $age--; // Decrement (postfix)
$increment = ++$age; // Increment (pre-increment)
$decrement = --$age; // Decrement (pre-decrement)

// Concatenation
$mensaje = "My name is " . $name . " and I am " . $age . " years old.";

// Comparison
$isEqual = $age == $age; // Equal
$isNotEqual = $age != $age; // Not equal
$isGreater = $age > $age; // Greater than
$isLess = $age < $age; // Less than
$isGreaterOrEqual = $age >= $age; // Greater than or equal to
$isLessOrEqual = $age <= $age; // Less than or equal to

// Single quotes vs double quotes
$name = 'John';
$name = 'John Doe';

$name = "John";

$name = "John's";
$name = 'John\'s';

$message = "My name is " . $name . " and I am " . $age . " years old.";
$message = "My name is $name and I am $age years old.";
echo $message;


// Basic operations with booleans
$isMarried = true;
$isMarried = false;

$isMarried = $isMarried && $isMarried;
$isMarried = $isMarried || $isMarried;
$isMarried = !$isMarried;

// If-else

if ($isMarried) {
	echo "I am married";
} else {
	echo "I am not married";
}

// For loop

for ($i = 0; $i < 10; $i++) {
	echo "$i<br>";
}

// While loop
$i = 0;
while ($i < 10) {
	echo "$i<br>";
	$i++;
}


?>