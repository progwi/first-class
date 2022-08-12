<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<h1 style="color: red;">Functions</h1>
<?php

/* this code shows examples about using functions. */

function sum($a, $b)
{
   return $a + $b;
}

$num1 = 10;
$num2 = 20;

echo "The sum of $num1 and $num2 is " . sum($num1, $num2);

?>

</html>