<?php

// TODO: Create your inspect() function here
function inspect($a) {

	$a = gettype($a);

	if ($a == 'NULL') {

		return "The value is NULL";

	} else if ($a == 'bool') {
		if ($a == 1) {
			return "The value is boolean and returning \"TRUE\".";
		} else {
			return "The value is boolean and returning \"FALSE\".";
		}
	} else if ($a == 'array' && empty($a)) {
		return 'The value is an empty array.';
	} else if ($a == 'array') {
		return 'The value is an array.';
	} else {
		return 'The value of $a is ' . $a . ' .' . PHP_EOL;
	}

}
// Do not mofify these variables!
$string1 = "I'm a little teapot";
$string2 = '';
$array1 = [];
$array2 = [1, 2, 3];
$bool1 = true;
$bool2 = false;
$num1 = 0;
$num2 = 0.0;
$num3 = 12;
$num4 = 14.4;
$null = NULL;

// TODO: After each echo statement, use inspect() to output the variable's type and its value

echo 'Inspecting $num1: ' . $num1 . ' is a/an ' . inspect($num1) . PHP_EOL;

echo 'Inspecting $num2: ' . $num2 . ' is a/an ' . inspect($num2) . PHP_EOL;

echo 'Inspecting $num3: ' . $num3 . ' is a/an ' . inspect($num3) . PHP_EOL;

echo 'Inspecting $num4: ' . $num4 . ' is a/an ' . inspect($num4) . PHP_EOL;

echo 'Inspecting $null: ' . $null . ' is a/an ' . inspect($null) . PHP_EOL;

echo 'Inspecting $bool1: ' . $bool1 . ' is a/an ' . inspect($bool1) . PHP_EOL;

echo 'Inspecting $bool2: ' . $bool2 . ' is a/an ' . inspect($bool2) . PHP_EOL;

echo 'Inspecting $string1: ' . $string1 . ' is a/an ' . inspect($string1) . PHP_EOL;

echo 'Inspecting $string2: ' . $string2 . ' is a/an ' . inspect($string2) . PHP_EOL;

echo 'Inspecting $array1: ' . $array1 . ' is a/an ' . inspect($array1) . PHP_EOL;

echo 'Inspecting $array2: ' . $array2 . ' is a/an ' . inspect($array2) . PHP_EOL;
